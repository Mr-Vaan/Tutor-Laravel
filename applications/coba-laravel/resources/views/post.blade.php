{{-- INI SINGLE POST --}}
@extends('layouts/main')


@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            {{-- Untuk possisi  make col-md-10, untuk konten ketengah make justify-content-center --}}
            <div class="col-md-10">
                <h2 class="mb-3">{{ $post->title }}</h2>
                {{-- {{  }} -> ini adalah escape --}}
                {{-- {!!  !!} -> ini adalah no escape --}}
                
                <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                
                <img src="https://source.unsplash.com/user/c_v_r/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            
                <a href="/posts" class="d-block mt-3">Kembali to Post</a>
            </div>
        </div>
    </div>

    

@endsection



















