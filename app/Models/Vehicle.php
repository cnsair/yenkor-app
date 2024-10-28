<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'make', 'model', 'year_of_manufacture', 'license_plate', 'vin', 'color',
        'vehicle_type', 'insurance_provider', 'insurance_policy_number', 'insurance_expiration',
        'driver_license_number', 'license_expiration', 'vehicle_photo', 'insurance_document',
        'registration_document', 'seating_capacity', 'mileage', 'is_active'
    ];

    // Optional: Define relationships or additional methods, if needed
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
