@extends('layouts.app')

@section('content')
    <div id="item-h" class="container-fluid">
        <h1>News</h1>
    </div>

    <div class="hr"><hr></div>

    <div class="container-fluid">
        <div id="news-page-admin">
            <a href="create-product-admin">Create Product</a>
        </div>   
    </div>

    <div class="container-fluid">
    <table class="table table-hover">
            <thead style="background-color:#6cb2eb;">
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Name</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Change</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>

            @if(count($product)>=1)
                <tbody >  
                @foreach($product as $products )             
                        <tr>                          
                            <th>{{$products -> id}}</th>                          
                            <td>{{$products -> name_product}}</td>
                            <td>{{$products -> categories}}</td>
                            <td><a href="#" class="btn btn-primary">Change</a></td>
                            <td>{!!Form::open(['action' => ['ProductsAdminController@destroy', $products -> id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>                          
                        </tr>
                    @endforeach
                </tbody>
            @else
                <p>No products</p>
            @endif
        </table>
    </div>
@endsection