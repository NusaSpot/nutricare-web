<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\SocialiteLogin;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;

class SocialiteLoginController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $socialiteUser = Socialite::driver('google')->user();
    
        $user = Owner::where('email', $socialiteUser->getEmail())->first();
    
        if ($user) {
            auth()->login($user);
        } else {
            $user = Owner::create([
                'email' => $socialiteUser->getEmail(),
                'name' => $socialiteUser->getName(),
                'password' => bcrypt(uniqid(10)),
                'email_verified_at' => Carbon::now(),
            ]);
    
            SocialiteLogin::create([
                'owner_id' => $user->id,
                'provider' => 'google',
                'provider_id' => $socialiteUser->getId(),
            ]);
    
            auth()->login($user);
        }
    
        return redirect(route('dashboard'));
    }
    
}
