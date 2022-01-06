@extends('guest.layouts.app')
@section('content')
    <style>
         .page{
        display:none;
        }
        .active{
            display:inherit;
        }

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
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8">
                    <form method="post" action="{{ route('post_assesment') }}">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="page active">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="md-form md-outline m-0">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="first_name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="md-form md-outline m-0">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="last_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="md-form md-outline m-0">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="md-form md-outline m-0">
                                                <label>Company Name</label>
                                                <input type="text" class="form-control" name="company_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Do you think your organization's online (blogs, digital publications, podcasts, videos) Presence in terms of media coverage is good enough ?
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q1_y" name="q1" value="yes">
                                                <label class="custom-control-label" for="q1_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q1_n" name="q1" value="no">
                                                <label class="custom-control-label" for="q1_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Do you think your organization's offline (newspapers, magazines, TV, and radio) presence in terms of media coverage is good enough ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q2_y" name="q2" value="yes">
                                                <label class="custom-control-label" for="q2_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q2_n" name="q2" value="no">
                                                <label class="custom-control-label" for="q2_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Do you think target audience know about your organization's selling point ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q3_y" name="q3" value="yes">
                                                <label class="custom-control-label" for="q3_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q3_n" name="q3" value="no">
                                                <label class="custom-control-label" for="q3_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Do you think your organization's is close enough with your public ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q4_y" name="q4" value="yes">
                                                <label class="custom-control-label" for="q4_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q4_n" name="q4" value="no">
                                                <label class="custom-control-label" for="q4_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Do you think you organization's already has an effective PR strategies ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q5_y" name="q5" value="yes">
                                                <label class="custom-control-label" for="q5_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q5_n" name="q5" value="no">
                                                <label class="custom-control-label" for="q5_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Have you work on PR Campaign before ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q6_y" name="q6" value="yes">
                                                <label class="custom-control-label" for="q6_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q6_n" name="q6" value="no">
                                                <label class="custom-control-label" for="q6_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Have you work on digital campaign before ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q7_y" name="q7" value="yes">
                                                <label class="custom-control-label" for="q7_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q7_n" name="q7" value="no">
                                                <label class="custom-control-label" for="q7_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Do you think your organization's digital presences (Social Media) is good enough ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q8_y" name="q8" value="yes">
                                                <label class="custom-control-label" for="q8_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q8_n" name="q8" value="no">
                                                <label class="custom-control-label" for="q8_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Do you think your organization's digital presences (Website) is good enough ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q9_y" name="q9" value="yes">
                                                <label class="custom-control-label" for="q9_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q9_n" name="q9" value="no">
                                                <label class="custom-control-label" for="q9_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Do you know how to develop fact sheets and messages ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q10_y" name="q10" value="yes">
                                                <label class="custom-control-label" for="q10_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q10_n" name="q10" value="no">
                                                <label class="custom-control-label" for="q10_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Do you know how to create a good press kit (Press Release, etc) ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q11_y" name="q11" value="yes">
                                                <label class="custom-control-label" for="q11_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q11_n" name="q11" value="no">
                                                <label class="custom-control-label" for="q11_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Do You think your organization's has a good relationship with media ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q12_y" name="q12" value="yes">
                                                <label class="custom-control-label" for="q12_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q12_n" name="q12" value="no">
                                                <label class="custom-control-label" for="q12_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Have you ever made an event for media people ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q13_y" name="q13" value="yes">
                                                <label class="custom-control-label" for="q13_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q13_n" name="q13" value="no">
                                                <label class="custom-control-label" for="q13_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Do you think your organization's has a good image and reputations ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-10">
                                            <span>Attend Industry events and trade shows.</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q14_y" name="q14" value="yes">
                                                <label class="custom-control-label" for="q14_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q14_n" name="q14" value="no">
                                                <label class="custom-control-label" for="q14_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>Do you think your organization's has a crisis planning management to handle any potential crisis in future ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q15_y" name="q15" value="yes">
                                                <label class="custom-control-label" for="q15_y">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="q15_n" name="q15" value="no">
                                                <label class="custom-control-label" for="q15_n">No</label>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>What Do You think about your organization's activation of the following public relations tactics ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4 d-flex align-items-center">
                                        <div class="col-lg-8">
                                            <span>Attend industry evens and trade shows.</span>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select name="q16" class="form-control">
                                                    <option value="yes">Agree</option>
                                                    <option value="no">Disagree</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-8">
                                            <span>Engage with writers, editors, bloggers, and analyst on social media</span>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select name="q17" class="form-control">
                                                    <option value="yes">Agree</option>
                                                    <option value="no">Disagree</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-8">
                                            <span>Maintain a dynamic database of media contacts and bloggers.</span>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select name="q18" class="form-control">
                                                    <option value="yes">Agree</option>
                                                    <option value="no">Disagree</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-8">
                                            <span>Monitor placements and mentions of the brand and organization leaders</span>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select name="q19" class="form-control">
                                                    <option value="yes">Agree</option>
                                                    <option value="no">Disgaree</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-8">
                                            <span>Network offline with customers, prospects, and peers</span>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select name="q20" class="form-control">
                                                    <option value="yes">Agree</option>
                                                    <option value="no">Disagree</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span>What Do You think about your organization's activation of the following public relations tactics ?</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-8">
                                            <span>Pitch feature story ideas to priority media contacts.</span>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select name="q21" class="form-control">
                                                    <option value="yes">Agree</option>
                                                    <option value="no">Disagree</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-8">
                                            <span>Publish Press release</span>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select name="q22" class="form-control">
                                                    <option value="yes">Agree</option>
                                                    <option value="no">Disagree</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-8">
                                            <span>Pursue editorial opportunities in traditional media outlets.</span>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="q23" class="form-control">
                                                <option value="yes">Agree</option>
                                                <option value="no">Disagree</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-8">
                                            <span>Secure guest article and blog opportunities</span>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="q24" class="form-control">
                                                <option value="yes">Agree</option>
                                                <option value="no">Disagree</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-8">
                                            <span>Submit for speaking engagements and industry awards</span>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="q25" class="form-control">
                                                <option value="yes">Agree</option>
                                                <option value="no">Disagree</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-12 d-flex justify-content-between align-items-center">
                                        <a id="prev">
                                            <i class="fas fa-arrow-left animated fadeInRight slow infinite mr-3"></i>Back
                                        </a>
                                        <button type="button" class="btn btn-md blue-gradient text-white rounded-0 text-capitalize" id="next">
                                            Next <i class="fas fa-arrow-right animated fadeInLeft infinite slow ml-3"></i>
                                        </button>
                                        <button type="submit" class="btn btn-md blue-gradient text-white rounded-0 text-capitalize d-none" id="submit">
                                            Send <i class="fas fa-arrow-right animated fadeInLeft infinite slow ml-3"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#prev').on("click", function () {
        if($('.page.active').index() > 0)
            $(".page.active").removeClass("active").prev().addClass("active");

        if($('.page.active').index() != $('.page').lenght-1)
            $('#next').removeClass('d-none');
            $('#submit').addClass('d-none');
        });
        $("#next").on("click", function () {
            if($(".page.active").index() < $('.page').length-1)
                $(".page.active").removeClass('active').next().addClass("active")

            if($(".page.active").index() === $('.page').length-1) {
                $('#next').addClass("d-none");
                $('#submit').removeClass('d-none');
            }
        });

        $('#first_select').change(function () {
            if($(this).children('option:selected').val() === "2") {
                $('#second_select').removeClass('d-none');
            }
            else
            {
                $('#second_select').addClass('d-none');
            }
        });
    </script>
@endsection