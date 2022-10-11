{{-- @@dd artinya dump dan die --}}
{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')

    {{-- Looping Array --}}
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach


@endsection


{{-- Mencari slug gimana caranya? gampang banget, kita hanya perlu mengubah routes kita --}}
{{-- Bagian : Route::get('/posts/{post}', [PostController::class, 'show']); --}}
{{-- Cukup mengubah/menambahkan slug saja: Route::get('/posts/{post:slug}', [PostController::class, 'show']); --}}