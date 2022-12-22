@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Business Detail</h4>
        </div>
    </div>
    <form>
        <div class="card-box">
            <h3 class="card-title">Basic Informations</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-img-wrap">  
                            <img src="assets/img/user.jpg" alt="Customer Profile">
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Business Name </label>
                                    <input class="form-control bg-white" type="text" value="Hotel & Resturant" readonly="">
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Description </label>
                                    <input class="form-control bg-white" type="text" value="Hotel & Resturant" readonly="">
                                </div>
                            </div> 
                            <br>&nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-box">
            <h3 class="card-title">Contact Informations</h3>
            <div class="row">
            <div class="col-md-6">
                    <div class="form-group"> 
                        <label>Email Address</label>
                        <input class="form-control bg-white" type="email" value="izigo@hotel.com" readonly="">
                    </div> <br>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control bg-white" value="631-889-3206" readonly="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control bg-white" value="United States" readonly="">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Region</label>
                        <input type="text" class="form-control bg-white" value="Europe" readonly="">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control bg-white" value="New Yark" readonly="">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control bg-white" value="4487 Snowbird Lane" readonly="">
                    </div>
                </div>  
            </div>
        </div>  
        <div class="card-box">
            <h3 class="card-title">Rooms Informations</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Number of Rooms</label>
                        <input type="text" class="form-control bg-white" value="55" readonly="">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
