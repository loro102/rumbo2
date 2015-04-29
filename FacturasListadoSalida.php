<?
  session_start();
  session_register("paginaant_session");
  session_register("MM_Username_session");
  session_register("PAnt_session");
  session_register("MM_UserAuthorization_session");
  session_register("CuentaVerExpedientes_session");
  session_register("Modaseguradora_session");
  session_register("CTramitadores_session");
  session_register("CFacturas_session");
  session_register("Siniestro_session");
  session_register("CBeneficio_session");
?>
<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:46 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Facturas__MMFComienzo="1/1/1980";
if (($_GET["FComienzo"]!=""))
{

  $Facturas__MMFComienzo=$_GET["FComienzo"];
} 

?>
<? 
$Facturas__MMFFinal="1/1/2020";
if (($_GET["FFinal"]!=""))
{

  $Facturas__MMFFinal=$_GET["FFinal"];
} 

?>
<? 
$Facturas__MMFComienzoPago="1/1/1980";
if (($_GET["FComienzoPago"]!=""))
{

  $Facturas__MMFComienzoPago=$_GET["FComienzoPago"];
} 

?>
<? 
$Facturas__MMFFinalPago="1/1/2020";
if (($_GET["FFinalPago"]!=""))
{

  $Facturas__MMFFinalPago=$_GET["FFinalPago"];
} 

?>
<? 

// $Facturas is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Facturas.*, Abonados.Nombre,  Abonados.Apellido1,  Abonados.Apellido2, Siniestro.Id, Profesionales.Nombre as ProfesionalNombre, TipoProfesional.Texto, FormasPago.Texto as FPTexto  FROM Facturas, Siniestro, Abonados, TipoProfesional, Profesionales, FormasPago  WHERE (fecha is null or fecha between format('"+str_replace("'","''",$Facturas__MMFComienzo)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Facturas__MMFFinal)+"','dd/mm/yyyy')) and (FechaPago is null or FechaPago between format('"+str_replace("'","''",$Facturas__MMFComienzoPago)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Facturas__MMFFinalPago)+"','dd/mm/yyyy'))and Facturas.Siniestro=Siniestro.Id and Siniestro.Abonado=Abonados.Id and (Profesionales.Id=Facturas.Valor) and (Profesionales.Tipo=TipoProfesional.Id) and (FormasPago.Id=Facturas.FormaPago)";
if (!($_GET["sector"]=="-1"))
{
    echo ."and Tabla = "+str_replace("'","''",$_GET["sector"])+" and Valor = "+str_replace("'","''",$_GET["profesional"]);
} 
if (!($_GET["FormaPago"]==0))
{
    echo ." and FormaPago=".$_GET["FormaPago"];
} 
echo ."  ORDER BY Fecha DESC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Facturas_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Facturas_numRows=$Facturas_numRows+$Repeat1__numRows;
?>
<? 
?>
<? 
// *** Go To Record and Move To Record: create strings for maintaining URL and Form parameters



// create the list of parameters which should not be maintained
$MM_removeList="&index=";
if (($MM_paramName!=""))
{

  $MM_removeList=$MM_removeList."&".$MM_paramName."=";
} 


$MM_keepURL="";
$MM_keepForm="";
$MM_keepBoth="";
$MM_keepNone="";

// add the URL parameters to the MM_keepURL string
foreach ($_GET as $MM_item)
{
  $MM_nextItem="&".$MM_item."=";
  if (((strpos($MM_removeList,$MM_nextItem,1) ? strpos($MM_removeList,$MM_nextItem,1)+1 : 0)==0))
  {

    $MM_keepURL=$MM_keepURL.$MM_nextItem.rawurlencode($_GET[$MM_item]);
  } 

}

// add the Form variables to the MM_keepForm string
foreach ($_POST as $MM_item)
{
  $MM_nextItem="&".$MM_item."=";
  if (((strpos($MM_removeList,$MM_nextItem,1) ? strpos($MM_removeList,$MM_nextItem,1)+1 : 0)==0))
  {

    $MM_keepForm=$MM_keepForm.$MM_nextItem.rawurlencode($_POST[$MM_item]);
  } 

}

// create the Form + URL string and remove the intial '&' from each of the strings
$MM_keepBoth=$MM_keepURL.$MM_keepForm;
if (($MM_keepBoth!=""))
{

  $MM_keepBoth=substr($MM_keepBoth,strlen($MM_keepBoth)-(strlen($MM_keepBoth)-1));
} 

if (($MM_keepURL!=""))
{

  $MM_keepURL=substr($MM_keepURL,strlen($MM_keepURL)-(strlen($MM_keepURL)-1));
} 

if (($MM_keepForm!=""))
{

  $MM_keepForm=substr($MM_keepForm,strlen($MM_keepForm)-(strlen($MM_keepForm)-1));
} 


// a utility function used for adding additional parameters to these strings
function MM_joinChar($firstItem)
{
  extract($GLOBALS);

  if (($firstItem!=""))
  {

    $function_ret="&";
  }
    else
  {

    $function_ret="";
  } 

  return $function_ret;
} 
?>
<html>
<head>
<title>Listado de facturas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="20">
<script language="JavaScript" src="menu.js"></script>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC"> 
    <td>Fecha</td>
    <td>Nro Factura</td>
<? if (($_GET["sector"]=="-1"))
{
?>
	<td>Profesional</td>
<? } ?>
    <td>Abonado</td>
    <td>Descripcion</td>
	<td>Forma de pago</td>
    <td>Cuantia Factura</td>
    <td>Cuantia Abonado</td>
<? if ($_SESSION['CFacturas']==true)
{
?>
    <td>Cuantia rumbo</td>
<? } ?>
  </tr>
  <? 
$total_facturas=0;
$total_facturas3=0;
while((($Repeat1__numRows!=0) && (!($Facturas==0))))
{

?>
  <tr <?   if (($Item["FormaPago"]==1))
  {
    print "bgcolor=\"#FF0000\"";
  } ?>> 
    <td><?   echo (->$Item["Fecha"]->$Value);?>&nbsp;</td>
	<td><?   echo (->$Item["Nro Factura"]->$Value);?>&nbsp;</td>
<?   if (($_GET["sector"]=="-1"))
  {
?>
	<td><?     echo (->$Item["ProfesionalNombre"]->$Value);?>(<?     echo (->$Item["Texto"]->$Value);?>)</td>
    <?   } ?>
	<td><A HREF="Siniestro.asp?<?   echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".->$Item["Id"]->$Value;?>"><?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?>,<?   echo (->$Item["Nombre"]->$Value);?></A></td>
    <td><?   echo (->$Item["Descripcion"]->$Value);?></td>
	<td><?   echo (->$Item["FPTexto"]->$Value);?> - <?   echo (->$Item["NroPagare"]->$Value);?></td>
    <td><?   echo (->$Item["Cuantia rumbo"]->$Value);?>&euro;</td>
    <td><?   echo (->$Item["Cuantia Abonado"]->$Value);?>&euro;</td>
<?   if ($_SESSION['CFacturas']==true)
  {
?>
    <td><?     echo (->$Item["ValorReal"]->$Value);?>&euro;</td>
<?   } ?>
  </tr>
  <? 
  if (!($Item["Cuantia rumbo"]$Value==""))
  {
    $total_facturas=$total_facturas+(->$Item["Cuantia rumbo"]->$Value);
  } 
  if (!($Item["ValorReal"]$Value==""))
  {
    $total_facturas3=$total_facturas3+(->$Item["ValorReal"]->$Value);
  } 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Facturas=mysql_fetch_array($Facturas_query);
  $Facturas_BOF=0;

} 
?>
  <tr bgcolor="#CCCCCC"> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
<? if (($_GET["sector"]=="-1"))
{
?>
	<td>&nbsp;</td>
<? } ?>
    <td colspan="3">Totales:</td>
    <td><? echo $total_facturas;?> &euro;</td>
    <td>&nbsp;</td>
    <? if ($ocultar)
{
?><td><?   echo $total_facturas3;?> &euro;</td><? } ?>
  </tr>
</table>
</body>
</html>
<? 

$Facturas=null;

?>

