<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_name', 255);
            $table->string('mobile', 255);
            $table->string('logo', 255)->nullable();
            $table->string('door_no', 255);
            $table->string('street_name', 255);
            $table->string('pincode', 255);
            $table->string('area_name', 255);
            $table->tinyInteger('is_approve')->default(0)->comment('approve=1,reject=2');
            $table->integer('approved_by')->nullable();
            $table->tinyInteger('approve_date')->nullable();
            $table->string('remarks', 255)->nullable()->comment('approve modal remark');
            $table->string('edit_remark', 255)->nullable()->comment('edit remark');
            $table->string('address', 255)->nullable();
            $table->string('is_inactive', 255)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->enum('is_deleted', ['Y', 'N'])->default('N');
            $table->tinyInteger('modified_by')->nullable();
            $table->tinyInteger('created_by')->nullable();
            $table->string('crm_id', 100)->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('district_id')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
