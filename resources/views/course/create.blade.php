@extends('../layout')

@section('main_content')
    <h1 style="margin-top: 30px">Добавление курса</h1>

    <form method="post" action="/course/add" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label" style="margin-top: 30px">Обложка курса</label>
            <input type="file" class="form-control" name="img"/>
            <label class="form-label" style="margin-top: 30px">Название курса</label>
            <input type="text" class="form-control" name="name"/>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
