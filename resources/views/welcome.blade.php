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
<div class="products-title">
    Our Self-Heating Can Flavors
</div>
<div class="row mt-5">
    <div class="col-md-4">
        <div class="product">
            <div class="content">
                <div class="type">
                    SELF-HEATING
                </div>
                <div class="title">
                    Coffee Arabica Without Sugar
                </div>
            </div>
            <div class="img">
                <img src="{{ url('/images/coffee-without-sugar.png') }}" alt="coffee-without-sugar">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="product">
            <div class="content">
                <div class="type">
                    SELF-HEATING
                </div>
                <div class="title">
                    Coffee Arabica Without Sugar
                </div>
            </div>
            <div class="img">
                <img src="{{ url('/images/coffee-without-sugar.png') }}" alt="coffee-without-sugar">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="product">
            <div class="content">
                <div class="type">
                    SELF-HEATING
                </div>
                <div class="title">
                    Coffee Arabica Without Sugar
                </div>
            </div>
            <div class="img">
                <img src="{{ url('/images/coffee-without-sugar.png') }}" alt="coffee-without-sugar">
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-4">
        <div class="product">
            <div class="img">
                <img src="{{ url('/images/coffee-without-sugar.png') }}" alt="coffee-without-sugar">
            </div>
            <div class="content">
                <div class="type">
                    SELF-HEATING
                </div>
                <div class="title">
                    Coffee Arabica Without Sugar
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="product">
            <div class="img">
                <img src="{{ url('/images/coffee-without-sugar.png') }}" alt="coffee-without-sugar">
            </div>
            <div class="content">
                <div class="type">
                    SELF-HEATING
                </div>
                <div class="title">
                    Coffee Arabica Without Sugar
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="product">
            <div class="img">
                <img src="{{ url('/images/coffee-without-sugar.png') }}" alt="coffee-without-sugar">
            </div>
            <div class="content">
                <div class="type">
                    SELF-HEATING
                </div>
                <div class="title">
                    Coffee Arabica Without Sugar
                </div>
            </div>
        </div>
    </div>
</div>
<div class="custom-container">
<form class="contact-form">
  <div class="row">
    <div class="col-md-6">
        <label for="name" class="form-label">First & last name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">E-mail address</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
  </div>
  <div class="row">
      <div class="col-12">
        <label for="message" class="form-label">Message</label>
        <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
      </div>
  </div>
  <div class="row mt-3">
      <div class="col-12">
        <div class="contact-info">
            <div class="custom-btn">
                <button type="submit">Submit</button>
                <span>or</span>
            </div>
            <div class="email">
                <div class="img">
                    <img src="{{ url('/images/email-icon.png') }}" alt="email">
                </div>
                <div class="text">
                &nbsp;&nbsp;&nbsp;support@42Degrees.com
                </div>
            </div>
            <div class="phone">
                <div class="img">
                    <img src="{{ url('/images/phone-icon.png') }}" alt="phone">
                </div>
                <div class="text">
                &nbsp;&nbsp;&nbsp;phone: +1 0 23213213
                </div>
            </div>
        </div>
      </div>
  </div>
</form>
</div>
@endsection