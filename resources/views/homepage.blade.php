@extends('layouts.app')

@section('title')
    ebd-w02-Home
@endsection

@section('banner')
    <div class="container mx-auto text-center">
        <h1 class="text-2xl font-bold">Home</h1>
    </div>
@endsection

@section('content')
<div
  class="hero min-h-screen"
  style="background-image: url({{ asset('imgyou.jpg') }});">
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md">
      <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
      <p class="mb-5">
        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
        quasi. In deleniti eaque aut repudiandae et a id nisi.
      </p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </div>
</div>
@endsection

@section('footer')
<footer>
    <div>
        <p>© IT CSIT RBRU</p>
    </div>
</footer>
@endsection
