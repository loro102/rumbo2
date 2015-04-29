<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? //Session.lcid=1034  ?>

<? require("Connections/connrumbo.php"); ?>
<? 

// $Abonados is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Nombre, Apellido1, Apellido2, NIF FROM Abonados ORDER BY Apellido1,Apellido2,Nombre ASC";

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

<body topmargin="25">
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#ff6600"> 
    <td bgcolor="#CCCCCC"><strong>Nombre</strong></td>
    <td bgcolor="#CCCCCC"> <p><strong>NIF</strong></p></td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!($Abonados==0))))
{

?>
  <tr> 
    <td><?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?> ,<?   echo (->$Item["Nombre"]->$Value);?></td>
    <td><?   echo (->$Item["NIF"]->$Value);?>&nbsp;</td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Abonados=mysql_fetch_array($Abonados_query);

} 
?>
</table>
</body>
</html>
<? 

$Abonados=null;

?>

