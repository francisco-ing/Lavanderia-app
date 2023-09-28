<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>
	<div class="form-box">
        <div id="icono">
            <img src="https://cdn-icons-png.flaticon.com/512/2230/2230771.png"> 
        </div>
		<div class="header-text">
			<h4>Meli Clean</h4>
		</div>
        <input placeholder="Nombre de Usuario" type="text">
        <input placeholder="Contrasena" type="password">
        <form action="inicio">
            <input type="submit" value="Ingresar" />
        </form>
	</div>
</body>
</html>