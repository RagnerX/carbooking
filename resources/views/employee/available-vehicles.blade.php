@extends('employee.layout.master')
@section('title')
    Available Vehicles
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
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Seat Capacity</th>
                        <th>Driver Date</th>
                        <th>Driver Contact</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($vehicles as $vehicle)
                        <tr>
                            <th scope="row">{{$loop->index +1 }}</th>

                            <td>{{$vehicle->brand}}</td>
                            <td>{{$vehicle->model}}</td>
                            <td>{{$vehicle->seat_capacity}}</td>

                            <td>{{$vehicle->driver_name}}</td>
                            <td>{{$vehicle->driver_contact}}</td>

                            <td>
                                <form method="post" action="{{route('hiring.request')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="vehicle_id" value="{{$vehicle->id}}">
                                    <button type="submit" class="btn-success">Hire</button>
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
