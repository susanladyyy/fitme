@extends('layouts.app')

@section('content')
<div style="padding: 0; margin-top: 35px; font-weight: 500; height: fit-content; margin-bottom: -30px;">
    <div class="split-screen" style="display: flex; flex-direction: row">
        <div
            class="left"
            style="
            height: auto;
            width: 100%;
            display: flex;
            justify-content: right;
            align-items: right;
            background-image: url('storage/login/model.png');
            background-size: cover;
            "
        >
            <section
                class="copy"
                style="text-align: right; position: relative; right: 50px"
                >
                <h1 style="font-size: 90px; letter-spacing: 8px">FITME</h1>
                <p style="font-size: 30px; position: relative; bottom: 30px">
                    Explore Your Extraordinary
                </p>
            </section>
        </div>

        <div
            class="right"
            style="
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            width: 100%;
            background-color: #f0f0f0;
            "
        >
            <form method="POST" action="{{ route('login') }}" style="width: 328px">
            @csrf    
                <section class="copy" style="color: black; text-align: center; margin-top: 20px;">
                    <h2 style="color: #ff6a6a">Login</h2>

                    @if($errors->any())
                        @foreach ($errors->all() as $e)
                            <div class="alert alert-danger" role="alert">
                                {{ $e }}
                            </div>
                        @endforeach
                    @endif

                    @if(Session::has('unsuccessful'))
                        <div class="alert alert-danger">
                            {{ Session::get('unsuccessful') }}
                        </div>
                    @endif
                </section>
                <div class="input-container email">
                    <input
                    type="email"
                    id="email"
                    placeholder="Email"
                    name="email"
                    style="
                        display: block;
                        width: 100%;
                        box-sizing: border-box;
                        border-radius: 8px;
                        border: 1px solid;
                        border-color: #ff6a6a;
                        padding: 0.4cm;
                        margin-bottom: 1.25rem;
                        font-size: 0.875rem;
                    "
                    />
                </div>

                <div class="input-container password">
                    <input
                    type="password"
                    id="password"
                    placeholder="Password"
                    name="password"
                    style="
                        display: block;
                        width: 100%;
                        box-sizing: border-box;

                        border-radius: 8px;
                        border: 1px solid;
                        padding: 0.4cm;
                        border-color: #ff6a6a;
                        margin-bottom: 1.25rem;
                        font-size: 0.875rem;
                    "
                    />
                    <i class="eyes">
                    <img
                        src="storage/login/eyes.svg"
                        alt=""
                        style="
                        position: relative;
                        float: right;
                        bottom: 45px;
                        right: 20px;
                        width: 20px;
                        height: auto;
                        "
                    /></i>
                </div>
                <input
                    class="login-btn"
                    type="submit"
                    style="
                    display: block;
                    width: 100%;
                    background: #ff6a6a;
                    color: white;
                    font-weight: 700;
                    border: none;
                    padding: 1rem;
                    border-radius: 8px;
                    font-size: 0.75rem;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                    "
                    value="LOGIN"
                >
                </input>
                <a href="#" class="forgot-pass">
                    <p style="color: #ff6a6a"><strong> Forgot Password?</strong></p>
                </a>

                <h2
                    style="
                    text-align: center;
                    font-size: 20px;
                    margin-top: 20px;
                    margin-bottom: 20px;
                    "
                >
                    or
                </h2>
                <div class="other-login-method">
                    <div class="facebook" style="display: flex">
                    <button
                        style="
                        width: 100%;
                        background: #4267b2;
                        color: white;
                        font-weight: 700;
                        border: none;
                        padding: 0.5rem;
                        border-radius: 8px;
                        font-size: 0.75rem;
                        text-transform: uppercase;
                        letter-spacing: 0.5px;
                        margin-bottom: 1rem;
                        "
                    >
                        <img
                        src="storage/login/facebook.png"
                        alt=""
                        style="
                            width: 30px;
                            height: auto;
                            float: left;
                            position: relative;
                            left: 80px;
                            top: 5px;
                        "
                        />
                        <p>Facebook</p>
                    </button>
                    </div>

                    <div class="Apple" style="display: flex">
                    <button
                        style="
                        width: 100%;
                        background: #000000;
                        color: white;
                        font-weight: 700;
                        border: none;
                        padding: 0.5rem;
                        border-radius: 8px;
                        font-size: 0.75rem;
                        text-transform: uppercase;
                        letter-spacing: 0.5px;
                        margin-bottom: 1rem;
                        "
                    >
                        <img
                        src="storage/login/apple.svg"
                        alt=""
                        style="
                            width: 30px;
                            height: auto;
                            float: left;
                            position: relative;
                            left: 80px;
                            top: 5px;
                        "
                        />
                        <p>Apple</p>
                    </button>
                    </div>

                    <div class="Google" style="display: flex">
                    <button
                        style="
                        width: 100%;
                        background: #ffffff;
                        color: black;
                        font-weight: 700;
                        border: solid grey 1px;
                        padding: 0.5rem;
                        border-radius: 8px;
                        font-size: 0.75rem;
                        text-transform: uppercase;
                        letter-spacing: 0.5px;
                        margin-bottom: 1rem;
                        "
                    >
                        <img
                        src="storage/login/google.svg"
                        alt=""
                        style="
                            width: 30px;
                            height: auto;
                            float: left;
                            position: relative;
                            left: 80px;
                            top: 5px;
                        "
                        />
                        <p>Google</p>
                    </button>
                    </div>
                </div>
                <div class="register-container">
                    <p>
                    Don't have an account yet?
                    <a href="{{ route('register') }}" style="color: #ff6a6a">
                        <strong> Register Here!</strong>
                    </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection