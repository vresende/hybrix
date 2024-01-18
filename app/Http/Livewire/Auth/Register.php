<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\{Hash, Storage};
use Livewire\{Component, WithFileUploads};

class Register extends Component
{
    use WithFileUploads;

    public ?string $first_name;
    public ?string $last_name;
    public ?string $avatar;
    public ?string $password;
    public ?string $email;
    public ?string$password_confirmation;

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'avatar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ];

    public function submit(): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        // validate the data
        $this->validate();
        $avatarName = null;

        if ($this->avatar != null) {
            $avatar = $this->avatar;
            $avatarName = time() . '.' . $avatar;
            Storage::putFileAs('public/images/users', $avatar, $avatarName);

        }
        $token = bin2hex(random_bytes(20));

        // create new user
        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'avatar' => $avatarName,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'remember_token' => $token,
            'created_at' => now(),
        ]);

        return redirect('login')->with('success', 'Usuário registrado com sucesso!');
    }

    public function render(): View
    {
        return view('livewire.auth.register')->extends('layouts.master-without-nav');
    }
}
