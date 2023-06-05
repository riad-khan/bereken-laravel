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
        Schema::create('vats', function (Blueprint $table) {
            $table->id();
            $table->string('amount_label');
            $table->text('amount_tooltip');
            $table->string('convert_label');
            $table->text('convert_tooltip');
            $table->string('rate_label');
            $table->text('rate_tooltip');
            $table->string('button_text');
            $table->text('content');
            $table->text('result_content');
            $table->string('seo_title');
            $table->text('seo_meta');
            $table->text('seo_keywords');
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
        Schema::dropIfExists('vats');
    }
};
