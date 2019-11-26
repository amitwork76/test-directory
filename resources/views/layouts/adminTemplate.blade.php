<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/adminassets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('public/adminassets/img/favicon.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('page-title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('public/adminassets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('public/adminassets/css/material-dashboard.css?v=1.2.0') }}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('public/adminassets/css/demo.css') }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
        div.dataTables_wrapper div.dataTables_filter input {
            width: 258px;
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
        } 
        
    </style>
    <script type="text/javascript">
        var site_url = "{{url('/')}}";
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="rose" data-background-color="black">           
            <div class="logo">
                <a href="{{ url('/') }}" class="simple-text logo-mini">
                    TD
                </a>
                <a href="{{ url('/') }}" class="simple-text logo-normal">
                    TEST DEMO
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="{{ asset('public/adminassets/img/faces/avatar.jpg') }}" alt="Image">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                                Admin
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="clearfix"></div>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                               
                                <li>
                                    <a href="{{url('admin/update-profile')}}">Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="@if(Request::segment(2) == 'dashboard') active @endif">
                        <a href="{{ url('admin/dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="@if(Request::segment(2) == 'investors' || Request::segment(2) == 'search-investors') active @endif">
                        <a data-toggle="collapse" href="#pagesUser" @if(Request::segment(1) == 'investors') class="collapse" aria-expanded="true" @endif>
                            <i class="material-icons">group</i>
                            <p>Manage Investor
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse  @if(Request::segment(2) == 'investors' || Request::segment(2) == 'search-investors') in @endif" id="pagesUser">
                            <ul class="nav">
                                <li class="@if(Request::segment(2) == 'investors') active @endif">
                                    <a href="{{ url('admin/investors') }}">
                                        <span class="sidebar-mini">I</span>
                                        <span class="sidebar-normal">Investor</span>
                                    </a>
                                </li>

                                <li class="@if(Request::segment(2) == 'search-investors') active @endif">
                                    <a href="{{ url('admin/search-investors') }}">
                                        <span class="sidebar-mini">SI</span>
                                        <span class="sidebar-normal">Search Investor</span>
                                    </a>
                                </li>                                
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </nav>
            @yield('content')      
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('public/adminassets/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/adminassets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/adminassets/js/material.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/adminassets/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('public/adminassets/js/arrive.min.js') }}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('public/adminassets/js/jquery.validate.min.js') }}"></script>
<!-- Promise Library for SweetAlert2 working on IE -->
<script src="{{ asset('public/adminassets/js/es6-promise-auto.min.js') }}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('public/adminassets/js/moment.min.js') }}"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="{{ asset('public/adminassets/js/chartist.min.js') }}"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('public/adminassets/js/jquery.bootstrap-wizard.js') }}"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="{{ asset('public/adminassets/js/bootstrap-notify.js') }}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('public/adminassets/js/bootstrap-datetimepicker.js') }}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ asset('public/adminassets/js/jquery-jvectormap.js') }}"></script>
<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="{{ asset('public/adminassets/js/nouislider.min.js') }}"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('public/adminassets/js/jquery.select-bootstrap.js') }}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{ asset('public/adminassets/js/jquery.datatables.js') }}"></script>
<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="{{ asset('public/adminassets/js/sweetalert2.js') }}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('public/adminassets/js/jasny-bootstrap.min.js') }}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ asset('public/adminassets/js/fullcalendar.min.js') }}"></script>
<!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('public/adminassets/js/jquery.tagsinput.js') }}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ asset('public/adminassets/js/material-dashboard.js?v=1.2.0') }}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('public/adminassets/js/demo.js?t='.time()) }}"></script>
<!-- ck editor -->
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
<!-- ck end- -->
@include('layouts.error-sucess-messages') 
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#datatables1').DataTable({
          aaSorting: [[0, 'desc']]
        });

        $('#datatables11').DataTable({
          aaSorting: [[0, 'desc']]
        });

        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables11').DataTable();
        table.on('click', '.remove', function(e) {
            let id =  this.id;
            let route_url =  $(this).attr("data-url");
            swal({
            title: 'Are you sure?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            confirmButtonText: 'Yes, delete it!',
            buttonsStyling: false
            }).then(function() {
                $.ajax({
                        url: route_url,
                        method:"get",
                    success:function(data)
                    {
                        
                        if(data=='success')
                        {
                            $('#rowid'+id).remove();
                            var message = 'Your record has been deleted.';
                            demo.showNotification('bottom','right','success', message );
                        }else{
                            var message = 'Please try again';
                            demo.showNotification('bottom','right','danger', message );
                        }
                        
                    },
                    error:function(er){
                        console.log(er); 
                    }
                });           
            });
        });

        var table = $('#datatables111');
        table.on('click', '.remove', function(e) {
            let id =  this.id;
            let route_url =  $(this).attr("data-url");
            swal({
            title: 'Are you sure?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            confirmButtonText: 'Yes, delete it!',
            buttonsStyling: false
            }).then(function() {
                $.ajax({
                        url: route_url,
                        method:"get",
                    success:function(data)
                    {
                        
                        if(data=='success')
                        {
                            $('#rowid'+id).remove();
                            var message = 'Your record has been deleted.';
                            demo.showNotification('bottom','right','success', message );
                        }else{
                            var message = 'Please try again';
                            demo.showNotification('bottom','right','danger', message );
                        }
                        
                    },
                    error:function(er){
                        console.log(er); 
                    }
                });           
            });
        });

        var table = $('#datatables').DataTable();
        table.on('click', '.remove', function(e) {
            let id =  this.id;
            let route_url =  $(this).attr("data-url");
            swal({
            title: 'Are you sure?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            confirmButtonText: 'Yes, delete it!',
            buttonsStyling: false
            }).then(function() {
                $.ajax({
                        url: route_url,
                        method:"get",
                    success:function(data)
                    {
                        
                        if(data=='success')
                        {
                            $('#rowid'+id).remove();
                            var message = 'Your record has been deleted.';
                            demo.showNotification('bottom','right','success', message );
                        }else{
                            var message = 'Please try again';
                            demo.showNotification('bottom','right','danger', message );
                        }
                        
                    },
                    error:function(er){
                        console.log(er); 
                    }
                });           
            });
        });
        
        var table1 = $('#datatables1').DataTable();
        table1.on('click', '.remove', function(e) {
            let id =  this.id;
            let route_url =  $(this).attr("data-url");
            swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            confirmButtonText: 'Yes, delete it!',
            buttonsStyling: false
            }).then(function() {
                $.ajax({
                        url: route_url,
                        method:"get",
                    success:function(data)
                    {
                        
                        if(data=='success')
                        {
                            $('#rowid'+id).remove();
                            var message = 'Your record has been deleted.';
                            demo.showNotification('bottom','right','success', message );
                        }else{
                            var message = 'Please try again';
                            demo.showNotification('bottom','right','danger', message );
                        }
                        
                    },
                    error:function(er){
                        console.log(er); 
                    }
                });           
            });
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>
</html>