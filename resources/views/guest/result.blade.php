@extends('guest.layouts.app')
@section('content')
    <style type="text/css">
        #header_banner { 
            width: 100%;
            /* min-height: 800px; */
            height:100%;
            background-size:cover;
            /* color:white; */
            background-position:50% 50%;
            background-attachment: fixed;
            background-image:
            url({{ asset('image/back.jpg' ) }});
        }
    </style>
    <div id="header_banner">
        <div class="container h-100">
            <div class="row h-100 d-flex justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <img src="{{ asset('image/vector2.jpg') }}" class="w-100">
                                </div>
                                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <span style="font-size:30px;" class="text-center">Your Result</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <span style="font-size:100px;" class="text-center">{{ $result }}%</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center">
                                                <small>See Details</small>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-12 d-flex justify-content-center">
                                                <button type="button" class="btn btn-md rounded-0 btn-deep-orange text-capitalize" style="font-weight:500">
                                                    Send To Email
                                                    <i class="fas fa-envelope animated fadeIn infinite ml-3"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection