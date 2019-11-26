@extends('layouts.adminTemplate')
@section('page-title','Search Investor')
@section('content')
<style type="text/css">
    .bootstrap-tagsinput input{
        border-bottom: 1px solid #dbdbdb;
        width: 1122px;
    }
</style>
<div class="content">
    @include('layouts.error-sucess-messages') 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">find</i>

                    </div>
                    
                    <div class="card-content">
                        <div class="pull-right">
                        <a href="{{ url('admin/dashboard') }}" class="btn btn-next btn-fill btn-rose btn-wd">Back</a>
                    </div>
                        <h4 class="card-title">Search Investor</h4>
                        <br>
                        {{ Form::open(array('url' => '' ,'method' => 'post')) }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" name="Search by Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email</label>
                                        <input type="text" class="form-control" name="Search by email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Phone Number</label>
                                        <input type="text" class="form-control" name="Seach by phone number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Zipcode</label>
                                        <input type="text" class="form-control" name="Search by zipcode">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Account Number</label>
                                        <input type="text" class="form-control" name="Search by account number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <button type="submit" class="btn btn-rose pull-right">Search Investor</button>
                            </div>
                            
                        {{ Form::close() }}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
