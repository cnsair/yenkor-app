<?php

namespace App\Services;

use App\Models\AuditTrail; // Import the AuditTrail model

class AuditTrailService
{
    public function getTotalClicks()
    {
        return AuditTrail::count();
    }

    public function getRegisteredUsers()
    {
        return AuditTrail::where('is_registered', true)->distinct('user_id')->count('user_id');
    }

    public function getUniqueClicks()
    {
        return AuditTrail::distinct('ip_address')->count('ip_address');
    }

    public function getAuditTrails()
    {
        return AuditTrail::with('user')->latest()->get();
    }
    
}