<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportRedirects\Redirector;

class Login extends Component
{
    public ?string $email = "admin@themesbrand.com";
    public ?string $password = "12345678";
    /**
     * @var array|string[]
     */
    protected array $rules = [
        'email' => 'required|string|email|max:255',
        'password' => 'required',
    ];

    public function mount(): null|RedirectResponse|Redirector
    {
        if (auth()->user()) {
            return redirect()->intended('/');
        }

        return null;
    }

    public function submit(): null|Redirector|RedirectResponse
    {
        // validate the data
        $this->validate();

        $user = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($user)) {

            return redirect()->intended('/index/' . config('app.locale'));
        }

        $this->addError('email', trans('auth.failed'));

        return redirect()->back();
    }

    public function render(): View
    {
        return view('livewire.auth.login')->extends('layouts.master-without-nav');
    }
}
