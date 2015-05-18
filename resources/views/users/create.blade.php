@extends('layouts.app')

@section('container')
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
			<h1>Add Users</h1>

			@include('errors.list')

			{!! Form::open(['route' => 'users.store']) !!}
				<div class="form-group">
					{!! Form::label('name', null, ['class' => 'control-label']) !!}
					{!! Form::text('name', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('email', null, ['class' => 'control-label'] ) !!}
					{!! Form::text('email', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('password',null,['class' => 'control-label']) !!}
					{!! Form::password('password',['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('password_confirmation',null,['class' => 'control-label']) !!}
					{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Create a new user', ['class' => 'btn btn-primary']) !!}
				</div>
			{!! Form::close() !!}

		</div>
	</div>	
@endsection