<footer class="mt-3 w-100" style="background-image: url({{asset('assets/images/footer_bg.png')}})">
    <div class="container">
        <div class="text-center my-4">
            <img src="{{asset('assets/images/logo.png')}}" alt="@lang('messages.name')" class="text-center mx-auto" style="width: 240px">
        </div>
        <div class="row">
            <div class="col-md-6 heading">
                <h4>
                    CONTACT INFORMATION
                </h4>
                <div class="text-left mt-3">
                    <span class="slogan text-uppercase">Your Health our concern</span>
                    {{-- <h6>@lang('messages.company')</h6> --}}
                    <h6>Address : @lang('messages.location')</h6>
                    <h6>Email : <span>@lang('messages.email')</h6>
                    <h6>Phone : @lang('messages.phone')</h6>
                    <h6>Phone : @lang('messages.mobile')</h6>
                </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.3056727696558!2d85.33639431422101!3d27.70784698279166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1975c38b16c9%3A0x595bedca2293d849!2sHealth%20Concern%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1619629130323!5m2!1sen!2snp"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <div class="mt-4">
            <p class="h6 text-center">&copy; {{date('Y')}}, @lang('messages.company')</p>
            <p class="h6 text-center">All Rights Reserved</p>
        </div>
    </div>
</footer>