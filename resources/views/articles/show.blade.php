@extends('master')


@section('content')

<section>
    <div class="ui text container">
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
				<a href="/articles" class="ui mini right floated button">Retour</a>
			</div>
		</div>
    </div>
</section>

@endsection