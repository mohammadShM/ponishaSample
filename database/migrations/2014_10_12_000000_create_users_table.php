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
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->nullable();
            $table->string('account_type')->nullable()->default(0);
            $table->string('email')->unique()->nullable();
            $table->string('mobile')->unique();
            $table->string('IRIB')->unique()->nullable();;
            $table->string('lang_notification')->nullable()->default('fa');
            $table->string('lang_project')->nullable()->default('fa');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('status')->default(1);
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
