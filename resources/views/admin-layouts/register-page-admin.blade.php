@extends('admin-layout')

@section('content')
    <div class="container" id="form-container">
        <div class="row" id="form-login">
        {!! Form::open(['route' => 'admin-register.store']) !!}
            <div class="form-group">
                {{Form::label('login', 'Login')}}
                {{Form::text('login', '', ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::text('email', '', ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('password', 'Password')}}
                {{Form::text('password', '', ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('password', 'Enter password again')}}
                {{Form::text('password', '', ['class' => 'form-control'])}}
            </div>
            {{Form::submit('Send', ['class' => 'btn'], ['id' => 'send-login-admin-btn'])}} 
        {!! Form::close() !!}
        </div>

    </div>


@endsection