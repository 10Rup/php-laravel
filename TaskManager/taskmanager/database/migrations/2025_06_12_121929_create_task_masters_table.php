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
        Schema::create('taskmasters', function (Blueprint $table) {
            $table->id('task_id'); // Custom primary key
            $table->string('header');
            $table->string('given_to');
            $table->string('given_by');
            $table->text('description');
            $table->date('completion_date');
            $table->enum('task_status', ['assigned', 'in_progress', 'completed', 'cancelled'])->default('assigned');
            $table->text('remark')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_masters');
    }
};
