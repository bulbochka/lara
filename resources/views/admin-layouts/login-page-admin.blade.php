@extends('admin-layout')

@section('content')
    <div class="container" id="form-container">
        <div class="row" id="form-login">
        {!! Form::open() !!}
            <div class="form-group">
                {{Form::label('login', 'Login')}}
                {{Form::text('login_auth', '', ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('password', 'Password')}}
                {{Form::text('password_auth', '', ['class' => 'form-control'])}}
            </div>
            {{Form::submit('Send', ['class' => 'btn'], ['id' => 'send-login-admin-btn'])}} 
        {!! Form::close() !!}
        </div>

    </div>


@endsection