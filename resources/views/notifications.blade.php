@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Notifications</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="activity">
                <div class="activity-box">
                    <ul class="activity-list">
                        <li>
                            <div class="activity-user">
                                <a href="#" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
                                    <img alt="Lesley Grauer" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                </a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="#" class="name">Grogery Grauer</a> add new business <a href="{{url('notification-detail')}}">New Business Request</a>
                                    <span class="time">1 mins ago</span>
                                </div>
                            </div>
                            <a class="activity-delete" href="#" title="Delete">&times;</a>
                        </li>

                        <li>
                            <div class="activity-user">
                                <a href="#" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
                                    <img alt="Lesley Grauer" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                </a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="#" class="name">Robert Mary </a> add new business <a href="{{url('notification-detail')}}">New Business Request</a>
                                    <span class="time">4 mins ago</span>
                                </div>
                            </div>
                            <a class="activity-delete" href="#" title="Delete">&times;</a>
                        </li>

                        <li>
                            <div class="activity-user">
                                <a href="#" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
                                    <img alt="Lesley Grauer" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                </a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="#" class="name">Lesley Grauer</a> added new work <a href="#">For Staff</a>
                                    <span class="time">4 mins ago</span>
                                </div>
                            </div>
                            <a class="activity-delete" href="#" title="Delete">&times;</a>
                        </li>
                        <li>
                            <div class="activity-user">
                                <a href="#" class="avatar" title="Jeffery Lalor" data-toggle="tooltip">L</a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="#" class="name">Jeffery Lalor</a> added <a href="#" class="name">Loren Gatlin</a> and <a href="#" class="name">Tarah Shropshire</a> to Double <a href="#">Room booking</a>
                                    <span class="time">6 mins ago</span>
                                </div>
                            </div>
                            <a class="activity-delete" href="#" title="Delete">&times;</a>
                        </li>
                        <li>
                            <div class="activity-user">
                                <a href="#" title="Catherine Manseau" data-toggle="tooltip" class="avatar">
                                    <img alt="Catherine Manseau" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                </a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="#" class="name">Catherine Manseau</a> completed <a href="#">Room booking with payment gateway</a>
                                    <span class="time">12 mins ago</span>
                                </div>
                            </div>
                            <a class="activity-delete" href="#" title="Delete">&times;</a>
                        </li>
                        <li>
                            <div class="activity-user">
                                <a href="#" title="Bernardo Galaviz" data-toggle="tooltip" class="avatar">
                                    <img alt="Bernardo Galaviz" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                </a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="#" class="name">Bernardo Galaviz</a> changed the Room<a href="#">For available </a>
                                    <span class="time">1 day ago</span>
                                </div>
                            </div>
                            <a class="activity-delete" href="#" title="Delete">&times;</a>
                        </li>
                        <li>
                            <div class="activity-user">
                                <a href="#" title="Mike Litorus" data-toggle="tooltip" class="avatar">
                                    <img alt="Mike Litorus" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                </a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="#" class="name">Mike Litorus</a> booking new room for <a href="#"> video conferencing</a>
                                    <span class="time">2 days ago</span>
                                </div>
                            </div>
                            <a class="activity-delete" href="#" title="Delete">&times;</a>
                        </li>
                        <li>
                            <div class="activity-user">
                                <a href="#" title="Jeffery Lalor" data-toggle="tooltip" class="avatar">
                                    <img alt="Jeffery Lalor" src="assets/img/user.jpg" class="img-fluid rounded-circle">
                                </a>
                            </div>
                            <div class="activity-content">
                                <div class="timeline-content">
                                    <a href="#" class="name">Jeffery Lalor</a> added <a href="#" class="name">Jeffrey Warden</a> and <a href="#" class="name">Bernardo Galaviz</a> to the villa <a href="#">Private </a>
                                    <span class="time">7 days ago</span>
                                </div>
                            </div>
                            <a class="activity-delete" href="#" title="Delete">&times;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


