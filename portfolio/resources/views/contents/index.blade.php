@extends('main.index')

@section('title', 'Contents')

@section('content')
    <div class="container">
        <section class="technology-section">
            <h2>Web Development</h2>

            <article class="technology">
                <h3>JavaScript</h3>
                <p class="description">JavaScript is a versatile programming language used for web development.</p>
                <div class="pictures">
                    <img src="{{ asset('image/js/1.png') }}" alt="JavaScript Picture 1" width="350px">
                    <img src="{{ asset('image/js/2.png') }}" alt="JavaScript Picture 2" width="350px">
                    <img src="{{ asset('image/js/3.png') }}" alt="JavaScript Picture 3" width="350px">
                    <img src="{{ asset('image/js/4.png') }}" alt="JavaScript Picture 4" width="350px">
                    <img src="{{ asset('image/js/5.png') }}" alt="JavaScript Picture 5" width="350px">
                </div>
            </article>

            <article class="technology">
                <h3>Native PHP</h3>
                <p class="description">Native PHP development involves server-side scripting for web applications.</p>
                <div class="pictures">
                    <img src="{{ asset('image/php/1.png') }}" alt="PHP Picture 1" width="350px">
                    <img src="{{ asset('image/php/2.png') }}" alt="PHP Picture 2" width="350px">
                    <img src="{{ asset('image/php/3.png') }}" alt="PHP Picture 3" width="350px">
                    <img src="{{ asset('image/php/4.png') }}" alt="PHP Picture 4" width="350px">
                </div>
            </article>

            <article class="technology">
                <h3>React</h3>
                <p class="description">React is a JavaScript library for building user interfaces.</p>
                <div class="pictures">
                    <img src="{{ asset('image/react/1.png') }}" alt="React Picture 1" width="350px">
                    <img src="{{ asset('image/react/2.png') }}" alt="React Picture 2" width="350px">
                </div>
            </article>

            <article class="technology">
                <h3>Laravel</h3>
                <p class="description">Laravel is a PHP framework for web development, known for its elegant syntax.</p>
                <div class="pictures">
                    <img src="{{ asset('image/laravel/1.png') }}" alt="Laravel Picture 1" width="350px">
                    <img src="{{ asset('image/laravel/2.png') }}" alt="Laravel Picture 2" width="350px">
                    <img src="{{ asset('image/laravel/3.png') }}" alt="Laravel Picture 3" width="350px" height="350px">
                    <img src="{{ asset('image/laravel/4.png') }}" alt="Laravel Picture 4" width="350px">
                    <img src="{{ asset('image/laravel/5.png') }}" alt="Laravel Picture 5" width="350px">
                </div>
            </article>
        </section>

        <section class="technology-section">
            <h2>Database</h2>

            <article class="technology">
                <h3>MySQL/PHPMyAdmin</h3>
                <p class="description">MySQL is an open-source relational database management system, commonly used with PHPMyAdmin for database administration.</p>
                <div class="pictures">
                    <img src="{{ asset('image/database/1.png') }}" alt="MySQL Picture 1" width="350px">
                </div>
            </article>
        </section>
    </div>
@endsection
