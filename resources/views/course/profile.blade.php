@extends('../layout')

@section('main_content')
    <nav
        style=" margin-top: 30px; --bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/course">Курсы</a></li>
            <li class="breadcrumb-item active" aria-current="page">Уроки</li>
        </ol>
    </nav>

    <h1 style="margin-top: 30px">Уроки</h1>

    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
        <a href="/lesson/create" class="btn btn-outline-primary" style="margin-top: 30px">Добавить урок</a>
    @endif
    <div style="margin-top: 30px; width: 50%">
    @isset($lessons)
        @foreach($lessons as $lesson)
            <div class="list-group">
                <a href="/lesson/{{ $lesson->id }}" class="list-group-item list-group-item-action"
                   aria-current="true">
                    {{ $lesson->name }}
                </a>
            </div>
        @endforeach
    @endisset
    </div>
@endsection
