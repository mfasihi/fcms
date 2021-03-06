@extends('layouts.master')

@section('content')
    @include('partials.preloader')
    @include('partials.menu')
    @include('partials.header')
    @include('partials.features')
    @include('partials.services')
    @include('partials.specialFeatures')
    @include('partials.prices')
    @include('partials.team')
    @include('partials.testimonial')
    @include('partials.faq')
    @include('partials.clients')
    @include('partials.blog')
    @include('partials.footer')
@endsection
