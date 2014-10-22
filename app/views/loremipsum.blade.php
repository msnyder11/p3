@extends('master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('head')
	
@stop

@section('content')

	<h1>
		Lorem Ipsum Generator
	</h1>
	
		
		{{ Form::open(array('url' => '/LoremIpsumGenerator', 'method' => 'POST')) }}
			Number of paragraphs: 
			{{ Form::text('numparagraphs', '5'); }}
			(Max 10)

			{{ Form::submit('Generate'); }}
		{{ Form::close() }}
		
		@if(isset($paragraphs))
			{{ implode('<p>', $paragraphs); }}
		@endif
@stop