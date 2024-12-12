@extends('layouts.app')

@section('program')
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
<a class="btn btn-primary" href="{{ route('program.create') }}"> เพิ่มข้อมูล</a>
<table class="table-auto table-zebra w-8/12 ">
    <thead>
        <tr>
            <th>ID</th>
            <th>คำอธิบาย</th>
            <th>-</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($programs as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->pgm_name }}</td>
            <td>
                <form action="{{ route('program.destroy',$item->id) }}" method="Post">
                    <a class="btn btn-primary" href="{{ route('program.edit',$item->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a class="btn btn-sm btn-warning" href="{{ route('program.show',$item->id) }}">Detail</a>
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
