@extends('app')
@section('title','Taks Menu')

@section('content')

<div class="row" id="keep">

	
	<div class="col-xs-12">
		<h1 class="page-header">
			Keeps VueJS y Laravel
		</h1>
	</div>

	<div class="col-xs-12">
		<!-- Button trigger modal -->
		<button class="btn btn-primary btn-lg pull-right" data-toggle="modal" data-target="#create">
		  Nueva Tarea
		</button>
		<table class="table table-hover table-responsive table-striped">
			<thead>
				<tr>
					<th><h1><span class="label label-default">Tarea</span></h1></th>
					<th><h1><span class="label label-success">Acción</span></h1></th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="keep in keeps">
						
					<td><h4>@{{ keep.keep }}</h4></td>
					<td>
						<a href="#" v-on:click.prevent="deleteKeep(keep)" class="btn btn-primary">Eliminar</a>
						<a href="#" v-on:click.prevent="editKeep(keep)" class="btn btn-warning">Editar</a>
					</td>
				</tr>
			</tbody>
		</table>
		@include('create')
		@include('edit')
	</div>

	
</div>


@endsection