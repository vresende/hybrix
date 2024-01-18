<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\{RedirectResponse, Request};
use Illuminate\Support\Facades\{App, Auth, Session};

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */

    public function root(): Renderable
    {
        return view('index');
    }

    public function index(Request $request): Renderable
    {

        if (view()->exists($request->path())) {
            return view($request->path());
        }

        return abort(404);
    }

    public function lang(string $locale): ?RedirectResponse
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', str_replace('-', '_', $locale));
            Session::save();

            return redirect()->back()->with('locale', $locale);
        }

        return redirect()->back();
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect('/login');
    }
}
