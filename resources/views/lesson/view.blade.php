@extends('../layout')

@section('main_content')
    <nav
        style="margin-top: 30px; --bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/course">Курсы</a></li>
            <li class="breadcrumb-item"><a href="/course/{{ $lesson->course_id }}">Уроки</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$lesson->name}}</li>
        </ol>
    </nav>

    <h1 style="margin-top: 30px;">{{$lesson->name}}</h1><br>
    <p>{{$lesson->text}}</p><br>
    <h4>Дополнительные материалы:</h4>
    @isset($file_list)
        @foreach($file_list as $file)
            <a href="{{Storage::url($file->path)}}">{{ $file->filename }}</a>
        @endforeach
    @endisset

    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
        <a href="/lesson/{{ $lesson->id }}/homework_list" type="button" class="btn btn-outline-primary">Смотреть ответы</a>
    @endif

    @if(Auth::user()->role_id == 3)
        <h2 style="margin-top: 30px">Добавить ответ</h2>

        <form method="post" enctype="multipart/form-data" style="margin-bottom: 30px">
            @csrf
            <div class="mb-3">
                <label class="form-label">Файлы</label>
                <input type="file" class="form-control" name="files[]"/>
                <label class="form-label">Описание</label>
                <textarea type="text" class="form-control" name="disc" rows="3" style="resize: none"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>

        @isset($homework)
            <b><mark>Отправлено для оценивания</mark></b>
        @endisset
    @endif
@endsection
