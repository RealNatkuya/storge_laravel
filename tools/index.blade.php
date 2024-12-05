@extends('../layouts.app')


@section('title','ebd-w01-tools')


@section('header')
    <h1 class="text-center text-6xl text-red-600">tools</h1>
@endsection
   
@section('content')
    <div class="container mx-auto">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ชื่อ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tools as $tools)
                    <tr>
                        <td>{{ $tools->id }}</td>
                        <td>{{ $tools->tls_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection