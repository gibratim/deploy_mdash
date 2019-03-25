<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Enums\MalariaResult;
use App\Enums\ParasitaemiaLevel;
use App\Enums\TestType;

class CreateResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->foreign ('patient_id')->references('id')->on('patient');
            //$table->integer('test_type')->unsigned()->default(TestType::Unknown);
            $table->tinyInteger ('rdt_result')->unsigned()->default(MalariaResult::Unknown);
            $table->tinyInteger ('scope_result')->unsigned()->default(MalariaResult::Unknown);
            $table->tinyInteger('Parasitaemia_level')->unsigned()->default(ParasitaemiaLevel::Unknown);
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
        Schema::dropIfExists('result');
    }
}
