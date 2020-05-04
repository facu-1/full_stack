<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedInteger('role_id');
            $table->rememberToken();
            $table->timestamps();
        });
        // creamos un usuario admin por default
        DB::table('users')->insert(
            array(
                'name' => 'admin',
                'email' => 'facundolucerofiorelli@gmail.com',
                'password' => '$2y$10$78bAWgR4kcvZWdKl9TSiouE97ycy0/EkQn/Tz2dJVkhHrbyDb2ybu',
                'role_id' => 2
            )
        );
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
