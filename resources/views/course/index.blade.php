@extends('../layout')

@section('main_content')
    <h1>Мои курсы</h1>
    <div class="">
        @foreach($courses as $course)
            <p>Название курса: <a href="/course/{{$course->id}}"><b>{{ $course->name }}</b></a></p>
        @endforeach
    </div>
@endsection
