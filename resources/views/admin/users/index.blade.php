@extends('admin.template.main')

@section('title','Lista de usuarios')

@section('content')
	<a href="{{ route('admin.users.create') }} " class="btn btn-info">Registrar</a>	<br>	
	<table class="table">	
		<thead>	
				<th>ID</th>
				<th>Nombre</th>
				<th>Tipo</th>
				<th>Accion</th>
		</thead>
		<tbody>	
				@foreach($users as $user)
				<tr>	
						<td>{{ $user->id }} </td>
						<td>{{ $user->name}} </td>
						<td>{{ $user->type}} </td>
						<td>
						<a href="{{ route('admin.users.destroy',$user->id) }}" class="btn btn-danger" onclick="return confirm('Seguro que deseas eliminar???')"></a>
						<a href="{{ route('admin.users.edit',$user->id) }}	" class="btn btn-warning"></a>
						</td>
				</tr>

				@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}	
@endsection