<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->string('code');
            $table->string('province_code');
            $table->string('name');
            $table->string('income_classification')->nullable();
            $table->string('population')->nullable();
            $table->enum('status', ['active', 'in-active'])->default('active');
            $table->primary(['province_code', 'code']);
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
        Schema::dropIfExists('cities');
    }
}
