@extends('admin.layout.master')
@section('title')
    Home
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Completed Hiring Requests</h5>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Employee Name</th>
                        <th>Email</th>
                        <th>Vehicle Brand</th>
                        <th>Vehicle Model</th>
                        <th>Seat Capacity</th>
                        <th>Driver Name</th>
                        <th>Driver Contact</th>
                        <th>Started At</th>
                        <th>Completed At</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($completed_requests as $completed_request)
                        <tr>
                            <th scope="row">{{$loop->index +1 }}</th>
                            <td>{{$completed_request->employee->name}}</td>
                            <td>{{$completed_request->employee->email}}</td>
                            <td>{{$completed_request->vehicle->brand}}</td>
                            <td>{{$completed_request->vehicle->model}}</td>
                            <td>{{$completed_request->vehicle->seat_capacity}}</td>
                            <td>{{$completed_request->vehicle->driver_name}}</td>
                            <td>{{$completed_request->vehicle->driver_contact}}</td>
                            <td>{{$completed_request->created_at}}</td>
                            <td>{{$completed_request->updated_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
