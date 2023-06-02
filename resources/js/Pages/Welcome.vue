<script setup>
import {Head} from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Умникум - онлайн-образование|Новосибирск"/>

    <nav>
        <div>
            <nav-link href="/"><img src="" alt="logo"></nav-link>
            <nav-link href="/course">Мои курсы</nav-link>
            <nav-link href="/profile">Профиль</nav-link>
        </div>

        <div class="auth">
            <nav-link href="/login">Войти</nav-link>
            <nav-link href="/register">Зарегистрироваться</nav-link>
        </div>
    </nav>


    <div>
        <h1>Умникум - онлайн образование для всех!</h1>
        <h3>Сервис онлайн-образования. Предоставляем различный спектр услуг и тд.</h3>
    </div>
</template>

<style>

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}

h1 {
    font-size: 5em;
    font-weight: 600;
}

h5 {
    font-size: 2em;
}

nav {
    display: flex;
    justify-content: space-between;
    width: 100%;
    padding-left: 200px;
    padding-right: 200px;
    padding-top: 20px;
}

</style>
