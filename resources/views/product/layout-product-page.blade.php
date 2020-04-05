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
                    <div class="col-lg-3 col-md-12" id="product-container">            
                        <div class="card-deck">
                            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                                <img src="{{asset ('/storage/' . $products -> path_image)}}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h4 class="card-title">{{$products -> name_product}}</h4>
                                    <p class="card-text">{{$products -> manufacturer}}</p>
                                </div>

                                <div class="card-footer" id="card-footer-container">
                                    <label id="price-label">Price: </label>
                                    <label id="price">{{$products -> price}}</label>
                                    <a href="#" class="btn btn-info" id="go-cart-btn">Go cart</a>
                                </div>
                            </div>                    
                        </div>              
                    </div>
                @endforeach
            @else
                <p>No products</p>
            @endif
        </div>
    </div>
</div>