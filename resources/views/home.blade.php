@extends('layouts.app')

@section('title', 'Y C Ads - Home')

@section('content')
    <x-home.hero />
    <x-home.video-section />
    <x-home.services />
    <x-home.why-us />
    <x-home.cta-form />
    <x-home.testimonials />
@endsection
