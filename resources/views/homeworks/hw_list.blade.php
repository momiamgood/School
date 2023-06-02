@extends('../layout')

@section('main_content')
    @foreach($homeworks as $homework)
    <p>{{$homework->id}}</p>
    <p> {{$homework->user_id}}</p>
    <p><a href="/lesson/{{$id}}/homework_list/{{$homework->id}}"> {{$homework->disc}}</a></p>
    @endforeach


@endsection
