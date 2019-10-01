<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Services\SocialGoogleAccountService;


class login extends Controller
{	

	public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

	public function callback(SocialGoogleAccountService $service)
    {
        //$user = $service->createOrGetUser(Socialite::driver('google')->user());
        return redirect()->to('/');
    }

}
