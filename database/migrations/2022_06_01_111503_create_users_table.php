<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->nullable();
            $table->string('fname', 255)->nullable();
            $table->string('lname', 255)->nullable();
            $table->string('mobile', 255)->nullable();
            $table->string('gender', 255)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('username', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('temp_password', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('designation', 255)->nullable();
            $table->string('signature', 255)->nullable();
            $table->enum('is_deleted', ['Y', 'N'])->nullable()->default('N');
            $table->string('level_1', 255)->nullable();
            $table->string('level_2', 255)->nullable();
            $table->string('images', 255)->nullable();
            $table->timestamp('modified_at')->nullable()->useCurrent();
            $table->tinyInteger('modified_by')->nullable();
            $table->tinyInteger('created_by')->nullable();
            $table->tinyInteger('deleted_by')->nullable();
            $table->tinyInteger('location_id')->nullable();
            $table->tinyInteger('role_id')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
