<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->string('last_name');
            $table->string('username');
            $table->string('account_type');
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->string('IRIB')->unique();
            $table->string('lang_notification')->nullable();
            $table->string('lang_project')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cover')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamp('last_online')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('location')->nullable();
            $table->string('about_us')->nullable();
            $table->integer('vacation')->default(0);
            $table->integer('freelancer')->default(0);
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
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
}
