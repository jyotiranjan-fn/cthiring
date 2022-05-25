<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientDesignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_designations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_name', 255);
            $table->string('mobile', 255);
            $table->tinyInteger('status');
            $table->enum('is_deleted', ['Y', 'N'])->default('N');
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
        Schema::dropIfExists('client_designations');
    }
}
