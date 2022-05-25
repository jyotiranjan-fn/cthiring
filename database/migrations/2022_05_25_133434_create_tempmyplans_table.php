<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempmyplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempmyplans', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ctc', 255)->nullable();
            $table->timestamp('task_date')->nullable();
            $table->string('day_work_name', 255)->nullable()->comment('F-forenoon,A-Afternoon,D-Fullday');
            $table->integer('user_id')->nullable();
            $table->integer('position_id')->nullable();
            $table->string('client_name', 255)->nullable();
            $table->string('work_plan', 255)->nullable()->comment('1-currentday plan,2-previousday plan,3-leave');
            $table->string('work_plan_type', 255)->nullable()->comment('S-sourceing
O-other');
            $table->string('work_type', 255)->nullable()->comment('Leave day type');
            $table->string('work_type_box', 255)->nullable()->comment('Resion(why leave)');
            $table->string('others_option', 255)->nullable();
            $table->string('subject', 255)->nullable();
            $table->integer('L1_id')->nullable();
            $table->integer('leave_id')->nullable();
            $table->integer('approve_status')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('approve_date')->nullable();
            $table->string('remarks', 255)->nullable();
            $table->integer('is_deleted')->nullable();
            $table->timestamps();
            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempmyplans');
    }
}
