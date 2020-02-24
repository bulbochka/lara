@extends('layout')

@section('content')
        <div id="item-h" class="container-fluid">
            <h1>ABOUT US</h1>
        </div>
        <div class="hr"><hr ></div>

        <div id="text-container" class="container">
            <div class="row">
                <div class="col" id="item-about">
                    <div id="text-about">
                        <h2>Lorem ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div id="img-about">
                        <img src="/public/image/apartment/apartment-7.jpg">
                    </div>
                </div>
                <div class="hr"><hr ></div>

                <div class="col" id="item-about">
                <div id="img-about">
                        <img src="/public/image/apartment/apartment-8.jpg">
                    </div>
                    <div id="text-about">
                        <h2>Lorem ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div> 
                </div>
                <div class="hr"><hr ></div>
            </div>
        </div>

        <div id="reviews-container" class="container">
            <div id="reviews-form" class="row">
                <div id="text-form">
                    <h2>Add Comment</h2>
                </div>

                {!! Form::open(['action' => 'AboutUsController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('name', 'Name')}}
                        {{Form::text('name', '', ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('email', 'Email')}}
                        {{Form::email('email_user_review', '', ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('review', 'Review')}}
                        {{Form::textarea('review', '', ['class' => 'form-control'])}}
                    </div>
                    {{Form::submit('Send', ['class' => 'btn'], ['id' => 'send-review-btn'])}}      
                {!! Form::close() !!}
            </div>
        </div>

        <div id="reviews-container-comment" class="container">
            
            <div class="autoplay" id="comment-container">
                    @if(count($reviews)>=1)
                        @foreach($reviews as $review)
                            <div id="comment">
                                <h3>{{$review->name}}</h3>                             
                                <p>{{$review->review_text}}</p>
                                <small>Writen on {{$review->created_at}}</small>
                            </div>
                        @endforeach
                    @else
                        <p>No comment</p>
                    @endif
            </div>
        </div>

        <div class="hr"><hr ></div>
@endsection