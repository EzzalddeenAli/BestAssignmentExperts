<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesPermissionsTables extends Migration
{
   
    
    public function up() {
        Schema::create('roles', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();
        });

//        Schema::create('users', function (Blueprint $table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id');
//            // $table->integer('uid');
//            $table->string('first_name');
//            $table->string('last_name');
//            $table->string('user_name');
//            $table->integer('mobile_no');
//            $table->string('email')->unique();
//            $table->string('password', 60);
//            $table->rememberToken();
//            $table->timestamps();
//        });


        Schema::create('permissions', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();
        });

        Schema::create('permission_role', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('role_id')->unsigned();

            $table->integer('permission_id')->unsigned();
        });
        Schema::table('permission_role', function(Blueprint $table) {

            $table->foreign('role_id')
                    ->references('id')
                    ->on('roles')
                    ->onDelete('cascade');

            $table->foreign('permission_id')
                    ->references('id')
                    ->on('permissions')
                    ->onDelete('cascade');



            $table->primary(['role_id', 'permission_id']);
        });

        Schema::create('role_user', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('role_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });

        Schema::table('role_user', function(Blueprint $table) {

            $table->foreign('role_id')
                    ->references('id')
                    ->on('roles')
                    ->onDelete('cascade');



            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');



            $table->primary(['role_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        //
    }
}
