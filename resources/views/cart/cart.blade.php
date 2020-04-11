@extends('layout')

@section('content')
    <div id="item-h" class="container-fluid">
                <h1>Cart</h1>
    </div>
    <div class="hr"><hr></div>

    <div class="container-fluid">
            <div class="row">
                    <table class="table table-hover">
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
                            <tr>
                                <th scope="row"></th>
                                <td colspan="3"><h4>Total price: </h4></td>
                                <td colspan="2"> <h4>111 $</h4></td>
                            </tr>
                        </tbody>
                    </table>

                <div id="confirm-btn-container">
                    <a id="confirm-btn" class="btn">Buy now</a>
                </div>
            </div>

    </div>

    
@endsection