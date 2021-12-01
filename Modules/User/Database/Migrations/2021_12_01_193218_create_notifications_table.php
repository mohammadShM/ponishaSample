<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('site_notification')->nullable();
            $table->integer('site_massage')->nullable();
            $table->integer('email_user_follow')->nullable();
            $table->integer('email_user_register')->nullable();
            $table->integer('email_user_invite_to_project')->nullable();
            $table->integer('email_bank_add_money')->nullable();
            $table->integer('email_bank_get_money')->nullable();
            $table->integer('email_invite_friend_get_discount')->nullable();
            $table->integer('email_discuss_offline')->nullable();
            $table->integer('email_portfolio')->nullable();
            $table->integer('email_ponisha_newsletter')->nullable();
            $table->integer('email_ponisha_week_log')->nullable();
            $table->integer('email_ponisha_promotion')->nullable();
            $table->integer('email_project_my_status')->nullable();
            $table->integer('email_project_status')->nullable();
            $table->integer('email_project_my_skill_daily')->nullable();
            $table->integer('email_project_match_daily')->nullable();
            $table->integer('email_project_freelancer_edit')->nullable();
            $table->integer('email_project_employer_edit')->nullable();
            $table->integer('email_project_employer_send')->nullable();
            $table->integer('email_proposal_my_status_freelancer')->nullable();
            $table->integer('email_proposal_new_soon')->nullable();
            $table->integer('email_proposal_soon_daily')->nullable();
            $table->integer('email_proposal_my_accept')->nullable();
            $table->integer('email_proposal_tarh_my_match')->nullable();
            $table->integer('email_proposal_match_accept')->nullable();
            $table->integer('email_proposal_match_rate_employer')->nullable();
            $table->integer('email_proposal_like_my_portfolio')->nullable();
            $table->integer('email_my_desk_status')->nullable();
            $table->integer('email_my_desk_dispute')->nullable();
            $table->integer('email_my_desk_share_file')->nullable();
            $table->integer('email_my_desk_time_price')->nullable();
            $table->integer('email_my_desk_payment')->nullable();
            $table->integer('email_my_desk_rate_comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
}
