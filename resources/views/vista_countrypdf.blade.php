<!DOCTYPE html>
<html>
<head>
	<title>Ciudades del Mundo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    
</head>
<body>	
	<h2 align="center">CIUDADES DEL MUNDO </h2>		
	<div class="container">
		<div class="row">
			<div class="col-12">			
				<table border="1" class="table table-striped">
					<tr>
					    <th>Code</th>
						<th>Nombre</th>
						<th>Distrito</th>
						<th>Código del País</th>
						<th>Población</th>
					</tr>
					@foreach($cids as $cd)
					<tr>
						<td> {{ $cd->Code }} </td>
						<td> {{ $cd->Name }} </td>		
						<td> {{ $cd->District }} </td>
						<td> {{ $cd->CountryCode }} </td>
						<td> {{ $cd->Population }} </td>	
					</tr>
					@endforeach
				</table>	
				
			</div>
		</div>	
	</div>
	</body>
</html>