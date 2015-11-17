@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Add Level</div>

				<div class="panel-body">
				<form action="{{ url('level/add') }}" method="POST">
				<input type="hidden" value="{{csrf_token()}}" name="_token">
					<div class="table">
						<tr>
							<th>Parent</th>
							<td><select name="parent" class="form-control">
								@foreach($data as $key)
								<option value="{{ $key->id }}">
								{{ $key->nama }}
								</option>
								@endforeach
							</select></td>
						</tr>
						<tr>
							<th><label>Nama</label></th>
							<td><input name="nama" class="form-control"></td>
						</tr>
						<tr>
							<th><label>Posisi</label></th>
							<td><input name="posisi" class="form-control"></td>
						</tr>
						<td></td>
						<td><button class="btn btn-primary"> Submit </button></td>
					</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
