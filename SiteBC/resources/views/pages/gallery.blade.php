@extends('layouts.layout')
@section('css-file')
gallery
@endsection
@section('content')
<head>
		<script type="text/javascript" src="js/scripts/jquery-1.4.3.min.js"></script>
		<script type="text/javascript" src="js/scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
		<script type="text/javascript" src="js/scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<script type="text/javascript" src="js/scripts/gallery.js"></script>
		<link rel="stylesheet" type="text/css" href="js/scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	</head>
<main>
    <section class="gl-title">
        <h1>Gallery</h1>
    </section>
    <section class="gl-bd">
        <div class="small-img">
            <a class="big-img" href="images/gallery/1.jpg">
                <img src="images/gallery/1.jpg">
            </a>
        </div>
        <div class="small-img">
            <a class="big-img" href="images/gallery/2.jpg">
                <img src="images/gallery/2.jpg">
            </a>
        </div>
        <div class="small-img">
            <a class="big-img" href="images/gallery/3.jpg">
                <img src="images/gallery/3.jpg">
            </a>
        </div>
        <div class="small-img">
            <a class="big-img" href="images/gallery/4.jpg">
                <img src="images/gallery/4.jpg">
            </a>
        </div>
        <div class="small-img">
            <a class="big-img" href="images/gallery/5.jpg">
                <img src="images/gallery/5.jpg">
            </a>
        </div>
        <div class="small-img">
            <a class="big-img" href="images/gallery/6.jpg">
                <img src="images/gallery/6.jpg">
            </a>
        </div>
        <div class="small-img">
            <a class="big-img" href="images/gallery/7.jpg">
                <img src="images/gallery/7.jpg">
            </a>
        </div>
        <div class="small-img">
            <a class="big-img" href="images/gallery/8.jpg">
                <img src="images/gallery/8.jpg">
            </a>
        </div>
        <div class="small-img">
            <a class="big-img" href="images/gallery/9.jpg">
                <img src="images/gallery/9.jpg">
            </a>
        </div>
    </section>
</main>
@endsection