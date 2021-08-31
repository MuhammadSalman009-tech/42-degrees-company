@extends("./layouts/app")

@section("content")
<div class="mt-5"></div>
<div class="main-heading">
    Our Distribtion
</div>
<div class="custom-container">
    <div class="row">
        <div class="col-md-4 offset-2">
            <div class="distribution">
                <div class="login-distributor">
                    <p class="text">Login to your distributor page</p>
                    <a href="">Click Here</a>
                </div>
            </div>
        </div>
        <div class="col-md-5 offset-1">
        <div class="distribution-img">
            <img src="{{ url('/images/distribution.png') }}" alt="backround">
        </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="distribution-paragraph">
            <p>
            We work directly and in partnership with local distributors to bring the product
directly to our customers favorite shops. Not forge ing customers that are on
the go, outdoors or work far from electrical devices.
            </p>
        </div>
    </div>
</div>
<!-- sector-section -->
<div class="main-heading">
    Our Sector
</div>
<div class="custom-container">
    <div class="row">
        <div class="col-md-4">
            <div class="sector">
                <div class="img">
                    <img src="{{ url('/images/diy.png') }}" alt="backround">
                </div>
                <div class="heading">
                    <h1>DIY</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="sector">
                <div class="img">
                    <img src="{{ url('/images/outdoor.png') }}" alt="backround">
                </div>
                <div class="heading">
                    <h1>Outdoor</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="sector">
                <div class="img">
                    <img src="{{ url('/images/convenience.png') }}" alt="backround">
                </div>
                <div class="heading">
                    <h1>Convenience</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="distribution-paragraph">
            <p>
            For more information about distributing The 42 Degrees Company’s
Self Heating beverages, and you are looking to expand your current product lines,
please contact us through the form below and we will get in direct contact with you and share
more information about us. We look forward to beginning our partnership together!
            </p>
        </div>
    </div>
</div>
<!-- contact-form -->
@include("./components/contact-form2")
@endsection