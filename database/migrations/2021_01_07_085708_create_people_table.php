<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('person_id')->unique();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('suffix')->nullable();
            $table->date('date_of_birth');
            $table->string('city_zip_code');
            $table->enum('gender', ['male', 'female']);
            $table->string('address');
            $table->bigInteger('barangay_id');
            $table->string('generated_qr')->nullable();
            $table->integer('age');
            $table->string('civil_status');
            $table->string('phone_number');
            $table->string('email')->nullable();
            $table->string('province');
            // $table->string('generated_qr')->default('default_qr.png');
            $table->string('image')->default('default.png');
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
        Schema::dropIfExists('people');
    }
}
