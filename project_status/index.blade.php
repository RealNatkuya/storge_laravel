@extends('../layouts.app')


@section('title','ebd-w01-project_status')


@section('header')
    <h1 class="text-center text-6xl text-red-600">Project_status</h1>
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
                    @foreach ($project_status as $project_status)
                    <tr>
                        <td>{{ $project_status->id }}</td>
                        <td>{{ $project_status->pjs_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
