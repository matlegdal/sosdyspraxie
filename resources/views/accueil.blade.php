@extends('partials/landing')



@section('header')

<div class="ui masthead center aligned segment">
	
	@include("partials/nav")

	<div class="ui text container">
		<div class="ui header">
			<h1>Sos Dyspraxie</h1>
			<p class="ui horizontal header divider">Pour mieux aider l'enfant dyspraxique</p>
		</div>
	</div>
	<div class="slider">
		<a href="/" class="slider-text">
			<h3>Diagnostic</h3>
            <p>Comment dois-je interpréter le diagnostic de dyspraxie?</p>
            <button class="ui button yellow">Lire plus</button>
        </a>
		
		<a href="#" class="slider-text slider-hidden">
			<h3>Sans diagnostic</h3>
			<p>Est-ce que mon enfant peut avoir des troubles praxiques sans avoir de diagnostic de dyspraxie?</p>
			<button class="ui button yellow">Lire plus</button>
		</a>
		<a href="#" class="slider-text slider-hidden">
			<h3>Manifestations</h3>
			<p>Quelles sont les principales manifestations de la dyspraxie?</p>
			<button class="ui button yellow">Lire plus</button>
		</a>
		<a href="#" class="slider-text slider-hidden">
			<h3>Réadaptation</h3>
			<p>Mon enfant peut-il bénéfinicier de réadaptation?</p>
			<button class="ui button yellow">Lire plus</button>
        </a>
		<a href="#" class="slider-text slider-hidden">
			<h3>Parcours scolaire</h3>
			<p>Quel sera le parcours scolaire de l'enfant dyspraxique?</p>
			<button class="ui button yellow">Lire plus</button>
		</a>
	</div>
</div>
@endsection



@section('content')


<div class="ui internally celled stackable grid container">
	<div class="row">
		<div class="eight wide column">
			<h3 class="ui header">Qu'est-ce que la dyspraxie?</h3>
				<p>La dyspraxie ou le Trouble de l'Acquisition de la Coordination (TAC) sont des <strong>diagnostics médicaux</strong>.</p>
				<p>Ils signifient la présence chez l'enfant d'un trouble neurodéveloppemental qui affecte sa capacité à planifier, organiser et automatiser les gestes moteurs pour réaliser une action ou une activité.</p>
				<p>On parle alors de <strong>dyspraxie motrice</strong>, de <strong>dyspraxie développementale</strong> ou de <strong>trouble de l'acquisition de la coordination</strong> (traduction du terme anglais Developemental Coordination Disorder ou DCD).</p>
			<a class="ui large button">Lire plus</a>
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
			<a class="ui large button">Lire plus</a>
		</div>
	</div>
	<div class="row">
		<div class="twelve wide column">
			<h3>Livre à l'intention des parents</h3>
			<img class="ui small left floated rounded image" src="images/livre.jpg">
				<p>Si vous cherchez des réponses à vos questions sur la dyspraxie de votre enfant.</p>
				<p>Le livre <strong>La Dyspraxie de l'enfant: vos Grandes Questions, nos Meilleures Réponses</strong> est une référence parfaite pour vous.</p>
		
			<a href="#" class="ui large button">En savoir plus sur le livre</a>
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