<DOCTYPE! Html>
<html>
<head>
    <title>Paises del mundo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <h2 align="center">PAISES DEL MUNDO </h2>
	<div class="container">
	    <div class="row">
		    <div class="col-12">

			@if(isset($ct))
			    <table border="1" class="table table-striped" align="center">
				<tr>
				    <th>Codigo</th>
			        <th>Nombre</th>
			        <th>Continente</th>
					<th>Region</th>
					<th>Poblacion</th>
					<th>Bandera</th>
					<th>Subir imagen</th>
				</tr>
				@foreach($ct as $cc)
				<tr>
						<td>{{ $cc->Code}}</td>
						<td>{{ $cc->Name }}</td>
						<td>{{ $cc->Continent }}</td>
						<td>{{ $cc->Region}}</td>
						<td>{{ $cc->Population }}</td>
						<td> <img height="60" width="80" src="http://localhost/AWI4/storage/app/Mis_Archivos/{{ $cc->imagen }}"></td>
						<td><a href="{{route('subir',['code'=>$cc->Code])}}">Subir imagen</a></td>
					</tr>
                @endforeach
	            </table>
				@endif
			</div>
		</div>
	</div>
</body>
</html>