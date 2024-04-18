<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/studio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 05:28:53 GMT -->

<head>
    <meta charset="utf-8">
    <title>Admin | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content>
    <meta name="author" content>

    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".menu-toggler").click(function() {
                $(".app-sidebar").toggle('slow');
            });
        });
    </script>
    <style>
        .heading {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgb(242, 226, 226);
            color: rgb(232, 54, 22);
            min-width: 160px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>

    <div id="app" class="app">
        {{-- navbar content --}}
        @include('admin.nav')


        <div id="sidebar" class="app-sidebar">

            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

                <div class="menu">

                    <div class="menu-item active">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-dashboard"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('employee') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-users"></i></span>
                            <span class="menu-text">Employees</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('job') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-address-card-o"></i></span>
                            <span class="menu-text">Job Vacancy</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('leave_accept') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-calendar-check-o"></i></span>
                            <span class="menu-text">Leave Request</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('complaint_handle') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-bullhorn"></i></span>
                            <span class="menu-text">Complaints</span>
                        </a>
                    </div>

                </div>

            </div>


            <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>

        </div>


        <div id="content" class="app-content">


            <h1 class="page-header mb-3">
                Welcome, {{ $admin->name }} <small>to your admin dashboard.!</small>
            </h1>



            <div class="row">

                <div class="col-xl-12">

                    <div class="row">

                        <div class="col-sm-3">

                            <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-orange"
                                style="min-height: 199px;">

                                <div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
                                    <img src="{{ asset('assets/img/icon/order.svg') }}" alt
                                        class="ms-auto d-block mb-n3" style="max-height: 105px">
                                </div>
                                <div class="card-body position-relative">
                                    <h5 class="text-white text-opacity-80 mb-3 fs-16px">Number of Admin</h5>
                                    <h3 class="text-white mt-n1">{{ $admincount }}</h3>
                                    <div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
                                        <div class="progrss-bar progress-bar-striped bg-white" style="width: 50%">
                                        </div>
                                    </div>
                                    <div class="text-white text-opacity-80 mb-4"><i
                                            class="fa fa-caret-up"></i><br>casual and urgency</div>
                                    <div><a href="#"
                                            class="text-white d-flex align-items-center text-decoration-none">View
                                            report <i
                                                class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a>
                                    </div>
                                </div>



                            </div>

                        </div>

                        <div class="col-sm-3">

                            <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-teal"
                                style="min-height: 199px;">

                                <div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
                                    <img src="{{ asset('assets/img/icon/visitor.svg') }}" alt
                                        class="ms-auto d-block mb-n3" style="max-height: 105px">
                                </div>





                                <div class="card-body position-relative">
                                    <h5 class="text-white text-opacity-80 mb-3 fs-16px">Number of Employee</h5>
                                    <h3 class="text-white mt-n1">{{ $empcount }}</h3>
                                    <div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
                                        <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%">
                                        </div>
                                    </div>
                                    <div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-up"></i> <br>we
                                        were working together</div>
                                    <div><a href="#"
                                            class="text-white d-flex align-items-center text-decoration-none">View
                                            report <i
                                                class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-sm-3">

                            <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-indigo"
                                style="min-height: 199px;">

                                <div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
                                    <img src="{{ asset('assets/img/icon/browser.svg') }}" alt
                                        class="ms-auto d-block mb-n3" style="max-height: 105px">
                                </div>


                                <div class="card-body position-relative">
                                    <h5 class="text-white text-opacity-80 mb-3 fs-16px">Number of vacant position</h5>
                                    <h3 class="text-white mt-n1">{{ $job }}</h3>
                                    <div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
                                        <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%">
                                        </div>
                                    </div>
                                    <div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-up"></i>
                                        <br>let's acheive the career together
                                    </div>
                                    <div><a href="#"
                                            class="text-white d-flex align-items-center text-decoration-none">View
                                            report <i
                                                class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-sm-3">

                            <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-pink"
                                style="min-height: 199px;">

                                <div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
                                    <img src="{{ asset('assets/img/icon/email.svg') }}" alt
                                        class="ms-auto d-block mb-n3" style="max-height: 105px">
                                </div>


                                <div class="card-body position-relative">
                                    <h5 class="text-white text-opacity-80 mb-3 fs-16px">Leave Request</h5>
                                    <h3 class="text-white mt-n1">{{ $leavecount }}</h3>
                                    <div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
                                        <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%">
                                        </div>
                                    </div>
                                    <div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-down"></i>
                                        <br>compare to last week
                                    </div>
                                    <div><a href="#"
                                            class="text-white d-flex align-items-center text-decoration-none">View
                                            report <i
                                                class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



        </div>


        <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

    </div>


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('assets/js/vendor.min.js')}}" type="fc5e4ccb8f4049623d6b5dfb-text/javascript"></script>
    <script src="{{asset('assets/js/app.min.js')}}" type="fc5e4ccb8f4049623d6b5dfb-text/javascript"></script>


    <script src="{{asset('assets/plugins/apexcharts/dist/apexcharts.min.js')}}"
        type="fc5e4ccb8f4049623d6b5dfb-text/javascript"></script>
    <script src="{{asset('assets/js/demo/dashboard.demo.js')}}" type="fc5e4ccb8f4049623d6b5dfb-text/javascript"></script>


    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3"
        type="fc5e4ccb8f4049623d6b5dfb-text/javascript"></script>
    <script type="fc5e4ccb8f4049623d6b5dfb-text/javascript">
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-Y3Q0VGQKY3');
	</script>
    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="fc5e4ccb8f4049623d6b5dfb-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"86eee739c90872c9","version":"2024.3.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","b":1}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from seantheme.com/studio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 05:29:15 GMT -->

</html>
