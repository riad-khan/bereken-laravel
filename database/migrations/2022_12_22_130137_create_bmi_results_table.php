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
        Schema::create('bmi_results', function (Blueprint $table) {
            $table->id();
            $table->string('result_title');
            $table->text('result_content');
            $table->string('bmi_from');
            $table->string('bmi_to');
            $table->string('most_read');
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
        Schema::dropIfExists('bmi_results');
    }
};
