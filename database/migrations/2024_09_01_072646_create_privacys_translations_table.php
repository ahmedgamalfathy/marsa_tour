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
        Schema::create('privacys_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('privacy_id')->constrained('privacys')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('locale',10);
            $table->text('text')->nullable();
            $table->unique(['privacy_id','locale']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privacys_translations');
    }
};
