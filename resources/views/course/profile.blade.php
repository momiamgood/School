@extends('../layout')

@section('main_content')
    <h1>Уроки</h1>

    @foreach($lessons as $lesson)
        <p>Название урока: <a href="/lesson/{{$lesson->id}}"><b>{{ $lesson->name }}</b></a></p>

    @endforeach
@endsection