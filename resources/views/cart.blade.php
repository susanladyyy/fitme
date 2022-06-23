@extends('layouts.app')

@section('content')
<header class="masthead" style="height: 100vh; min-height: 500px; background-image: url('storage/cart/banner.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; margin-top: 35px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center" style="background-color: rgba(255,106,106, .3); border-radius: 20px;">
                <h1 class="fw-light" style="color: black; font-size: 9em; text-align: center;color: whitesmoke; font-weight: 900;">CART</h1>
            </div>
        </div>
    </div>    
</header>

<div class="container h-10" style="margin-left: 12%; width: 80%; margin-bottom: 50px; margin-top: 50px;">
    @if (count($carts) == 0)
        <h1 style="text-align: center; color: #FF6A6A;">No item in cart</h1>
    @else
        @for ($i = 0; $i < count($carts); $i++)
        <div class="card" style="border: #FF6A6A 2px solid; margin-bottom: 20px;">
            <div class="card-body">
                <div class="left" style="float: left; width: 200px; display: flex;">
                @if ($carts[$i]->type == 1)
                    <img style="height: 250px;" class="card-img-top" src="storage/cloth/shirt/{{ $carts[$i]->image }}" alt="Card image cap">
                @elseif ($carts[$i]->type == 2)
                    <img style="height: 250px;" class="card-img-top" src="storage/cloth/t-shirt/{{ $carts[$i]->image }}" alt="Card image cap">
                @elseif($carts[$i]->type == 3)
                    <img style="height: 250px;" class="card-img-top" src="storage/cloth/jacket/{{ $carts[$i]->image }}" alt="Card image cap">
                @endif
                </div>
                <div class="right" style="float: right; width: 800px; color: #FF6A6A;">
                    <h3 class="card-title" style="font-weight: 600;">{{ $carts[$i]->name }}</h3>
                    <div class="desc" style="display: flex;">
                        <p class="card-text" style="margin-right: 30px;">Color: {{ $carts[$i]->color }}</p>
                        <p class="card-text">Size: {{ $carts[$i]->size }}</p>
                    </div>
                    <p class="card-text" style="margin-bottom: 30px;">Quantity: {{ $carts[$i]->qty }}</p>
                    <h4 class="card-title" style="font-weight: 600;">Rp {{ $carts[$i]->price * $carts[$i]->qty }}</h4>
                    <form action="{{ route('checkout') }}" method="POST">
                        @csrf
                        <div class="input" style="display: flex; align-items: center;">
                            <input type="hidden" name="transactionId" value="{{ count($transactions) + 1 }}">
                            <input type="hidden" name="clothId" value="{{ $carts[$i]->clothID }}">
                            <input type="hidden" name="sizeId" value="{{ $carts[$i]->sizeID }}">
                            <input type="hidden" name="quantity" value="{{ $carts[$i]->qty }}">
                            <input type="hidden" name="cartid" value="{{ $i }}">
                            <select name="payment" id="" style="margin-right: 10px;">
                                <option value="0" selected>Choose Payment</option>
                                @foreach ($pt as $p)
                                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                                @endforeach
                            </select>
                            <input type="submit" class="btn btn-primary" style="background-color: #FF6A6A; color: white;" value="Checkout"></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endfor
    @endif
</div>
@endsection