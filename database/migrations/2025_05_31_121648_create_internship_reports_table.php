<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('internshipReports', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('student_name');
        $table->string('supervisor');
        $table->string('report_file')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internshipReports');
    }
};
