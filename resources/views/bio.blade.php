@extends('layouts.app')

@section('title')
  EBD-002-BIO  
@endsection

@section('banner')
    <div class="container mx-auto text-center">
        <h1 class="text-2xl font-bold">BIO</h1>
    </div>
@endsection

@section('content')
    <h2 class="text-center font-bold text-4xl mt-8">Announcement</h2>
    <div class="container mx-auto mt-12">
        <div class="card lg:card-side bg-base-100 shadow-xl transition hover:shadow-2xl hover:scale-105 duration-300">
            <figure>
                <img src="{{ asset('man.jpg') }}" alt="man" class="w-full object-cover lg:w-64">
            </figure>
            <div class="card-body">
                <h2 class="card-title text-3xl text-indigo-600 font-bold">Mr. Tecahasit Meannarong</h2>
                <p class="text-gray-600">Greeting, I'm an introvert.</p>
                <p class="text-gray-800 mt-4">
                    Nat is interested in computers, therefore, chose to study at Rambhai Barni Rajabhat University, Faculty of Computer Science and Information Technology, Information Technology branch (2022-2025).
                </p>
                <p class="text-gray-800 mt-4">
                    <span class="font-semibold">Skills:</span> HTML, CSS, JavaScript, Dart
                </p>
                <div class="mt-4">
                    <p class="text-gray-800">
                        <span class="font-semibold">Contact:</span> 6514421002@rbru.ac.th <br>
                        <span class="font-semibold">Tel:</span> 092-642-6960
                    </p>
                </div>
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


