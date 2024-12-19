@extends('../layouts.app')


@section('title','ebd-w01-lecturer')


@section('header')
    <h1 class="anuphan-700 text-center text-6xl text-red-600">Lecturer</h1>
@endsection
   
@section('content')
    <div class="container mx-auto">
        <div class="">
            <a class="font-bold rounded text-xs bg-blue-500 hover:bg-green-500/80 text-white p-4"
             href="{{ route('lecturer.create') }}"> Create Lecturer</a>
        </div>
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ชื่อ</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lecturers as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title->ttl_name }}
                            {{ $item->ltr_fname }}
                            {{ $item->ltr_lname }}
                        </td>
                        <td>
                            <form action="{{ route('lecturer.destroy',$item->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('lecturer.edit',$item->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <a class="btn btn-sm btn-warning" href="{{ route('lecturer.show',$item->id) }}">Detail</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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