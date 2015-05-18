@extends('layouts.app')

@section('container')
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
			<h1>All Users</h1>

			<a href="{{ route('users.create') }}" class="btn btn-default">Add User</a>
			
			<hr />


			<table class="table table-bordered table-hover">
			
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
					</tr>
				</thead>
			
				<tbody>
					@foreach( $users as $user )
					<tr>
						<td>{!! Html::linkRoute('users.edit', $user->name, ['id' => $user->id]) !!}</td>
						<td>{{ $user->email }}</td>
					</tr>
					@endforeach
				</tbody>
				
			</table>

			{!! $users->render() !!}
		</div>
	</div>	
@endsection