<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 ?> 
<html>
<head>
<title>Buscar Cliente</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000" topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<form name="frmBusqueda" method="get" action="ClienteResultadoBusqueda.php">
  <p>Nombre: 
    <input type="text" name="txtNombre">
    <br>
    Primer apellido: 
    <input type="text" name="txtApellido1">
    <br>
    Segundo Apellido: 
    <input type="text" name="txtApellido2">
    <br>
    NIF: 
    <input type="text" name="txtNIF">
    <br>
    Tel&eacute;fono:
    <input name="txtTELEFONO" type="text" id="txtTELEFONO" maxlength="12">
    <br>
    Localidad: 
    <input name="localidad" type="text" id="localidad"> 
    <br>
    Notas:
    <input name="notas" type="text" id="notas">  
    <!--<br>
    Nro Abonado: 
    <input type="text" name="txtId">-->
  </p>
  <p>
    <input type="submit" name="Submit" value="Enviar">
  </p>
</form>
</body>
</html>

