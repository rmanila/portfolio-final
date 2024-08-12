@extends('main.index')

@section('title', 'Certification')

@section('content')
    <header>
        <h1>Certification</h1>
    </header>

    <main class="container">
        <section class="certification-details">
            <h2>HTML/CSS Certiport Certification</h2>
            <p>
                The HTML/CSS Certiport certification validates proficiency in HTML and CSS, fundamental languages used in web development. This certification demonstrates competence in creating and styling web pages, essential skills for front-end development.
            </p>
        </section>

        <section class="certificate-proof">
            <h2>Certification Proof</h2>
            <p>Attached is the proof of my HTML/CSS Certiport certification:</p>
            <img src="{{ asset('image/htmlcss.png') }}" alt="HTML/CSS Certiport Certification Picture" width="760px">

        </section>
    </main>

    <footer>
    </footer>

    @endsection