<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileLivreursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_livreurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('adresse')->nullable();
            $table->string('CNI')->nullable();
            $table->string('telephone')->nullable();
            $table->string('transport')->nullable();
<<<<<<< HEAD
=======
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('photo')->nullable();
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
            $table->unsignedInteger('user_id'); //definir la cle etrangere
            // $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profile_livreurs');
    }
}
