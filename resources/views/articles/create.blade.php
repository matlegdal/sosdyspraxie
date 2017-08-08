@extends('master')


@section('content')

<div class="ui container">
	<h1>Create a new article</h1>
	
	<form class="ui form" method="POST" action="/articles">
	{{ csrf_field() }}

		<div class="required field">
			<label for="title">Titre</label>
			<input type="text" name="title" id="title" placeholder="Titre" required>
		</div>
		<div class="required field">
			<label for="body">Article</label>
			<textarea name="body" id="body" placeholder="Entre le texte" required></textarea>
		</div>

		<div class="three fields">
			<div class="required field">
				<label>Catégorie</label>
				<select name="category" id="category" class="ui fluid search dropdown">
					<option value="">Catégorie</option>
					<option value="diagnostic">Diagnostic</option>
					<option value="manifestations">Manifestations</option>
					<option value="ecole">École</option>
				</select>
				
			</div>
			<div class="field">
				<label>Ajouter un lien</label>
				<input type="text" name="link" id="link" placeholder="ex. /livre">
			</div>
			<div class="field">
				<label>Ajouter une image</label>
				<input type="text" name="image" id="image" placeholder="ex. livre.jpg">
			</div>

		</div>
		
		<a href="/articles" class="ui button">Retour</a>
		<button class="ui yellow button" type="submit">Publier</button>
		
	</form>

	@include('partials/errors')
	

</div>
@endsection