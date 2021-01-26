<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  
        Schema::create('has_mst.mst_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_cd');
            $table->string('user_pass');
            $table->string('user_nm')->nullable();
            $table->string('user_email');
            $table->bigInteger('user_contact')->nullable();
            $table->char('user_level', 20);
            $table->string('user_job', 25)->nullable();
            // $table->text('meta')->nullable();
            // $table->text('desc')->nullable(); 
            $table->string('logo')->nullable();
            $table->char('active', 1);
            $table->char('del', 1);
            // $table->bigInteger('mst_user_id');
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('has_mst.mst_user');
    }
}
