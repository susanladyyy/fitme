@extends('layouts.app')

@section('content')
<div class="home" style="background-color: white;">
    <div class="header" style="background-color: #FF6A6A; height: 335px; margin-top: 35px;">
        <div class="left" style="float: left;">
            <div class="image">
                <img src="storage/home/woman_header.png" alt="" style="width: 250px; position: relative; right: -100px;">
                <img src="storage/home/home_header_image.png" alt="" style="width: 400px; padding-top: 60px; position: relative; left: -80px;">
            </div>
        </div>
        <div class="right">
            <h1 style="color: white; font-weight: 900; padding-top: 100px;">Explore you Extraordinary</h1>
            <p style="color: white; font-size: 1.2em;">Be Trendy with FitMe high quality clothing.</p>
            <a href="#start" style="background-color: white; text-decoration: none; color: black; padding: 10px; font-size: 1em; border-radius: 5px;" >Start Now</a>
        </div>
    </div>

    <div id="start" style="margin-top: 50px;">
        <div class="div-1">
            <div class="text-div-1" style="float: left; margin-left: 100px; width: 450px; padding-top: 90px;">
                <h1 style="margin-bottom: 20px;">100% Premium Cotton 30s with variety of colors</h1>
                <p>
                    FitMe makes sure that every product is made out of high quality natural fiber to guarantee comfort and style.
                </p>
                <div class="list" style="width: 400px; margin-left: -35px;">
                    <ul>
                        <li style="display: inline; position:relative; padding-right: 10px;"> 
                            <img src="storage/home/check.jpg" alt="" style="border-radius: 50%;" width="20px;">
                            Soft and delicate
                        </li>
                        <li style="display: inline; position:relative; padding-right: 10px;">
                            <img src="storage/home/check.jpg" alt="" style="border-radius: 50%;" width="20px;">
                            Breezy
                        </li>
                        <li style="display: inline; position:relative; padding-right: 10px;">
                            <img src="storage/home/check.jpg" alt="" style="border-radius: 50%;" width="20px;">
                            High absorption
                        </li>
                        <li style="display: inline; position:relative; padding-right: 10px;">
                            <img src="storage/home/check.jpg" alt="" style="border-radius: 50%;" width="20px;">
                            Won't tear easily
                        </li>
                    </ul>
                </div>
            </div>
            <div class="img-div-1">
                <img src="storage/home/cloth_div-1.jpg" alt="" width="600px" style="margin-left: 150px;">
            </div>
        </div>

        <div class="div-2" style="background-color: #FF6A6A; margin-bottom: 100px; height: 400px;">
            <div class="img-div-2">
                <img src="storage/home/clown.jpg" alt="" width="300px" style="position: relative; left: 70px; top: -25px;">
            </div>

            <div class="text-div-2" style="float: right; color: white; text-align: right;">
                <h1 style="position: relative; top: -320px; right: 150px;">Unleash your creativity into a piece of clothing</h1>
                <p style="position: relative; top: -310px; right: 150px; font-size: 1.2em;">
                    Let your creativity be expressed with FitMe
                </p>
                <a href="" style="background-color: white; text-decoration: none; color: black; padding: 10px; font-size: 1em; border-radius: 5px; position: relative; top: -300px; right: 150px;" >Create 
                    <span style="color: #FF6A6A; font-weight: 900;">T - Shirt</span></a>
            </div>
        </div>
    </div>
</div>
@endsection
