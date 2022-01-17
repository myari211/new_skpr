@extends('guest.layouts.app')
@section('content')
<style type="text/css">
    #header_banner { 
        /* width: 100%;
        height:40%;
        background-size:cover;
        color:white;
        background-position:50% 50%;
        background-attachment: fixed;
        background-image:
        url({{ asset('image/back.jpg') }}); */
    }
</style>
<div class="container">
    <div class="row" style="margin-top:100px;">
        <div class="col-lg-12 d-flex justify-content-center">
            <span style="font-size:30px; font-weight:600">Our Work</span>
        </div>
    </div>
    <div class="row mt-4">
        @foreach($project as $data)
            <div class="col-lg-4">
                <div class="card h-100 rounded-0">
                    <div class="card-body d-flex flex-column">
                        <div>
                            <div class="row mb-4">
                                <div class="col-lg-12 d-flex align-items-center h-100">
                                    <img src="{{ asset('image/'.$data->image) }}" class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class='row mt-auto'>
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-size:25px; font-weight:600">{{ $data->project_title }}</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <small>{{ Str::limit($data->description, 150) }}</small>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-sm rounded-0 btn-outline-black text-capitalize z-depth-0" onclick="location.href='{{ route('work_details', $data->id) }}';">
                                    Read More
                                    <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection