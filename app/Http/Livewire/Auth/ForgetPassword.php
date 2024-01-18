<?php

namespace App\Http\Livewire\Auth;

use App\Mail\ResetPasswordEmail;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ForgetPassword extends Component
{
    public string $email;

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'email' => 'required|email',
    ];

    public function submit(): void
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $this->email)->first();

        if ($user === null || $user->remember_token === null) {
            $this->addError('email', 'User email not found in our records');
            $this->render();

            return; // Importante adicionar o return para parar a execução do método
        }
        $forgetUrl = url('/') . '/new-password' . "/" . $user->email . "/" . $user->remember_token;

        try {
            Mail::to($user->email)->send(new ResetPasswordEmail($forgetUrl));
            session()->flash('success', 'Forget password link sent to your email address. Please check your email.');
        } catch (\Exception $e) {
            session()->flash('error', 'Email was not sent. Please contact support for more details.');
        }
        $this->render();
    }

    public function render(): View
    {
        return view('livewire.auth.forget-password')->extends('layouts.master-without-nav');
    }
}
