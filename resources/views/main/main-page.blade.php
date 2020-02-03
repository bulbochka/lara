@extends('layout')

@section('content')
        <div id="room-container" class="container">
            <div id="rooms" class="row">
                <div id="living-room" class="col-sm"> 
                    <div id="img">
                        <a href="#"><img id="room" src="/public/image/living-room/living-room-1.jpg"></a>
                    </div>    
                        <h3 id="text">living room</h3>                                   
                </div>

                <div id="bedroom" class="col-sm">
                    <div id="img">
                        <a href="#"><img id="room" src="/public/image/bedroom/bedroom.jpg"></a>
                    </div>     
                        <h3 id="text">bedroom</h3>    
                </div>
            </div>
        </div>

        <div id="room-container" class="container">
            <div id="rooms" class="row">
                <div id="kitchen" class="col-sm">
                    <div id="img">
                        <a href="#"><img id="room" src="/public/image/kitchen/kitchen-2.jpg"></a>
                    </div>                 

                    <h3 id="text">kitchen</h3>                  
                </div>

                <div id="bathroom" class="col-sm">   
                    <div id="img">
                      <a href="#"><img id="room" src="/public/image/bathroom/bathroom.jpg"></a>
                    </div>                

                    <h3 id="text">bathroom</h3>
                </div>
            </div>
        </div>
@endsection