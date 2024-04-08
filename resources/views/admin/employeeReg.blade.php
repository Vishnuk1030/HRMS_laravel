<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/studio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 05:28:53 GMT -->

<head>
    <meta charset="utf-8">
    <title>Employee Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content>
    <meta name="author" content>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        .validate {
            color: red;
        }

        .heading {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        /* pop up employee signup page */

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        /* Button used to open the contact form - fixed at the bottom of the page */
        .open-button {
            /* background-color: #555; */
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            /* position: fixed; */
            bottom: 23px;
            right: 28px;
            /* width: 280px; */
        }

        /* The popup form - hidden by default */
        .form-popup {
            display: none;
            /* position: fixed; */
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }

        /* Full-width input fields */
        .form-container input[type=text],
        .form-container input[type=email],
        .form-container input[type=number],
        .form-container input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus,
        .form-container input[type=email]:focus,
        .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/login button */
        .form-container .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
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

                    <div class="menu-item ">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-dashboard"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </div>
                    <div class="menu-item active">
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


            {{-- <h1 class="page-header mb-3">
                Employee <small>here's what's happening with your system today.</small>
            </h1>
            <hr> --}}
            <div class="row">
                <div class="col-xl-12">
                    <section class="vh-100" style="background-color: #eee;">
                        <div class="container h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-lg-12 col-xl-11">
                                    <div class="card text-black" style="border-radius: 25px;">
                                        <div class="card-body p-md-5">
                                            <div class="row justify-content-center">
                                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">
                                                        Sign up New Employee</p>

                                                    <form class="mx-1 mx-md-4" action="{{ route('emp_signup') }}"
                                                        method="post">
                                                        @csrf

                                                        <div class="d-flex flex-row align-items-center mb-4">
                                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <label class="form-label"
                                                                    for="form3Example1c">Employee ID</label>
                                                                <input type="text" name="employeeid"
                                                                    id="form3Example1c" class="form-control" />
                                                                @error('employeeid')
                                                                    <span class="validate">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="d-flex flex-row align-items-center mb-4">
                                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <label class="form-label"
                                                                    for="form3Example3c">Name</label>
                                                                <input type="text" name="name"
                                                                    id="form3Example3c" class="form-control" />
                                                                @error('name')
                                                                    <span class="validate">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <div class="d-flex flex-row align-items-center mb-4">
                                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <label class="form-label"
                                                                    for="form3Example3c">Email</label>
                                                                <input type="email" name="email"
                                                                    id="form3Example3c" class="form-control" />
                                                                @error('email')
                                                                    <span class="validate">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="d-flex flex-row align-items-center mb-4">
                                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <label class="form-label"
                                                                    for="form3Example3c">Place</label>
                                                                <input type="text" name="place"
                                                                    id="form3Example3c" class="form-control" />
                                                                @error('place')
                                                                    <span class="validate">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <div class="d-flex flex-row align-items-center mb-4">
                                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <label class="form-label"
                                                                    for="form3Example4cd">Gender</label><br>
                                                                <input type="radio" id="form3Example4cd"
                                                                    name="gender" value="male" />Male
                                                                <input type="radio" id="form3Example4cd"
                                                                    name="gender" value="female" />Female
                                                                <br>
                                                                @error('gender')
                                                                    <span class="validate">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center mb-4">
                                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <label class="form-label"
                                                                    for="form3Example4c">Designation</label>
                                                                <input type="text" name="designation"
                                                                    id="form3Example4c" class="form-control" />
                                                                @error('designation')
                                                                    <span class="validate">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center mb-4">
                                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <label class="form-label"
                                                                    for="form3Example4c">position</label>
                                                                <input type="text" name="position"
                                                                    id="form3Example4c" class="form-control" />
                                                                @error('position')
                                                                    <span class="validate">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center mb-4">
                                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <label class="form-label"
                                                                    for="form3Example4c">Salary</label>
                                                                <input type="number" name="salary"
                                                                    id="form3Example4c" class="form-control" />
                                                                @error('salary')
                                                                    <span class="validate">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="d-flex flex-row align-items-center mb-4">
                                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <label class="form-label"
                                                                    for="form3Example3c">Password</label>
                                                                <input type="password" name="password"
                                                                    id="form3Example3c" class="form-control" />
                                                                @error('password')
                                                                    <span class="validate">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="d-flex flex-row align-items-center mb-4">
                                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <label class="form-label" for="form3Example3c">Confirm
                                                                    Password</label>
                                                                <input type="password" name="confirmpassword"
                                                                    id="form3Example3c" class="form-control" />
                                                                @error('confirmpassword')
                                                                    <span class="validate">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                            <button type="submit" class="btn btn-primary btn-lg">Sign
                                                                Up</button>

                                                        </div>
                                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                            <a href="{{ route('employee') }}"
                                                                class="btn btn-danger btn-lg">Back</a>
                                                            {{-- <button type="submit"
                                                                class="btn btn-danger btn-lg">Back</button> --}}

                                                        </div>


                                                    </form>

                                                </div>
                                                <div
                                                    class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                                    <img src="{{ asset('assets/img/HRMS.png') }}"
                                                        class="img-fluid rounded-3" alt="Sample image">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <br>
        </div>




        <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>




    </div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

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
