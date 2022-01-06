@extends('guest.layouts.app')
@section('content')
<style type="text/css">
    .page{
        display:none;
    }
    .active{
        display:inherit;
    }
</style>
<div class="container h-100">
    <div class="row d-flex justify-content-center h-100 align-items-center">
        <div class="col-lg-8">
            <div class="card rounded-0" style="border-radius:15px;">
                <div class="card-body">
                    <div class="page active">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <small>First Name</small>
                                    <input type="text" name="first_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <small>Last Name</small>
                                    <input type="text" name="last_name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <small>Email</small>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <small>Phone Number</small>
                                    <input type='text' class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <small>Company</small>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-size:20px; font-weight:600">Company / Organization Overview</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <input type="text" class="form-control rounded" style="height:50px;">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <small>Please provide an overview of your company / organization, goals, and objectives. In addition, provide information about company challenges, strengths, and opportunities.</small>
                            </div>
                        </div>
                    </div>
                    <div class="page animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-size:20px; font-weight:600">Product / Service Overview</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <input type="text" class="form-control rounded" style="height:50px;">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <small>Please provide a brief description of the product line or service where it is sold or distributed. In addition, what specific product line or service that you would like PR to assist and why.</small>
                            </div>
                        </div>
                    </div>
                    <div class="page animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-size:20px; font-weight:600">Scope of Work</span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <small>Please provide a brief description of the requested services you are seeking and the time frame.
                                    SKPR Asia’s services include:
                                </small>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <select class="form-control" style="height:50px;" id="first_select">
                                    <option value="1">Consultations for Public Relations & Communications Strategy</option>
                                    <option value="2">Public Relations Project Execution</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <select class="form-control d-none" style="height:50px;" id="second_select">
                                    <option value="">Media Relations</option>
                                    <option value=""> Event Management</option>
                                    <option value=""> Crisis Management</option>
                                    <option value=""> Corporate Social Responsibility</option>
                                    <option value=""> Media Monitoring</option>
                                    <option value=""> Communication System Management</option>
                                    <option value=""> Copy writing</option>
                                    <option value=""> Social Media</option>
                                    <option value=""> Speech Writing</option>
                                    <option value=""> Presentation</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="page animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-size:20px; font-weight:600">Budget</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <input type="text" class="form-control rounded" style="height:50px;">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <small>
                                    Please provide your anticipated budget. Typically, SKPR Asia works on a retainer basis, which is billed monthly. Our firm will also assist in project work. Please note that with a budget, you are be able to equally compare one agency’s ideas, strategies and overall approach to another. If an agency is left to its own devices – told, “you tell us what we need to spend, and tell us how to spend it” – you’ll get as many different answers as you have candidate agencies.
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="page animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-size:20px; font-weight:600">Target Markets / Target Media Outlets</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <input type="text" class="form-control rounded" style="height:50px;">
                            </div>
                        </div>
                    </div>
                    <div class="page animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-size:20px; font-weight:600">Have you used any pr agency before? if Yes, What were the job scope? What was the result? How do you measure the result?</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <input type="text" class="form-control rounded" style="height:50px;">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <small>
                                    conventional PR , content press releases, product launching, media monitoring , media relations crisis management Define a way in order to introduce new products.

                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="page animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-size:20px; font-weight:600">What are your expectations hiring a public relations agency ?</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <input type="text" class="form-control rounded" style="height:50px;">
                            </div>
                        </div>
                    </div>
                    <div class="page animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-size:20px; font-weight:600">How will you measure success in terms of hiring a PR agency?</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <input type="text" class="form-control rounded" style="height:50px;">
                            </div>
                        </div>
                    </div>
                    <div class="page animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-size:20px; font-weight:600"> Please describe recent crisis and reputation hits your company has experienced.</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <input type="text" class="form-control rounded" style="height:50px;">
                            </div>
                        </div>
                    </div>
                    <div class="page animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-size:20px; font-weight:600"> How did you hear about our company?</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <input type="text" class="form-control rounded" style="height:50px;">
                            </div>
                        </div>
                    </div>
                    <div class="page animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-size:20px; font-weight:600">Any other info we should know related to the need of your business?</span>
                            </div>
                        </div>                        
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <input type="text" class="form-control rounded" style="height:50px;">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <small>
                                    What is your top concern: driving down costs, improving working processes or building/sustaining a vibrant business relationship? 
                                    Is there alignment between your business objectives and those of your communications stakeholders (our direct customer interface)?
                                </small>   
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12 d-flex justify-content-between align-items-center">
                            <button type="button" class="btn btn-md z-depth-0 text-muted rounded-0 text-capitalize m-0 p-0" id="prev">
                                <i class="fas fa-arrow-left mr-1"></i> Back
                            </button>
                            <button type="button" class="btn btn-md blue-gradient text-white rounded-pill text-capitalize z-depth-0" id="next">
                                Next <i class="fas fa-arrow-right ml-3"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#prev').on("click", function () {
        if($('.page.active').index() > 0)
            $(".page.active").removeClass("active").prev().addClass("active");
    });
    $("#next").on("click", function () {
        if($(".page.active").index() < $('.page').length-1)
            $(".page.active").removeClass('active').next().addClass("active")
    });
    $('#first_select').change(function () {
        if($(this).children('option:selected').val() === "2") {
            $('#second_select').removeClass('d-none');
        }
        else
        {
            $('#second_select').addClass('d-none');
        }
    })
</script>
@endsection