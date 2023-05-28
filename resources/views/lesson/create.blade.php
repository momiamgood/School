@extends('../layout')

@section('main_content')
    <h1>Добавление урока</h1>

    <form method="post" action="/lesson/create">
        @csrf
        <div class="mb-3">
            <label class="form-label">Выберите курс</label>
            <select name="course_id" >
                @foreach($courses as $course)
                    <option value="{{$course->id}}">{{ $course->name }}</option>
                @endforeach
            </select>
            <label class="form-label">название урока</label>
            <input type="text" class="form-control" name="name" >
            <label class="form-label">Описпние</label>
            <input type="text" class="form-control" name="text" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
