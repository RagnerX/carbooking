@extends('employee.layout.master')
@section('title')
    Hiring Requests
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Hiring Requests</h5>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Seat Capacity</th>
                        <th>Driver Name</th>
                        <th>Driver Contact</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($hiring_requests as $hiring_request)
                        <tr>
                            <th scope="row">{{$loop->index +1 }}</th>

                            <td>{{$hiring_request->vehicle->brand}}</td>
                            <td>{{$hiring_request->vehicle->model}}</td>
                            <td>{{$hiring_request->vehicle->seat_capacity}}</td>

                            <td>{{$hiring_request->vehicle->driver_name}}</td>
                            <td>{{$hiring_request->vehicle->driver_contact}}</td>

                            <td>{{$hiring_request->admin_approved?'Approved':"Pending"}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
