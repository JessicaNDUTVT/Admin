<!DOCTYPE html>
<html>
<head>
	<title>Ciudades del Mundo</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>	
	<h2 align="center">CIUDADES DEL MUNDO</h2>	
	
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form action="{{ route('mostrar') }}" method="GET">
					<input type="text" name="criterio">
					<input type="submit" value="Buscar">
				</form></br>
				<a href="{{route('pdf', ['crit' => $crit])}}">
					<img width="50" height="50" src="images/pdf.png">				
				</a>
				<a href="{{route('excel', ['crit' => $crit])}}">
					<img width="40" height="50" src="images/excel.png">				
				</a>
				<a href="{{route('word', ['crit' => $crit])}}">
					<img width="60" height="50" src="images/word.png">				
				</a>
				
				<br/>
				@if(isset($cids))
				<table border="1" class="table table-striped">
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Distrito</th>
						<th>Código del País</th>
						<th>Población</th>
					</tr>
					@foreach($cids as $cd)
					<tr>
						<td> {{ $cd->ID }} </td>
						<td> {{ $cd->Name }} </td>		
						<td> {{ $cd->District }} </td>
						<td> {{ $cd->CountryCode }} </td>
						<td> {{ $cd->Population }} </td>	
					</tr>
					@endforeach
				</table>				
					{{ $cids->appends(request()->query())->links() }}
					
				@endif
			</div>
		</div>	
	</div>
	</body>
</html>