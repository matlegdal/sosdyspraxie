<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Sos Dyspraxie</title>

	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>

@include('partials/side-menu')

	<div class="pusher">
		@yield('header')
		@yield('content')

		@include('partials/footer')

	</div>

	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>