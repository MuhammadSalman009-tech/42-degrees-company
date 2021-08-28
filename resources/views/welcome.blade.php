@extends('layouts.app')

@section('hero')
    <div class="hero">
        <div class="hero-background">
            <img src="{{ url('/images/hero-background.png') }}" alt="backround">
        </div>
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="hero-section1">
                        <p class="title">AUTUMN SEASON</p>
                        <h1 class="heading">A Hot Drink Anytime, Anywhere!</h1>
                        <p class="sub-title">
                            Without the need for batteries, electricity, or microwave,
                            your self-heating beverages will heat up in 3 minutes!
                        </p>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hero-section2">
                            <img src="{{ url('/images/section2.png') }}" alt="hero">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("content")


@endsection