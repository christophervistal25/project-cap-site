<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangays', function (Blueprint $table) {
            // $table->bigIncrements('id');
            // $table->bigInteger('city_zip_code');
            $table->string('province_code');
            $table->string('city_code')->nullable();
            $table->string('code');
            $table->string('name');
            $table->string('type');
            $table->string('population');
            $table->enum('status', ['active', 'in-active']);
            $table->primary(['province_code', 'city_code', 'code']);
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
        Schema::dropIfExists('barangays');
    }
}
