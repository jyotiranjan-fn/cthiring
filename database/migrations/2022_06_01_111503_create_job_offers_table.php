<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_offers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('candidate_id', 255)->nullable();
            $table->string('position_id', 255)->nullable();
            $table->string('client_id', 255)->nullable();
            $table->string('candidate_name', 255)->nullable();
            $table->string('job_offer_date', 255)->nullable();
            $table->string('offer_ctc', 255)->nullable();
            $table->string('offer_remark', 255)->nullable();
            $table->string('offer_decission', 255)->nullable();
            $table->string('offer_rejected_reason', 255)->nullable();
            $table->string('joined_decission', 255)->nullable();
            $table->string('job_joined_date', 255)->nullable();
            $table->string('not_joined_reason', 255)->nullable();
            $table->string('job_joined_remark', 255)->nullable();
            $table->string('defered_new_joining_date', 255)->nullable();
            $table->string('defered_reason', 255)->nullable();
            $table->string('defered_remarks', 255)->nullable();
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
        Schema::dropIfExists('job_offers');
    }
}
