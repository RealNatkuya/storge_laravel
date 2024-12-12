@extends('../layouts.app')


@section('title','ebd-w01-lecturer')


@section('header')
    <h1 class="anuphan-700 text-center text-6xl text-red-600">Lecturer</h1>
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
                    @foreach ($lecturers as $lecturer)
                    <tr>
                        <td>{{ $lecturer->id }}</td>
                        <td>{{ $lecturer->title->ttl_name }}
                            {{ $lecturer->ltr_lname }}
                            {{ $lecturer->ltr_fname }}
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