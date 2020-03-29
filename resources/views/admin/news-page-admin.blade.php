@extends('layouts.app')

@section('content')
    <div id="item-h" class="container-fluid">
        <h1>News</h1>
    </div>

    <div class="hr"><hr></div>

    <div class="container-fluid">
        <div id="news-page-admin">
            <a href="create-news-admin">Create News</a>
        </div>   
    </div>

    <div class="container-fluid">
        <table class="table table-hover">
            <thead style="background-color:#6cb2eb;">
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Title</th>
                    <th scope="col">Change</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>

            @if(count($news)>=1)
                <tbody >  
                @foreach($news as $newses )             
                        <tr>                          
                            <th>{{$newses -> id}}</th>                          
                            <td>{{$newses -> title_news}}</td>
                            <td><a href="edit-news-admin/{{$newses->id}}/edit" class="btn btn-primary">Change</a></td>
                            <td>{!!Form::open(['action' => ['DeleteNewsController@destroy', $newses -> id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>                          
                        </tr>
                    @endforeach
                </tbody>
            @else
                <p>No news</p>
            @endif
        </table>
    </div>
@endsection