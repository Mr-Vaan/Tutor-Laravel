@extends('layouts.main')


@section('container')
    <article>
        <h2 class="mb-5">{{ $post->title }}</h2>
        {{-- {{  }} -> ini adalah escape --}}
        {{-- {!!  !!} -> ini adalah no escape --}}

        {!! $post->body !!}
    </article>

    <a href="/posts">Kembali to Post</a>

@endsection



















