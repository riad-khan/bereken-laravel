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
        Schema::create('seo_data_tables', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('seo_keywords');
            $table->text('seo_meta');
            $table->text('structured_data')->nullable();
            $table->string('page');
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
        Schema::dropIfExists('seo_data_tables');
    }
};
