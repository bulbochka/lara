@extends('layout')

@section('content')
        <div id="item-h" class="container-fluid">
            <h1>CONTACT</h1>
        </div>
        <div id="social-container" class="container-fluid">
            <div>
                <div id="social" class="row">
                    <div id="facebook" class="col-lg-2 col-md-4">                                     
                        <a href="https://www.facebook.com/"><img src="/public/image/icon/facebook-icon.png"></a>
                        <h4>facebook</h4>
                    </div>

                    <div id="instagram" class="col-lg-2 col-md-4">
                        <a href="https://www.instagram.com/"><img src="/public/image/icon/instagram-icon.png"></a>
                        <h4>instagram</h4>
                    </div>

                    <div id="viber" class="col-lg-2 col-md-4">                   
                        <a href="https://www.viber.com/"><img src="/public/image/icon/viber-icon.png"></a>
                        <h4>viber</h4>
                    </div>

                    <div id="email" class="col-lg-2 col-md-4">                  
                        <a href="https://mail.google.com/"><img src="/public/image/icon/email-icon.png"></a>
                        <h4>email</h4>
                    </div>

                    <div id="telephone" class="col-lg-2 col-md-4">
                        <img src="/public/image/icon/telephone-icon.png">
                        <h4>telephone</h4>
                        <a href="#">123-456-789</a>
                    </div>

                    <div id="address" class="col-lg-2 col-md-4">
                        <img src="/public/image/icon/address-icon.png">
                        <h4>address</h4>
                        <a href="#">г.Киев, ул.Жилянская</a>
                    </div>
                </div>
            </div>          
        </div>

        <div id="map-container" class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2031.5382221495881!2d30.496248315271348!3d50.43966407947386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cef10badc3c3%3A0x5159fed7a76d80b2!2z0YPQuy4g0JbQuNC70Y_QvdGB0LrQsNGPLCDQmtC40LXQsiwgMDIwMDA!5e1!3m2!1sru!2sua!4v1579013534387!5m2!1sru!2sua" 
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div id="item-h" class="container-fluid">
            <h3>Enter your number or email address and we will contact you!</h3>
        </div>

        <div id="call-back-container" class="container-fluid">
            <div id="call-back" class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                            {!! Form::open() !!}
                                <div class="form-group">
                                    {{Form::label('name', 'Name', ['id' => 'label-form'])}}
                                    {{Form::text('name_user_callback', '', ['class' => 'form-control'], ['id' => 'input-form'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('email', 'Email', ['id' => 'label-form'])}}
                                    {{Form::email('email_user_callback', '', ['class' => 'form-control'], ['id' => 'input-form'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('phone', 'Phone', ['id' => 'label-form'])}}
                                    {{Form::email('phone_user_callback', '', ['class' => 'form-control'], ['id' => 'input-form'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('message', 'Message', ['id' => 'label-form'])}}
                                    {{Form::textarea('message_callback', '', ['class' => 'form-control'], ['id' => 'input-form'])}}
                                </div>
                                {{Form::submit('Send', ['class' => 'btn btn-dark'], ['id' => 'send-callback-btn'])}}      
                            {!! Form::close() !!}
                </div>
            </div>
        </div>
@endsection