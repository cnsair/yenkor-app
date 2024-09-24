<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $role = Auth::user()->role;

        if ($request->wantsJson()) {
            return response()->json(['two_factor' => false]);
        }

        switch ($role) {

            case 0:
                return redirect()->route('rider.dashboard');
            case 1:
                return redirect()->route('driver.dashboard');
            case 2 || 3:
                return redirect()->route('admin.dashboard');
            default:
                return redirect()->route('login');
                
        }
    }

}
