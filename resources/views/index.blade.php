@extends('layout')

@section('main_content')
    <div style="display: flex; flex-direction: row;">
        <div style="margin-top: 100px">
            <h1 style="font-size: 5em">Онлайн образование для всех</h1>
            <h3 style="margin-top: 50px">Вот уже 5 лет мы помогаем растить смышлённых и креативных детей.</h3>
            <a type="button" href="/register" class="btn btn-primary btn-lg mt-5">Зарегистрироваться</a>
        </div>
        <img src="{{ Storage::url('public/images/img/шляпа_index.png')}}">
    </div>


    <div>
        <h2 class="text-center" style="margin-top: 50px; margin-bottom: 30px">О нас</h2>
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Наша цель</h5>
                    <p class="card-text">Помочь каждому воспитаннику найти и развить свои таланты. Мы не только даем
                        базу для дальнейшего
                        профессионального развития, но и вырабатываем у детей навык самостоятельного обучения,
                        мотивируем на
                        реализацию своего потенциала.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Наша мотивация</h5>
                    <p class="card-text">Сделать так, чтобы в мире было больше счастливых, успешных, реализованных
                        людей! И мы идем к этому,
                        воспитывая таких людей в нашем Центре. Мы гордимся тем, что наши дети добиваются успеха в разных
                        сферах
                        жизни, благодаря комплексному развитию в центре Umnikum</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Что мы готовы дать вам</h5>
                    <p class="card-text">Возможности для разностороеннего развития вашего ребенка. Средства для
                        достижения желаемых целей.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 text-center">
        <h2>Наши курсы</h2>
        <div style="display: flex; flex-direction: row; justify-content: space-between; margin-top: 50px">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://www.ochkov.net/images/2018/07/11/76849.text.3937.jpg"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Группа продленного для.<br> 1 - 3 класс</h5>
                    <a href="/register" class="btn btn-primary">Записаться</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://www.ochkov.net/images/2018/07/11/76849.text.3937.jpg"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Группа продленного для.<br> 1 - 3 класс</h5>
                    <a href="/register" class="btn btn-primary">Записаться</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://www.ochkov.net/images/2018/07/11/76849.text.3937.jpg"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Группа продленного для.<br> 1 - 3 класс</h5>
                    <a href="/register" class="btn btn-primary">Записаться</a>
                </div>
            </div>
        </div>
    </div>



    <div class="mt-5" style="margin-bottom: 100px">
        <h2 class="text-center">Отзывы</h2>
        <div class="mt-3">
            <div class="flex gap-4 row">
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Ребёнок ходит в группу продлённого дня уже не первый год и очень доволен, за что я
                                благодарна
                                всем преподавателям и основателю лично. Спасибо за возможность после работы не
                                переживать о
                                ДЗ, а проводить время, которого итак мало каждый день, со своими детьми </p>
                            <footer class="blockquote-footer">Альбина</footer>
                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Ребёнок ходит в группу продлённого дня уже не первый год и очень доволен, за что я
                                благодарна
                                всем преподавателям и основателю лично. Спасибо за возможность после работы не
                                переживать о
                                ДЗ, а проводить время, которого итак мало каждый день, со своими детьми </p>
                            <footer class="blockquote-footer">Альбина</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
