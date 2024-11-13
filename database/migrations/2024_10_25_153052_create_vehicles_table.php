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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();

            // $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Link to driver
            $table->string('make');
            $table->string('model');
            $table->year('year_of_manufacture');
            $table->string('license_plate')->unique();
            $table->string('vin')->unique();
            $table->string('color');
            $table->string('vehicle_type');
            $table->string('insurance_provider')->nullable();
            $table->string('insurance_policy_number')->nullable();
            $table->date('insurance_expiration')->nullable();
            $table->string('driver_license_number')->nullable();
            $table->date('license_expiration')->nullable();
            $table->string('vehicle_photo')->nullable(); // Path to photo
            $table->string('insurance_document')->nullable(); // Path to document
            $table->string('registration_document')->nullable(); // Path to document
            $table->integer('seating_capacity');
            $table->integer('mileage')->nullable();
            $table->boolean('is_active')->default(true);
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
