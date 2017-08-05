@extends('landing')

@section('content')


<div class="ui stackable grid container">
	<div class="row">
		<a href="/articles" class="ui button">Voir tous les articles</a>
		<a href="/articles/create" class="ui green button">Créer un nouvel article</a>
	</div>
	<div class="row">
		@foreach ($articles as $article)
			<div class="eight wide column">
				<h3 class="ui header"> {{ $article->title }} </h3>
				{{ $article->body }}
			</div>
		@endforeach
	</div>
	<div class="row">
		<div class="eight wide column">
			<h3 class="ui header">Qu'est-ce que la dyspraxie?</h3>
				<p>La dyspraxie ou le Trouble de l'Acquisition de la Coordination (TAC) sont des <strong>diagnostics médicaux</strong>.</p>
				<p>Ils signifient la présence chez l'enfant d'un trouble neurodéveloppemental qui affecte sa capacité à planifier, organiser et automatiser les gestes moteurs pour réaliser une action ou une activité.</p>
				<p>On parle alors de <strong>dyspraxie motrice</strong>, de <strong>dyspraxie développementale</strong> ou de <strong>trouble de l'acquisition de la coordination</strong> (traduction du terme anglais Developemental Coordination Disorder ou DCD).</p>
			<a href="/diagnostic" class="ui yellow button">Lire plus</a>
		</div>
		<div class="eight wide column">
			<h3 class="ui header">Comment reconnaître la dyspraxie?</h3>
			<p>Les principales manifestations chez l'enfant dyspraxique sont la présence persistante:</p>
	        <ul>
	            <li>de maladresse motrice</li>
	            <li>de lenteur d'exécution</li>
	            <li>de désorganisation</li>
	            <li>d'un manque de fluidité des gestes</li>
	        </ul>
			<a href="/manifestations" class="ui yellow button">Lire plus</a>
		</div>
	</div>
	<div class="row">
		<div class="twelve wide column">
			<h3>Livre à l'intention des parents</h3>
			<img class="ui small left floated rounded image" src="images/livre.jpg">
				<p>Si vous cherchez des réponses à vos questions sur la dyspraxie de votre enfant.</p>
				<p>Le livre <strong>La Dyspraxie de l'enfant: vos Grandes Questions, nos Meilleures Réponses</strong> est une référence parfaite pour vous.</p>
		
			<a href="#" class="ui yellow button">En savoir plus sur le livre</a>
		</div>

	</div>
	<div class="row">
		<div class="sixteen wide column">
			<div class="ui attached icon message">
				<i class="fa fa-3x fa-question-circle"></i>
				<div class="content">
					<h3 class="header">Démêler les termes</h3>
				</div>
			</div>
			<div class="ui bottom attached message">
				<p>La dyspraxie et le trouble de l'acquisition de la coordination (TAC) sont reconnus par les médecins et les professionnels de la réadaptation d'abord en tant que déficience physique et non en tant que déficience cognitive puisque les symptômes prédominants sont dans le domaine de la motricité.</p>
				<p>Or, une confusion existe en clinique et pour le parent. En effet, la signification du terme <strong>dyspraxie</strong> diffère selon le professionnel impliqué - neuropsychologue, ergothérapeute, médecin. De plus, l'emploi de plusieurs termes diagnostics ajoute à la confusion de tous.</p>
				<p>Le site <strong>Sos Dyspraxie</strong> utilise le terme dyspraxie, et réfère également au TAC, car le diagnostic de Trouble d'acquisition de la coordination est de plus en plus utilisé en clinique. Le consensus International tend d'ailleurs à favoriser l'utilisation du trouble de l'acquisition de la coordination comme terme unique pour décrire ce type d'incapacités motrices.</p>
				<p>Du point de vue des parents et des professionnels, le remplacement progressif du terme <strong>dyspraxie</strong> par le <strong>trouble de l'acquisition de la coordination</strong> permettra de réduire la confusion, notamment à savoir si ces diagnostics sont équivalents.</p>
				<p>Pour les visiteurs, retenez que ce que vous lirez sur ce site est applicable à la dyspraxie et au TAC lorsque les difficultés relèvent principalement de la présence d'incapacités motrices.</p>
			</div>
		</div>
	</div>
</div>

@endsection