@extends('layouts.app')

@section('project_status')
    ebd-w02-Home
@endsection

@section('content')
<div class="w-2/3 mx-auto my-10">
    <div class="row">
        <div class="">
            <div class="my-4 text-center font-bold">
                <h2>Edit project_status</h2>
            </div>
            <div class="pull-right">
                <a class="my-4 font-bold rounded text-xs bg-green-500 hover:bg-green-500/80 text-white p-4" href="{{ route('project_status.index') }}" enctype="multipart/form-data">
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
<div class="bg-white rounded my-6">
    <form action="{{ route('project_status.update',$project_status->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                  project_status Description
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="pjs_name" value="{{ $project_status->pjs_name }}" class="form-control"
                        placeholder="Tile Description">
                @error('name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
             
              <div class="flex items-center justify-between">
                <button class="font-bold rounded text-xs bg-blue-500 hover:bg-blue-500/80 text-white p-4" type="submit">
                  Submit
                </button>
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