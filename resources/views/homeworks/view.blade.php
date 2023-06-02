@extends('../layout')

@section('main_content')

    <h1>{{$user->name}}</h1><br>
    <h1>{{$homework->disc}}</h1><br>
    @isset($file_list)
        @foreach($file_list as $file)
            <a href="{{Storage::url($file->path)}}">{{ $file->filename }}</a>
        @endforeach
    @endisset
@endsection



