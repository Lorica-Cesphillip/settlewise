<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date'],
            'martial_status' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'contact_nos' => ['required', 'string', 'max:12'],
            'aphso_division' => ['required', 'string', 'max:100'],
            'position' => ['required', 'string', 'max:255'],
            'employee_image' => ['required', 'image']
        ]);

        $user = User::create([
            'name' => $request->name,
            'address' => $request->address,
            'birthday' => $request->birthday,
            'martial_status' => $request->martial_status,
            'email' => $request->email,
            'contact_nos' => $request->contact_nos,
            'aphso_division' => $request->aphso_divisions,
            'position' => $request->position,
            'employee_image' => $request->employee_image,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
