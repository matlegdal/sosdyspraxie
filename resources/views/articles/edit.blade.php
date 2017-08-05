@extends('master')


@section('content')

<div class="ui container">
	<h1>Éditer - {{ $article->title }}</h1>
	
	<form class="ui form" method="POST" action="/articles/{{$article->id}}">
	{{ csrf_field() }}
	{{ method_field('PUT') }}

		<div class="field">
			<label for="title">Titre</label>
			<input type="text" name="title" id="title" value="{{ $article->title }}" required>
		</div>
		<div class="field">
			<label for="body">Article</label>
			<textarea name="body" id="body" required>{{ $article->body }}</textarea>
		</div>
		<div class="field">
			<a href="/articles" class="ui button">Retour</a>
			<button class="ui yellow button" type="submit">Publier</button>
		</div>
	</form>

	@include('partials/errors')
	

</div>
@endsection