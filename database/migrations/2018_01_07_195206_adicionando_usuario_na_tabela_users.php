<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use loja\User;

class AdicionandoUsuarioNaTabelaUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      User::create([
        'name' => 'Administrador',
        'email' => 'admin@user.com',
        'password' => bcrypt('secret')
      ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      $user = User::where('email', '=', 'admin@user.com')->first();
      if($user instanceof User){
          $user->delete();
      }
    }
}
