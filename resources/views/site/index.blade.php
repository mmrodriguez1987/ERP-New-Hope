@extends('site.master') 

@section('seo')
	{!! SEO::generate(true) !!}
@endsection

@section('main-content-page')
    @include('site.partial.home.countdown')
    @include('site.partial.home.about-us')
    @include('site.partial.home.services')
    @include('site.partial.home.latestnews')
    @include('site.partial.home.pastors')
    @include('site.partial.home.books')
    @include('site.partial.home.armsoflove')
    @include('site.partial.home.devotional')
    @include('site.partial.home.incava')
@endsection

