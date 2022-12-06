<header class="header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand logo" href="{{ url('/') }}">
                coffee <i class="fas fa-mug-hot"></i>
            </a>
            <div class="d-flex align-items-center order-3">
                <div class="dropdown carrito">
                    <a class="position-relative" href="#" id="dropdownMenuCart" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">

                        <i class="fa fa-shopping-cart" style="font-size: 1.5rem;"></i>
                        <div class="cantidad">
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x" aria-hidden="true"></i>
                                <span class="fa-stack-1x fa-inverse numero">
                                {{ \Cart::getTotalQuantity()}}
                                </span>
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right cart" aria-labelledby="dropdownMenuCart">
                        @include('partials.cart-drop')
                    </div>
                </div>
                <button class="navbar-toggler ml-3" type="button" data-toggle="collapse"
                    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('shop') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Book</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>