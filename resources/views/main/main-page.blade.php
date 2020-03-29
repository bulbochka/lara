@extends('layout')

@section('content')
        <div id="room-container" class="container-fluid">
            <div>
                <div id="rooms" class="row">
                    <div id="living-room" class="col-lg-6 col-md-12 col-sm-12">
                        <div id="img">
                            <a href="living-room-product"><img id="room" src="/public/image/living-room/living-room-1.jpg"></a>
                        </div>              
                    </div>

                    <div id="bedroom" class="col-lg-6 col-md-12 col-sm-12">
                        <div id="img">
                            <a href="bedroom-product"><img id="room" src="/public/image/bedroom/bedroom.jpg"></a>
                        </div>                   
                    </div>

                    <div class="w-100"></div>

                    <div id="kitchen" class="col-lg-6 col-md-12 col-sm-12">
                        <div id="img">
                            <a href="kitchen-product"><img id="room" src="/public/image/kitchen/kitchen-2.jpg"></a>
                        </div>
                    </div>

                    <div id="bathroom" class="col-lg-6 col-md-12 col-sm-12">
                        <div id="img">
                            <a href="bathroom-product"><img id="room" src="/public/image/bathroom/bathroom.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
@endsection