@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Send Mail Notification</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <form>  
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Subject</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Send To</label>
                            <select class="form-control">
                                <option value="Business">Business</option>
                                <option value="Customer">Customer</option>
                                <option value="Both">Both</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Message</label>
                            <textarea class="form-control" rows="5" placeholder="Enter Message here..."></textarea>
                        </div>
                    </div>
                </div> 

                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn">Send Email</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
