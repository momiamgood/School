@extends('../layout')

@section('main_content')
    <h1>Урок</h1>
    <p>{{$lesson->name}}</p><br>
    <p>{{$lesson->text}}</p><br>
    @foreach($hmws as $hmw)
        <p>id ответа <b>{{ $hmw->id }}</b></p>
        <p>id user <b>{{ $hmw->user_id }}</b></p>
        <p>ответ <b>{{ $hmw->disc }}</b></p>

    @endforeach
@endsection