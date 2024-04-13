<div id="header" class="app-header">

    <div class="mobile-toggler">
        <button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>


    <div class="brand">
        <div class="desktop-toggler">
            <button type="button" class="menu-toggler" data-toggle="sidebar-minify">
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
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
            <a href="#" data-bs-toggle="dropdown" data-display="static" class="dropdown">
                <div class="menu-img online">
                    <img src="{{ asset('assets/img/admin.webp') }}" alt class="ms-100 mh-100 rounded-circle">
                </div>
                <div class="menu-text"><span class="__cf_email__"
                        data-cfemail="355f5a5d5b46585c415d75464140515c5a1b565a58"></span>
                </div>
            </a>
            {{-- logout --}}
            @include('admin.logout')
            {{-- <div class="dropdown-content">
                <a class="dropdown-item d-flex align-items-center" href="profile.html">Edit Profile <i
                        class="fa fa-user-circle fa-fw ms-auto text-body text-opacity-50"></i></a>
            </div> --}}

        </div>

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




    </div>

</div>
