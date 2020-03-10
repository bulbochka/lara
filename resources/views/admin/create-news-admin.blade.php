@extends('layouts.app')

@section('content')
    <div id="item-h" class="container-fluid">
        <h1>Create News</h1>
    </div>

    <div class="hr"><hr></div>

    <div id="create-news-container" class="container-fluid">
            <div id="create-news-form" class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    {!! Form::open(['action' => 'CreateNewsAdminController@store', 'method' => 'POST', 'files' => 'true', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::label('image-news', 'Image')}}
                            </br>
                            {{Form::file('image', ['name' => 'image_news'])}}
                            
                        </div>
                        <div class="form-group">
                            {{Form::label('title-news', 'Title')}}
                            {{Form::text('title_news', '', ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('text-news', 'News')}}
                            {{Form::textarea('text_news', '', ['class' => 'form-control'])}}
                        </div>
                        {{Form::submit('Save', ['class' => 'btn btn-success'], ['id' => 'send-news-btn'], 
                            ['style' => 'background-color:#79c7c6'])}}      
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
     
@endsection