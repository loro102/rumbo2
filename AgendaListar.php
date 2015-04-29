<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<html>
<head>
<title>Lista Agenda</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="20">
<form name="form1" method="get" action="AgendaListarSalida.php">
  <p>
    <script language="JavaScript" src="menu.js"></script>
    Introduce las fechas entre las que quieres buscar las citas:</p>
  <p>Fecha de inicio: 
    <input name="FInicio" type="text" id="FInicio" size="10">
    Fecha de final: 
    <input name="FFinal" type="text" id="FFinal" size="10">
    <input type="submit" name="Submit" value="Buscar">
  </p>
</form>
</body>
</html>

