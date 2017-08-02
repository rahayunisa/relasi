@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1> Data Author </h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> Data Author
		<div class="panel-title pull-right"><a href="/author/create"> Tambah Author
		</a></div>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($author as $data)
				<tr>
				<td>{{$data->name}}</td>
				<td>
				<td>
				<a class="btn btn-warning" href="/author/{{$data->id}}/edit">Edit</a>|</td>
				<td>
				<a class="btn btn-info" href="/author/{{$data->id}}">show</a>|</td>
				<td><form action="{{route('author.destroy',$data->id)}}" method="post">

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