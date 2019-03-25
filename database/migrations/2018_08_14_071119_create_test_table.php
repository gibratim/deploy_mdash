<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Enums\TestType;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->foreign ('patient_id')->references('id')->on('patient');
            $table->integer('result_id')->unsigned();
            $table->foreign ('result_id')->references('id')->on('result');
            $table->integer('test_type')->unsigned()->default(TestType::Unknown);
            $table->integer('angle_id')->unsigned();
            $table->foreign ('angle_id')->references('id')->on('angle');
            $table->double('value')->default(0);
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
        Schema::dropIfExists('test');
    }
}
