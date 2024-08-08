<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // return redirect()->intended(route('dashboard', absolute: false));
        $roleUser = \Auth::user()->roles()->pluck('name')[0];
        // dd($roleUser);
        if($roleUser == 'CUSTOMER'){
            return redirect()->intended(route('customer', absolute: false));
        } elseif ($roleUser == 'MERCHANT'){
            return redirect()->intended(route('merchant', absolute: false));
        } elseif ($roleUser == 'SUPERADMIN'){
            return redirect()->intended(route('superadmin', absolute: false));
        }
        else {
            return redirect('/logout');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
