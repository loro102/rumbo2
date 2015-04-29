<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Profesionales__MMColParam="%";
if (($_POST["Nombre"]!=""))
{

  $Profesionales__MMColParam=$_POST["Nombre"];
} 

?>
<? 
$Profesionales__MMLocalidad="%";
if (($_POST["Localidad"]!=""))
{

  $Profesionales__MMLocalidad=$_POST["Localidad"];
} 

?>
<? 
$Profesionales__MMGrupo="1";
if (($_POST["Profesional"]!=""))
{

  $Profesionales__MMGrupo=$_POST["Profesional"];
} 

?>
<? 
$Profesionales__MMEspec="%";
if (($_POST["especialidad"]!=""))
{

  $Profesionales__MMEspec=$_POST["especialidad"];
} 

?>
<? 

// $Profesionales is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Profesionales  WHERE (Nombre Like '%"+str_replace("'","''",$Profesionales__MMColParam)+"%' and not Nombre='Ninguno' ) and (Ciudad is null or Ciudad Like '%"+str_replace("'","''",$Profesionales__MMLocalidad)+"%') and Tipo="+str_replace("'","''",$Profesionales__MMGrupo)+" and (Especialidad is null or Especialidad Like '%"+str_replace("'","''",$Profesionales__MMEspec)+"%')  ORDER BY Nombre";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Profesionales_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Profesionales_numRows=$Profesionales_numRows+$Repeat1__numRows;
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
<title>Listado de profesionales</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td>Nombre</td>
    <td>Especialidad</td>
    <td>Localidad</td>
    <td>Telefono</td>
    <td>FAX</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!($Profesionales==0))))
{

?>
  <tr <?   if (($Item["Homologado"]$Value==false))
  {
?>bgcolor="#999999"<?   } ?>> 
    <td><A HREF="ProfesionalModificar.asp?<?   echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".->$Item["Id"]->$Value."&Grupo=".$_POST["Profesional"];?>"><?   echo (->$Item["Nombre"]->$Value);?></A>&nbsp;</td>
    <td><?   echo (->$Item["Especialidad"]->$Value);?>&nbsp;</td>
    <td><?   echo (->$Item["Ciudad"]->$Value);?>&nbsp;</td>
    <td><?   echo (->$Item["Telefono1"]->$Value);?>&nbsp;</td>
    <td><?   echo (->$Item["FAX"]->$Value);?>&nbsp;</td>
    <td><a href="contratoprofesional.asp?abonado=<?   echo (->$Item["id"]->$Value);?>&Doc=ACMedico"><img src="Imagenes/AutComp.jpg" alt="Contrato" width="22" height="22" border="0"</td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Profesionales=mysql_fetch_array($Profesionales_query);
  $Profesionales_BOF=0;

} 
?>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr><td>&nbsp;</td>
    <td width="300"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr align="right" valign="top">
        <td><div align="right">
          <h6>Leyenda:</h6>
        </div></td>
        <td><table width="10" height="10" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#999999">
          <tr>
            <td></td>
          </tr>
        </table></td>
        <td align="left"><h6>Profesional no homologado </h6></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<? 

$Profesionales=null;

?>

