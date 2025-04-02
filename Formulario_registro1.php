<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="form-container">
        <h2>Registrarse</h2>
        <form action="recibir1.php" method="POST">
            <div class="input-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="input-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="input-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <div class="input-group">
                <label for="direccion">Direccion:</label>
                <input type="text" id="direccion" name="direccion" required>
            </div>
            <div>
                <div class="input-group">
                    <label for="Telefono">Telefono</label>
                    <input type="numero" id="Telefono" name="telefono" required>
                </div>
            </div>
            
            <button type="submit">Registrar</button>
        </form>
        <p>¿Ya tienes cuenta? <a href="login.html">Iniciar sesión</a></p>

        
        
       
             <?php  if (isset($_GET['var'])) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                   <?php  echo $_GET['var']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

               <?php  } ?>
         
        </div>       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

