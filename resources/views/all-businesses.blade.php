@extends('layout.app')
@section('content')

<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" action="/action_page.php">
      <div class="container">
        <h1>Delete Business</h1>
        <p>Are you sure you want to delete your business?</p>

        <div class="clearfix">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <button type="button" class="deletebtn">Delete</button>
        </div>
      </div>
    </form>
</div>
<div class="content">

    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">All Businesses</h4>
        </div>
        <div class="col-sm-8 col-9 text-right m-b-20">
            <a href="{{ url('add-business') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fas fa-plus"></i> Add Business</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th>Business Name</th>
                            <th>Serivecs</th>
                            <th>Address</th>
                            <th>Phone No.</th>
                            <th>Availability</th>
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
                            <td>Available</td>
                            <td><span class="custom-badge status-blue">Active</span></td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('business-detail') }}"><i class="fa fa-file-alt m-r-5"></i> View Details</a>
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
                            <td>Unavailable</td>
                            <td><span class="custom-badge status-red">Inactive</span></td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('business-detail') }}"><i class="fa fa-file-alt m-r-5"></i> View Details</a>
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
                            <td>Available</td>
                            <td><span class="custom-badge status-red">Inactive</span></td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('business-detail') }}"><i class="fa fa-file-alt m-r-5"></i> View Details</a>
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
                            <td>Unavailable</td>
                            <td><span class="custom-badge status-red">Inactive</span></td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('business-detail') }}"><i class="fa fa-file-alt m-r-5"></i> View Details</a>
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

@endsection
