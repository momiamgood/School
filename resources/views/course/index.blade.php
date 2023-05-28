@extends('../layout')

@section('main_content')
    @foreach($courses as $cours)

        <p>Название курса: <b>{{ $cours->name }}</b></p>
    @endforeach
@endsection