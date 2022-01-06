@extends('guest.layouts.app')
@section('content')
<style type="text/css">
    #header_banner { 
        width: 100%;
        /* min-height: 800px; */
        height:40%;
        background-size:cover;
        color:white;
        background-position:50% 50%;
        background-attachment: fixed;
        background-image:
        url({{ asset('image/back.jpg' ) }});
    }
</style>
<div class="container">
    <div class='row' style="margin-top:90px;">
        <div class="col-lg-6">
            <img src="{{ asset('image/vector1.jpg') }}" class="w-100">
        </div>
        <div class="col-lg-6 d-flex flex-column">
            <div>
                <div class="row">
                    <div class="col-lg-12"> 
                        <span style="font-size:25px; font-weight:500">Self Assesment Test</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat porta odio quis blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam sit amet risus tincidunt, hendrerit dolor vel, aliquam nisi. Vestibulum vel orci a massa tempus aliquam at sed libero. Maecenas eget porttitor odio. Morbi tincidunt imperdiet nisi, pharetra tincidunt odio vestibulum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sem ex.</span>
                    </div>
                </div>
            </div>
            <div class="row mt-auto">
                <div class="col-lg-12 pb-4">
                    <button type="button" class="btn btn-sm rounded-pill blue-gradient m-0 text-capitalize" onclick='location.href="{{ route('request_assesment') }}";'>
                        Take Test <i class="fas fa-arrow-right animated fadeInLeft infinite slow ml-3"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <hr />
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6 d-flex flex-column">
            <div>
                <div class="row">
                    <div class="col-lg-12">
                        <span style="font-size:25px; font-weight:500">Request For Proposal</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat porta odio quis blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam sit amet risus tincidunt, hendrerit dolor vel, aliquam nisi. Vestibulum vel orci a massa tempus aliquam at sed libero. Maecenas eget porttitor odio. Morbi tincidunt imperdiet nisi, pharetra tincidunt odio vestibulum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sem ex.</span>
                    </div>
                </div>
            </div>
            <div class="row mt-auto">
                <div class="col-lg-12">
                    <button type="button" class="btn btn-sm rounded-pill blue-gradient text-capitalize" onclick="location.href='/request_proposal';">
                        Request Proposal
                        <i class="fas fa-arrow-right animated fadeInLeft infinite slow ml-3"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('image/vector3.jpg') }}" class="w-100">
        </div>
    </div>
</div>

@endsection