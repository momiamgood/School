@extends('../layout')

@section('main_content')
    <h1>Мои курсы</h1>
    <div class="">
        @foreach($courses as $course)
            <p>Название курса: <a><b>{{ $course->name }}</b></a></p>
        @endforeach
    </div>
@endsection
