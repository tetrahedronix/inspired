<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_details', function (Blueprint $table) {
            $table->bigIncrements('post_details_id');
            $table->bigInteger('post_id', false, true);
            $table->longText('post_body');
            $table->char('post_discuss_status', 20);
            $table->dateTime('post_last_update');
            $table->text('post_excerpt');
            $table->char('post_protected', 255);
            $table->bigInteger('post_parent');
            $table->char('post_slug', 255);
            $table->char('post_metakeys', 255);
            $table->foreign('post_id')->references('id')->on('posts');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_details');
    }
}
