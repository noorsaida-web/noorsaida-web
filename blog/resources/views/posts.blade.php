
@extends('tamplates.main')
@section('title','POST')


@section('container')
    <h1 class="mb-4">POST</h1>

    @foreach ($posts as $post)
        <article class="mb-3">
            <a href="/posts/{{$post['slug']}}">
                <h1>{{$post['title']}}</h1>
                <h5>By <a href="">{{ $post->user->name }} </a> in <a href="">{{ $post->category->name }}</a></h5>
            </a>
            <p>{{$post['body']}}</p>
        </article>
    @endforeach
@endsection
