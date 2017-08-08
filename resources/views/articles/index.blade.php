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
								<div>Catégorie: {{ $article->category }}</div>
							</div>

							<div class="description">
								@if ($article->image)
									<img class="ui small left floated rounded image" src="images/{{$article->image}}">
								@endif

								{!! $article->body !!}

								@if ($article->link)
									<a href="{{$article->link}}" class="ui yellow button">Lire plus</a>
								@endif
							</div>

							<div class="extra">
								<form action="/articles/{{ $article->id }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button class="ui mini right floated red button" type="submit">Delete</button>
								</form>
								<a href="/articles/{{ $article->id }}/edit" class="ui mini right floated yellow button">Éditer</a>
							</div>
						</div>
				</div>
			@endforeach
	
	</div>
	
</div>
@endsection