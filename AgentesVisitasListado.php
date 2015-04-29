<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 ?>
 
<? require("Connections/connrumbo.php"); ?>
<? 

// $Tablas is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM TipoProfesional";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Tablas_numRows=0;
?>
<? 
$Profesional__MMColParam="1";
if (($_GET["Sector"]!=""))
{

  $Profesional__MMColParam=$_GET["Sector"];
} 

?>
<? 

// $Profesional is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Profesionales WHERE Tipo = "+str_replace("'","''",$Profesional__MMColParam)+" ORDER BY Nombre ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Profesional_numRows=0;
?>
<? 

// $FormaPago is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM FormasPago";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$FormaPago_numRows=0;
?>
<html>
<head>
<title>Listado de Facturas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}
//-->
</script>
</head>

<body topmargin="25">
<script language="JavaScript">
<!--
function ir() {
  location.replace("FacturasListado.asp?Sector="+form1.sector.value);
  }
//-->
</script>
<script language="JavaScript" src="menu.js"></script>
<form action="AgentesVisitasListadoSalida.php" method="post" name="form1">
  <p>Fecha entre el 
    <input name="FInicio" type="text" id="FInicio">
    y el 
    <input name="FFin" type="text" id="FFin">
    <br>
    Localidad 
    <input name="Localidad" type="text" id="Localidad">
    Agente
    <input name="Agente" type="text" id="Agente">
    <br>
    <input name="submit" type="submit" value="Listar">
  </p>
</form>

</body>
</html>
<? 

$Tablas=null;

?>
<? 

$Profesional=null;

?>
<? 

$FormaPago=null;

?>

