@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{ $post->title }}</h1>
            <img src="{{ $post->post_image }}" alt="{{ $post->title }}">
            <p>{{ $post->post_content }}</p>
        </div>
    </div>
  </div>
@endsection