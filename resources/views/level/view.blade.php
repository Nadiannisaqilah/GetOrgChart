@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Organizational Chart</div>

				<div class="panel-body">
					<div id="show_orgz"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

 @section('footer')

 <script type="text/javascript">

 $('#show_orgz').getOrgChart({
 	primaryColumns: ["nama", "title"],
 	orientation:0,
 	dataSource:[
 	@foreach($data as $key)
 		{
 			id: {{$key->id}},
 			parent: {{ ($key->parent==0)?'null':$key->parent }},
 			nama: '{{ $key->nama }}',
 			title: '{{ $key->posisi }}' },
 		@endforeach
 		],
 		boxesColor: [
 			{ id:1, color:"darkblue"},
 			{ id:2, color:"gray"},
 			{ id:3, color:"darkblue"},
 			{ id:4, color:"blue"},
 			{ id:5, color:"blue"},
 			{ id:6, color:"blue"},
 			{ id:7, color:"blue"},
 			{ id:8, color:"blue"}
 		]
 	});
 	$("#show_orgz a. .get-oc-tb").remove();
 	$(".get-oc-c").css('top',0),
 	$(".get-oc-c").css('height'.$("#show_orgz").css("height"));

 </script>

 @endsection