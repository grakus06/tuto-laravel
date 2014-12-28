{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('auteur_id', 'Auteur_id:') }}
			{{ Form::text('auteur_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}