@extends('admin.layout.master')
@section('title')
    Home
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Pending Hiring Requests</h5>
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
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($approved_requests as $approved_request)
                        <tr>
                            <th scope="row">{{$loop->index +1 }}</th>
                            <td>{{$approved_request->employee->name}}</td>
                            <td>{{$approved_request->employee->email}}</td>
                            <td>{{$approved_request->vehicle->brand}}</td>
                            <td>{{$approved_request->vehicle->model}}</td>
                            <td>{{$approved_request->vehicle->seat_capacity}}</td>
                            <td>{{$approved_request->vehicle->driver_name}}</td>
                            <td>{{$approved_request->vehicle->driver_contact}}</td>
                            <td>
                                <form method="post"
                                      action="{{route('admin.complete.hiring.requests',$approved_request->id)}}">
                                    @csrf
                                    <button type="submit" class="btn-danger">Complete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
