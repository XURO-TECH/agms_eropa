@extends('layouts.auth')
@section('content')
    <div class="account-pages my-5 pt-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="mt-4 text-center">
                        <div>
                            <img src="{{asset('assets/images/error-img.png')}}" alt=""
                                 class="img-fluid mx-auto d-block">
                        </div>

                        <h1 class="mt-5 text-uppercase text-white font-weight-bold mb-3">Sorry, Page not Found</h1>
                        <h5 class="text-white-50">We will be back soon</h5>
                        <div class="mt-5">
                            <a class="btn btn-success waves-effect waves-light"
                               href="{{route('admin.dashboard.index')}}">Back to Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
@stop
