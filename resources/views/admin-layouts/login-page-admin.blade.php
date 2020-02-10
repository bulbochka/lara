@extends('admin-layout')

@section('content')
    <div class="container" id="form-container">
        <div class="row" id="form-login">
        {!! Form::open(['route' => 'admin.store']) !!}
            <div class="form-group">
                {{Form::label('login', 'Login')}}
                {{Form::text('login', '', ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('password', 'Password')}}
                {{Form::text('password', '', ['class' => 'form-control'])}}
            </div>
            {{Form::submit('Send', ['class' => 'btn'], ['id' => 'send-review-btn'])}} 
        {!! Form::close() !!}
        </div>

    </div>


@endsection