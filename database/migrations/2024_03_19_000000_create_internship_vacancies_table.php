<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('internship_vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('company_name');
            $table->string('location');
            $table->string('duration');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('requirements');
            $table->string('status')->default('open');
            $table->integer('positions_available')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('internship_vacancies');
    }
}; 