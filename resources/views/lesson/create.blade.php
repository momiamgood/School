@extends('../layout')

@section('main_content')
    <h1>Добавление урока</h1>

    <form method="post" action="/lesson/create" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Выберите курс</label>
            <select name="course_id" >
                @foreach($courses as $course)
                    <option value="{{$course->id}}">{{ $course->name }}</option>
                @endforeach
            </select>
            <label class="form-label">Название:</label>
            <input type="text" class="form-control" name="name" >
            <label class="form-label">Описание</label>
            <input type="text" class="form-control" name="text" >
            <label class="form-label">Дополинительные материалы</label>
            <input type="file" class="form-control" name="file" multiple>
            <input type="hidden" name="lesson_id" value="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
