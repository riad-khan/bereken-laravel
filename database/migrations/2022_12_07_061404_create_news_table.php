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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_description');
            $table->text('content');
            $table->string('slug');
            $table->string('thumbnill_image');
            $table->string('banner_image');
            $table->string('category_id');
            $table->string('tag_id');
            $table->text('table_of_contents');
            $table->tinyInteger('hot_article');
            $table->tinyInteger('highlights');
            $table->text('seo_keywords')->nullable();
            $table->text('seo_meta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
