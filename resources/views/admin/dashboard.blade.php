@extends('layouts.adminTemplate')
@section('page-title','Dashboard')
@section('content')
<div class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="card-content">
                            <p class="category">NUMBER OF INVESTOR</p>
                            <h3 class="card-title">7</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="card-content">
                            <p class="category">TOTAL INVESTER</p>
                            <h3 class="card-title">7</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">local_grocery_store</i>
                        </div>
                        <div class="card-content">
                            <p class="category">TRANSACTION</p>
                            <h3 class="card-title">7</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                            </div>
                        </div>
                    </div>
                </div>     

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="card-content">
                            <p class="category">PENDING VERIFICATION</p>
                            <h3 class="card-title">7</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>      
    @endsection