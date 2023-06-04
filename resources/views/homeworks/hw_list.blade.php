@extends('../layout')

@section('main_content')

    <h1 style="margin-top: 30px">Домашние работы</h1>
    <div class="list-group" style="margin-top: 30px">
        @foreach($info as $homework)
            <div style="margin-top: 30px">
                <h3>{{ $homework->name }}</h3>
                <a href="/lesson/{{$id}}/homework_list/{{$homework->id}}"
                   class="list-group-item list-group-item-action"> {{$homework->disc}}</a>
            </div>
        @endforeach
    </div>
@endsection
