@extends('layout')

@section('content')
    <div id="item-h" class="container-fluid">
                <h1>Cart</h1>
    </div>
    <div class="hr"><hr></div>

    <div class="container-fluid">
        <div>
            <div class="row">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Count</th>
                            <th scope="col">Price</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>111</td>
                            <td>delete</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>333</td>
                            <td>delete</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@fat</td>
                            <td>222</td>
                            <td>delete</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
@endsection