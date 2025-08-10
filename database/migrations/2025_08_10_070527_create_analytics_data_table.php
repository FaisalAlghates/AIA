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
        Schema::create('analytics_data', function (Blueprint $table) {
            $table->id();
            $table->string('metric_name');
            $table->string('metric_type'); // revenue, users, automation, efficiency
            $table->decimal('value', 15, 2);
            $table->string('unit')->nullable(); // USD, %, count, etc
            $table->date('date');
            $table->json('metadata')->nullable();
            $table->timestamps();
            
            $table->index(['metric_name', 'date']);
            $table->index(['metric_type', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analytics_data');
    }
};
