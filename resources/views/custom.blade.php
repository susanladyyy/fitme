@extends('layouts.app')

@section('content')
<header class="masthead" style="height: 100vh; min-height: 500px; background-image: url('storage/custom/banner.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; margin-top: 35px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center" style="background-color: rgba(255,106,106, .3); border-radius: 20px;">
                <h1 class="fw-light" style="color: black; font-size: 9em; text-align: center;color: whitesmoke; font-weight: 900;">CUSTOM</h1>
            </div>
        </div>
    </div>    
</header>

<div class="container h-10" style="width: 80%; margin-bottom: 50px; margin-top: 50px;">
    <h1 style="color: rgb(255,106,106); font-weight: 600; text-align: center; margin-bottom: 30px;">Color Select</h1>
    <form action="" method="">
        @csrf
        <div class="color-input" style="display: flex; justify-content: space-evenly; margin-bottom: 30px;">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="color" id="color">
                <label class="form-check-label" for="color">
                    White
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="color" id="color">
                <label class="form-check-label" for="color">
                    Blue
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="color" id="color">
                <label class="form-check-label" for="color">
                    Orange
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="color" id="color">
                <label class="form-check-label" for="color">
                    Black
                </label>
            </div>
        </div>

        <div class="image" style="display: flex; justify-content: center; margin-bottom: 30px;">
            <img src="storage/custom/shirt.jpg" alt="" width="400px">
        </div>
        
        <div class="note">
            <p style="color: rgb(255,106,106); text-align: center;">Note: You can upload image to custom the front side of the t - shirt</p>
        </div>

        <div class="image-form" style="display: flex; justify-content: center;  margin-bottom: 30px;">
            <form action="" method>
                @csrf
                <input type="file" name="custom_image" id="custom_image">
                <input type="submit" value="Upload">
            </form>
        </div>

        <div class="add" style="text-align: center;">
            <input type="submit" class="btn" value="Add to Cart" style="background-color: #FF6A6A; color: white;">
        </div>
    </form>
</div>
@endsection