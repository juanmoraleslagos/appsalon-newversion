<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia Sesión con tus Datos</p>

<?php
include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="/" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu Email" name="email" />
    </div>

    <div class="campo">
        <label for="Password">Password</label>
        <input type="password" id="password" placeholder="Tu Password" name="password" />
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no Tienes una Cuenta? Crear Una</a>
    <a href="/olvide">¿Olvidaste Tu Password?</a>
</div>