<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<html>
<head>
<title>Listado de cobrados</title>
</head>

<body bgcolor="#FFFFFF" text="#000000" topmargin="30">
<script language="JavaScript" src="menu.js"></script>

<form name="form1" method="post" action="ListadoCobradosSalida.php">
  <p>Fecha de comienzo:
    <input name="FComienzo" type="text" id="FComienzo2" value="01/01/00" size="14" maxlength="10">
Fecha de final:
<input name="FFinal" type="text" id="FFinal" value="<? echo time()();?>" size="14" maxlength="10">
</p>
  <p>
    <input type="submit" name="Submit" value="Listar">
</p>
</form>
<p>&nbsp;</p>

</body>
</html>

