<div class="menu-cart-wrap">
@if(count(\Cart::getContent()) > 0)
    <div class="cart-content-items">
        @foreach(\Cart::getContent() as $item)
        <div class="dropdown-item cart-product">
            <div class="d-flex align-items-center">
                <div class="img">
                    <img src="/images/{{ $item->attributes->image }}" class="img-fluid">
                </div>
                <div class="details">
                    <div class="text">
                        <a class="cart-product-name" href="javascript:;">
                            <strong>{{$item->name}}</strong>
                        </a>

                        <div class="cart-product-info">
                            <small>
                                Cantidad: {{$item->quantity}}
                            </small>
                            <span class="price">
                                $ {{ \Cart::get($item->id)->getPriceSum() }} MXN
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="dropdown-item total-price d-flex justify-content-between cart-product align-items-center">
        <span>Total:</span>
        <div class="c-green d-flex" style="gap: .5rem">
            <strong>${{ \Cart::getTotal() }} MXN</strong>

            <form action="{{ route('cart.clear') }}" method="POST">
                {{ csrf_field() }}
                <button class="delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
    <div class="cart-product dropdown-item">
        <div class="align-items-center d-flex justify-content-between cart-actions">
            <a href="{{ route('cart.index') }}" class="boton">
                Ver Carrito
            </a>
            <a href="#" class="boton">
                Comprar Ahora
            </a>
        </div>
    </div>
@else
    <div class="alert alert-primary py-0 px-1" role="alert">
        <p class="m-0 p-0"> Su carrito de compras está vacío</p>
    </div>
@endif
</div>