<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"></li>

                <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                    <a href="{{ url('/') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                </li>

                <li class="{{ (request()->is('all-businesses')) ? 'active' : '' }}">
                    <a href="{{ url('all-businesses') }}"><i class="fas fa-business-time"></i> <span>All Businesses</span></a>
                </li>

                <li class="{{ (request()->is('all-customers')) ? 'active' : '' }}">
                    <a href="{{ url('all-customers') }}"><i class="fas fa-users"></i> <span>All Customers</span></a>
                </li>

                <li class="{{ (request()->is('subscriptions')) ? 'active' : '' }}">
                    <a href="{{ url('subscriptions') }}"><i class="fa fa-dollar-sign"></i> <span>Subscriptions</span></a>
                </li>
                
                <li class="{{ (request()->is('notifications')) ? 'active' : '' }}">
                    <a href="{{ url('notifications') }}"><i class="fas fa-bell"></i> <span>Notifications</span></a>
                </li>

                <li class="{{ (request()->is('chat')) ? 'active' : '' }}">
                    <a href="{{ url('chat') }}"><i class="fas fa-paper-plane"></i> <span>Chat</span></a>
                </li>

                <li class="{{ (request()->is('send-mail')) ? 'active' : '' }}">
                    <a href="{{ url('send-mail') }}"><i class="fas fa-envelope"></i> <span>Send Email</span></a>
                </li>

                <li class="{{ (request()->is('edit-profile')) ? 'active' : '' }}">
                    <a href="{{ url('edit-profile') }}"><i class="fas fa-user"></i> <span>Profile Settings</span></a>
                </li>

                <li class="{{ (request()->is('change-password')) ? 'active' : '' }}">
                    <a href="{{ url('change-password') }}"><i class="fas fa-cog"></i> <span>Change Password</span></a>
                </li>

            </ul>
        </div>
    </div>
</div>
