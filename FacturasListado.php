<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:46 2015
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
<form action="FacturasListadoSalida.php" name="form1">
  <table width="100%" border="0">
    <tr>
      <td><table width="100%" border="1" cellspacing="0">
        <tr>
          <td bgcolor="#CCCCCC">Fecha de factura </td>
        </tr>
        <tr>
          <td>Fecha de comienzo:
            <input name="FComienzo" type="text" id="FComienzo" value="01/01/00" size="14" maxlength="10">
            <br>
            Fecha de final:
            <input name="FFinal" type="text" id="FFinal" value="<? echo time()();?>" size="14" maxlength="10"></td>
        </tr>
      </table></td>
      <td>&nbsp;</td>
      <td><table width="100%" border="1" cellspacing="0">
        <tr>
          <td bgcolor="#CCCCCC">Fecha de pago </td>
        </tr>
        <tr>
          <td>Fecha de comienzo:
            <input name="FComienzoPago" type="text" id="FComienzoPago" value="01/01/00" size="14" maxlength="10">
            <br>
            Fecha de final:
            <input name="FFinalPago" type="text" id="FFinalPago" value="<? echo time()();?>" size="14" maxlength="10"></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <p>
  Sector: 
    <select name="sector" id="sector" onChange="MM_callJS('ir()')">
      <option value="-1">Todos</option>
      <? 
while((!($Tablas==0)))
{

?>
      <option value="<?   echo (->$Item["Id"]->$Value);?>" <?   if ((!!isset($_GET["Sector"])))
  {
    if (((->$Item["Id"]->$Value)==($_GET["Sector"])))
    {
      print "SELECTED";
      print "";
    } 
  } ?> ><?   echo (->$Item["Texto"]->$Value);?></option>
      <? 
  $Tablas=mysql_fetch_array($Tablas_query);
  $Tablas_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
      </select>
  Profesional: 
  <select name="Profesional" id="Profesional">
    <? 
while((!($Profesional==0)))
{

?>
    <option value="<?   echo (->$Item["ID"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?></option>
    <? 
  $Profesional=mysql_fetch_array($Profesional_query);
  $Profesional_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
  </select>
  <br>
  Forma de pago: 
  <select name="FormaPago" id="FormaPago">
    <option value="0" selected>Todas</option>
    <? 
while((!($FormaPago==0)))
{

?>
    <option value="<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["Texto"]->$Value);?></option>
    <? 
  $FormaPago=mysql_fetch_array($FormaPago_query);
  $FormaPago_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
  </select>
  <br>
    <input name="submit" type="submit" value="Mostrar facturas">
  </p>
</form>
<p>&nbsp;</p>
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

