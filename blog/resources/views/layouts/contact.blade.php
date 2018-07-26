@extends('layouts.base')

@section('content')
	@if (session('success'))
		<div class="alert alert-success">
			{{session('success')}}
		</div>
	@endif
	{!! Form::open(['url' => 'contact/submit']) !!}
		<div class="form-group">
			{{Form::label('name', 'Name') }}
			{{Form::text('name', '',['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{Form::label('email', 'Email') }}
			{{Form::text('email', '',['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{Form::label('message', 'Message') }}
			{{Form::textarea('message', '', [
					'class' => 'form-control', 
					'placeholder'=>'Let us know what is in your mind?'])  }}
		</div>
		<div>
			{{Form::submit('Click Me!',['class' => 'btn btn-primary'])}}
		</div>
	{!! Form::close() !!}
@endsection