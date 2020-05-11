@extends('layouts.layout',['title'=>'Редактирование поста'])
@section('content')
  <form action="{{route('post.update',['id'=>$post->post_id])}}" method="post" enctype="multipart/form-data">@csrf
      @method('PATCH')
      <h2>Редактировать пост</h2>
      @include('posts.form')

      <input type="submit" value="Редактировать пост" class="btn-outline-primary">
  </form>

@endsection

