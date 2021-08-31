@extends('layouts.app')

@section("content")
<!-- hero section -->
@include("./components/hero")
<!-- products section -->
@include("./components/products")

<!-- usage section -->
@include("./components/usage")

<div class="row mt-5">
    <div class="bar"></div>
</div>

<!-- contact-form -->
@include("./components/contact-form")

@endsection