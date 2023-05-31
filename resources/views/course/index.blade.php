@extends('../layout')

@section('main_content')

    @if(Auth::user()->role_id == 2)
        <h1>Мои курсы</h1> <!-- Отображение для юзера: учитель, ученик -->
        <div class="courses" style="display: flex; flex-direction: row; flex-wrap: wrap;gap: 30px; margin-top: 30px">
            @foreach($courses as $course)
                <div class="card" style="width: 18rem;">
                    @isset($course->img)
                        <img src="{{ 'public/storage/'. $course->img }}" class="card-img-top" alt="Обложка курса">
                    @endisset
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->name }}</h5>
                        <a href="/course/{{ $course->id }}" class="btn btn-primary">Читать</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    @if(Auth::user()->role_id == 1)
        <!-- Отображение для админа  -->
        <h1>Все курсы</h1>
        <a href="/course/add" class="btn btn-outline-primary">Добавить курс</a>
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
    @endif
@endsection
