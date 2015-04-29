<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<html>
<head>
<title>Listado de recibos</title>
</head>

<body bgcolor="#FFFFFF" text="#000000" topmargin="30">
<script language="JavaScript" src="menu.js"></script>

<form name="form1" method="post" action="ListadoRecibosSalida.php">
  <p>Fecha de emision entre 
    <input name="FComienzo" type="text" id="FComienzo2" value="01/01/00" size="14" maxlength="10">
y
<input name="FFinal" type="text" id="FFinal" value="<? echo time()();?>" size="14" maxlength="10">
<br>
  Fecha de cobro entre
    <input name="FComienzo2" type="text" id="FComienzo" value="01/01/00" size="14" maxlength="10">
y
<input name="FFinal2" type="text" id="FFinal2" value="<? echo time()();?>" size="14" maxlength="10">
<br>
Ordenador por 
<select name="Orden" id="Orden">
  <option value="ORDER BY Recibo.fechaemision DESC;">Fecha de emision</option>
  <option value="ORDER BY Recibo.fechacobro DESC;" selected>Fecha de cobro</option>
</select>
  </p>
  <p>
    <input type="submit" name="Submit" value="Listar">
</p>
</form>
<p>&nbsp;</p>

</body>
</html>

