<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('has_profil.mst_web', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_web');
            $table->string('alamat')->nullable();
            $table->bigInteger('contact');
            $table->text('meta')->nullable();
            $table->text('desc')->nullable();
            $table->string('logo')->nullable();
            $table->char('publish', 1);
            $table->char('del', 1);
            $table->bigInteger('mst_user_id');
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
        Schema::dropIfExists('has_profil.mst_web');
    }
}
