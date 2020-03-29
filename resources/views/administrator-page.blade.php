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
                    <a href="#">Living room</a>
                </div>

                <div id="bedroom-page-admin">
                    <a href="#">Bedroom</a>
                </div>

                <div id="kitchen-page-admin">
                    <a href="#">Kitchen</a>
                </div>

                <div id="bathroom-page-admin">
                    <a href="#">Bathroom</a>
                </div>
            </div>
        </div>
    </div>
@endsection
