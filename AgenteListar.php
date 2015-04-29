<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<html>
<head>
<title>Listado de Agentes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30">
<p>
  <script language="JavaScript" src="menu.js"></script>
  Introduce datos del agente a buscar:</p>
<form name="form1" method="post" action="AgenteListarSalida.php">
  Nombre: 
  <input name="Nombre" type="text" id="Nombre">
  <br>
  Localidad: 
  <input name="Localidad" type="text" id="Localidad">
  <br>
  Profesion: 
  <input name="Profesion" type="text" id="Profesion">
  <br>
  Comercial: 
  <input name="Comercial" type="text" id="Comercial">
  <br>
  Placa:
  <select name="Placa" id="Placa">
    <option value="True" selected>Todas</option>
    <option value="(Placa=true)">Con placa</option>
    <option value="(Placa=false)">Sin Placa</option>
  </select>
  Portatriptico:
  <select name="Portatriptico" id="Portatriptico">
    <option value="TRUE" selected>Indiferente</option>
    <option value="(Portatriptico=True)">Si</option>
    <option value="(Portatriptico=False)">No</option>
  </select>
  Pegatina:
  <select name="Pegatina" id="Pegatina">
    <option value="TRUE" selected>Indiferente</option>
    <option value="(Pegatina=True)">Si</option>
    <option value="(Pegatina=False)">No</option>
  </select>
  Activo:
  <select name="Homologado" id="Homologado">
    <option value="TRUE" selected>Indiferente</option>
    <option value="(Homologado=True)">Si</option>
    <option value="(Homologado=False)">No</option>
  </select>
Contrato:
<select name="Contrato" id="Contrato">
  <option value="TRUE" selected>Indiferente</option>
  <option value="(Contrato=True)">Si</option>
  <option value="(Contrato=False)">No</option>
</select>
<br>
  Ordenado por: 
  <select name="Orden" id="Orden">
    <option value="Nombre" selected>Nombre</option>
    <option value="FechaContrato desc">Fecha de contrato</option>
    <option value="Localidad">Localidad</option>
  </select>
  <br>
  <input type="submit" name="Submit" value="Buscar">
</form>
<script language="JavaScript" type="text/JavaScript">
form1.Nombre.focus()
</script>

</body>
</html>

