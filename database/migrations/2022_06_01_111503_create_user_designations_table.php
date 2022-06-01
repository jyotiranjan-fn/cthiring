<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDesignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_designations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userdesig_name', 255);
            $table->string('mobile', 255)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->enum('is_deleted', ['Y', 'N'])->nullable()->default('N');
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
        Schema::dropIfExists('user_designations');
    }
}
