@extends('layouts.app')

@section('tools')
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
                <h2>Tools Detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tools.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <ul>
        <li>id : {{ $tools->id}}</li>
        <li>description : {{ $tools->tls_name }}</li>
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