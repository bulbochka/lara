@extends('layouts.app')

@section('content')
<div class="tabs">
    <input type="radio" name="inset" value="" id="tab_1" checked>
    <label for="tab_1">News</label>

    <input type="radio" name="inset" value="" id="tab_2">
    <label for="tab_2">Gallery</label>

    <div id="txt_1">

    </div>

    <div id="txt_2">
    </div>
    
    <div id="txt_4">
        <img src="image/logo.png" width="533" height="77" alt="Лого">
    </div>
</div>
@endsection
