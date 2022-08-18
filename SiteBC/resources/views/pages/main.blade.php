@extends('layouts.layout')
@section('css-file')
index
@endsection
@section('content')
<main>
    <section class="bd1">
        <h1>Welcome to Black Continent</h1>
        <p>Nulla commodo tristique elementum. Morbi at tellus luctus, auctor ligula eleifend, bibendum est. Aenean
            ornare turpis viverra ligula sagittis lobortis. Nullam non nunc a elit imperdiet vestibulum et in velit.
            Suspendisse sed arcu sed odio maximus vehicula nec non ipsum. Vivamus lobortis scelerisque est, et eleifend
            diam pharetra in.</p>
        <form action="about">
            <div><button>About Us</button></div>
        </form>
    </section>

    <section class="bd2">
        <div class="bd2-title">
            <h3>What we do?</h3>
            <h2>Our service</h2>
        </div>
        <div class="bd2-body">
            <div class="bd2-body-img">
                <img src="images/bd2.jpg">
            </div>
            <div class="bd2-body-columns">
                <div class="bd2-body-columns-content">
                    <div class="bd2-icons">
                        <img src="images/icons/training.png">
                    </div>
                    <div class="bd2-text">
                        <h3>Training</h3>
                        <p>Donec at augue condimentum turpis facilisis convallis. Suspendisse non tellus neque. Nulla
                            vehicula ex in dapibus finibus. Aliquam at tellus in dui imperdiet ultricies.</p>
                    </div>
                </div>
                <div class="bd2-body-columns-content">
                    <div class="bd2-icons">
                        <img src="images/icons/boarding.png">
                    </div>
                    <div class="bd2-text">
                        <h3>Boarding</h3>
                        <p>Donec at augue condimentum turpis facilisis convallis. Suspendisse non tellus neque. Nulla
                            vehicula ex in dapibus finibus. Aliquam at tellus in dui imperdiet ultricies.Donec non leo
                            nec leo dictum tempor. </p>
                    </div>
                </div>
                <div class="bd2-body-columns-content">
                    <div class="bd2-icons">
                        <img src="images/icons/sale.png">
                    </div>
                    <div class="bd2-text">
                        <h3>Puppies for sale</h3>
                        <p>Donec at augue condimentum turpis facilisis convallis. Suspendisse non tellus neque. Nulla
                            vehicula ex in dapibus finibus. Aliquam at tellus in dui imperdiet ultricies.Donec non leo
                            nec leo dictum tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(session('success'))
        <div class = success->
           {{session('success')}}
        </div>
    @endif
    @if($errors->any())
    <div class="errors-">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <section class="bd3">
        <h2>Newsletter</h2>
  
        <form class="bd3-form" action="{{route('newsletter-sub')}}" method="post">
        @csrf
            <div class="bd3-form-inp">
                <input type="email" placeholder="email" 
                 class="newsletter" name ="email_string">
            </div>
            <div class="bd3-form-btn">
                <input type="submit" class="newsletterbtn" value="Subscribe">
            </div>
        </form>

    </section>

    <section class="bd4">
        <div class="bd2-title">
            <h2>Reviews from our clients</h2>
        </div>
        <div class="bd4-body">
            <button><img src="images/icons/rew.svg"></button>
            <div class="bd4-review">
                <div class="bd4-review-content">
                    <div class="bd4-review-content-text">
                        <h4>Eren Yeager</h4>
                        <p>an ordinary man</p>
                    </div>
                    <img class="photo" src="images/eren.png">
                </div>
                <hr>
                <p>The dog is great! He quickly eats the Marleyans, not leaving even a piece.<br>
                    Highly recommend!
                <p>

            </div>
            <div class="bd4-review">
                <div class="bd4-review-content">
                    <div class="bd4-review-content-text">
                        <h4>Eren Yeager</h4>
                        <p>an ordinary man</p>
                    </div>
                    <img class="photo" src="images/eren.png">
                </div>
                <hr>
                <p>The dog is great! He quickly eats the Marleyans, not leaving even a piece.<br>
                    Highly recommend!
                <p>

            </div>
            <div class="bd4-review">
                <div class="bd4-review-content">
                    <div class="bd4-review-content-text">
                        <h4>Eren Yeager</h4>
                        <p>an ordinary man</p>
                    </div>
                    <img class="photo" src="images/eren.png">
                </div>
                <hr>
                <p>The dog is great! He quickly eats the Marleyans, not leaving even a piece.<br>
                    Highly recommend!
                <p>

            </div>
            <button><img src="images/icons/lew.svg"></button>
        </div>
    </section>
</main>
@endsection