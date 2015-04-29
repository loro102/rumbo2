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
  session_register("CModsiniestros_session");
  session_register("CIndemnizacion_session");
  session_register("CVerFacturas_session");
  session_register("CControlFases_session");
?>
<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Siniestros__RQProfesional="1";
if (($_GET["Profesional"]!=""))
{

  $Siniestros__RQProfesional=$_GET["Profesional"];
} 

?>
<? 
$Siniestros__RQFases="(-1)";
if (($_GET["Fases"]!=""))
{

  $Siniestros__RQFases=$_GET["Fases"];
} 

?>
<? 
$Siniestros__MMTramitadores="(0)";
if (($_SESSION['CTramitadores']!=""))
{

  $Siniestros__MMTramitadores=$_SESSION['CTramitadores'];
} 

?>
<? 
$Siniestros__DFechaAE1="1/1/1980";
if (($_GET["FechaAE1"]!=""))
{

  $Siniestros__DFechaAE1=$_GET["FechaAE1"];
} 

?>
<? 
$Siniestros__DFechaAE2="1/1/2050";
if (($_GET["FechaAE2"]!=""))
{

  $Siniestros__DFechaAE2=$_GET["FechaAE2"];
} 

?>
<? 

// $Siniestros is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.Nombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.Id, Siniestro.Lugar,Siniestro.Fase, Siniestro.Tipo, Siniestro.TipoTexto  FROM Siniestro, Abonados,SiniestroProfesional  WHERE (Abonados.Id = Siniestro.Abonado) and (Siniestro.Id=SiniestroProfesional.Siniestro) and (SiniestroProfesional.Profesional="+str_replace("'","''",$Siniestros__RQProfesional)+") and (Siniestro.Fase in "+str_replace("'","''",$Siniestros__RQFases)+") and (Siniestro.Tramitador in "+str_replace("'","''",$Siniestros__MMTramitadores)+") and (Siniestro.FechaAperturaExpediente is null or Siniestro.FechaAperturaExpediente between format('"+str_replace("'","''",$Siniestros__DFechaAE1)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Siniestros__DFechaAE2)+"','dd/mm/yyyy'))";
echo ." ORDER BY Siniestro.[Fecha Siniestro] DESC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Siniestros_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Siniestros_numRows=$Siniestros_numRows+$Repeat1__numRows;
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
<title>Siniestros</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body background="Imagenes/fondo.gif" bgproperties="fixed" topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC"> 
    <td>Abonado</td>
    <td>Lugar</td>
  </tr>
  <? 
$cerrados=0;
while((($Repeat1__numRows!=0) && (!($Siniestros==0))))
{

?>
  <tr <?   if ($Item["Fase"]==70)
  {
    print "bgcolor=\"#CCCCCC\"";
  } ?>> 
    <td><a href="Siniestro.asp?<?   echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".->$Item["Id"]->$Value;?>"><strong><?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?>,<?   echo (->$Item["Nombre"]->$Value);?></strong></a></td>
    <td><A HREF="Siniestro.asp?<?   echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".->$Item["Id"]->$Value;?>">
<?   if (($Item["Tipo"]$Value==1))
  {
?>
<?     echo (->$Item["Lugar"]->$Value);?>
<?   }
    else
  if (($Item["Tipo"]$Value==2))
  {
?>
Consulta de abogado
<?   }
    else
  if (($Item["Tipo"]$Value==3))
  {
?>
<?     echo (->$Item["TipoTexto"]->$Value);?>
<?   } ?>
</A>&nbsp;</td>
  </tr>
  <? 
  if ($Item["Fase"]==70)
  {
    $cerrados=$cerrados+1;
  } 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Siniestros=mysql_fetch_array($Siniestros_query);
  $Siniestros_BOF=0;

} 
?>
</table>
<table width="100%" border="0">
  <tr>
    <td>Total: <? echo $Repeat1__index;?> (abiertos: <? echo $Repeat1__index-$cerrados;?>/cerrasdos: 
      <? echo $cerrados;?>)</td>
    <td><table width="100%" border="0">
        <tr>
          <td>Leyenda:</td>
          <td><table width="100%" border="1" cellspacing="0" bordercolor="#000000" bgcolor="#CCCCCC">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          <td>Expediente Cerrado</td>
          <td><table width="100%" height="10" border="1" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF">
              <tr>
                <td>&nbsp;</td>
              </tr></table></td>
          <td>Expediente abierto</td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
<? 

$Siniestros=null;

?>

