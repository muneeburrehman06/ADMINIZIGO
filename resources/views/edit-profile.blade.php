@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Edit Profile</h4>
        </div>
    </div>
    <form>
        <div class="card-box">
            <h3 class="card-title">Basic Informations</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-img-wrap">
                        <img class="inline-block" src="assets/img/user.jpg" alt="user">
                        <div class="fileupload btn">
                            <span class="btn-text">edit</span>
                            <input class="upload" type="file">
                        </div>
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name </label>
                                    <input class="form-control" type="text" value="John">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name </label>
                                    <input class="form-control" type="text" value="Doe">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" value="izigo@hotel.com">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-box">
            <h3 class="card-title">Contact Informations</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" value="4487 Snowbird Lane">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>State</label>
                        <input type="text" class="form-control" value="New York">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" value="United States">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pin Code</label>
                        <input type="text" class="form-control" value="10523">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" value="631-889-3206">
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center m-t-20">
            <button class="btn btn-primary submit-btn" type="button">Save</button>
        </div>
    </form>
</div>
@endsection
