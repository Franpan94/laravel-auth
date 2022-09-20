@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="pt-2">{{ $post->title }}</h1>
                <img src="{{ $post->post_image }}" alt="{{ $post->title }}">
                <h4 class="p-3">{{ $post->post_content }}</h4>
                <h5 class="pb-3">Data e ora: {{ $post->post_date }}</h5>
                <div class="d-inline">
                    <button class="btn btn-success"><a href="" class="text-monospace">Modifica</a></button>
                </div>
                <form action="" class="d-inline">
                    <button class="btn btn-danger"><a href="" class="text-monospace">Elimina</a></button>
                </form>
            </div>
        </div>
    </div>
@endsection
