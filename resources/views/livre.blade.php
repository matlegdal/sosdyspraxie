@extends('master')


@section('content')

<section>
    <div class="ui stackable middle aligned grid container">
		<div class="row">
			<div class="eight wide column">
				<h1>Livre à l'intention des parents</h1>
				<p>Si vous cherchez des réponses à vos questions sur la dyspraxie de votre enfant.</p>
				<p>Le livre <strong>La Dyspraxie de l'enfant: vos Grandes Questions, nos Meilleures Réponses</strong> est une référence parfaite pour vous.</p>
			</div>
			<div class="six wide right floated column">
				<img class="ui rounded image" src="images/livre.jpg">
			</div>
		</div>
		<div class="row">
			<div class="sixteen wide column">
				<div class="ui comments">
					<h3 class="ui dividing header">Commentaires</h3>
					  
					@foreach ($comments as $comment)
						<div class="comment">
							<div class="content">
								<a class="author">{{$comment->author}}</a>
								<div class="metadata">
									<span class="date">{{$comment->created_at->diffForHumans()}}</span>
								</div>
								<div class="text">
									{{$comment->body}}
								</div>
								<div class="actions">

									<form action="/livre/{{ $comment->id }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="ui mini right floated red button" type="submit">Delete</button>
									</form>
									<a class="reply">Reply</a>
								</div>
							</div>
						</div>
					@endforeach
					  
					<form class="ui reply form" action="/livre" method="POST">
						{{ csrf_field() }}
						<h3 class="ui dividing header">Donnez votre avis!</h3>
						<div class="field">
							<input type="text" name="author" id="author" placeholder="Nom et prénom" required>
						</div>
						<div class="field">
							<textarea id="body" name="body" placeholder="Écire un commentaire." required></textarea>
						</div>
							<button class="ui blue labeled submit icon button" type="submit">
								<i class="icon edit"></i> Commenter
							</button>
					</form>
				</div>
			</div>
		</div>
    </div>

</section>

@endsection