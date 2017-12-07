@extends('app')
@section('title','Taks Menu')

@section('content')

<div class="row">
	<div class="col-xs-12">
		<h1 class="page-header">
			CRUD Vue y Laravel
		</h1>
	</div>

	<div class="col-xs-7">
		<a href="#" class="btn btn-primary pull-right">Nueva tarea</a>
		<table class="table table-hover table-responsive table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Sentencia</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			<tr v-for="keep in keeps">
				<td> @{{ keep.id }}</td>
				<td> @{{ keep.keep }} </td>
				<td>
					<a href="#" v-on:click.prevent="deleteKeep(keep)" class="btn">Eliminar</a>
					<a href="#" class="btn">Editar</a>
				</td>
			</tr>
		</tbody>
	</table>
	</div>

	<div class="col-xs-5">
		<div class="jumbotron">
			@{{ $data }}
		</div>
	</div>
</div>

@endsection