<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_applications', function (Blueprint $table){
            $table->id();
            $table->string('company_name');
            $table->string('role');
            $table->enum('status', ['applied', 'interview', 'offer', 'rejected'])->default('applied');
            $table->date('applied_date');
            $table->date('interview_date')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
