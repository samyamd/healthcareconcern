@extends('components.main')
@section('title','Our Image Gallery')
@section('meta')
<meta name="title" content=@lang ('messages.gallery_mt')>
<meta name="keyword" content=@lang ('messages.gallery_mk')>
<meta name="description" content=@lang ('messages.gallery_md')>

<meta name="og:title" content="@lang ('messages.gallery_mt')">
<meta name="og:description" content="@lang ('messages.gallery_md')">
<meta name="og:image" content="{{asset('assets/images/logo.png')}}">
<meta name="og:image:secure_url" content="{{asset('assets/images/logo.png')}}">
<meta property="og:type" content="website">

<meta property="og:image:width" content="500" />
<meta property="og:image:height" content="500" />

<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="@lang('messages.gallery_mt')" />
<meta name="twitter:description" content="@lang('messages.gallery_md')" />
<meta name="twitter:image" content="{{asset('assets/images/logo.png')}}" />
@endsection
@section('body')
<x-top-component title="Image Gallery" />
<section class="container-fluid my-5">
    <div class="row">
        {{-- @foreach ($gallery as $title => $image) --}}
        @for ($i = 1; $i < 11; $i++)
        <figure class="col-sm-4">
            <a href="{{asset('assets/gallery/'.$i.'.jpg')}}" data-lightbox="image-1" title="Health Concern Image Gallery" class="big"
                rel="{{__('messages.name')}}">
                <img src="{{asset('assets/gallery/'.$i.'.jpg')}}" data-src="{{asset('assets/gallery/'.$i.'.jpg')}}" alt="Health Concern Image Gallery"
                    class="w-100" style="height: 300px; object-fit: cover">
            </a>
            {{-- <figcaption class="text-center" style="font-weight: 500">Health Concern Image Gallery</figcaption> --}}
        </figure>
        @endfor
        {{-- @endforeach --}}
    </div>
</section>
@endsection
