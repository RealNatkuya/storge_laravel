@extends('layouts.app')

@section('title')
    ebd-w02-Home
@endsection

@section('banner')
<header>
    <div class="px-5 py-5">
        <h1 class="text-2xl">Home</h1>
    </div>
</header>
@endsection

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Title Detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('title.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <ul>
        <li>id : {{ $title->id}}</li>
        <li>description : {{ $title->ttl_name }}</li>
    </ul>
</div>
@endsection

@section('footer')
<footer>
    <div>
        <p>© IT CSIT RBRU</p>
    </div>
</footer>
@endsection