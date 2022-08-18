@extends('layouts.layout')
@section('css-file')
news
@endsection
@section('content')

<main>
    <section class="nw-title">
        <h1>News</h1>
    </section>

    <section class="nw-bd">
        <div class="categories">
            <h3>Categories:</h3>

            <div class="menu-cat">
                <ul>
                    <li><a href="news/">
                            All
                        </a></li>
                    <li><a href="news/?category=Health">
                            Health
                        </a></li>
                    <li><a href="news/?category=Food">
                            Food
                        </a></li>
                    <li><a href="news/?category=Care">
                            Care
                        </a></li>
                    <li><a href="news/?category=Puppies">
                            Puppies
                        </a></li>
                </ul>
            </div>
        </div>
        <div class="nw-posts">

            @foreach (App\Models\NewsPost::all() as $all_posts)
            @php
            $category = $all_posts -> newsCategory;
            $author = $all_posts -> newsAuthor;
            @endphp
            @foreach ($category as $objects)
            @if ($the_category == $objects->name ||$the_category =='default')
            <a class="news-form" href="">
                <img src="images/news/{{$all_posts->picture}}.jpg">
                <div class="nw-txt">
                    <h5>May 10, 2011</h5>
                    <h4>{{$all_posts->title}}</h4>
                    <h6>Categories:
                        @foreach ($category as $object)
                        {{$object->name}}
                        @endforeach
                    </h6>
                    <h6>Autor: {{$author->name}}</h6>
                    <p>{{$all_posts->content}}</p>
                </div>
            </a>
            @break
            @endif
            @endforeach


            @endforeach

        </div>
    </section>
</main>
@endsection