{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('nom', 'Nom:') }}
			{{ Form::text('nom') }}
		</li>
		<li>
			{{ Form::label('prenom', 'Prenom:') }}
			{{ Form::text('prenom') }}
		</li>
		<li>
			{{ Form::label('naissance', 'Naissance:') }}
			{{ Form::text('naissance') }}
		</li>
		<li>
			{{ Form::label('identification_nationale', 'Identification_nationale:') }}
			{{ Form::text('identification_nationale') }}
		</li>
		<li>
			{{ Form::label('statut', 'Statut:') }}
			{{ Form::text('statut') }}
		</li>
		<li>
			{{ Form::label('etudes', 'Etudes:') }}
			{{ Form::text('etudes') }}
		</li>
		<li>
			{{ Form::label('telephone', 'Telephone:') }}
			{{ Form::text('telephone') }}
		</li>
		<li>
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}