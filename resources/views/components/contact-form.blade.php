
<div class="custom-container">
    <div class="main-heading">
    Contact us
    </div>
    <div class="heading-text">
    We are always looking forward to hearing from you, and help you with any questions you have for us! We will get back to you as quickly as we can!
    </div>
<form class="contact-form mt-5">
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