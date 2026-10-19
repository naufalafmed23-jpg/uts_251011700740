<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('toys', function (Blueprint $table) {
            $table->id(); // Auto increment ID[span_3](start_span)[span_3](end_span)
            $table->string('name');
            $table->string('age_group');
            $table->string('category');
            $table->decimal('price', 12, 2);
            $table->string('image');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('toys');
    }
};
