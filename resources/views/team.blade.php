@extends('components.main')
@section('title',"Welcome to " . __('messages.name'))
@section('meta')
<meta name="title" content="@lang ('messages.mt')">
<meta name="description" content="@lang ('messages.md')">
<meta name="keyword" content="@lang ('messages.mk')">
@endsection

@section('body')
<x-top-component title="Our Hardworking Team" />

<div class="container mt-4 heading">
    <h2>Meet the team</h2>
    <div class="row">
        @foreach (__('messages.team') as $team)
            
        <div class="col-sm-4 mt-3">
            <div class="card shadow px-2 py-3">
                <h5>{{$team['name']}}</h5>
                <span>{{$team['post']}}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection