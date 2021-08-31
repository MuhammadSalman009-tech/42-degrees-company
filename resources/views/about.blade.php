@extends("./layouts/app")

@section("content")
<div class="mt-5"></div>
<div class="main-heading">
    About the 42 Degrees Company
</div>
<div class="container">
    <div class="container3">
        <div class="img">
            <img src="{{ url('/images/about-background.png') }}" alt="backround">
        </div>
        <div class="body">
            <div class="content">
                <h1>Mission statement</h1>
                <p>
                    To bring the cafeteria to your pocket, so that you can enjoy a hot beverage anytime, anywhere, while on the go far from any electrical devices.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="custom-container">
    <div class="row">
        <div class="col-md-8">
            <div class="history-content">
                <div class="history-heading">Our History</div>
                <p>
                The 42 Degrees Company was founded in 2017 in Valladolid,
                Spain. The can was developed by Spanish scientists and
                inventors to provide the convenience of having a hot beverage
                without any access to electrical devices or stores! They had
                the problem that a thermos didn’t stay warm during their trip,
                and instead wanted a hot beverage at any time, anywhere.
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="history-img">
                <img src="{{ url('/images/history.png') }}" alt="backround">
            </div>
        </div>
    </div>
    <div class="row">
        <p>
            They developed a can that could heat a beverage by 25°C. This was later developed and improved to increase
            the beverage’s temperature by +42°C over its initial temperature. And today, the company has a consistent
            product that makes it your personal co ee maker and thermos on the go. Besides, with 6 flavours, you decide
            which hot beverage you want, at any time!
        </p>
    </div>
</div>
<div class="custom-container">
    <div class="row">
        <div class="col-md-6">
            <div class="machinary">
                <div class="img">
                    <img src="{{ url('/images/machinary.png') }}" alt="machinary">
                </div>
                <div class="content">
                    <div class="heading">Quality Is Key</div>
                    <p>
                        All our products, have been through several quality
                        control points to ensure that every time you enjoy your
                        self-heating beverage, you have a consistent and quality
                        product in your hands. We control the full production chain,
                        and work only with certified international suppliers
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
        <div class="machinary">
                <div class="img">
                    <img src="{{ url('/images/machinary.png') }}" alt="machinary">
                </div>
                <div class="content">
                    <div class="heading">Innovation Is In Our Nature</div>
                    <p>
                    Innovation is what drives us! We believe that our
                    products and processes can always be improved,
                    therefore our R&D department is constantly
                    observing, researching and developing new
                    techniques, finding new technology and
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- team-section  -->
<div class="custom-container">
    <div class="row">
        <div class="col-md-12">
            <div class="team">
                <div class="img">
                    <img src="{{ url('/images/team.png') }}" alt="machinary">
                </div>
                <div class="content">
                    <div class="heading">Your Trusted Team</div>
                    <p>
                    Our diverse, dedicated and experienced team has great experience inside production, innovation, and the
technology behind our self-heating cans. With a great range of youth and experience, The 42 Degrees
Company is constantly developing new practices and proce
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container3">
        <div class="img">
            <img src="{{ url('/images/about-background.png') }}" alt="backround">
        </div>
        <div class="body">
            <div class="content content2">
                <h1>UN Global Compact</h1>
                <p>
                The 42 Degrees Company is a proud participant of the UN Global Compact since 2017, and we are a company
that truly believes that, we as a business, should do a conscious e ort to improve our sustainability and
minimizing our carbon footprint and impact on the world. We have a very diverse team, of intelligent and hungry people,
and together we strive for constant improvement of our products, processes and business environment.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- emergency relief section -->
<div class="main-heading">
Humanitarian / Support
</div>
<div class="custom-container">
    <div class="row mt-5">
        <div class="col-md-7">
            <div class="emergency-content">
                <div class="emergency-heading">Emergency Relief</div>
                <p>
                We proudly support and supply the UN and Red Cross, amongst
other global NGOs, with our product for their sta and emergency
relief departments. We believe that our product is able to support
humans experiencing natural or human disasters with hot
beverages and specialized recipes. A hot beverage will provide
both energy, comfort and warmth for someone in need.
                </p>
            </div>
        </div>
        <div class="col-md-5">
            <div class="emergency-img">
                <img src="{{ url('/images/emergency-relief.png') }}" alt="backround">
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-5">
            <div class="emergency-img">
                <img src="{{ url('/images/blue-light.png') }}" alt="backround">
            </div>
        </div>
        <div class="col-md-5 offset-1">
            <div class="emergency-content">
                <div class="emergency-heading">Blue Light</div>
                <p>
                Our product is perfect for our frontline workers in
healthcare, firefighting and police forces. When
working and constantly being alert, our product
is able to give them the possibility of having a hot
beverage anywhere they are for warmth and energy.
                </p>
            </div>
        </div>
    </div>

    <div class="row mt-3 mb-2">
        <p>
            During Covid-19 we proudly supported our local hospitals, and police forces with our product to keep them warm
and energized during their long and di icult working hours, and we will continue to show our support as we move forward.
        </p>
    </div>
</div>
@endsection