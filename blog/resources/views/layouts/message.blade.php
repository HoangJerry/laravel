@extends('layouts.base')

@section('content')
	<h1>Messages:</h1>
	@if (count($messages))
		@foreach ($messages as $message)
			<ul class="list-group">
				<li class="list-group-item-text">
					Name:{{$message->name}}
				</li>
				<li class="list-group-item-text">
					Email:{{$message->email}}
				</li>
				<li class="list-group-item-text">
					Message:{{$message->message}}
				</li>
			</ul>
		@endforeach
	@endif
@endsection