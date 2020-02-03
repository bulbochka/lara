@extends('layout')

@section('content')
        <div id="item-h" class="container-fluid">
            <h1>CONTACT</h1>
        </div>
        <div id="social-container" class="container">
            <div id="social" class="row">
                <div id="facebook" class="col">                                     
                    <a href="https://www.facebook.com/"><img src="/public/image/icon/facebook-icon.png"></a>
                    <h4>facebook</h4>
                </div>

                <div class="instagram">
                    <a href="https://www.instagram.com/"><img src="/public/image/icon/instagram-icon.png"></a>
                    <h4>instagram</h4>
                </div>

                <div class="viber">                   
                    <a href="https://www.viber.com/"><img src="/public/image/icon/viber-icon.png"></a>
                    <h4>viber</h4>
                </div>

                <div class="email">                  
                    <a href="https://mail.google.com/"><img src="/public/image/icon/email-icon.png"></a>
                    <h4>email</h4>
                </div>

                <div class="telephone">
                    <img src="/public/image/icon/telephone-icon.png">
                    <h4>telephone</h4>
                    <a href="#">123-456-789</a>
                </div>

                <div class="address">
                    <img src="/public/image/icon/address-icon.png">
                    <h4>address</h4>
                    <a href="#">г.Киев, ул.Жилянская</a>
                </div>
            </div>
        </div>

        <div id="map-container" class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2031.5382221495881!2d30.496248315271348!3d50.43966407947386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cef10badc3c3%3A0x5159fed7a76d80b2!2z0YPQuy4g0JbQuNC70Y_QvdGB0LrQsNGPLCDQmtC40LXQsiwgMDIwMDA!5e1!3m2!1sru!2sua!4v1579013534387!5m2!1sru!2sua" 
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <form>
            <div id="call-back-container" class="container">
                <div id="txt">
                    <h3>Enter your number or email address and we will contact you!</h3>
                </div>


                <div id="call-back" class="row">
                    <div id="call-back-input" class="col">
                       <p>Name: <input type="text" /></p>
                        <p>Email: <input type="email"/></p>
                        <p>Phone: <input type="phone"/></p>                       
                    </div>

                    <div id="message" class="col">
                        <p>Message: <input id="message-text" type="text"></p>
                        <input id="btn-send-message" type="submit" value="Send"/>
                    </div>

                </div>
            </div>
        </form>
@endsection