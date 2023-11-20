<?php

use App\Models\Portfolio;
use App\Models\Technology;
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
        Schema::create('portfolio_technologies', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Portfolio::class)->constrained();
            $table->foreignIdFor(Technology::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_technologies');
    }
};
