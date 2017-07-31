@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1> Data Orang Tua </h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> Data Orang Tua
		<div class="panel-title pull-right"><a href="/orangtua/create"> Tambah Data
		</a></div>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Nama Ayah</th>
						<th>Nama Ibu</th>
						<th>Umur Ayah</th>
						<th>Umur Ibu</th>
						<th>Alamat</th>
						<th>Nama Anak</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($ortu as $data)
				<tr>
				<td>{{$data->namaayah}}</td>
				<td>{{$data->namaibu}}</td>
				<td>{{$data->umurayah}}</td>
				<td>{{$data->umuribu}}</td>
				<td>{{$data->alamat}}</td>
				<td>
				@foreach($data->anak as $a)
				<li>{{$a->nama}}</li>
				@endforeach
				</td>
				<td>
				<a class="btn btn-warning" href="/orangtua/{{$data->id}}/edit">Edit</a>|</td>
				<td>
				<a class="btn btn-info" href="/orangtua/{{$data->id}}">show</a>|</td>
				<td><form action="{{route('orangtua.destroy',$data->id)}}" method="post">

				<input name="_method" type="hidden" value="DELETE">
				<input name="_token" type="hidden" >
				<input class="btn btn-danger" type="submit" value="Delete">
				{{csrf_field()}}
				</form>
				</td>
			</tr>
			@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>

@endsection