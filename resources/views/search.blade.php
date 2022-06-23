@extends('layouts.app')

@section('content')
<div class="filter" style="margin-top: 50px; margin-bottom: 50px; margin-left: 12%;">
    <div class="container h-10" style="margin-bottom: 20px;">    
        <h1>Search Result</h1>
    </div>
</div>

<div class="container h-10" style="margin-left: 12%; width: 80%; margin-bottom: 20px;">
    @if (count($cloths) == 0)
        <div class="d-flex justify-content-center">
            <img src="storage/search/not_found.jpg" alt="">
        </div>    
    @else
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
    @endif
</div>
@endsection