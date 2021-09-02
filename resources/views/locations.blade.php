@extends("./layouts/app")

@section("content")
<div class="mt-5"></div>
<div class="main-heading">
Where To Find Self-Heating Cans
</div>
<div class="custom-container">
    <div class="map-container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2983.5150479370013!2d-4.698711284700848!3d41.60137289066521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4713720e8ceaff%3A0x170b1c025ca9c6bf!2sC.%20del%20Nitrogeno%2C%208%2C%2047012%20Valladolid%2C%20Spain!5e0!3m2!1sen!2s!4v1630592911785!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="map-btn">
            <a href="">Try our tasting kit</a>
        </div>
    </div>
</div>

<div class="main-heading">
Alphabetical order of countries
</div>
<div class="container">
    <div class="row mt-3" id="country-row">
        @foreach($countries as $country)
        <div class="col-md-2 offset-1 mt-3">
            <div class="country">{{$country}}</div>
        </div>
        @endforeach 
    </div>
</div>
@include("./components/contact-form")
<div class="custom-container">
    <div class="main-heading">
    Important notice
    </div>
    <div class="heading-text">
    If you are not able to find one in your country, please let us know and we will
work to get it to you. If you are looking to sell our product in your country or store
please contact us and we will get back to you as soon as possible.
    </div>
</div>
@endsection