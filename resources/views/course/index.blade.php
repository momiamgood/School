@extends('../layout')

@section('main_content')

    <h1>Мои курсы</h1> <!-- Отображение для юзера: учитель, ученик \\ Заготовка -->
    <div class="courses" style="display: flex; flex-direction: row; flex-wrap: wrap;gap: 30px; margin-top: 30px">
        @foreach($courses as $course)
            <div class="card" style="width: 18rem;">
                @isset($course->img)
                    <img src="{{ asset($course->img) }}" class="card-img-top" alt="Обложка курса">
                @endisset
                <div class="card-body">
                    <h5 class="card-title">{{ $course->name }}</h5>
                    <a href="/course/{{ $course->id }}" class="btn btn-primary">Читать</a>
                </div>
            </div>
        @endforeach
    </div>

    @auth() <!-- Отображение для админа \\ Заготовка -->
        <h1>Все курсы</h1>
        <button href="/course/add" class="btn btn-outline-primary">Добавить курс</button>
        <div class="courses" style="display: flex; flex-direction: row; flex-wrap: wrap;gap: 30px; margin-top: 30px">
            @foreach($courses as $course)
                <div class="card" style="width: 18rem;">
                    @isset($course->img)
                        <img src="{{ asset($course->img) }}" class="card-img-top" alt="Обложка курса">
                    @endisset
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->name }}</h5>
                        <a href="/course/{{ $course->id }}" class="btn btn-primary">Читать</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endauth
@endsection
