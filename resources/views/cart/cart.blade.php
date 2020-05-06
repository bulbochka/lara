@extends('layout')

@section('content')
    <div id="item-h" class="container-fluid">
                <h1>Cart</h1>
    </div>
    <div class="hr"><hr></div>

    @if(Cart::getContent()->count()>0)

        <h2>{{Cart::getContent()->count()}} item(s) in Shopping cart</h2>

        <div class="container-fluid">
            <div class="row">
                @foreach(Cart::getContent() as $item)
                    <table class="table table-hover">
                        <tbody>
                            <tr id="cart-table">
                                <th style="border-top:0.5px solid black; vertical-align:baseline; width:5%;" scope="row">{{$item->id}}</th>
                                <td style="padding:0.3rem; border-top:0.5px solid black; vertical-align:baseline; width:20%;"><img style="width:30%;" src="{{asset ('/storage/'.$item->model->path_image)}}"></td>
                                <td style="padding:0.3rem; border-top:0.5px solid black; vertical-align:baseline; width:20%;">{{$item->name}}</td>
                                <td style="padding:0.3rem; border-top:0.5px solid black; vertical-align:baseline; width:20%;">
                                    <p>{{$item->quantity}} pc(s)<p>
                                </td>
                                <td style="padding:0.3rem; border-top:0.5px solid black; vertical-align:baseline; width:20%;">{{$item->price}} $</td>
                                <td style="padding:0.3rem; border-top:0.5px solid black; vertical-align:baseline; width:15%;">{!!Form::open(['action' => ['CartController@destroy', $item -> id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td> 
                            </tr>
                        </tbody>
                    </table>
                @endforeach

                <table class="table">
                    <tbody>
                        <tr id="cart-table">
                            <th style="border-top:0.5px solid black;" scope="row"></th>
                            <td style="border-top:0.5px solid black;" colspan="3"><h4>Total price: </h4></td>
                            <td style="border-top:0.5px solid black;" colspan="2"> <h4>{{Cart::getTotal()}} $</h4></td>
                        </tr>
                    </tbody>
                </table>


                <div id="confirm-btn-container">
                    <a href="product" class="btn" id="more-product-btn">Go Shopping!</a>
                    <a id="confirm-btn" class="btn">Buy now</a>
                </div>
            </div>
        </div> 

    @else
        <div id="empty-div">
            <h2>No item in cart</h2>

            <div id="btn-container">
                <a href="product" class="btn" id="more-product-btn">Go in Shopping!</a>
            </div>
        </div>
    @endif 
@endsection