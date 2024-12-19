@extends('layouts.app')

@section('program')
    ebd-w02-Home
@endsection

@section('content')
<div class="w-2/3 mx-auto my-10">
    <div class="row">
        <div class="">
            <div class="my-4 text-center font-bold">
                <h2>Edit Student</h2>
            </div>
            <div class="pull-right">
                <a class="my-4 font-bold rounded text-xs bg-green-500 hover:bg-green-500/80 text-white p-4" href="{{ route('student.index') }}" enctype="multipart/form-data">
                    Back</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
          <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div>
            <p class="font-bold">{{ $message }}</p>
          </div>
        </div>
      </div>
    @endif
<div class="bg-black rounded my-6">
    <form action="{{ route('student.update',$student->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">

                <div class="form-group">
                    <strong>Student ID :</strong>
                    <input class=" py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline"
                     name="std_sid"
                     type="text"
                     placeholder="Student ID"
                     value="{{$student->std_sid}}">
                    @error('std_sid')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                  <strong>Title:</strong>
                  <select name="std_ttl_id" id="std_ttl_id" class=" py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline">
                      @foreach ($titles as $item)
                          <option value="{{ $item->id}}"
                            @if ($item->id == $student->std_ttl_id)
                                @selected(true)
                            @endif
                          >
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
                  <input class=" py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline"
                   name="std_fname"
                   type="text"
                   placeholder="Fullname"
                   value="{{$student->std_fname}}">
                  @error('std_fname')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                  <strong>Lastname :</strong>
                  <input class=" py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline"
                   name="std_lname"
                   type="text"
                   placeholder="Lastname"
                   value="{{$student->std_lname}}">
                  @error('std_lname')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
              </div>

              <strong>Program:</strong>
              <select name="std_pgm_id" id="std_pgm_id" class=" py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline">
                  @foreach ($programs as $item)
                      <option value="{{ $item->id}}"
                        @if ($item->id == $student->std_pgm_id)
                            @selected(true)
                        @endif
                      >
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