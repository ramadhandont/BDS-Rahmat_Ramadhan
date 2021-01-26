<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mst_routes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('type', 7);
            $table->string('route', 3);
            $table->bigInteger('mst_user_id');
            $table->char('publish', 1);
            $table->text('content')->nullable();
            $table->text('subcontent')->nullable();
            $table->string('controller_action');
            $table->char('level', 20);
            $table->bigInteger('mst_web_id', 11);
            $table->text('level_list')->nullable();
            $table->text('ex_user_list')->nullable();
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
        Schema::dropIfExists('mst_routes');
    }
}
