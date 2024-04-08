<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/studio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 05:28:53 GMT -->

<head>
    <meta charset="utf-8">
    <title>HRM | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content>
    <meta name="author" content>

    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        .heading {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body>

    <div id="app" class="app">

        <div id="header" class="app-header">

            <div class="mobile-toggler">
                <button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>


            <div class="brand">
                <div class="desktop-toggler">

                </div>
                <a href="{{ route('dashboard') }}" class="brand-logo">
                    <h1 class="heading">H R M S</h1>
                </a>
            </div>


            <div class="menu">
                <form class="menu-search" method="POST" name="header_search_form">
                    <div class="menu-search-icon"></div>

                    @include('admin.Successmsg')

                </form>

                <div class="menu-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-bell nav-icon"></i></div>
                        <div class="menu-label">4</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-notification">
                        <h6 class="dropdown-header text-body-emphasis mb-1">Notifications</h6>
                        <a href="#" class="dropdown-notification-item">
                            <div class="dropdown-notification-icon">
                                <i class="fa fa-receipt fa-lg fa-fw text-success"></i>
                            </div>
                            <div class="dropdown-notification-info">
                                <div class="title">Your store has a new order for 2 items totaling $1,299.00</div>
                                <div class="time">just now</div>
                            </div>
                            <div class="dropdown-notification-arrow">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </a>
                        <a href="#" class="dropdown-notification-item">
                            <div class="dropdown-notification-icon">
                                <i class="far fa-user-circle fa-lg fa-fw text-muted"></i>
                            </div>
                            <div class="dropdown-notification-info">
                                <div class="title">3 new customer account is created</div>
                                <div class="time">2 minutes ago</div>
                            </div>
                            <div class="dropdown-notification-arrow">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </a>
                        <a href="#" class="dropdown-notification-item">
                            <div class="dropdown-notification-icon">
                                <img src="{{ asset('assets/img/icon/android.svg') }}" alt width="26">
                            </div>
                            <div class="dropdown-notification-info">
                                <div class="title">Your android application has been approved</div>
                                <div class="time">5 minutes ago</div>
                            </div>
                            <div class="dropdown-notification-arrow">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </a>
                        <a href="#" class="dropdown-notification-item">
                            <div class="dropdown-notification-icon">
                                <img src="{{ asset('assets/img/icon/paypal.svg') }}" alt width="26">
                            </div>
                            <div class="dropdown-notification-info">
                                <div class="title">Paypal payment method has been enabled for your store</div>
                                <div class="time">10 minutes ago</div>
                            </div>
                            <div class="dropdown-notification-arrow">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </a>
                        <div class="p-2 text-center mb-n1">
                            <a href="#" class="text-body-emphasis text-opacity-50 text-decoration-none">See
                                all</a>
                        </div>
                    </div>
                </div>
                <div class="menu-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
                        <div class="menu-img online">
                            <img src="{{ asset('assets/img/user/user.jpg') }}" alt class="ms-100 mh-100 rounded-circle">
                        </div>
                        <div class="menu-text"><span class="__cf_email__"
                                data-cfemail="355f5a5d5b46585c415d75464140515c5a1b565a58"></span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-3">
                        <a class="dropdown-item d-flex align-items-center" href="profile.html">Edit Profile <i
                                class="fa fa-user-circle fa-fw ms-auto text-body text-opacity-50"></i></a>
                        <a class="dropdown-item d-flex align-items-center" href="email_inbox.html">Inbox <i
                                class="fa fa-envelope fa-fw ms-auto text-body text-opacity-50"></i></a>
                        <a class="dropdown-item d-flex align-items-center" href="calendar.html">Calendar <i
                                class="fa fa-calendar-alt fa-fw ms-auto text-body text-opacity-50"></i></a>
                        <a class="dropdown-item d-flex align-items-center" href="settings.html">Setting <i
                                class="fa fa-wrench fa-fw ms-auto text-body text-opacity-50"></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center" href="page_login.html">Log Out <i
                                class="fa fa-toggle-off fa-fw ms-auto text-body text-opacity-50"></i></a>
                    </div>
                </div>
            </div>

        </div>


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
                        <a href="#" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-address-card-o"></i></span>
                            <span class="menu-text">Job Vacancy</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="#" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-calendar-check-o"></i></span>
                            <span class="menu-text">Leave Request</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="#" class="menu-link">
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
                Hi, Admin <small>here's what's happening with your system today.</small>
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
                                    <h5 class="text-white text-opacity-80 mb-3 fs-16px">Number of Employee</h5>
                                    <h3 class="text-white mt-n1">56</h3>
                                    <div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
                                        <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%">
                                        </div>
                                    </div>
                                    <div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-up"></i> 16%
                                        increase <br>compare to last week</div>
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
                                    <h5 class="text-white text-opacity-80 mb-3 fs-16px">Page Visitors</h5>
                                    <h3 class="text-white mt-n1">60.5k</h3>
                                    <div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
                                        <div class="progrss-bar progress-bar-striped bg-white" style="width: 50%">
                                        </div>
                                    </div>
                                    <div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-up"></i> 33%
                                        increase <br>compare to last week</div>
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
                                    <h5 class="text-white text-opacity-80 mb-3 fs-16px">Page Views</h5>
                                    <h3 class="text-white mt-n1">320.4k</h3>
                                    <div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
                                        <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%">
                                        </div>
                                    </div>
                                    <div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-up"></i> 20%
                                        increase <br>compare to last week</div>
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
                                    <h5 class="text-white text-opacity-80 mb-3 fs-16px">Unread email</h5>
                                    <h3 class="text-white mt-n1">30</h3>
                                    <div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
                                        <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%">
                                        </div>
                                    </div>
                                    <div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-down"></i> 5%
                                        decrease <br>compare to last week</div>
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
