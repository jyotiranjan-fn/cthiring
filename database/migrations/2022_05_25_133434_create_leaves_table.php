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
            $table->tinyInteger('status')->default(0);
            $table->integer('res_l1');
            $table->integer('approved_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('modified_at')->useCurrent();
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
