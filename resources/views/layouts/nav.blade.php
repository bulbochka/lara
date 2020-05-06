<div class="pos-f-t">
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="home">Shop</a>

        <div  id="cart-container">
            <a id="cart-img-container" href="cart" placeholder="cart">
                <img src="/public/image/icon/cart-icon.png">
                @if(Cart::getContent()->count()>0)
                    <div id="cart-count">                     
                        <p>{{Cart::getTotalQuantity()}}</p>                      
                    </div>
                @endif
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="collapse navigation" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="link-menu" href="about-us-page">About us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="link-menu" href="news-page">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="link-menu" href="contact-page">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>



