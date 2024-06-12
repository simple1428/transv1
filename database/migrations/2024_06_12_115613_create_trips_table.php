<?php

use App\Models\Driver;
use App\Models\Fleet;
use App\Models\Route;
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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $this->addForeignKeys($table);
            $this->addTripDetails($table);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }

    /**
     * Add foreign keys to the trips table.
     */
    private function addForeignKeys(Blueprint $table): void
    {
        $table->foreignIdFor(Fleet::class);
        $table->foreignIdFor(Route::class);
        $table->foreignIdFor(Driver::class);
    }

    /**
     * Add trip details columns to the trips table.
     */
    private function addTripDetails(Blueprint $table): void
    {
        $table->timestamp('departure_time');
        $table->timestamp('arrival_time')->nullable();
        $table->enum('status', ['scheduled', 'completed', 'cancelled'])->default('scheduled');
        $table->integer('capacity');
    }
};