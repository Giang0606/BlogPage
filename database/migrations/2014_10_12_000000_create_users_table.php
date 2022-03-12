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
            $table->string('name')->nullable(); 
            $table->date('birth_of_date')->nullable();
            $table->string('nickname')->nullable(); 
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('photo_url')->default('default-profile.png'); 
            $table->string('address')->nullable(); 
            $table->string('phone_number')->nullable();
            $table->string('password');
            $table->tinyInteger('role')->default(3);
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
