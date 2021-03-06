@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
				<div class="panel-body">
				<div class="pull-right">
					<a href="{{ url('level/add') }}"> Add New </a>
				</div>
					<table class="table">
						<thead>
						<tr>
							<th>Nama</th>
							<th>Posisi</th>
							<th colspan="2">Action</th>
						</tr>
						</thead>
						<tbody>
							@foreach($data as $key)
							<tr>
								<td>{{ $key->nama }}</td>
								<td>{{ $key->posisi }}</td>
								<td><a href="{{ url('level/edit/'.$key->id) }}"> Edit </td></a>
								<td><a href="{{ url('level/destroy/'.$key->id) }}"> Delete </td></a>
							</tr>
							@endforeach
						</tbody>
					</div>
				</div>
			</div>
		</div>
	</div></div>
@endsection
