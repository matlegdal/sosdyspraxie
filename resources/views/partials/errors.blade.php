@if (count($errors))
	<div class="ui error message">
		<i class="close icon"></i>
		<div class="header">
			Certaines erreurs sont présentes dans la publication.
		</div>
		<ul class="list">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif