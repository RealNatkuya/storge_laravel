@extends('layouts.app')

@section('lecturer')
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
                <h2>lecturer Detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('lecturer.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <ul>
        <li>id : {{ $lecturer->id}}</li>
        <li>name : {{ $lecturer->ltr_fname }}</li>
        <li>surname : {{ $lecturer->ltr_lname }}</li>
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