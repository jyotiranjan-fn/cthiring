<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('position_id')->nullable();
            $table->integer('client_id')->nullable();
            $table->integer('candidate_id')->nullable();
            $table->string('candidate_name', 255)->nullable();
            $table->string('remark', 255)->nullable();
            $table->string('screening_rejected_reason', 255)->nullable();
            $table->string('interview_level', 255)->nullable();
            $table->string('interview_mode', 255)->nullable();
            $table->string('interview_venue_adrs', 255)->nullable();
            $table->string('interview_date', 255)->nullable();
            $table->string('interview_timeperiod', 255)->nullable();
            $table->string('interview_venue', 255)->nullable();
            $table->string('interview_spoc', 255)->nullable();
            $table->string('client_contact_name', 255)->nullable();
            $table->string('client_contact_number', 255)->nullable();
            $table->string('addition_info', 255)->nullable();
            $table->string('reschedule_reason', 255)->nullable();
            $table->timestamps();
            $table->integer('interview_status')->default(0)->comment('0=interview schedule data
1=interview selected
2=interview rejected
');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interviews');
    }
}
