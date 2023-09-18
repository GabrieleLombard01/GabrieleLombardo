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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->text('description')->default('Nessuna descrizione');
            $table->string('image')->nullable;
            $table->string('qualification', 50);
            $table->string('contract', 80);
            $table->string('location', 80);
            $table->date('start_date')->format('d/m/Y');
            $table->date('end_date')->format('d/m/Y');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
