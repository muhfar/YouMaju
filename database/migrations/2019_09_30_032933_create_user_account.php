<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_account', function (Blueprint $table) {
            $table->bigIncrements('idUser');
            $table->string('idGoogle');
            $table->string('name');
            $table->string('email');
            $table->string('token');
            $table->string('refreshToken')->nullable();
            $table->string('photo');
            $table->string('idChannel')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_account');
        Schema::dropIfExists('social_google_accounts');

    }
}
