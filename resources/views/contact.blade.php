@extends('components.main')
@section('title',"Welcome to " . __('messages.name'))
@section('meta')
<meta name="title" content="@lang ('messages.mt')">
<meta name="description" content="@lang ('messages.md')">
<meta name="keyword" content="@lang ('messages.mk')">
@endsection
@section('body')
<x-top-component title="Contact Us" />
<div class="container my-4">
    <div class="contact-box">
        <div class="row no-gutters shadow bg-white" style="border-radius: 20px">
            <div class="col-sm-8 p-3 px-lg-5">
                <h2 class="text-center">Your Wishes</h2>
                {{-- <form action="{{route('contact.add')}}" method="post" class="form"> --}}
                <form action="#" method="post" class="form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name','contact') is-invalid @enderror"
                                    placeholder="Your Name" required>
                                @error('name','contact')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input type="hidden" name="for" value="contact">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email"
                                    class="form-control @error('email','contact') is-invalid @enderror"
                                    placeholder="Email or Phone Number" required>
                                @error('email','contact')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control"
                                placeholder="Enter Your phone number">
                        </div> --}}
                    <div class="form-group">
                        <label for="message">Send</label>
                        <textarea name="message" class="form-control @error('message','contact') is-invalid @enderror"
                            placeholder="Your message" rows="6" required></textarea>
                        @error('message','contact')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-info">Message &rarr;</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-4 contact-info px-5 py-3">
                <h2 class="text-center text-white">Our Details</h2>
                <div class="contact-icon p-3 bg-white">
                    <h4>Call Us</h4>
                    <a href="tel:@lang ('messages.phone')">@lang ('messages.phone')</a>
                    <a href="tel:@lang ('messages.mobile')">@lang ('messages.mobile')</a>
                    {{-- <span>@lang ('messages.mobile')</span> --}}
                    {{-- <span>+977 9841000000</span> --}}
                </div>
                {{-- <div class="contact-icon p-3 bg-white">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        <h4>Address</h4>
                        <span>+977 9876543210</span>
                        <span>+977 9841000000</span>
                    </div> --}}
                <div class="contact-icon p-3 bg-white">
                    <h4>Email Us</h4>
                    <a href="mailto:@lang ('messages.email')">@lang ('messages.email')</a>
                    {{-- <span>+977 9841000000</span> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection