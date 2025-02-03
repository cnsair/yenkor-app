<?php

namespace App\Http\Controllers;

use App\Services\AuditTrailService;

class AdminDashboardController extends Controller
{
    protected $auditTrailService;

    public function __construct(AuditTrailService $auditTrailService)
    {
        $this->auditTrailService = $auditTrailService;
    }

    public function index()
    {
        // Fetch metrics from the service
        $totalClicks = $this->auditTrailService->getTotalClicks();
        $registeredUsers = $this->auditTrailService->getRegisteredUsers();
        $uniqueClicks = $this->auditTrailService->getUniqueClicks();
        $auditTrails = $this->auditTrailService->getAuditTrails();

        // Pass the data to the view
        return view('admin.dashboard', compact('totalClicks', 'registeredUsers', 'uniqueClicks', 'auditTrails'));
    }
}