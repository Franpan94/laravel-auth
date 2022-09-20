@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row text-center">
    <div class="col-12">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Autore</th>
            <th scope="col">Modifica/Elimina</th>
          </tr>
        </thead>
        @forelse ($posts as $post)
          <tbody>
            <tr>
              <th scope="row">{{ $post->id }}</th>
              <td><a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a></td>
              <td>{{ $post->author }}</td>
              <td>
                <div class="d-inline">
                  <button class="btn btn-success"><a href="" class="text-monospace">Modifica</a></button>
                </div>
                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline">
                  <button class="btn btn-danger text-monospace">Elimina</button>
                  @csrf
                  @method('DELETE')
                </form>
              </td>
            </tr>
          </tbody>
        @empty
          <div class="col-12">
            <h1>Non ci sono Post</h1>  
          </div>  
        @endforelse
      </table>
    </div>
  </div>
</div>
@endsection