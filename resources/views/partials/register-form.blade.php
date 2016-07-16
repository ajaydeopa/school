
{!! csrf_field() !!}



<!--<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
    <label for="first_name" class="col-md-4 control-label">First Name</label>

    <div class="col-md-6">
        <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
        @if ($errors->has('first_name'))
            <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
    <label for="middle_name" class="col-md-4 control-label">Middle Name</label>

    <div class="col-md-6">
        <input id="middle_name" type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}">
        @if ($errors->has('middle_name'))
            <span class="help-block">
                <strong>{{ $errors->first('middle_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
    <label for="last_name" class="col-md-4 control-label">Last Name</label>

    <div class="col-md-6">
        <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
        @if ($errors->has('last_name'))
            <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
        @endif
    </div>
</div>
-->


<div class="form-group{{ $errors->has('college_name') ? ' has-error' : '' }}">
    <label for="college_name" class="col-md-4 control-label">Schoole Name</label>

    <div class="col-md-6">
        <input id="college_name" type="text" class="form-control" name="college_name" value="{{ old('college_name') }}">
        @if ($errors->has('college_name'))
            <span class="help-block">
                <strong>{{ $errors->first('college_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('collegeid') ? ' has-error' : '' }}">
    <label for="collegeid" class="col-md-4 control-label">School ID</label>

    <div class="col-md-6">
        <input id="collegeid" type="text" class="form-control" name="collegeid" value="{{ old('collegeid') }}">
        @if ($errors->has('collegeid'))
            <span class="help-block">
                <strong>{{ $errors->first('collegeid') }}</strong>
            </span>
        @endif
    </div>
</div>
<br>
<br>
<div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
    <label for="logo" class="col-md-4 control-label">School logo</label>

    <div class="col-md-6">
        <input id="logo" type="file" class="form-control" name="logo" value="{{ old('logo') }}">

        @if ($errors->has('logo'))
        <span class="help-block">
            <strong>{{ $errors->first('logo') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
</div>
<br>
<br>

<!--
<div class="form-group{{ $errors->has('profile_pic') ? ' has-error' : '' }}">
    <label for="profile_pic" class="col-md-4 control-label">Profile Pic</label>

    <div class="col-md-6">
        <input id="profile_pic" type="file" class="form-control" name="profile_pic" value="{{ old('profile_pic') }}">

        @if ($errors->has('profile_pic'))
        <span class="help-block">
            <strong>{{ $errors->first('profile_pic') }}</strong>
        </span>
        @endif
    </div>
</div>
-->

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">Password</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password">

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-user"></i> Register
        </button>
    </div>
</div>
