<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/studio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 05:28:53 GMT -->

<head>
    <meta charset="utf-8">
    <title>Admin | Complaint Request</title>
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
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
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

        /* Logout button */
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

                    <div class="menu-item ">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-dashboard"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </div>
                    <div class="menu-item ">
                        <a href="{{ route('employee') }}" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-users"></i></span>
                            <span class="menu-text">Employees</span>
                        </a>
                    </div>
                    <div class="menu-item ">
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
                    <div class="menu-item active">
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
                Handle Complaints <small>Let's open up</small>
            </h1>
            <br>


            {{-- <hr> --}}

            <div class="row">

                <div class="col-xl-12">

                    <div class="row">
                        <div class="col-sm-3">



                        </div>

                        <div class="col-sm-3">



                        </div>



                    </div>

                </div>

            </div>
            <br>

            <hr>

            <br>
            <table class="table table-striped text-center table-bordered">
                <thead>

                    <tr>
                        <th scope="col">Employee Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Complaint Title</th>
                        <th scope="col">Complaint Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($complaints as $complaint)
                        <tr>
                            <th scope="row">{{ $complaint->employee_id }}</th>
                            <td>{{ $complaint->name }}</td>
                            <td>{{ $complaint->complaint_title }}</td>
                            <td>{{ $complaint->complaint_description }}</td>

                            @if ($complaint->status == 'pending')
                                <td><img src="{{ asset('assets/img/pending.png') }}" alt="" width="50px">
                                </td>
                            @elseif($complaint->status == 'solved')
                                <td><img src="{{ asset('assets/img/solve.webp') }}" alt="" width="50px">
                                </td>
                            @else
                                <td><img src="{{ asset('assets/img/reject.png') }}" alt="" width="50px"></td>
                            @endif

                            <td>
                                @if ($complaint->status == 'solved')
                                    <a href="{{ url('complaint_reject', $complaint->id) }}"
                                        class="btn btn-danger">Reject</a>
                                @elseif ($complaint->status == 'reject')
                                    <a href="{{ url('complaint_solve', $complaint->id) }}"
                                        class="btn btn-info">Solve</a>
                                @else
                                    <a href="{{ url('complaint_solve', $complaint->id) }}"
                                        class="btn btn-info">Solve</a>
                                    <a href="{{ url('complaint_reject', $complaint->id) }}"
                                        class="btn btn-danger">Reject</a>
                                @endif


                            </td>

                            {{--
                            @if ($emp->status == 'pending')
                                <td><img src="{{ asset('assets/img/pending.png') }}" alt="" width="50px">
                                </td>
                            @elseif($emp->status == 'approved')
                                <td><img src="{{ asset('assets/img/approve.png') }}" alt="" width="50px">
                                </td>
                            @else
                                <td><img src="{{ asset('assets/img/reject.png') }}" alt="" width="50px"></td>
                            @endif
                            <td>
                                @if ($emp->status == 'approved')
                                    <a href="{{ url('reject_leave', $emp->id) }}" class="btn btn-danger">Reject</a>
                                @elseif ($emp->status == 'rejected')
                                    <a href="{{ url('approve_leave', $emp->id) }}" class="btn btn-success">Approve</a>
                                @else
                                    <a href="{{ url('approve_leave', $emp->id) }}" class="btn btn-success">Approve</a>
                                    <a href="{{ url('reject_leave', $emp->id) }}" class="btn btn-danger">Reject</a>
                                @endif


                            </td> --}}

                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div>
                {{ $complaints->links() }}
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
