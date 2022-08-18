<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
		<title>Black Continent-Home</title>
		<meta name="veiwport" content="width=device-width">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins&family=Work+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/header-footer.css">
		<link rel="stylesheet" type="text/css" href="css/@yield('css-file').css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	</head>
	<body>
		@include('header')
		@yield('content')
		@include('footer')
	</body>
</html>

