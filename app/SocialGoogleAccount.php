<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialGoogleAccount extends Model
{
    protected $fillable = ['user_id', 'google_id', 'provider'];
	public function user()
 	{
    	return $this->belongsTo(User::class);
  	}
}
