
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Sos Dyspraxie</title>
	
	<link rel="stylesheet" type="text/css" href="../css/dist/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>

@include('partials/side-menu')
@include('partials/top-menu')

	<div class="pusher">
		@include('partials/pages-header')
		@yield('content')

		@include('partials/footer')

	</div>

	<script type="text/javascript" src="../js/lib/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/pages.js"></script>
</body>
</html>