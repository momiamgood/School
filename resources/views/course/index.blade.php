@extends('../layout')

@section('main_content')
    <h1>Курсы</h1>

    @foreach($courses as $cours)

        <p>Название курса: <a href="/course/{{$cours->id}} "> <b>{{ $cours->name }}</b></a></p>
    @endforeach
@endsection