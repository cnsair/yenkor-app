<?php

namespace App\Livewire;

use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Vehicle;

class RegisterVehicleForm extends Component
{
    use WithFileUploads;

    public $make, $model, $license_plate, $vin, $color, $vehicle_type;
    public $insurance_provider, $insurance_policy_number, $insurance_expiration;
    public $driver_license_number, $license_expiration;
    public $is_active = true;
    public $vehicle_photo, $insurance_document, $registration_document;
    public $year_of_manufacture = null;
    public $seating_capacity = 1;
    public $mileage = 1;
    // Add a currentYear property
    public $currentYear;

    public function mount()
    {
        $this->currentYear = date('Y'); // Set current year when the component is initialized
    }

    protected $rules = [
        'make' => 'required|string|max:50',
        'model' => 'required|string|max:50',
        'year_of_manufacture' => 'required|integer|between:1900,', // we'll append currentYear later
        'license_plate' => 'required|string|max:20|unique:vehicles,license_plate',
        'vin' => 'required|string|max:20|unique:vehicles,vin',
        'color' => 'required|string|max:50',
        'vehicle_type' => 'required|string|max:50',
        'insurance_provider' => 'nullable|string|max:255',
        'insurance_policy_number' => 'nullable|string|max:50',
        'insurance_expiration' => 'nullable|date|after:today',
        'driver_license_number' => 'nullable|string|max:50',
        'license_expiration' => 'nullable|date|after:today',
        'seating_capacity' => 'required|integer|min:1',
        'mileage' => 'nullable|integer|min:0',
        // 'is_active' => 'boolean',
        'vehicle_photo' => 'nullable|image|max:5120',
        'insurance_document' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
        'registration_document' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
    ];

    public function rules()
    {
        // Append the currentYear to the year_of_manufacture rule dynamically
        $this->rules['year_of_manufacture'] = 'required|integer|between:1900,' . $this->currentYear;
        return $this->rules;
    }
    public function submit(): RedirectResponse
    {
        $this->validate($this->rules());
        // $this->validate();
        $user_id = Auth()->user()->id;
        
        // Save file uploads
        $vehiclePhotoPath = $this->vehicle_photo ? $this->vehicle_photo->store('vehicles/photos', 'public') : null;
        $insuranceDocumentPath = $this->insurance_document ? $this->insurance_document->store('vehicles/documents', 'public') : null;
        $registrationDocumentPath = $this->registration_document ? $this->registration_document->store('vehicles/documents', 'public') : null;

        // Save vehicle to database
        Vehicle::create([
            'user_id' => $user_id,
            'make' => $this->make,
            'model' => $this->model,
            'year_of_manufacture' => $this->year_of_manufacture,
            'license_plate' => $this->license_plate,
            'vin' => $this->vin,
            'color' => $this->color,
            'vehicle_type' => $this->vehicle_type,
            'insurance_provider' => $this->insurance_provider,
            'insurance_policy_number' => $this->insurance_policy_number,
            'insurance_expiration' => $this->insurance_expiration,
            'driver_license_number' => $this->driver_license_number,
            'license_expiration' => $this->license_expiration,
            'seating_capacity' => $this->seating_capacity,
            'mileage' => $this->mileage,
            // 'is_active' => $this->is_active,
            'vehicle_photo' => $vehiclePhotoPath,
            'insurance_document' => $insuranceDocumentPath,
            'registration_document' => $registrationDocumentPath,
        ]);

        $this->reset();
        
        session()->flash('message', 'Vehicle registered successfully!');
        return Redirect()->back()->with('status', 'success');

    }

    public function render()
    {
        return view('livewire.register-vehicle-form');
    }
}
