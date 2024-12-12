@extends('layouts.app')

@section('project_type')
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
<a class="btn btn-primary" href="{{ route('project_type.create') }}"> เพิ่มข้อมูล</a>
<table class="table-auto table-zebra w-8/12 ">
    <thead>
        <tr>
            <th>ID</th>
            <th>คำอธิบาย</th>
            <th>-</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($project_types as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->pjt_name }}</td>
            <td>
                <form action="{{ route('project_type.destroy',$item->id) }}" method="Post">
                    <a class="btn btn-primary" href="{{ route('project_type.edit',$item->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('footer')
<footer>
    <div>
        <p>© IT CSIT RBRU</p>
    </div>
</footer>
@endsection
