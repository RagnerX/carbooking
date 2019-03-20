<?php

namespace App\Http\Controllers\Admin;

use App\HiringRequest;
use App\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HiringRequestController extends Controller
{
    public function pendingHiringRequests()
    {
        $pending_requests = HiringRequest::with(['employee', 'vehicle'])
            ->latest()
            ->where('admin_approved', 0)
            ->whereNull('status')
            ->get();

        return view('admin.hiring-requests.pending', compact('pending_requests'));

    }

    public function approvedHiringRequests()
    {
        $approved_requests = HiringRequest::with(['employee', 'vehicle'])
            ->latest()
            ->where('admin_approved', 1)
            ->where('status', HiringRequest::STARTED)
            ->get();

        return view('admin.hiring-requests.approved', compact('approved_requests'));

    }

    public function completedHiringRequests()
    {
        $completed_requests = HiringRequest::with(['employee', 'vehicle'])
            ->latest()
            ->where('status', HiringRequest::ENDED)
            ->get();

        return view('admin.hiring-requests.completed', compact('completed_requests'));

    }

    public function completeRequest(HiringRequest $hiringRequest)
    {

        $hiringRequest->status = HiringRequest::ENDED;
        $hiringRequest->save();

        Vehicle::find($hiringRequest->vehicle_id)->update([
            'available' => 1
        ]);

        return redirect()->route('admin.completed.hiring.requests');

    }

    public function approveRequest(HiringRequest $hiringRequest)
    {

        $hiringRequest->admin_approved = 1;
        $hiringRequest->status = HiringRequest::STARTED;
        $hiringRequest->save();

        return redirect()->route('admin.approved.hiring.requests');
    }
}
