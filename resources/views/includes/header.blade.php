<div class="header">
    <div class="header-left">
        <a href="{{ url('/') }}" class="logo">
            <span>IZIGO</span>
        </a>
    </div>
    <div class="menubar">
        <a id="toggle_btn" href="javascript:void(0);"><i class="fas fa-bars"></i></a>
    </div>
    <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars"></i></a>
    <ul class="nav user-menu float-right">
        <li class="nav-item dropdown d-none d-sm-block">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="far fa-bell"></i> <span class="badge badge-pill bg-primary float-right">3</span></a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span>Notifications</span>
                </div>
                <div class="drop-scroll">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="#">
                                <div class="media">
                                    <span class="avatar">
                                        <img alt="John Doe" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">John Doe</span> booking a new room<span class="noti-title"></span></p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media">
                                    <span class="avatar">V</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> check-in <span class="noti-title"> with payment gateway</span></p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media">
                                    <span class="avatar">L</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Misty Tison</span> check-out <span class="noti-title">Today</span> </p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media">
                                    <span class="avatar">G</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Rolland Webber</span> Extended another <span class="noti-title">two days</span></p>
                                        <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media">
                                    <span class="avatar">V</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new booking <span class="noti-title">for couple of days</span></p>
                                        <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="{{ url('notifications') }}">View all Notifications</a>
                </div>
            </div>
        </li>

        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
                <span class="status online"></span></span>
                <span>Admin</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('edit-profile') }}">Profile Settings</a>
                <a class="dropdown-item" href="{{ url('change-password') }}">Change Password</a>
                <a class="dropdown-item" href="{{ url('login') }}">Logout</a>
            </div>
        </li>
    </ul>
    <div class="dropdown mobile-user-menu float-right">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ url('profile') }}">My Profile</a>
                <a class="dropdown-item" href="{{ url('change-password') }}">Change Password</a>
                <a class="dropdown-item" href="{{ url('login') }}">Logout</a>
        </div>
    </div>
</div>
