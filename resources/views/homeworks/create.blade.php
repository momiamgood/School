@extends('../layout')

@section('main_content')
    <h1>Добавить ответ</h1>

    <form method="post" action="/course/add" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Файлы</label>
            <input type="file" class="form-control" name="img"/>
            <label class="form-label">Описание</label>
            <textarea type="text" class="form-control" name="disc" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection
<?php
