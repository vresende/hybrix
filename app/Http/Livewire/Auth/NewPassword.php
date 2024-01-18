<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\{RedirectResponse, Request};
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class NewPassword extends Component
{
    public ?string $email;
    public ?string $token;
    public ?string $password;
    public ?string $password_confirmation;

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'password' => 'required|string|min:8|confirmed',
    ];

    public function mount(?string $email, ?string $token): void
    {
        $this->email = $email;
        $this->token = $token;
    }

    public function resetPassword(): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $this->validate();

        if($this->email !== null && $this->token !== null) {
            User::where('email', $this->email)->where('remember_token', $this->token)->update([
                'password' => Hash::make($this->password),
            ]);

            return redirect('/login')->with('success', 'Your password has been reseted.!');
        }

        return redirect()->back()->with('error', 'Something went wrong!');
    }

    public function render(): View|Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.auth.new-password')->extends('layouts.master-without-nav');
    }
}
