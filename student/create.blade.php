@extends('layouts.app')

@section('program')
    ebd-w02-Home
@endsection

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Add Student</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('student.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">
                    <strong>Student ID :</strong>
                    <input class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    name="std_sid" 
                    type="text" 
                    placeholder="Student ID"
                    >
                    @error('std_sid')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <strong>Title:</strong>
                    <select name="std_ttl_id" id="std_ttl_id" class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @foreach ($titles as $item)
                            <option value="{{ $item->id}}">
                                {{ $item->ttl_name}}
                            </option>
                        @endforeach
                    </select>
 
                    @foreach ($titles as $item)
                       
                    @endforeach
                    @error('std_ttl_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <strong>Firstname :</strong>
                    <input class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    name="std_fname" 
                    type="text" 
                    placeholder="Fullname"
                    >
                    @error('std_fname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <strong>Lastname :</strong>
                    <input class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    name="std_lname" 
                    type="text" 
                    placeholder="Lastname"
                    >
                    @error('std_lname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <strong>Program:</strong>
                    <select name="std_pgm_id" id="std_pgm_id" class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @foreach ($programs as $item)
                            <option value="{{ $item->id}}">
                                {{ $item->pgm_name}}
                            </option>
                        @endforeach
                    </select>
 
                    @foreach ($programs as $item)
                       
                    @endforeach
                    @error('std_pgm_id')
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