@extends('layouts.app')

@section('program')
    ebd-w02-Home
@endsection

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Add Lecturer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('lecturer.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('lecturer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <select name="ltr_ttl_id" id="ltr_ttl_id" class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @foreach ($titles as $item)
                            <option value="{{ $item->id}}">
                                {{ $item->ttl_name}}
                            </option>
                        @endforeach
                    </select>
 
                    @foreach ($titles as $item)
                       
                    @endforeach
                    @error('ltr_ttl_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Firstname :</strong>
                    <input class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="ltr_fname" type="text" placeholder="Fullname">
                    @error('ltr_fname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Lastname :</strong>
                    <input class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="ltr_lname" type="text" placeholder="Lastname">
                    @error('ltr_lname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>


            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>
</div>
@endsection

@section('footer')
<footer>
    <div>
        <p>© IT CSIT RBRU</p>
    </div>
</footer>
@endsection