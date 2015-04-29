<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? //Session.lcid=1034  ?>

<? require("Connections/connrumbo.php"); ?>
<? 
$Abonados__DFecha1="1/1/1980";
if (($_POST["Fecha1"]!=""))
{

  $Abonados__DFecha1=$_POST["Fecha1"];
} 

?>
<? 
$Abonados__DFecha2="31/12/2050";
if (($_POST["Fecha2"]!=""))
{

  $Abonados__DFecha2=$_POST["Fecha2"];
} 

?>
<? 
$Abonados__DLocalidad="%";
if (($_POST["Localidad"]!=""))
{

  $Abonados__DLocalidad=$_POST["Localidad"];
} 

?>
<? 
$Abonados__DProvincia="%";
if (($_POST["Provincia"]!=""))
{

  $Abonados__DProvincia=$_POST["Provincia"];
} 

?>
<? 
$Abonados__DColectivo="%";
if (($_POST["Colectivo"]!=""))
{

  $Abonados__DColectivo=$_POST["Colectivo"];
} 

?>
<? 
$Abonados__DPAbonoBajo="0";
if (($_POST["PAbonoBajo"]!=""))
{

  $Abonados__DPAbonoBajo=$_POST["PAbonoBajo"];
} 

?>
<? 
$Abonados__DPAbonoAlto="99999";
if (($_POST["PAbonoAlto"]!=""))
{

  $Abonados__DPAbonoAlto=$_POST["PAbonoAlto"];
} 

?>
<? 

// $Abonados is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.*, Agentes.Nombre as ANombre  FROM Abonados , Agentes  WHERE  Abonados.Provincia like '%"+str_replace("'","''",$Abonados__DProvincia)+"%' and Abonados.Localidad like '%"+str_replace("'","''",$Abonados__DLocalidad)+"%' and (FechaAbono is null or FechaAbono between format('"+str_replace("'","''",$Abonados__DFecha1)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Abonados__DFecha2)+"','dd/mm/yyyy')) and (COLECTIVO IS NULL OR colectivo like '%"+str_replace("'","''",$Abonados__DColectivo)+"%') and (Abonados.Agente = Agentes.Id) AND (Precio between "+str_replace("'","''",$Abonados__DPAbonoBajo)+" and "+str_replace("'","''",$Abonados__DPAbonoAlto)+" ) and (Abonados.ModeloContrato="+$_POST["Contrato"]+") ";

if (($_POST["Agente"]!="Todos"))
{
    echo +" and Abonados.Agente = "+$_POST["Agente"];
} 
echo +"  ORDER BY FechaAbono DESC";


echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Abonados_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Abonados_numRows=$Abonados_numRows+$Repeat1__numRows;
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
<title>Listado de abonados</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body link="#000000" vlink="#000000" alink="#000000" topmargin="25">
<script language="JavaScript" src="menu.js"></script>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#00CC00"> 
    <td>Nombre</td>
    <td> <p>Localidad</p></td>
    <td> <p>Fecha de abono</p></td>
    <td> <p>Agente</p></td>
    <td> <p>Colectivo</p></td>
    <td> <p>Precio</p></td>
  </tr>
  <? 
$totalprecio=0;
$gratuitos=0;
$nuevos=0;
while((($Repeat1__numRows!=0) && (!($Abonados==0))))
{

?>
  <tr> 
    <td><font size="-2"><A HREF="Cliente.asp?<?   echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".->$Item["Id"]->$Value;?>"><?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?> ,<?   echo (->$Item["Nombre"]->$Value);?></A></font></td>
    <td><font size="-2"><?   echo (->$Item["Localidad"]->$Value);?>(<?   echo (->$Item["Provincia"]->$Value);?>)</font></td>
    <td><font size="-2"><?   echo (->$Item["FechaAbono"]->$Value);?></font></td>
    <td><font size="-2"><?   echo (->$Item["ANombre"]->$Value);?>&nbsp;</font></td>
    <td><font size="-2"><?   echo (->$Item["Colectivo"]->$Value);?>&nbsp;</font></td>
    <td><font size="-2"><?   echo (->$Item["Precio"]->$Value);?> &euro; </font></td>
  </tr>
  <? 
  if (!($Item["Precio"]$Value==""))
  {
    $totalprecio=$totalprecio+->$Item["Precio"]->$Value;
  } 
  if ((($Item["FechaAbono"]$Value)==($Item["FechaPrimerAbono"]$Value)))
  {
    $nuevos=$nuevos+1;
  } 
  if (($Item["Precio"]$Value=="0"))
  {
    $gratuito=$gratuito+1;
  } 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Abonados=mysql_fetch_array($Abonados_query);

} 
?>
  <tr> 
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><font size="-2"><p>Total: <? echo $totalprecio;?> &euro;</p>
    </font></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td>Numero de abonos: <? echo $Repeat1__index;?> de los cuales <? echo $gratuito;?> son gratuitos. <br>
Abonos nuevos: <? echo $Repeat1__index-$nuevos;?><br>
Abonos renovados:<? echo $nuevos;?> </td>
  </tr>
</table>
</body>
</html>
<? 

$Abonados=null;

?>

