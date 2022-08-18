<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_category_news_post', function (Blueprint $table) {
            $table->unsignedInteger('news_category_id');
            $table->unsignedInteger('news_post_id');
            $table->foreign('news_category_id')
            ->references('id')
            ->on('news_categories');
            $table->foreign('news_post_id')
            ->references('id')
            ->on('news_posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_category_news_post');
    }
};
