@extends('admin-layout')

@section('content')
    <div class="container" id="form-container">
        <div class="row" id="form-login">
        {!! Form::open(['route' => 'admin-register.store']) !!}
            <div class="form-group">
                {{Form::label('login', 'Login')}}
                <input type="text" name="login" class="form-control">
            </div>

            <div class="form-group">
                {{Form::label('email', 'Email')}}
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email-admin-register">     
            </div>

            <div class="form-group">
                {{Form::label('password', 'Password')}}
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                {{Form::label('password_2', 'Enter password again')}}
                <input type="password" name="password_2" class="form-control">
            </div>
            {{Form::submit('Send', ['class' => 'btn'], ['id' => 'send-register-admin-btn'])}} 
        {!! Form::close() !!}
        </div>

    </div>


@endsection