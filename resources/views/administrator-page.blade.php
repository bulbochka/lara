@extends('layouts.app')

@section('content')
    <div id="item-h" class="container-fluid">
        <h1>Hi Admin!</h1>
    </div>

    <div class="hr"><hr></div>

    <div class="container-fluid">
        <div>
            <div id="list-page" class="row">
                <div id="news-page-admin">
                    <a href="news-page-admin">News</a>
                </div>

                <div id="living-room-page-admin">
                    <a href="product-page-admin">Products</a>
                </div>
            </div>
        </div>
    </div>
@endsection
