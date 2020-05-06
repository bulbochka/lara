@extends('layout')

@section('content')
        <div id="item-h" class="container-fluid">
            <h1>NEWS</h1>
        </div>

        @if(count($news_show)>=1) 
            @foreach($news_show as $news )             
                <div id="parallax-container" class="container-fluid">
                     <div class="my-parallax" style="background-image:url('{{asset ('/storage/' . $news -> path_image)}}');"></div>
                </div> 

                <div class="container-fluid">
                    <div id="text-news">
                        <h2>{{$news -> title_news}}</h2>
                        <p>{{$news -> text_news}}</p>
                        <small>{{$news -> created_at}}</small>
                    </div>
                </div>     
            @endforeach
            <div class="container-fluid" id="pagination-page">
                {{$news_show->links()}}
            </div>          
        @else
            <div id="empty-div">
                <h2>No news</h2>
            </div>
        @endif
@endsection