@extends('tamplates.main')
@section('title','POST')


@section('container')

<h1>{{$post['title']}}</h1>
<h5>By <a href="">{{ $post->user->name }} </a> in <a href="">{{ $post->category->name }}</a></h5>

<p>{{$post['body']}}</p>

<a href="../">Kembali</a>
@endsection