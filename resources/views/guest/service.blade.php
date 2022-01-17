@extends('guest.layouts.app')
@section('content')
<style type="text/css">
    #header_banner { 
        width: 100%;
        /* min-height: 800px; */
        height:40%;
    }

    .bg-section {
        color:azure;
    }
</style>
<div id="header_banner">
    <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div>
            <div class='row'>
                <div class="col-lg-12 d-flex justify-content-center wow fadeInUp">
                    <span style="font-size:30px; font-weight:600">Our Services</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center wow fadeInUp">
                    <span style="font-weight:500">What We Do ?</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row animated fadeInLeft">
        <div class="col-lg-6 d-flex align-items-center">
            <img src="{{ asset('image/vector1.jpg') }}" class="w-100">
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <span style="font-size:25px; font-weight:600">
                        Strategic & Counsel
                    </span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <span>understanding clients’ objectives, goals and criteria for success. We analyze their business landscape, assessing marketplace trends, competitors, media coverage, customer preferences and behavior.</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <ul>
                        <li>Strategic Communication Plan</li>
                        <li>Market Research</li>
                        <li>Brand Identity Development</li>
                        <li>Crisis Management</li>
                        <li>Creative Design</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <button type="button" class="btn btn-md btn-deep-orange rounded-pill text-capitalize" onclick="location.href='/request_proposal';">
                        Take Now
                        <i class="fas fa-arrow-right animated fadeInLeft infinite ml-3"></i>
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
    <div class="row mt-4 wow fadeInRight">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <spans style="font-size:25px; font-weight:600">Public Relation & Marketing</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <span>planning a comprehensive digital public relations activity starting from the branding strategy, publicity strategy, digital activity strategy, and others. create article content, photos, and videos that support branding activities in digital. These contents are then disseminated to the media and on social media.</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <ul>
                        <li>Press Conference/Product Launching</li>
                        <li>Media/Company Visit</li>
                        <li>Media Gathering/Media Briefing</li>
                        <li>Exclusive Interview</li>
                        <li>Press Release Distribution</li>
                        <li>Media Monitoring</li>
                        <li>Media Coaching</li>
                        <li>Key Opinion Leader (KOL) / Influencer</li>
                        <li>Community Engagement</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <button type="button" class="btn btn-md rounded-pill btn-deep-orange m-0 text-capitalize">
                        Take Now
                        <i class="fas fa-arrow-right animated fadeInLeft infinite ml-3"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex align-items-center">
            <img src="{{ asset('image/vector2.jpg') }}" style="width:500px; height:500px;">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <hr />
        </div>
    </div>
    <div class='row mt-4 wow fadeInLeft'>
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <img src="{{ asset('image/vector3.jpg') }}" class="w-100">    
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <span style="font-size:25px; font-weight:600">Digital Public Relation</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <span>planning a comprehensive digital public relations activity starting from the branding strategy, publicity strategy, digital activity strategy, and others. create article content, photos, and videos that support branding activities in digital. These contents are then disseminated to the media and on social media.</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <ul>
                        <li>Social Media Management</li>
                        <li>Website Development</li>
                        <li>Key Opinion Leaders (KOL) Engagement</li>
                        <li>SEO & SEM</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <button type="button" class="btn btn-md rounded-pill btn-deep-orange text-capitalize">
                        Take Now
                        <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 mb-4">
        <div class="col-lg-12">
            <hr />
        </div>
    </div>
    <div class="row mt-4 wow fadeInRight">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <span style="font-size:25px; font-weight:600">Event</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <span>professional service provider in organizing various formal and non-formal events, Formulating event concepts, Technical formulation of events, Preparation of budgets, Preparation of events, Implementation of events</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <ul>
                        <li>B2B Gathering</li>
                        <li>B2C Gathering</li>
                        <li>Production</li>
                        <li>Event Management</li>
                        <li>Speaking Opportunity</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <button type="button" class="btn btn-md rounded-pill btn-deep-orange text-capitalize">
                        Take Now
                        <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex align-items-center">
            <img src="{{ asset('image/vector4.jpg') }}" class="w-100">
        </div>
    </div>
</div>
@endsection