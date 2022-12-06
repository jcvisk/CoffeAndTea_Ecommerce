@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="cart-summary">
        <div class="cart-summary-list p-1 p-md-2 p-lg-3">
            <div class="container">
                <header>
                    @if(\Cart::getTotalQuantity()==1)
                        <h1>{{ \Cart::getTotalQuantity()}} Producto en el carrito</h1>
                        @if(count($cartCollection)>0)
                            <form action="{{ route('cart.clear') }}" method="POST" class="text-right">
                                {{ csrf_field() }}
                                <button class="btn-delete mt-2">Vaciar carrito</button>
                            </form>
                        @endif
                    @elseif(\Cart::getTotalQuantity()>1)
                        <h1>{{ \Cart::getTotalQuantity()}} Productos en el carrito</h1>
                        @if(count($cartCollection)>0)
                            <form action="{{ route('cart.clear') }}" method="POST" class="text-right">
                                {{ csrf_field() }}
                                <button class="btn-delete mt-2">Vaciar carrito</button>
                            </form>
                        @endif
                    @else
                        <h1>No Product(s) In Your Cart</h1><br>
                        <a href="/" class="btn btn-dark">Continue en la tienda</a>
                    @endif
                </header>
                @foreach($cartCollection as $item)
                <div class="card row p-2 my-3">
                    <div class="col-12 row no-gutters p-0">
                        <div class="col-3 col-md-2 col-lg-2 align-self-center">
                            <img src="/images/{{ $item->attributes->image }}"
                                alt="product" class="img-fluid">
                        </div>
                        <div class="col-4 col-md-6 col-lg-7 py-2 py-lg-3 align-self-center">
                            <h6 class="title">{{ $item->name }}</h6>
                            <!-- <p class="desc">{{ $item->description }}</p> -->
                        </div>
                        <div class="col-5 col-md-4 col-lg-3 py-2 py-lg-3 text-right">
                            <h6 class="price">$ {{ $item->price }} <small>MXN</small></h6>
                            <div class="cantidad">
                                <span>Cantidad </span>
                                
                                <form action="{{ route('cart.update') }}" method="POST" class="d-flex" style="gap: .5rem;">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id}}" id="id" name="id">

                                    <div class="cant-box">
                                        <div class="" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="las la-minus"></i>
                                        </div>
                                        <input min="0" name="quantity" value="{{ $item->quantity }}" type="number" id="quantity" name="quantity">
                                        <div class="" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="las la-plus"></i>
                                        </div>
                                    </div>
                                    <button class="btn-refresh"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <h6 class="subtotal mt-3">subtotal: $ {{ \Cart::get($item->id)->getPriceSum() }} <small>MXN</small></h6>

                            <form action="{{ route('cart.remove') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                        <button class="btn-delete mt-2">Eliminar</button>
                    </form>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        <div class="cart-summary-summary">
            <div class="content px-1 py-4 p-md-2 p-lg-3">
                <div class="container">
                    <header>
                        <h1>Resumen</h1>
                    </header>
                    @if(count($cartCollection)>0)
                    <div class="mt-3">
                        <div class="d-flex justify-content-between">
                            <p class="subtotal">Envío:</p>
                            <p class="subtotal">$ 0 <small>MXN</small></p>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <p class="subtotal">Subtotal:</p>
                            <p class="subtotal">$ {{ \Cart::getTotal() }} <small>MXN</small></p>
                        </div>
                        <div class="text-right mt-2">
                            <p class="iva">$ {{ \Cart::getTotal() }} <small>MXN</small> IVA incluido</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('shop') }}" class="boton">
                                Volver
                            </a>
                            <a href="javascript:;" class="boton">
                                Comprar
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="content px-1 py-4 p-md-2 p-lg-3 mt-4">
                <div class="container">
                    <p class="text-center">Métodos de pago admitidos</p>

                    <div class="text-center">
                        <img src="/images/icons-pay.png" alt="icons" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection