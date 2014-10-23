@extends('master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('head')
	
@stop

@section('content')

	<h2>
		<a href="/">Go Back</a> 
	</h2>
	<h1>
		Lorem Ipsum Generator
	</h1>
	<h2>
		Generates paragraphs of dummy text
	</h2>
	
		
		{{ Form::open(array('url' => '/LoremIpsumGenerator', 'method' => 'POST')) }}
			Number of paragraphs: 
			{{ Form::text('numparagraphs', $numparagraphs); }}
			(Max 10)

			{{ Form::submit('Generate'); }}
		{{ Form::close() }}
		
		@if(isset($paragraphs))
			{{ implode('<p>', $paragraphs); }}
		@endif
@stop