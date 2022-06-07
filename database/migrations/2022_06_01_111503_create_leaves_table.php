<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->date('leave_from');
            $table->date('leave_to');
            $table->string('leave_type', 255);
            $table->longText('reason');
            $table->string('session', 255)->nullable();
            $table->tinyInteger('status')->default(0)->comment('0=Approval Awaiting
1=Approved
2=Rejected
3=Cancel Leave');
            $table->integer('approved_by')->nullable();
            $table->string('approve_remarks', 255)->nullable();
            $table->string('reject_remarks', 255)->nullable();
            $table->string('cancel_remarks', 255)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaves');
    }
}
