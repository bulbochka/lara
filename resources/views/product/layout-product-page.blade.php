<div class= "container-fluid">
    <div>
        <div class="row">
            <div class="col-lg-3 col-md-12" id="categories-container">
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false" id="sort-button">
                        Sort
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">By date</a>
                        <a class="dropdown-item" href="#">By manufacturer</a>
                        <a class="dropdown-item" href="#">By price</a>
                    </div>
                </div>


                <h2 id="text-categories">Categories:</h3>

                <div class="form-group" id="radio-option-categories">
                    <label>
                        <input type="radio" name="options" id="option1" checked> All
                    </label>

                    <label>
                        <input type="radio" name="options" id="option1"> Furniture
                    </label>

                    <label>
                        <input type="radio" name="options" id="option1"> Appliances
                    </label>
                </div>
            </div>

            @if(count($product)>=1) 
                @foreach($product as $products)         
                    <div class="col-lg-3 col-md-3" id="product-container">            
                        <div class="card-deck" id="card-container">
                            <div class="card border-dark mb-3" id="card-body" style="max-width: 18rem;">
                                <img src="{{asset ('/storage/' . $products -> path_image)}}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h4 class="card-title">{{$products -> name_product}}</h4>
                                    <p class="card-text">{{$products -> manufacturer}}</p>
                                </div>

                                <div class="card-footer" id="card-footer-container">
                                    <label id="price-label">Price: </label>
                                    <label id="price">{{$products -> price}} $</label>

                                    {!!Form::open(['action' => ['CartController@store'], 'method' => 'POST'])!!}
                                        <input type="hidden" name="id" value="{{ $products->id }}">
                                        <input type="hidden" name="name" value="{{ $products->name_product }}">
                                        <input type="hidden" name="price" value="{{ $products->price }}">
                                        <button type="submit" class="btn" id="go-cart-btn">Add to cart</button>
                                    {!!Form::close()!!}
                                </div>
                            </div>                    
                        </div>              
                    </div>
                @endforeach

            @else
                <div id="empty-div">
                    <h2>No products</h2>
                </div>
            @endif

        </div>
    </div>
</div>