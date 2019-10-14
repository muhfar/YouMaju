<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoogleAccount extends Model
{
    //
    protected $table = "google_accounts";
    
    public function user(){
        return $this->hasOne('App\User', 'google_account_id');
    }

}
