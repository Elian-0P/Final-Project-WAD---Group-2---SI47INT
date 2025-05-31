<?php

// database/migrations/2025_05_30_145801_create_internship_reports_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('internship_reports', function (Blueprint $table) {
            $table->id();
            $table->string('intern_name');
            $table->string('company_name');
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('internship_reports');
    }
};