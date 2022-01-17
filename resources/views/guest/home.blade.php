@extends('guest.layouts.app')
@section('content')
<style>
    #header_banner { 
        width: 100%;
        /* min-height: 800px; */
        height:100%;
        background-size:cover;
        color:white;
        background-position:50% 50%;
        background-attachment: fixed;
        background-image:
        url({{ asset('image/back.jpg') }});
    }
</style>
{{-- <div id="header_banner">
    <div class="container h-100">
        <div class="d-flex justify-content-center align-items-center w-100 h-100">
            <div>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <i class="fas fa-paper-plane" style="font-size:30px;"></i>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 animated fadeInDown">
                        <span style="font-size:70px; font-weight:700">SKPR ASIA</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span style="font-weight:500" id="typed"></span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-center">
                        <button type="button" class="btn btn-md rounded-0 z-depth-0 btn-outline-white animated fadeInDown delay-1s">
                            Hook Me Up
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="w-100 h-100 d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-lg-6 d-flex align-items-center animated fadeInLeft">
            <div>
                <div class="row">
                    <div class="col-lg-12 pl-5">
                        <span style="font-size:40px; font-weight:600">Connected with thousands</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 pl-5">
                        <span style="font-size:40px; font-weight:600">of potential Public Relation to</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 pl-5">
                        <span id="typed" style="font-size:40px; font-weight:600" class="deep-orange-text"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 animated fadeinRight">
            <img src="{{ asset('image/vector1.jpg') }}" style="width:100%">
        </div>
    </div>
</div>
<div class="container">
    {{-- <div class="row mt-5">
        <div class="col-lg-12 d-flex justify-content-center">
            <span style="font-size:30px; font-weight:500">Hi, We are SKPR ASIA</span>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-6 d-flex align-items-center">
            <img src="{{ asset('image/public_relation.png') }}" class="w-100">
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus ultricies lorem, vel mollis diam tempus vel. Phasellus non lacus aliquet, dictum sapien faucibus, ornare nisl. Nam congue dui sapien, vel iaculis tortor auctor nec. Praesent in faucibus eros, eget blandit leo. Mauris id ex dignissim, malesuada nulla nec, vulputate neque. Duis porttitor viverra purus, a gravida ligula mollis at. Sed mi sem, pretium eget elementum non, viverra sit amet massa. Ut tempus at odio nec placerat. Ut pulvinar at neque nec dignissim. Nunc eu sem vel velit fermentum ornare. In convallis egestas velit, vitae tempor ligula auctor quis. Donec dolor sem, feugiat vitae tincidunt at, convallis nec quam.</span>
                </div>
            </div>
            <div id="skpr" class="collapse">
                <div class="row">
                    <div class="col-lg-12">
                        <span>Sed commodo tellus dolor, non elementum dui lacinia nec. Vivamus tincidunt quis dui et sodales. Morbi dictum a magna a dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed eu efficitur elit, ut ultrices orci. Suspendisse potenti. Nulla commodo volutpat nisl. Aliquam quam felis, volutpat et placerat eget, congue vel orci. Proin in porta leo.</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <span>Quisque nec lobortis tellus. Aenean congue, sem et pellentesque semper, lorem augue sagittis nibh, ac pulvinar nunc diam vel nulla. Sed leo justo, condimentum nec porttitor ut, rhoncus eget elit. Pellentesque nec ex sodales, mattis turpis eget, sodales dolor. Ut ante neque, volutpat at elementum nec, aliquam facilisis nibh. Morbi a ligula ornare sem cursus venenatis. Nulla rutrum nisl a lacinia blandit. Etiam neque turpis, accumsan non turpis et, accumsan tincidunt felis. Mauris scelerisque ligula dui, vel commodo massa facilisis ac. Donec blandit lorem ac leo porta, a finibus est posuere. Proin pulvinar sem id orci viverra fermentum. Etiam in aliquet erat, id venenatis lorem. Etiam a sollicitudin turpis.</span>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <button type="btn" class="btn btn-md btn-deep-orange rounded-pill text-capitalize m-0" data-toggle="collapse" data-target="#skpr" aria-expanded="false" aria-controls="skpr">
                        Read More
                        <i class="fas fa-arrow-right animated fadeInLeft slow infinite ml-3"></i>
                    </button>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row mt-5">
        <div class="col-lg-12 d-flex justify-content-center wow fadeIn">
            <span style="font-size:30px; font-weight:500">Our Services</span>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="row mt-3">
                    <div class="col-lg-1 d-flex align-items-center wow fadeInLeftBig" data-wow-delay="0.8s">
                        <button type="button" class="btn p-3 btn-outline-deep-orange rounded-circle z-depth-0" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                    </div>
                    <div class="col-lg-10 wow fadeInUp">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card border h-100">
                                                    <div class="card-body d-flex flex-column">
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <img src="{{ asset('image/vector1.jpg') }}" class="w-100">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <span style="font-size:20px; font-weight:500">Strategic and Counsel</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3 mb-5">
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <small class="text-center">understanding clients’ objectives, goals and criteria for success.  We analyze their business landscape, assessing marketplace trends, competitors, media coverage, customer preferences and behavior.</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-auto">
                                                            <div class="col-lg-12 d-flex justify-content-center">
                                                                <button type="button" class="btn btn-sm rounded-pill btn-deep-orange m-0" onclick="location.href='/services';">
                                                                    Take A Look <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card border h-100">
                                                    <div class="card-body d-flex flex-column">
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <img src="{{ asset('image/vector2.jpg') }}" style="width:280px; height:280px;">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-1">
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <span style="font-size:20px; font-weight:500">PR & Marketing</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3 mb-5">
                                                                <div class="col-lg-12 d-flex justify-content-center d-flex justify-content-center">
                                                                    <small class="text-center">planning a comprehensive digital public relations activity starting from the branding strategy, publicity strategy, digital activity strategy, and others.
                                                                        create article content, photos, and videos that support branding activities in digital. These contents are then disseminated to the media and on social media.
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-auto">
                                                            <div class="col-lg-12 d-flex justify-content-center">
                                                                <button type="button" class="btn btn-sm btn-deep-orange rounded-pill m-0" onclick="location.href='/services';">
                                                                    Take A Look
                                                                    <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card border">
                                                    <div class="card-body">
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <img src="{{ asset('image/vector3.jpg') }}" class="w-100">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <span style="font-weight:500; font-size:20px;">
                                                                        Digital PR
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3 mb-5">
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <small class="text-center">
                                                                        planning a comprehensive digital public relations activity starting from the branding strategy, publicity strategy, digital activity strategy, and others.
                                                                        create article content, photos, and videos that support branding activities in digital. These contents are then disseminated to the media and on social media.
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-auto">
                                                            <div class="col-lg-12 d-flex justify-content-center">
                                                                <button type="button" class="btn btn-sm rounded-pill btn-deep-orange m-0" onclick="location.href='/services';">
                                                                    Take A Look
                                                                    <i class="fas fa-arrow-right ml-3 animated fadeInLeft slow infinite"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card border h-100">
                                                    <div class="card-body d-flex align-items-center flex-column">
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <img src="{{ asset('image/vector4.jpg') }}" class="w-100">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <span style="font-size:20px; font-weight:500">Event</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <small class="text-center">professional service provider in organizing various formal and non-formal events, Formulating event concepts, Technical formulation of events, Preparation of budgets, Preparation of events, Implementation of events</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-auto">
                                                            <div class="col-lg-12 d-flex justify-content-center">
                                                                <button type="button" class="btn btn-sm rounded-pill btn-deep-orange m-0" onclick="location.href='/services';">
                                                                    Take A Look
                                                                    <i class="fas fa-arrow-right animated fadeInLeft infinite slow ml-3"></i>
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
                    <div class="col-lg-1 d-flex align-items-center wow fadeInRightBig" data-wow-delay="0.8s">
                        <button type="button" class="btn btn-md p-3 rounded-circle btn-outline-deep-orange z-depth-0" data-target="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <div class="row" style="margin-top:80px;">
                    <div class="col-lg-12">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-12 d-flex justify-content-center wow fadeInUp">
            <span style="font-size:30px; font-weight:500">Our Work</span>
        </div>
    </div>
    <div class="row mt-5 mb-5 d-flex justify-content-center">
        <div class="col-lg-2 d-flex align-items-center wow fadeInUp">
            <img src="{{ asset('image/joox.png') }}" class="w-100">
        </div>
        <div class="col-lg-1">
        </div>
        <div class="col-lg-2 d-flex align-items-center wow fadeInUp" data-wow-delay="0.3s">
            <img src="{{ asset('image/aia.jpg') }}" class="w-100">
        </div>
        <div class="col-lg-1">
        </div>
        <div class="col-lg-2 d-flex align-items-center wow fadeInUp" data-wow-delay="0.6s">
            <img src="{{ asset('image/spain.png') }}" class="w-100">
        </div>
        <div class="col-lg-1">
        </div>
        <div class="col-lg-2 d-flex align-items-center wow fadeInUp" data-wow-delay="0.9s">
            <img src="{{ asset('image/wechat.png') }}" class="w-100 rounded">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 d-flex justify-content-center wow fadeInUp">
            <button type="button" class="btn btn-md rounded-0 btn-outline-black z-depth-0">
                See Our Work
                <i class="fas fa-arrow-right ml-3 animated fadeInLeft slow infinite"></i>
            </button>
        </div>
    </div>
</div>


<script type="text/javascript">
    $('.carousel').carousel({
        interval: 30;
    })
</script>
@endsection