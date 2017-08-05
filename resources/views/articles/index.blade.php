@extends('master')


@section('content')

<div class="ui stackable grid container">
	<div class="centered row">
		<a href="/articles/create" class="ui green button">Créer un nouvel article</a>
	</div>
	<div class="row">

			@foreach ($articles as $article)
				<div class="eight wide column">
						<div class="content">
							<h3 class="header">
								<a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
							</h3>
							<div class="meta">
								<span class="date">Créé le {{ $article->created_at->toFormattedDateString() }} - </span>
								<span class="date">Dernière modification {{ $article->updated_at->toFormattedDateString() }}</span>
							</div>
							<div class="description">
								<p>{{ $article->body }}</p>
							</div>
							<div class="extra">
								<a href="/articles/{{ $article->id }}/edit" class="ui mini right floated yellow button">Éditer</a>
							</div>
						</div>
				</div>
			@endforeach
	
	</div>
	
</div>
@endsection