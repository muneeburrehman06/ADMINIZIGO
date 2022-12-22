@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-sm-7 col-6">
            <h4 class="page-title">My Profile</h4>
        </div>
        <div class="col-sm-5 col-6 text-right m-b-30">
            <a href="{{ url('edit-profile') }}" class="btn btn-primary btn-rounded"><i class="fas fa-plus"></i> Edit Profile</a>
        </div>
    </div>
    <div class="card-box profile-header">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-view">
                    <div class="profile-img-wrap">
                        <div class="profile-img">
                            <a href="#"><img class="avatar" src="assets/img/doctor-03.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="profile-info-left">
                                    <h3 class="user-name m-t-0 mb-0">Cristina Groves</h3>

                                </div>
                            </div>
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <span class="title">Phone:</span>
                                        <span class="text"><a href="#">770-889-6484</a></span>
                                    </li>
                                    <li>
                                        <span class="title">Email:</span>
                                        <span class="text"><a href="#"><span class="__cf_email__" data-cfemail="f497869d87809d9a9593869b829187b4918c9599849891da979b99">[email&#160;protected]</span></a></span>
                                    </li>
                                    <li>
                                        <span class="title">Birthday:</span>
                                        <span class="text">3rd March</span>
                                    </li>
                                    <li>
                                        <span class="title">Address:</span>
                                        <span class="text">714 Burwell Heights Road, Bridge City, TX, 77611</span>
                                    </li>
                                    <li>
                                        <span class="title">Gender:</span>
                                        <span class="text">Female</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
