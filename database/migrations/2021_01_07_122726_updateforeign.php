<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Updateforeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['posts_id']);
            $table->foreign('posts_id')->references('id')->on('posts')->onDelete('cascade');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['grade_id']);
            $table->foreign('grade_id')->references('id')->on('grade')->onDelete('cascade');
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
    }
}
