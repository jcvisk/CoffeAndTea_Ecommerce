@extends('layouts.app')

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/images/home-bg.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/home-bg.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/home-bg.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="about py-5" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="heading"> about us <span>why choose us</span> </h1>
            </div>
            <div class="col-12 col-xl-6">
                <div class="image">
                    <img src="/images/about-img.png" alt="ABOUT" class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <h3 class="title">what's make our coffee special!</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse et commodi, ad, doloremque
                    obcaecati maxime quam minima dolore mollitia saepe quos, debitis incidunt. Itaque
                    possimus adipisci ipsam harum at autem.</p>
                <a href="#" class="boton">read more</a>
                <div class="icons-container">
                    <div class="icons">
                        <img src="/images/about-icon-1.png" alt="">
                        <h3>quality coffee</h3>
                    </div>
                    <div class="icons">
                        <img src="/images/about-icon-2.png" alt="">
                        <h3>our branches</h3>
                    </div>
                    <div class="icons">
                        <img src="/images/about-icon-3.png" alt="">
                        <h3>free delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="menu py-5" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="heading"> our menu <span>popular menu</span> </h1>
            </div>
            <div class="col-12">
                <div class="box-container">
                @foreach($products as $pro)
                    <div class="box">
                        <img src="/images/{{ $pro->image_path }}" alt="{{ $pro->image_path }}">
                        <div class="content">
                            <h3>{{ $pro->name }}</h3>
                            <p>{{ $pro->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span>${{ $pro->price }}</span>

                                <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                    <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                    <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                    <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                    <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                    <input type="hidden" value="{{ $pro->details }}" id="details" name="details">
                                    <input type="hidden" value="1" id="quantity" name="quantity">
                                    <div>
                                        <button class="boton m-0" title="add to cart">
                                            <i class="fa fa-shopping-cart"></i> agregar al carrito
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection