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
        Schema::create('calculator_details', function (Blueprint $table) {
            $table->id();
            $table->string('gender_label');
            $table->text('gender_caption');
            $table->string('age_label');
            $table->text('age_caption');
            $table->string('weight_label');
            $table->string('height_label');
            $table->text('height_caption');
            $table->string('button_text');
            $table->text('button_details');
            $table->text('content');
            $table->integer('calculator_id');
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
        Schema::dropIfExists('calculator_details');
    }
};
