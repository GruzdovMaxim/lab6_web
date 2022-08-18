@extends('layouts.layout')
@section('css-file')
contact
@endsection
@section('content')
<main>
    @if($errors->any())
    <div class="errors-">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(session('success'))
        <div class = success->
           {{session('success')}}
        </div>
    @endif
    <section class="ct-title">
        <h1>Contact Us</h1>
    </section>
    <section class="ct-bd1">

        <div class="bd1-title">
            <h2>Do you have any question?</h2>
        </div>

        <div class="bd1-img">


            <img src="images/ct-bd1-img.jpg">
        </div>
        <div class="bd1-form">

            <form name="test" action="{{route('contact-form')}}" method="post">
                @csrf
                <div class="bd1-form-s">
                    <input placeholder="Name" type="text" name="name">
                </div>
                <div class="bd1-form-s">
                    <input placeholder="Email" type="text" name="email">
                </div>
                <div class="bd1-form-s">
                    <input placeholder="Phone" type="text" name="phone">
                </div>
                <div class="bd1-form-b">
                    <textarea placeholder="Message" type="text" name="message"></textarea>
                </div>
                <div class="bd1-form-btn">
                    <input type="submit" value="Send Message">
                </div>
            </form>
        </div>



    </section>
    <section class="ct-bd2">
        <div class="bd1-title">
            <h2>How to find us?</h2>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43805.839016655846!2d32.54974365234376!3d46.66892759482703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c411e10736d113%3A0x24336afca9c3f2f8!2sAtb%20Market!5e0!3m2!1sru!2snl!4v1660146464556!5m2!1sru!2snl"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </section>

</main>
@endsection