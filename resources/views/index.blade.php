@extends('layout.app')
@section('content')

<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" action="/action_page.php">
      <div class="container">
        <h1>Delete</h1>
        <p>Are you sure you want to delete this?</p>

        <div class="clearfix">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <button type="button" class="deletebtn">Delete</button>
        </div>
      </div>
    </form>
</div>

<div class="content">

    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <div class="row no-gutters">
                    <div class="col-5">
                        <div class="circle1"></div>
                    </div>
                    <div class="col-7">
                        <div class="dash-widget-info text-right">
                            <h3>75</h3>
                            <span class="widget-title1">Total Businesses </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <div class="row no-gutters">
                    <div class="col-5">
                        <div class="circle2"></div>
                    </div>
                    <div class="col-7">
                        <div class="dash-widget-info text-right">
                            <h3>125</h3>
                            <span class="widget-title2">Total Customers </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <div class="row no-gutters">
                    <div class="col-5">
                        <div class="circle3"></div>
                    </div>
                    <div class="col-7">
                        <div class="dash-widget-info text-right">
                            <h3>205</h3>
                            <span class="widget-title3">Total Bookings </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <div class="row no-gutters">
                    <div class="col-5">
                        <div class="circle4"></div>
                    </div>
                    <div class="col-7">
                        <div class="dash-widget-info text-right">
                            <h3>$ 6000</h3>
                            <span class="widget-title4">Total Revenue </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">REVENUE</h4>
                </div>
                <div class="card-body">
                    <div id="apexcharts-revenue">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-inline-block">Customers and Businesses</h4>
                </div>
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-inline-block">Businesses</h4> <a href="{{ url('all-businesses') }}" class="btn btn-primary float-right">View all</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th>Business Name</th>
                                    <th>Serivecs</th>
                                    <th>Address</th>
                                    <th>Phone No.</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Denise</td>
                                    <td>Booking, Accomodations</td>
                                    <td>Islamabad</td>
                                    <td>987654321 </td>
                                    <td><span class="custom-badge status-blue">Active</span></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('edit-business') }}"><i class="fa fa-pencil-alt m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-ban m-r-5"></i> Block</a>
                                                <a class="dropdown-item" href="#" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Denise</td>
                                    <td>Booking, Accomodations, Organized Trips</td>
                                    <td>Lahore</td>
                                    <td>987654321 </td>
                                    <td><span class="custom-badge status-blue">Active</span></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('edit-business') }}"><i class="fa fa-pencil-alt m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-ban m-r-5"></i> Block</a>
                                                <a class="dropdown-item" href="#" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Denise</td>
                                    <td>Booking, Organized Trips</td>
                                    <td>Karachi</td>
                                    <td>987654321 </td>
                                    <td><span class="custom-badge status-red">Inactive</span></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('edit-business') }}"><i class="fa fa-pencil-alt m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-ban m-r-5"></i> Block</a>
                                                <a class="dropdown-item" href="#" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Denise</td>
                                    <td>Booking</td>
                                    <td>Multan</td>
                                    <td>987654321 </td>
                                    <td><span class="custom-badge status-blue">Active</span></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ url('edit-business') }}"><i class="fa fa-pencil-alt m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-ban m-r-5"></i> Block</a>
                                                <a class="dropdown-item" href="#" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-inline-block">Customers </h4> <a href="{{ url('all-customers') }}" class="btn btn-primary float-right">View all</a>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th style="width:20%;">Name</th>
                                    <th>Address</th>
                                    <th style="width:20%;">Email</th>
                                    <th>Phone No.</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Denise</td>
                                    <td>Lahore</td>
                                    <td><a href="#" class="__cf_email__">[email&#160;protected]</a> </td>
                                    <td>987654321 </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fas fa-ban m-r-5"></i> Block</a>
                                                <a class="dropdown-item" href="#" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> Denise</td>
                                    <td>Lahore</td>
                                    <td><a href="#" class="__cf_email__">[email&#160;protected]</a> </td>
                                    <td>987654321 </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fas fa-ban m-r-5"></i> Block</a>
                                                <a class="dropdown-item" href="#" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
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
@endsection
