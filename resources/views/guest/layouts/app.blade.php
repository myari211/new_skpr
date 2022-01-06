<html>
    <head>
        @include('master.css')
        <style type="text/css">
             #header {
                -webkit-transition: all 0.5s ease;
                -moz-transition: all 0.5s ease;
                -o-transition: all 0.5s ease;
                transition: all 0.5s ease;
            }

            .menu-active{
                border-bottom:2px solid #4285F4;
            }
            
            .menu-active > .nav-link{
                font-weight:500;
                color:#4175f4 !important;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light pt-4 pb-4 z-depth-0 fixed-top z-depth-0" id="header">
            <div class="container d-flex justify-content-between">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('image/logo.png') }}" style="width:100px;">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item mr-4 home">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#">About SKPR</a>
                    </li>
                    <li class="nav-item mr-4 services">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item work mr-4">
                        <a class="nav-link" href="{{ route('our_work') }}">Our Work</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-md rounded-pill blue-gradient m-0 text-capitalize z-depth-0" style="border:1px solid #fff;" onclick="location.href='/self_assesment';">
                            Request Proposal
                            <i class="fas fa-arrow-right ml-3 animated fadeInLeft infinite slow"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
        @include('master.footer')
        @include('master.js')
        <script type="text/javascript">
            var pathname = window.location.pathname;

            if(pathname == '/') {
                $('.home').addClass('menu-active');
            }
            else if(pathname == "/services")
            {
                $('.services').addClass('menu-active')
            }
            else if(pathname == "/work")
            {
                $('.work').addClass('menu-active');
            }



            $(window).on('scroll', function () {
                if($(window).scrollTop() > 100) {
                    $('#header').addClass('white');
                    $('#header').removeClass('p-4');
                    $('#header').addClass('pr-4 pl-4 pt-2 pb-2')
                    $('#header_mobile').addClass('white');
                }
                else
                {
                    $('#header').removeClass('white');
                    $('#header').removeClass('pr-4 pl-4 pt-2 pb-2');
                    $('#header').addClass('p-4');
                    $('#header_mobile').removeClass('white');
                }
            });
        </script>
    </body>
</html>
