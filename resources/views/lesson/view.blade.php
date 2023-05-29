@extends('../layout')

@section('main_content')
    <h1>Урок</h1>
    <p>{{$lesson->name}}</p><br>
    <p>{{$lesson->text}}</p><br>
    @foreach($hmws as $hmw)
        <p>id ответа <b>{{ $hmw->id }}</b></p>
        <p>id user <b>{{ $hmw->user_id }}</b></p>
        <p>ответ <b>{{ $hmw->disc }}</b></p>

    @endforeach

    @auth
    <h2>Добавить ответ</h2>
    <form method="post" >
        @csrf
        <div class="mb-3">
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <input type="hidden" name="lesson_id" value="{{$id}}">
            <label class="form-label">ответ</label>
            <textarea name="disc">
                текст
            </textarea>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endauth
@endsection
