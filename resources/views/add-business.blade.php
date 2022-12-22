@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Add Business</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Business ID</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Name</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Email</label>
                            <input class="form-control" type="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Password</label>
                            <input class="form-control" type="password">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Phone Number</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Address</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" name="filename">
                    <label class="custom-file-label">Choose file (Photo)</label>
                </div>


                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
