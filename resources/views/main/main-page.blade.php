@extends('layout')

@section('content')
        <div id="carouselExampleInterval" class="carousel slide carousel-container" data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="/public/image/min-17.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item" data-interval="2000">
                    <img src="/public/image/min-4.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="/public/image/min-7.jpg" class="d-block w-100" alt="...">
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div id="item-h" class="container-fluid">
            <h1>Furniture for room</h1>
        </div>

        <div class="hr"><hr></div>

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

    <div id="item-h" class="container-fluid">
        <h1>All products</h1>
    </div>

    <div class="hr"><hr></div>

        <div class="container-fluid">
            <div>
                <div class="row" id="card-container">
                    @if(count($product)>=1) 
                    @foreach($product as $products)
                    <div class="col-lg-3 col-md-12" id="product-container"> 
                        <div id="card-main-page" class="card border-dark mb-3">
                            <img src="{{asset ('/storage/' . $products -> path_image)}}" class="card-img" alt="...">
                            <div id="card-text-main-page" class="card-img-overlay">
                                <h2 style="color:black;" class="card-title">{{$products -> name_product}}</h2>
                                <h5 style="color:black;" class="card-text">{{$products -> manufacturer}}</h5>
                                <h4 style="color:black;" class="card-text">{{$products -> price}} $</h4>
                            </div>
                        </div>
                    </div> 
                    @endforeach
                    
                    @else
                        <p>No products</p>
                    @endif
                </div>
                
                    <div id="btn-container">
                         <a href="product" id="more-product-btn" class="btn">More product -></a>
                     </div>
            </div>
        </div>
@endsection