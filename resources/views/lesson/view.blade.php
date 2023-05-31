@extends('../layout')

@section('main_content')
    <nav
        style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/course">Курсы</a></li>
            <li class="breadcrumb-item"><a href="/course/{{ $lesson->course_id }}">Уроки</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$lesson->name}}</li>
        </ol>
    </nav>

    <h1>{{$lesson->name}}</h1><br>
    <p>{{$lesson->text}}</p><br>
    @isset($file_list)
        @foreach($file_list as $file)
            <a href="{{Storage::url($file->path)}}">{{ $file->filename }}</a>
        @endforeach
    @endisset

    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
        <a href="/lesson/{{$lesson->id}}/homework_list">Смотреть ответы -></a>
    @endif

    @if(Auth::user()->role_id == 3)
        <h2>Добавить ответ</h2>
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="lesson_id" value="{{$id}}">
                <label class="form-label">ответ</label>
                <textarea name="disc" placeholder="Ответ"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- Добавить отображение отправленного ответа, типа ответ отправлен да... -->
    @endif
@endsection
