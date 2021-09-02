@extends("./layouts/app")

@section("content")
<!-- Instructions-section -->
<div class="custom-container navigation-pills">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-short-instructions" data-bs-toggle="pill" data-bs-target="#short-instructions" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Short Instructions</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-complete-instructions" data-bs-toggle="pill" data-bs-target="#pills-complete-instructions" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Comlete Instructions</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="short-instructions" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="row mt-4">
          <div class="col-md-4">
              <div class="instruction">
                  <div class="img">
                    <img src="{{ url('/images/section2.png') }}" alt="backround">
                  </div>
                  <div class="heading">English</div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="instruction">
                  <div class="img">
                    <img src="{{ url('/images/section2.png') }}" alt="backround">
                  </div>
                  <div class="heading">English</div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="instruction">
                  <div class="img">
                    <img src="{{ url('/images/section2.png') }}" alt="backround">
                  </div>
                  <div class="heading">English</div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-4">
              <div class="instruction">
                  <div class="img">
                    <img src="{{ url('/images/section2.png') }}" alt="backround">
                  </div>
                  <div class="heading">English</div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="instruction">
                  <div class="img">
                    <img src="{{ url('/images/section2.png') }}" alt="backround">
                  </div>
                  <div class="heading">English</div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="instruction">
                  <div class="img">
                    <img src="{{ url('/images/section2.png') }}" alt="backround">
                  </div>
                  <div class="heading">English</div>
              </div>
          </div>
      </div>
  </div>
  <div class="tab-pane fade" id="complete-instructions" role="tabpanel" aria-labelledby="pills-profile-tab">salman</div>
</div>
</div>

<!-- usage section -->
@include("./components/usage")

<!-- label-section -->
<div class="custom-container label-section">
    <div class="row">
        <div class="col-md-6 offset-2">
            <div class="label">
                <div class="heading">
                Image of the label
                </div>
                <div class="text">
                    All the instructions are found on the label. Scan the
QR code to watch the instruction video on your devices.
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="img">
                <img src="{{ url('/images/label.png') }}" alt="backround">
            </div>
        </div>
    </div>
</div>

<!-- testimonials-section -->
<div class="main-heading">
    Testimonials
</div>
<div class="custom-container">
    <div class="row">
        <div class="col-md-4">
            <div class="testimonial">
                <div class="qoute">
                    "Now this is a really good thing to have when outside."
                </div>
                <div class="author">
                    Customer, Seb
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="testimonial">
                <div class="qoute">
                "Now this is an amazing product all by itself I must admit! Really good."
                </div>
                <div class="author">
                    Customer, Seb
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="testimonial">
                <div class="qoute">
                    "Now this is a really good thing to have when outside."
                </div>
                <div class="author">
                    Customer, Seb
                </div>
            </div>
        </div>
    </div>
</div>

@endsection