@extends('layouts.app')

@section('content')
<header class="masthead" style="height: 100vh; min-height: 500px; background-image: url('storage/shop/banner.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; margin-top: 35px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center" style="background-color: rgba(255,106,106, .3); border-radius: 20px;">
                <h1 class="fw-light" style="color: black; font-size: 9em; text-align: center;color: whitesmoke; font-weight: 900;">SHOP</h1>
            </div>
        </div>
    </div>    
</header>

<div class="filter" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="search">
        <form action="{{ url('search') }}" method="GET">
            @csrf
            <div class="container h-30">
                <div class="label" style="margin-bottom: 10px;">
                    <label for="">Item Name</label>
                </div>
                <div class="col-12 text-center">
                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input name="search" class="form-control my-0 py-1 border" type="text" placeholder="Search" aria-label="Search" style="border: 1px solid #cddc39;">
                        <div class="input-group-append" style="background-color: #FF6A6A;">
                            <span class="input-group-text lighten-2" id="basic-text1"><i class="fas fa-search text-grey"
                                aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="category">
        <form action="{{ route('category') }}" method="POST">
            @csrf
            <div class="container h-30">
                <div class="label" style="margin-bottom: 10px;">
                    <label for="">Item Category</label>
                </div>
                <div class="select">
                    <select class="form-select" name="category" aria-label="Default select example">
                        <option selected value="0">All Categories</option>
                        @foreach ($categories as $c)
                            <option value="{{ $c->id }}">{{ $c->typeName }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" value="Filter Category" style="background-color: #FF6A6A; padding: 8px; border: none; border-radius: 5px; margin-top: 10px; color: white;">
            </div>
        </form>
    </div>

    <div class="price">
        <form action="{{ route('price') }}" method="POST">
            @csrf
            <div class="container h-30">
                <div class="label" style="margin-bottom: 10px;">
                    <label for="">Item Maximum Price</label>
                </div>
                <div class="form-outline">
                    <input type="number" id="typeNumber" class="form-control">
                    <label class="form-label" for="typeNumber">Price</label>
                </div>
                <input type="submit" value="Filter Price" style="background-color: #FF6A6A; padding: 8px; border: none; border-radius: 5px; margin-top: 10px; color: white;">
            </div>
        </form>
    </div>
</div>

<div class="container h-10" style="margin-left: 12%; width: 80%; margin-bottom: 50px;">
    @foreach ($cloths as $cl)
    <div class="card" style="width: 15rem; display: inline-block; margin: 10px 10px 30px 10px;">
        @if ($cl->typeID == 1)
            <img style="height: 250px;" class="card-img-top" src="storage/cloth/shirt/{{ $cl->image }}" alt="Card image cap">
        @elseif ($cl->typeID == 2)
            <img style="height: 250px;" class="card-img-top" src="storage/cloth/t-shirt/{{ $cl->image }}" alt="Card image cap">
        @elseif($cl->typeID == 3)
            <img style="height: 250px;" class="card-img-top" src="storage/cloth/jacket/{{ $cl->image }}" alt="Card image cap">
        @endif
        
        <div class="card-body">
            <h5 class="card-title">{{ $cl->name }}</h5>
            <h6 class="card-title">Rp. {{ $cl->price }}</h6>
            <form action="{{ route('add-cart') }}" method="POST">
            @csrf
                <input type="number" name="qty" id="qty" placeholder="Quantity" class="form-control"style="margin-bottom: 10px">
                <select name="size" id="size" class="form-select" aria-label="Default select example" style="margin-bottom: 10px;">
                    <option value="0" selected>Choose Size</option>
                    @foreach ($sizes as $s)
                        <option value="{{ $s->id }}">{{ $s->sizeName }}</option>
                    @endforeach
                </select>
                <input type="hidden" name="cloth" value="{{ $cl->id }}">
                <div class="add" style="text-align: center;">
                    <input type="submit" class="btn" value="Add to Cart" style="background-color: #FF6A6A; color: white;">
                </div>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection