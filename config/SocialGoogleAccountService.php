<?php
namespace App\Services;
use App\SocialGoogleAccount;
use App\User;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialGoogleAccountService{
    
    public function createOrGetUser(ProviderUser $providerUser){
        $account = SocialGoogleAccount::whereProvider('google')
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {
            $account = new SocialGoogleAccount([
                'google_id' => $providerUser->getId(),
                'provider' => 'google'
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();
            if (!$user) {
                $user = User::create([
                    'google_email' => $providerUser->getEmail(),
                    'google_name' => $providerUser->getName(),
                    'password' => md5(rand(1,10000)),
                ]);
            }

            $account->user()->associate($user);
            $account->save();
            return $user;
        }
    }
}