@extends('layouts.app')
<style>
    .input-image{
        margin-bottom: 10px;
    }

    .item{
        margin-bottom: 20px;
    }

    .item a{
        color: #FF6A6A;
        font-weight: 700;
    }
    .item a:hover{
        color: #FF6A6A;
        text-decoration: underline;
    }
</style>
@section('content')
<div class="container" style="margin-top: 60px; margin-bottom: 50px;">
    <div class="card" style="margin-bottom: 50px;">
        <div class="card-body">
            @if ($user->profile == "")
            <div class="left-container" style="width: 400px; float: left; position: relative; top: 200px;">
                <form action="" method="POST">
                    <div class="input-image">
                        <input type="file" name="profile" id="profile">
                    </div>
                    <div class="input-image">
                        <input type="submit" value="Update Profile" style="background-color: transparent; border-radius: 8px;">
                    </div>
                </form>
            </div>       
            @else
            <div class="left-container" style="width: 400px; float: left; position: relative; top: 110px;">
                    <img src="storage/profile/{{ $user->profile }}" alt="" style="border-radius: 10px; border: #FF6A6A 3px solid;" width="350px;">
            </div>
            @endif
            <div class="right-container" style="width: 800px; float: right;">
                <h1 style="color: #FF6A6A; font-weight: 900; text-align: center;">{{ $user->name }}</h1>
                <hr style="margin-bottom: 70px;">

                <div class="user-menu">
                    <div class="item">
                        <a href="#">Coupons & Deals</a>
                        <hr>
                    </div>
                    <div class="item">
                        <a href="#">Notification</a>
                        <hr>
                    </div>
                    <div class="item">
                        <a href="#">Privacy Setting</a>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="transaction">
            @if (count($transactions) == 0)
                <h1 style="text-align: center; color: #FF6A6A;">No item in cart</h1>
            @else
                <h1 style="text-align:center; color: #FF6A6A; margin-bottom: 20px; font-weight: 600;">Transaction History</h1>
                @for ($i = 0; $i < count($transactions); $i++)
                <div class="card" style="border: #FF6A6A 2px solid; margin-bottom: 20px;">
                    <div class="card-body">
                        <div class="left" style="float: left; width: 200px; display: flex;">
                        @if ($transactions[$i]->type == 1)
                            <img style="height: 250px;" class="card-img-top" src="storage/cloth/shirt/{{ $transactions[$i]->image }}" alt="Card image cap">
                        @elseif ($transactions[$i]->type == 2)
                            <img style="height: 250px;" class="card-img-top" src="storage/cloth/t-shirt/{{ $transactions[$i]->image }}" alt="Card image cap">
                        @elseif($transactions[$i]->type == 3)
                            <img style="height: 250px;" class="card-img-top" src="storage/cloth/jacket/{{ $transactions[$i]->image }}" alt="Card image cap">
                        @endif
                        </div>
                        <div class="right" style="float: right; width: 800px; color: #FF6A6A;">
                            <h3 class="card-title" style="font-weight: 600;">{{ $transactions[$i]->name }}</h3>
                            <div class="desc" style="display: flex;">
                                <p class="card-text" style="margin-right: 30px;">Color: {{ $transactions[$i]->color }}</p>
                                <p class="card-text">Size: {{ $transactions[$i]->size }}</p>
                            </div>
                            <p class="card-text" style="margin-bottom: 30px;">Quantity: {{ $transactions[$i]->qty }}</p>
                            <h4 class="card-title" style="font-weight: 600;">Rp {{ $transactions[$i]->price * $transactions[$i]->qty }}</h4>
                        </div>
                    </div>
                </div>
                @endfor
            @endif
        </div>
    </div>
</div>
@endsection