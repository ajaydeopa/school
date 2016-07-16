@extends('layout.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    {{ Form::open(array( 'method' => 'POST', 'role' => 'form', 'url' => 'register', 'class' => 'form-horizontal' )) }}
                        @include('partials.register-form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
