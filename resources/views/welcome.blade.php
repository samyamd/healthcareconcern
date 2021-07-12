@extends('components.main')
@section('title',"Welcome to " . __('messages.name'))
@section('meta')
<meta name="title" content="@lang ('messages.mt')">
<meta name="description" content="@lang ('messages.md')">
<meta name="keyword" content="@lang ('messages.mk')">
@endsection
@section('body')

<div class="position-relative image-bg" style="background-image: url({{asset('assets/images/bg.png')}});">
    <div>
        <img src="{{asset('assets/images/theme.png')}}" alt="" style="width: 75%; height: auto;"
            class="middle-text d-md-block d-none">
        <h1 class="middle-text d-md-none">HEALTH CONCERN NEPAL</h1>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6 heading">
            <h2>Our Mission</h2>
            <p>To cater and consult innovative approaches in healthcare required for any group or organization.</p>
        </div>
        <div class="col-sm-6 heading">
            <h2>Our Vision</h2>
            <p>To be a leader in advocating and promoting newer ways of health services.</p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{asset('assets/images/about.jpg')}}" alt="About Us" class="image-rounded">
        </div>
        <div class="col-md-6 mt-4 mt-md-0 position-relative">
            <div class="d-flex flex-column justify-content-between align-items-lg-stretch h-100">
                <div class="heading">
                    <h2>WELCOME TO <span>@lang('messages.name')</span></h2>
                    <p class="my-2">Health concern is a social enterprise that serves as gap finder and gap filler in
                        the health sector of
                        Nepal with
                        combined package of informatics, innovation, insurance support and international linkage. We
                        have
                        collaborated with many
                        hospitals, insurance companies and international organizations for multiples of tasks including
                        idea
                        design, program
                        development and implementation support helping them to achieve best possible result through
                        innovative
                        approaches.
                        Simply, we do new and we do good as third party innovation consultant of health domain.</p>
                </div>
                <div>
                    <a href="{{url('about')}}" class="btn-custom mt-md-0 mt-4"> <span>Read More →</span> </a>
                </div>
                <img src="{{asset('assets/images/heart.svg')}}" style="position: absolute; left: -1.5rem; top: -2rem;">
            </div>

        </div>
    </div>
</div>
{{-- <div class="container mt-5">
    <div class="heading">
    <h2 class="text-center">Our Works</h2>
    </div>
    <div class="row">
        @foreach (__('messages.do') as $item)
            
        <div class="col-md-4 mt-3">
            <div class="card p-2 shadow-lg">
                <img src="{{asset($item['img'])}}" alt="{{$item['title']}}" width="60%" height="250" class="mx-auto">
                <h3 class="text-center" style="font-size: 21px">{{$item['title']}}</h3>
                <p class="text-justify">{{$item['text']}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div> --}}

@endsection