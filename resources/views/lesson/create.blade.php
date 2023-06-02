@extends('../layout')

@section('main_content')
    <h1 style="margin-top: 30px">Добавление урока</h1>

    <form method="post" action="/lesson/create" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div style="margin-top: 30px">
                <label class="form-label">Выберите курс</label>
                <select name="course_id">
                    @foreach($courses as $course)
                        <option value="{{$course->id}}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>
            <label class="form-label" style="margin-top: 30px">Название:</label>
            <input type="text" class="form-control" name="name">
            <label class="form-label" style="margin-top: 30px">Текст урока</label>
            <textarea type="text" class="form-control" name="text" style="resize: none" rows="3"></textarea>
            <label class="form-label" style="margin-top: 30px">Дополинительные материалы</label>
            <input type="file" name="files[]" class="form-control" multiple>
            <input type="hidden" name="lesson_id" value="">

        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
