@extends('admin.layout.master')
@section('title')
    Home
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <!-- Basic Form Inputs card start -->
            <div class="card">
                <div class="card-header">
                    <h5>Update Vehicle</h5>
                </div>
                <div class="card-block">
                    <form method="post" action="{{route('vehicle.update',$vehicle->id)}}">
                        {{csrf_field()}}
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <select name="type" class="form-control" required>
                                    <option value="">Select Type</option>
                                    <option value="{{\App\Vehicle::VEHICLE_TYPE_CONTRACT}}"
                                            @if(\App\Vehicle::VEHICLE_TYPE_CONTRACT==$vehicle->type) selected @endif>
                                        Contract
                                    </option>
                                    <option value="{{\App\Vehicle::VEHICLE_TYPE_OWNED}}"
                                            @if(\App\Vehicle::VEHICLE_TYPE_OWNED==$vehicle->type) selected @endif>
                                        Owned
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Brand</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="brand" value="{{$vehicle->brand}}"
                                       required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Model</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="model" value="{{$vehicle->model}}"
                                       required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Mileage</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="mileage" value="{{$vehicle->mileage}}"
                                       required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Seat Capacity</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="seat_capacity"
                                       value="{{$vehicle->seat_capacity}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">License Start Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="licence_start_date"
                                       value="{{$vehicle->licence_start_date}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">License Expire Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="licence_expire_date"
                                       value="{{$vehicle->licence_expire_date}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Driver Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="driver_name"
                                       value="{{$vehicle->driver_name}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Driver Contract</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="driver_contact"
                                       value="{{$vehicle->driver_contact}}" required>
                            </div>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
