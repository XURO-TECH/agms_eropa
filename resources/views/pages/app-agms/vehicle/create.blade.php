@extends('pages.app-agms.index')
@section('content')

    <h4 class="home">Add Vehicle</h4>
    <div class="description-form"> isi form dibawah ini untuk mendaftarkan,</div>
    <div class="description-form"> kendaraan baru dan klik submit</div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-4">
                    <div class="p-2">
                        <form action="{{route('app.storeVehicle')}}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label for="car_type">Vehicle name</label>
                                        <input id="car_type" type="text" placeholder="Masukan nama kendaraan anda"
                                               class="form-control @error('car_type') is-invalid @enderror"
                                               name="car_type"
                                               value="{{ old('car_type') }}" required autocomplete="car_type" autofocus>

                                        @error('car_type')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="license_plate">License plate</label>
                                        <input id="license_plate" type="text"
                                               placeholder="Masukan plat nomor kendaraan anda"
                                               class="form-control @error('license_plate') is-invalid @enderror"
                                               name="license_plate" value="{{old('license_plate')}}">
                                        @error('license_plate')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="car_color">Vehicle Color</label>
                                        <input id="car_color" type="text"
                                               placeholder="Masukan warna kendaraan anda"
                                               class="form-control @error('car_color') is-invalid @enderror"
                                               name="car_color" value="{{old('car_color')}}">
                                        @error('car_color')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-info btn-block waves-effect waves-light"
                                                type="submit">Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="space-form-create"></div>
@endsection


