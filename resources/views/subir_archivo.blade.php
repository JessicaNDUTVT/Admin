<!DOCTYPE html>
<html>
<head>
   <title> Subir archivos al Servidor</title>
</head>
<body>
    <h2>Selecciona un Archivo</h2>
  <form action="{{route('upload')}}" enctype="multipart/form-data" method="POST">
  @csrf
  <input type="file" class="form-control" name="file">
  <br><br>
  
  <input type="hidden" name="code" value="<?php echo $_REQUEST['code'] ?>">
  <input type="submit" class="form-control" name="Aceptar">
		 
</form>
</body>
</html>