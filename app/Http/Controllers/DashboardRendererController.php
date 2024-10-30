<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

class DashboardRendererController extends Controller
{
    //Controller that renders posted items
    public function dashboardRenderer(){
        
        $vehicle_data = Vehicle::query()->orderBy('id', 'desc')
                                    ->limit(10)->get();      

        return view('driver.dashboard')
            ->with('vehicle_data', $vehicle_data);
    }
}
