@extends('master')


@section('content')

<div class="ui container">
	<h1>Create a new article</h1>
	
	<form class="ui form" method="POST" action="/articles">
	{{ csrf_field() }}

		<div class="field">
			<label for="title">Titre</label>
			<input type="text" name="title" id="title" placeholder="Titre" required>
		</div>
		<div class="field">
			<label for="body">Article</label>
			<textarea name="body" id="body" placeholder="Entre le texte" required></textarea>
		</div>
		<div class="field">
			<a href="/articles" class="ui button">Retour</a>
			<button class="ui yellow button" type="submit">Publier</button>
		</div>
	</form>

	@include('partials/errors')
	

</div>
@endsection