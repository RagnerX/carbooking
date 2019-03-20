@extends('admin.layout.master')
@section('title')
    Home
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Vehicles</h5>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Type</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Mileage</th>
                        <th>Seat Capacity</th>
                        <th>License Start Date</th>
                        <th>License Expire Date</th>
                        <th>License Renew Alert</th>
                        <th>Driver Date</th>
                        <th>Driver Contact</th>
                        <th>Available</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($vehicles as $vehicle)
                        <tr>
                            <th scope="row">{{$loop->index +1 }}</th>
                            <td>{{$vehicle->type}}</td>
                            <td>{{$vehicle->brand}}</td>
                            <td>{{$vehicle->model}}</td>
                            <td>{{$vehicle->mileage}}</td>
                            <td>{{$vehicle->seat_capacity}}</td>
                            <td>{{$vehicle->licence_start_date}}</td>
                            <td>{{$vehicle->licence_expire_date}}</td>
                            <td>{{\Carbon\Carbon::parse($vehicle->licence_expire_date)->diffInDays(\Carbon\Carbon::now()) > 30 ?"Off":"On"}}</td>
                            <td>{{$vehicle->driver_name}}</td>
                            <td>{{$vehicle->driver_contact}}</td>
                            <td>{{$vehicle->available? "Yes":"No"}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('vehicle.edit',$vehicle->id)}}">Edit</a>

                                <form method="post" action="{{route('vehicle.destroy',$vehicle->id)}}">
                                    @method("DELETE")
                                    {{csrf_field()}}
                                    <button type="submit" class="btn-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="m-3">
                    {{$vehicles->links()}}
                </div>

            </div>
        </div>
    </div>
@endsection
