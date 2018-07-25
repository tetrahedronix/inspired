<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('users', 'id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('id');
                //$table->bigIncrements('id');
            });
            Schema::table('users', function (Blueprint $table) {
                $table->bigIncrements('id')->first();
            });
        }

        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('post_uid', false, true)->default(0);
            $table->text('post_title');
            $table->char('post_type', 20)->default('article');
            $table->char('post_status', 20)->default('draft');
            $table->foreign('post_uid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
