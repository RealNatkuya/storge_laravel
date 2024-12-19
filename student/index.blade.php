@extends('../layouts.app')


@section('student','ebd-w01-student')


@section('header')
    <h1 class="anuphan-700 text-center text-6xl text-red-600">Student</h1>
@endsection
   
@section('content')
    <div class="container mx-auto">
        <div class="">
            <a class="font-bold rounded text-xs bg-blue-500 hover:bg-green-500/80 text-white p-4"
             href="{{ route('student.create') }}"> Create Student</a>
        </div>
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>รหัสนักศึกษา</th>
                        <th>ชื่อ</th>
                        <th>สาขา</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->std_sid }}</td>
                        <td>{{ $item->title->ttl_name }}
                            {{ $item->std_fname }}
                            {{ $item->std_lname }}
                        <td>{{ $item->program->pgm_name }}
                        </td>
                        <td>
                            <form action="{{ route('student.destroy',$item->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('student.edit',$item->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <a class="btn btn-sm btn-warning" href="{{ route('student.show',$item->id) }}">Detail</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $students->withQueryString()->links() !!}
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