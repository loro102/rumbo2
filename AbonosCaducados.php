<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
<? 
// $Resultado is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Abonados  WHERE ModeloContrato = 2 ORDER BY FechaAbono DESC";
echo 0;
echo 2;
echo 3;
$rs=mysql_query();
$Resultado_numRows=0;
?>
<? 
$Repeat1__numRows=-1;
$Repeat1__index=0;
$Resultado_numRows=$Resultado_numRows+$Repeat1__numRows;
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
foreach ($_GET as $Item)
{
  $NextItem="&".$Item."=";
  if (((strpos($MM_removeList,$NextItem,1) ? strpos($MM_removeList,$NextItem,1)+1 : 0)==0))
  {

    $MM_keepURL=$MM_keepURL.$NextItem.rawurlencode($_GET[$Item]);
  } 

}

// add the Form variables to the MM_keepForm string
foreach ($_POST as $Item)
{
  $NextItem="&".$Item."=";
  if (((strpos($MM_removeList,$NextItem,1) ? strpos($MM_removeList,$NextItem,1)+1 : 0)==0))
  {

    $MM_keepForm=$MM_keepForm.$NextItem.rawurlencode($_POST[$Item]);
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
<? ob_start();
?>
<html>
<head>
<title>Abonos caducados</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" bgproperties="fixed" text="#000000" topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC"> 
    <td>Nombre</td>
    <td>NIF</td>
    <td>Fecha de Abono</td>
    <td>Telefonos</td>
    <td>CCC</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!($Resultado==0))))
{

?>
  <tr> 
    <td> 
      <A HREF="Cliente.asp?<?   echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".->$Item["Id"]->$Value;?>"><?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?> , <?   echo (->$Item["Nombre"]->$Value);?></A></td>
    <td><?   echo (->$Item["NIF"]->$Value);?></td>
    <td><?   echo (->$Item["FechaAbono"]->$Value);?></td>
    <td><?   echo (->$Item["Telefono 1"]->$Value);?>/<?   echo (->$Item["Telefono 2"]->$Value);?>/<?   echo (->$Item["Telefono 3"]->$Value);?></td>
    <td><?   echo (->$Item["CCC"]->$Value);?></td>
  </tr>
  <? 
  $ultimoid=->$Item["Id"]->$value;
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Resultado=mysql_fetch_array($Resultado_query);

} 
if (($Repeat1__index==1))
{

  ob_clean();

  header("Location: "."Cliente.asp?Id=".$ultimoid);
} 

?>
</table>
</body>
</html>
<? 

?>

