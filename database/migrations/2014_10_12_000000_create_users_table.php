<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50)->nullable();
            $table->string('email', 50)->unique();
            $table->string('alamat', 100)->nullable();
            $table->string('nomortelepon', 13)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
            $table->enum('role', ['admin', 'instansi'])->default('instansi');
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
}
