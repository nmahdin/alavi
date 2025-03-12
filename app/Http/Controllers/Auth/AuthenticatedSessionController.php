<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Questions;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Validation\Rules;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create()
    {
        return redirect(route('welcome'));
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        $number = $request->number;
        if (User::where('number',$number)->first()) {

            $request->authenticate();

            $request->session()->regenerate();

            return redirect()->intended(route('welcome3'));
        } else {

            $request->validate([
                'name' => ['required', 'string', 'min:3', 'max:255'],
                'number' => ['required', 'string', 'lowercase','min:11', 'max:11', 'unique:'.User::class],
                'chair_number' => ['required', 'string', 'lowercase', 'max:11'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ], [
                'number.required' => 'شماره تلفن الزامی است',
                'number.unique' => 'شماره تکراری است شماره دیگری وارد کنید.',
                'chair_number.required' => 'وارد کردن شماره صندلی الزامی است',
                'number.regex' => 'فرمت شماره شما صحیح نیست',
            ]);

            if (Questions::count() == 0) {
                $random = 0;
            } else {
                $random = Questions::all()->pluck('id')->shuffle()->implode('.');
            }
            $user = User::create([
                'name' => $request->name,
                'number' => $request->number,
                'chair_number' => $request->chair_number,
                'password' => Hash::make($request->password),
                'random' => $random,
            ]);

            event(new Registered($user));

            Auth::login($user);

            return redirect(route('welcome3'));
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
