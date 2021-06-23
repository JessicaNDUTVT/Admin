<DOCTYPE! Html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<center>
	<h2>CALCULADORA BÁSICA</h2>
	<form action="{{ route('sumar') }}" method="GET">
		<table border="0" style="background-color: pink;">
			<tr> 
				<td style="width: 25%;"><label>Número 1: </label></td>
				<td style="width: 25%;"><input type="number" name="num1" value="{{ old('num1') }}" /></td>
				<td style="width: 25%;"><label>Número 2: </label></td>
				<td style="width: 25%;"><input type="number" name="num2" value="{{ old('num2') }}" /></td>
			</tr> 
			<tr> 
				<td><input type="radio" value="1" name="operacion"  checked />
					<label>Sumar</label></td>
				<td><input type="radio" value="2" name="operacion" />
					<label>Restar</label></td>
				<td><input type="radio" value="3" name="operacion"/>
					<label>Dividir</label></td>
				<td><input type="radio" value="4" name="operacion"/>
					<label>Multiplicar</label> <br />	</td>
			</tr> 				
			<tr> 
				<td></td>
				<td><input type="submit" value="Calcular" /></td>
				<td><input type="reset" value="Borrar" /></td>
				<td></td>
			</tr>
			@if(isset($res))
				<tr><td colspan="4">El resultado de la operación es: {{ $res }}</td></tr>
			@endif
				
		</table>			
			
	</form>
	</center>
</body>
</html>