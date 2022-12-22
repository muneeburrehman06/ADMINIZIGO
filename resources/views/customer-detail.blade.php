@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Customer Detail</h4>
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
                                    <label>Name </label>
                                    <input class="form-control bg-white" type="text" value="John Doe" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> 
                                    <label>Email</label>
                                    <input class="form-control bg-white" type="email" value="izigo@hotel.com" disabled>
                                </div> <br>
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
                        <input type="text" class="form-control bg-white" value="4487 Snowbird Lane" disabled>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control bg-white" value="United States" disabled>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control bg-white" value="631-889-3206" disabled>
                    </div>
                </div>
            </div>
        </div> 
        <div class="card-box">
            <h3 class="card-title">Booking Informations</h3>
            <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card"> 
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th style="width:20%;">Hotel Name</th>
                                    <th>Date From</th>
                                    <th style="width:20%;">Date To</th>
                                    <th>No of Bookings</th>
                                    <th class="text-right">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Domestic Help Services</td>
                                    <td>25-11-21</td>
                                    <td>27-11-21</td>
                                    <td>2</td>
                                    <td class="text-right">
                                        Booked
                                    </td>
                                </tr> 
                                <tr>
                                    <td>Domestic Help Services</td>
                                    <td>15-04-21</td>
                                    <td>18-04-21</td>
                                    <td>1</td>
                                    <td class="text-right">
                                        Used
                                    </td>
                                </tr> 
                                <tr>
                                    <td>Domestic Help Services</td>
                                    <td>10-12-21</td>
                                    <td>12-12-21</td>
                                    <td>2</td>
                                    <td class="text-right">
                                        Pending
                                    </td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div> 
    </form>
</div>
@endsection
