@extends('layout.app')
@section('content')
    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="/action_page.php">
        <div class="container">
            <h1>Delete Subscription</h1>
            <p>Are you sure you want to delete your subscription?</p>

            <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="button" class="deletebtn">Delete</button>
            </div>
        </div>
        </form>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Subscriptions</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table datatable mb-0">
                        <thead>
                            <tr>
                                <th>customer</th>
                                <th>Business</th>
                                <th>Paid Date</th>
                                <th>Paid Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h2><a href="#">Charles Ortega</a></h2>
                                </td>
                                <td>Business 1</td>
                                <td>8 Aug 2021</td>
                                <td>$400</td>
                                <td><span class="custom-badge status-red">Unpaid</span></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ url('edit-business') }}"><i class="fa fa-pencil-alt m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-check m-r-5"></i> Mark as Paid</a>
                                            <a class="dropdown-item" href="#" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2><a href="#">Denise Stevens</a></h2>
                                </td>
                                <td>Business 2</td>
                                <td>30 Aug 2021</td>
                                <td>$500</td>
                                <td><span class="custom-badge status-blue">Paid</span></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ url('edit-business') }}"><i class="fa fa-pencil-alt m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-times m-r-5"></i> Mark as Unpaid</a>
                                            <a class="dropdown-item" href="#" onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2><a href="#">Dennis Salazar</a></h2>
                                </td>
                                <td>Business 3</td>
                                <td>15 Sep 2021</td>
                                <td>$600</td>
                                <td><span class="custom-badge status-red">Unpaid</span></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ url('edit-business') }}"><i class="fa fa-pencil-alt m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-check m-r-5"></i> Mark as Paid</a>
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
