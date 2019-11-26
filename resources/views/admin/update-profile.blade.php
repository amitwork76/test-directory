@extends('layouts.adminTemplate')
@section('page-title','Update Profile')
@section('content')
<div class="content">
    @include('layouts.error-sucess-messages') 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    
                    <div class="card-content">
                        <div class="pull-right" style="margin-top: -20px;">
                            <a href="{{url('admin/dashboard')}}" class="btn btn-next btn-fill btn-rose btn-wd">Back</a>
                        </div>
                        <h4 class="card-title">Update Profile</h4>
                         {{ Form::model($data, ['route' => ['dashboard.update', $data->id], 'method' => 'patch']) }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Name</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{$data['name']}}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group label-floating">
                                            <label class="control-label"> Email</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{$data['email']}}" required>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group label-floating">
                                            <label class="control-label"> Mobile</label>
                                            <input id="mobile" type="mobile" class="form-control" name="mobile" value="{{$data['mobile']}}" required>
                                            @if ($errors->has('mobile'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('mobile') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group label-floating">
                                            <label class="control-label"> Password</label>
                                            <input id="password" type="password" class="form-control" name="password">
                                            <h6 id="passlenght"></h6>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group label-floating">
                                            <label class="control-label"> Confirm Password</label>
                                            <input id="password-confirmation" type="password" class="form-control" name="password_confirmation">

                                            <h6 id="passerror"></h6>
                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                            </div>
                            <button type="submit" class="btn btn-rose pull-right">Update</button>
                        {{ Form::close() }}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#password').blur(function(){
            var pass = $('#password').val();
            if(pass.length<4)
            {
               $('#password').val('');
               $('#passlenght').html('<span style="color:red;">Minimum 4 digit length.</span>');
            }else{
                $('#passlenght').html('');
            }
        });
    });
    function checkPass(){
        var pass = $('#password').val();
        var cpass = $('#password-confirmation').val();
        if(pass==cpass)
        {
            $('#passerror').html('<span style="color:green;">Password Match.</span>');
            return true;
        }else{
            $('#password-confirmation').val('');
            $('#passerror').html('<span style="color:red;">Confirm Password Not Match.</span>');
            return false;
        }
        
    }
</script>
@endsection