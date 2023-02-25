<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom_user');
            $table->string('prenom_user')->nullable();
            $table->string('photo_profile')->nullable();
            $table->enum('status_user', ['enligne', 'non_enligne']);
            $table->string('email_user')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('groupe_id')->nullable()->constrained();          //nullable parce qu'un ulisisateur ne peut appartenir a aucun groupe
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
