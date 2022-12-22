@extends('layout.app')
@section('content')
<div class="content">
    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="/action_page.php">
          <div class="container">
            <h1>Delete Customer</h1>
            <p>Are you sure you want to delete your customer?</p>

            <div class="clearfix">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <button type="button" class="deletebtn">Delete</button>
            </div>
          </div>
        </form>
    </div>
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">Customers</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
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
                                        <a class="dropdown-item" href="{{ url('customer-detail') }}"><i class="fas fa-file m-r-5"></i> View Details</a>
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
                                        <a class="dropdown-item" href="{{ url('customer-detail') }}"><i class="fas fa-file m-r-5"></i> View Details</a>   
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

@endsection
