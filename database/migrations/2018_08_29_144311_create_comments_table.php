<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('comment_post_id', false, true);
            $table->text('comment_body')->nullable();
            $table->string('comment_author', 255);
            $table->string('comment_author_email', 100);
            $table->string('comment_author_url', 200);
            $table->string('comment_author_ip', 100);
            $table->timestamp('comment_date')->nullable()->useCurrent();
            $table->timestamp('comment_last_update')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
