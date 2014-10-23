@extends('master')

@section('title')
	Random User Generator
@stop

@section('head')
	
@stop

@section('content')

	<h2>
		<a href="/">Go Back</a> 
	</h2>
	<h1>
		Random User Generator
	</h1>
	<h2>
		Generates random users name, address and text
	</h2>
	
		
		{{ Form::open(array('url' => '/RandomUserGenerator', 'method' => 'POST')) }}
			Number of users: 
			{{ Form::text('numusers', $numusers); }}
			(Max 10)

			{{ Form::submit('Generate'); }}
		{{ Form::close() }}
		
		@if(isset($faker))
			@for($i = 0; $i < $numusers; $i++)
				
				<p>
					{{ $faker->name }} <br>
					{{ $faker->address }} <br>
					{{ $faker->text }}
				</p>
			@endfor
		@endif
@stop