<!doctype html>
<html lang="es">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

   
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
        <meta name="description" content="Contacto">
        <meta name="author" content="Parzibyte">
        <title>Formulario de contacto</title>
		<form id="contact-form" action="{{ route('email2') }}" enctype="multipart/form-data" method="POST">
		@csrf       
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
       
        <main role="main" class="container">
            <div class="row">
               
                <div class="col-12">
                    <h1>Formulario GMAIL</h1>
                   
                </div>
                <div class="col-12">
                    <form method="POST" action="contacto.php">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input name="nombre" required type="text" id="nombre"
                                class="form-control" placeholder="Tu nombre">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input name="email" required type="email" id="email"
                                class="form-control" placeholder="Tu correo electrónico">
                        </div>
						<div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input name="email2" required type="email2" id="email2"
                                class="form-control" placeholder="Ingresa tu otro Correo Electronico">
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea required placeholder="Escribe tu mensaje"
                                class="form-control" name="mensaje" id="mensaje"
                                cols="30" rows="5"></textarea>
                        </div>
						<div class="form-group">
						 <div class="controls-group">
						<label for="document">Adjuntar Archivo </label>
						<input type="file" class="form-control" name="file">
						</div>
						</div>
                        <div class="form-group">
                            <button class="btn-success btn" type="submit">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>