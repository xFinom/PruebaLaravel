<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    <form action="contact" method="POST">
        @csrf
        <input type="email" name="correo" id="correo">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>