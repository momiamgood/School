@extends('../layout')

@section('main_content')
    <h1>Добавление курса</h1>

    <form method="post" action="/course/add">
        @csrf
        <div class="mb-3">
            <label class="form-label">Название курса</label>
            <input type="text" class="form-control" name="name" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
