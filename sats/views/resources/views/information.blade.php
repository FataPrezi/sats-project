{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('titre', 'Titre:') !!}
			{!! Form::text('titre') !!}
		</li>
		<li>
			{!! Form::label('details', 'Details:') !!}
			{!! Form::text('details') !!}
		</li>
		<li>
			{!! Form::label('mots_cles', 'Mots_cles:') !!}
			{!! Form::text('mots_cles') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}