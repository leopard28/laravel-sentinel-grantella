@extends('layouts.auth')

@section('title')
    Gentellela Alela! | Register
@endsection

@section('main_content')
            <form method="post" action="{{ url('/register') }}">
                {!! csrf_field() !!}
                
                <h1>Create Account</h1>
                
                <div class="form-group has-feedback{{ $errors->has('username') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="User Name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    
                    @if ($errors->has('username'))
                        <span class="help-block">
                  <strong>{{ $errors->first('username') }}</strong>
                </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    
                    @if ($errors->has('name'))
                        <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                    @endif
                </div>
                
                <div class="form-group has-feedback{{ $errors->has('nrp') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="nrp" value="{{ old('nrp') }}" placeholder="NRP">
                    <span class="glyphicon glyphicon-cloud form-control-feedback"></span>
                    
                    @if ($errors->has('nrp'))
                        <span class="help-block">
                  <strong>{{ $errors->first('nrp') }}</strong>
                </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone">
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                    
                    @if ($errors->has('phone'))
                        <span class="help-block">
                  <strong>{{ $errors->first('phone') }}</strong>
                </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    
                    @if ($errors->has('email'))
                        <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                    @endif
                </div>
                
                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    
                    @if ($errors->has('password'))
                        <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                    @endif
                </div>
                
                <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                    @endif
                </div>
                <div>
                    <button class="btn btn-default submit" >Register</button>
                </div>
                
                <div class="clearfix"></div>
                
                <div class="separator">
                    <p class="change_link">Already a member ?
                        <a href="{{ url('/login') }}" class="to_register"> Log in </a>
                    </p>
                    
                    <div class="clearfix"></div>
                    <br />
                    
                    <div>
                        <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                        <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                    </div>
                </div>
            </form>
@endsection

