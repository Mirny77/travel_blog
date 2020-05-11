@extends('layouts.layout',['title'=>'Главная'])
@section('content')
    @if(isset($_GET['search']))
        @if(count($posts)>0)
            <h2>Результат по запросу "<?= htmlspecialchars($_GET['search']) ?>"</h2>
            <p class="'lead">
                Найдено {{count($posts)}} постов
            </p>
        @else
            <h2>Результат по запросу "<?= htmlspecialchars($_GET['search'])  ?>" ничего не дал</h2>
            <a href="{{route('post.index')}}" class="btn btn-outline-primary">Вернуться на главную</a>

        @endif
        @endif
    <div class="row">
        @foreach($posts as $post)
        <div class="col-6">
            <div class="card">
                <div class="card-header">{{$post->short_title}}</div>
                <div class="card-body">
                    <div class="card-img" style="background-image: url({{$post->img ?? asset("img/22.jpg")}}) "></div>
                    <div class="card-author">Создатель: {{$post->name}}</div>
                    <a href="{{route('post.show',['id'=>$post->post_id])}}" class="btn btn-outline-primary">Посмотреть</a>
                </div>


            </div>
        </div>
        @endforeach
    </div>
    @if(!isset($_GET['search']))
    {{$posts->links()}}
    @endif

@endsection
