@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1> Data Anak </h1></center>
	<div class="panel panel-primary">
			<div class="panel-heading"> Data Anak
			<div class="panel-title pull-right"> <a href="{{ URL::previous ()}}"> Kembali </a></div></div>

			<div class="panel-body">
				<form action="{{ route('anak.store') }}" method="post">

				{{ csrf_field() }}
				<div class="form-group">
					<label class="control-lable"> Nama </label>
					<input type="text" name="a" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-lable"> Nama Orang Tua </label>
					<select name="b" class="form-control">
						@foreach($ortu as $data)
							<option value="{{$data->id}}"> {{$data->namaayah}} dan {{$data->namaibu}}</option>
						@endforeach
					</select> 
				</div>

				<div class="form-group">
					<label class="control-lable"> Umur  </label>
					<input type="number" name="c" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-lable"> Alamat </label>
					<textarea class="form-control" rows="10" name="d" required=""></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success"> Simpan </button>
					<button type="reset" class="btn btn-danger"> Reset </button>
					</div>
			</form>
		</div>
	</div>
</div>
@endsection