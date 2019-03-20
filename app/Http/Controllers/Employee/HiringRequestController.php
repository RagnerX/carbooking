<?php

namespace App\Http\Controllers\Employee;

use App\HiringRequest;
use App\Http\Controllers\Controller;
use App\Vehicle;
use Illuminate\Http\Request;

class HiringRequestController extends Controller
{

    public function myRequests()
    {
        $hiring_requests = HiringRequest::latest()
            ->where('user_id', auth()->id())
            ->where('status', '!=', HiringRequest::ENDED)
            ->get();
        return view('employee.my-requests', compact('hiring_requests'));
    }

    public function myCompletedRequests()
    {
        $hiring_requests = HiringRequest::latest()
            ->where('user_id', auth()->id())
            ->where('status', '=', HiringRequest::ENDED)
            ->get();
        return view('employee.completed-requests', compact('hiring_requests'));
    }

    public function makeRequest(Request $request)
    {

        HiringRequest::create([
            'user_id' => auth()->id(),
            'vehicle_id' => $request->vehicle_id
        ]);

        Vehicle::find($request->vehicle_id)->update(['available' => 0]);

        return redirect()->route('hiring.requests');

    }

    public function availableVehicles()
    {
        $vehicles = Vehicle::where('available', 1)
            ->get();
        return view('employee.available-vehicles', compact('vehicles'));
    }

}
