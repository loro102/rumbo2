<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
function GenerarC($origen)
{
  extract($GLOBALS);

//Primero normalizo la palabra dejandola sin acentos 
  $origen=str_replace("á","a",$origen);
  $origen=str_replace("é","e",$origen);
  $origen=str_replace("í","i",$origen);
  $origen=str_replace("ó","o",$origen);
  $origen=str_replace("ú","u",$origen);

//Cambio las vocales por los comodines para buscar con y sin acentos. 
  $origen=str_replace("a","[áa]",$origen);
  $origen=str_replace("e","[ée]",$origen);
  $origen=str_replace("i","[íi]",$origen);
  $origen=str_replace("o","[óo]",$origen);
  $origen=str_replace("u","[úuü]",$origen);

  $function_ret=$origen;
  return $function_ret;
} 
?>
<? 
$Agentes__MMColParam="%";
if (($_POST["Nombre"]!=""))
{

  $Agentes__MMColParam=$_POST["Nombre"];
} 

?>
<? 
$Agentes__MMLocalidad="%";
if (($_POST["Localidad"]!=""))
{

  $Agentes__MMLocalidad=$_POST["Localidad"];
} 

?>
<? 
$Agentes__MMProfesion="%";
if (($_POST["Profesion"]!=""))
{

  $Agentes__MMProfesion=$_POST["Profesion"];
} 

?>
<? 
$Agentes__MMComercial="%";
if (($_POST["Comercial"]!=""))
{

  $Agentes__MMComercial=$_POST["Comercial"];
} 

?>
<? 
$Agentes__MMPortatriptico="True";
if (($_POST["Portatriptico"]!=""))
{

  $Agentes__MMPortatriptico=$_POST["Portatriptico"];
} 

?>
<? 
$Agentes__MMPegatina="True";
if (($_POST["Pegatina"]!=""))
{

  $Agentes__MMPegatina=$_POST["Pegatina"];
} 

?>
<? 
$Agentes__MMPlaca="True";
if (($_POST["Placa"]!=""))
{

  $Agentes__MMPlaca=$_POST["Placa"];
} 

?>
<? 
$Agentes__MMActivo="True";
if (($_POST["Homologado"]!=""))
{

  $Agentes__MMPlaca=$_POST["Homologado"];
} 

?>
<? 

// $Agentes is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Agentes  WHERE Nombre Like '%"+GenerarC(str_replace("'","''",$Agentes__MMColParam))+"%' and (Localidad is null or Localidad Like '%"+str_replace("'","''",$Agentes__MMLocalidad)+"%') and "+str_replace("'","''",$Agentes__MMPortatriptico)+" and "+str_replace("'","''",$Agentes__MMPegatina)+" and "+str_replace("'","''",$Agentes__MMPlaca)+" and "+str_replace("'","''",$Agentes__MMActivo)+" and "+$_POST["Contrato"];
if ((strlen($Agentes__MMProfesion)>1))
{
    echo +" and (Profesion Like '%"+str_replace("'","''",$Agentes__MMProfesion)+"%')";
} 
if ((strlen($Agentes__MMComercial)>1))
{
    echo +" and (Comercial like '%"+str_replace("'","''",$Agentes__MMComercial)+"%')";
} 

echo +" ORDER BY "+$_POST["Orden"];
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Agentes_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Agentes_numRows=$Agentes_numRows+$Repeat1__numRows;
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
<title>Listado de agentes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td>Nombre</td>
    <td>Direccion</td>
    <td>Localidad</td>
    <td>CP</td>
    <td>Telefono</td>
    <td>Profesion</td>
    <td>Placa</td>
    <td>Pegatina</td>
    <td>Fecha Contrato</td>
    <td>Notas</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!($Agentes==0))))
{

?> 
<tr <?   if (($Item["Homologado"]$Value==false))
  {
?>bgcolor="#999999"<?   } ?>> 
    <td><A HREF="AgenteModificar.asp?<?   echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".->$Item["Id"]->$Value;?>"><?   echo (->$Item["Nombre"]->$Value);?></A></td>
    <td><?   echo (->$Item["Direccion"]->$Value);?>&nbsp;</td>
    <td><?   echo (->$Item["Localidad"]->$Value);?>&nbsp;</td>
    <td><?   echo (->$Item["CP"]->$Value);?>&nbsp;</td>
    <td><?   echo (->$Item["Telefono1"]->$Value);?>&nbsp;</td>
    <td><?   echo (->$Item["Profesion"]->$Value);?>&nbsp;</td>
    <td><?   if (($Item["Placa"]$Value==true))
  {
?>Si<?   }
    else
  {
?>&nbsp;<?   } ?></td>
    <td><?   if (($Item["Pegatina"]$Value==true))
  {
?>Si<?   }
    else
  {
?>&nbsp;<?   } ?></td>
    <td><?   echo (->$Item["FechaContrato"]->$Value);?>&nbsp;</td>
    <td><?   echo (->$Item["Notas"]->$Value);?>&nbsp;</td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Agentes=mysql_fetch_array($Agentes_query);

} 
?>
</table>
</body>
</html>
<? 

$Agentes=null;

?>

