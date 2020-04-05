@extends('layouts.app')

@section('content')
    <div id="item-h" class="container-fluid">
        <h1>Create Product</h1>
    </div>

    <div class="hr"><hr></div>

    <div id="create-news-container" class="container-fluid">
        <div id="create-news-form" class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    {!! Form::open(['action' => 'CreateProductsAdminController@store', 'method' => 'POST', 'files' => 'true', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            <h5>Image:</h5>
                            </br>
                            {{Form::file('image', ['name' => 'image_product'])}}                   
                        </div>

                        <div class="form-group">
                            <h5>Name:</h5>
                            {{Form::text('name_product', '', ['class' => 'form-control'])}}
                        </div>

                        <div class="form-group">
                            <h5>Price:</h5>
                            {{Form::text('price_product', '', ['class' => 'form-control'])}}
                        </div>
                        
                        <h5>Categories:</h5>
                        <div class="form-group" id="categories">                           
                            <label><input type="radio" name="categories_radio" value="living-room" checked>Living room</label>

                            <label><input type="radio" name="categories_radio" value="bedroom">Bedroom</label>

                            <label><input type="radio" name="categories_radio" value="kitchen">Kitchen</label>

                            <label><input type="radio" name="categories_radio" value="bathroom">Bathroom</label>                         
                        </div>

                        <h5>Manufacturer:</h5>
                        <div class="form-group" id="manufacturer">                   
                            <label><input type="radio" name="manufacturer_radio" value="italy" checked>Italy</label>

                            <label><input type="radio" name="manufacturer_radio" value="france">Frace</label>

                            <label><input type="radio" name="manufacturer_radio" value="england">England</label> 
                        </div>

                        <div class="form-group">
                            <h5>Description:</h5>
                            {{Form::textarea('description_product', '', ['class' => 'form-control'])}}
                        </div>
                        {{Form::submit('Save', ['class' => 'btn btn-success'], ['id' => 'send-news-btn'], 
                            ['style' => 'background-color:#79c7c6'])}}      
                {!! Form::close() !!}
            </div>
        </div>
    </div>
     
@endsection