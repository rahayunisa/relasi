<!DOCTYPE html>
<html>
<head>
	<title> About </title>
</head>
<body>
		@foreach($ortu as $data)<hr>
			Nama Ibu : {{ $data->namaibu }} <br>
			Nama Ayah : {{ $data->namaayah }} <br>
			Umur Ibu : {{ $data->umuribu }} <br>
			Umur Ayah : {{ $data->umurayah }} <br>
			Nama Anak :
			@foreach($data->anak as $key)
			<li> {{ $key->nama }} </li>
			
		@endforeach
		@endforeach

		

</body>
</html>