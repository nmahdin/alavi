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
                'chair_number' => ['required', 'string', 'lowercase', 'max:11', 'unique:'.User::class],
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
//                $random = Questions::all()->pluck('id')->shuffle()->implode('.');
                $random = "1.2.3.4.5.6.7.8.9.10.11.12.13.14.15.16.17.18.19.20.21.22.23.24.25.26.27.28.29.30.31.32.33.34.35.36.37.38.39.40.41.42.43.44.45.46.47.48.49.50.51.52.53.54.55.56.57.58.59.60.61.62.63.64.65.66.67.68.69.70.71.72.73.74.75.76.77.78.79.80";
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
