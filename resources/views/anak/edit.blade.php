@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1> Data Anak </h1></center>
	<div class="panel panel-primary">
			<div class="panel-heading"> Data Anak
			<div class="panel-title pull-right"> <a href="{{ URL::previous ()}}"> Kembali </a></div></div>

			<div class="panel-body">
				<form action="{{ route('anak.show',$anak->id) }}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{ csrf_token () }}">

				<div class="form-group">
					<label class="control-lable"> Nama </label>
					<input type="text" name="a" value="{{ $anak->nama }}" class="form-control" required="">

				<div class="form-group">
					<label class="control-lable"> Nama Orangtua </label>
					 <select name="b" class="form-control" readonly="">
						@foreach($ortu as $data)
							<option value="{{$data->id}}"> {{$data->namaayah}} dan {{$data->namaibu}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-lable"> Umur </label>
					<input type="number" name="c" value="{{ $anak->umur }}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable"> Alamat </label>
					<textarea class="form-control" rows="10"  name="d" required=""> {{ $anak->alamat }} </textarea>
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