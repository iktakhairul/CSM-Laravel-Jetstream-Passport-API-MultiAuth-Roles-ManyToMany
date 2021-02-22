<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRolesFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained();
//            $table->foreignId('car_id2')->nullable();
//            $table->foreignId('car_id3')->nullable();
//            $table->string('user_address')->nullable();
//            $table->string('user_phone_number')->nullable();
//            $table->string('employee_designation')->nullable();
//            $table->string('car_model')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            Schema::drop('users');
        });
    }
}
