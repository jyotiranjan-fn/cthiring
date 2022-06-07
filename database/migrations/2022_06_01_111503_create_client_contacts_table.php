<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_name', 255)->nullable();
            $table->integer('client_id');
            $table->string('mobile', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('designation', 255)->nullable();
            $table->string('client_branch', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('door_no', 255)->nullable();
            $table->string('street_name', 255)->nullable();
            $table->string('pincode', 255);
            $table->string('area_name', 255)->nullable();
            $table->timestamp('approve_date', 4)->nullable();
            $table->string('remarks', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('is_inactive', 255)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->enum('is_deleted', ['Y', 'N'])->default('N');
            $table->string('spoc_checked', 255)->nullable();
            $table->tinyInteger('modified_by')->nullable();
            $table->tinyInteger('created_by')->nullable();
            $table->string('city_id', 4)->nullable();
            $table->string('state_id', 4)->nullable();
            $table->string('district_id', 4)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_contacts');
    }
}
