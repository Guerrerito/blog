@extends('admin.template.main')

@section('title','Crear Usuario')

@section('content')
	@if(count($errors)>0)
		<div class="alert alert-danger" role="alert">
		  
		@foreach($errors->all() as $error)
			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			<span class="sr-only">Error:</span>
			  {{ $error }}
		
		@endforeach
		</div>
	@endif
	{!! Form::open(['route'=>'admin.users.store','method'=>'POST']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nombre Completo','required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','CorreoElectronico') !!}
			{!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'example@ipn.mx','required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password', ['class'=>'form-control','placeholder'=>'********','required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('type','Tipo') !!}
			{!! Form::select('type',[''=>'- - -', 'member'=>'Miembro','admin'=>'Administrador'],NULL,['class'=>'form-control']) !!}
			
		</div>
		<div class="form-group">			
			{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@endsection