@extends('layout')

@section('content')
    <div id="wrapper">
        @foreach($articles as $article)
            <div id="page" class="container">
                <div id="content">
                    <div class="title">
                        <h2>
                            <a href="/articles/{{$article->id}}">{{$article->title}}</a>
                        </h2>
                    </div>
                    <p><img src="/images/banner.jpg" alt="" class="image image-full"/></p>
                    {!! $article->excerpt !!}
                </div>
            </div>
        @endforeach
    </div>
@endsection
