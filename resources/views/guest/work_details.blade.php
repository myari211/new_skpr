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
        url({{ asset('image/'.$project->image ) }});
    }
</style>
<div id="header_banner">
    <div class="row w-100 h-100">
        <div class="col-lg-12 d-flex justify-content-center align-items-end w-100 h-100 pb-4">
            <span style="font-size:40px; font-weight:700; -webkit-text-stroke-width:1px; -webkit-text-stroke-color:black;">{{ $project->project_title }}</span>
        </div>
    </div>
</div>
<div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-lg-4">
            <img src="{{ asset('image/'.$project->image) }}" class="w-100">
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-lg-12">
            <span>{{ $project->description }}</span>
        </div>
    </div>
</div>
@endsection