<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('id')->unique()->primary();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('idLine');
            $table->string('package')->comment('Regular/Premium');
            $table->string('idTutor');
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('idCard')->nullable();
            $table->dateTime('jamBelajar');
            $table->timestamps();

//            $table->foreign('idTutor')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
