<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/axios.min.js"></script>
</head>
<div class="container">
    <h1 class="text-center my-4">Inicio Sesion</h1>
    <div class="row mt-3">
        <label class="form-label">Correo</label>
        <input class="form-control" type="email" name="txtCorreo" id="txtCorreo">
    </div>
    <div class="row mt-3">
        <label class="form-label">Password</label>
        <input class="form-control" type="password" name="txtPassword" id="txtPassword">
    </div>
    <div class="row mt-3">
        <input onclick="login()" type="button" class="btn btn-primary" value="iniciar">
    </div>
</div>


<body>

</body>

</html>
<script src="./assets/js/login.js"></script>