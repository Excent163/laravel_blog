<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-muted" href="#">Subscribe</a>
            </div>

            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="{{ route('home', [], false) }}">{{ config('app.name') }}</a>
            </div>

            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                         stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                         viewBox="0 0 24 24" focusable="false"><title>Search</title>
                        <circle cx="10.5" cy="10.5" r="7.5"/>
                        <path d="M21 21l-5.2-5.2"/>
                    </svg>
                </a>
                @guest
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">{{ __('Login') }}</a>

                    @if (Route::has('register'))
                        <a class="btn btn-sm btn-outline-secondary"
                           href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>

        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="{{ route('home', [], false) }}">Главная

            @auth()
                <a class="p-2 text-muted" href="{{ route('tasks.index', [], false) }}">Задачи</a>
            @endauth

            <a class="p-2 text-muted" href="{{ route('news.index', [], false) }}">Новости</a>
            <a class="p-2 text-muted" href="{{ route('about', [], false) }}">О нас</a>
            <a class="p-2 text-muted" href="{{ route('contacts.index', [], false) }}">Контакты</a>
            <a class="p-2 text-muted" href="{{ route('posts.create', [], false) }}">Создать статью</a>

            @admin
                <a class="p-2 text-muted" href="{{ route('admin.home', [], false) }}">Админ. раздел</a>
            @endadmin

        </nav>
    </div>
</div>
