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
?>
<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
<? if (($_SESSION['MM_Username']==""))
{
  header("Location: "."index.asp");
} ?>
<? 
$Abonado__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Abonado__MMColParam=$_GET["Id"];
} 

?>
<? 
// $Abonado is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.*, Agentes.Nombre as ANombre, ModelosContrato.Nombre as modcontrato FROM Abonados, Agentes, ModelosContrato  WHERE (Abonados.Id = "+str_replace("'","''",$Abonado__MMColParam)+") and (Abonados.Agente = Agentes.Id) and (Abonados.ModeloContrato=ModelosContrato.Id)";
echo 0;
echo 2;
echo 3;
$rs=mysql_query();
$Abonado_numRows=0;
?>
<? 
$Siniestros__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Siniestros__MMColParam=$_GET["Id"];
} 

?>
<? 
$Siniestros__MMTramitadores="()";
if (($_SESSION['CTramitadores']!=""))
{

  $Siniestros__MMTramitadores=$_SESSION['CTramitadores'];
} 

?>
<? 
// $Siniestros is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Siniestro  WHERE Abonado = "+str_replace("'","''",$Siniestros__MMColParam)+" and Tipo=1 AND Tramitador in "+str_replace("'","''",$Siniestros__MMTramitadores)+"  ORDER BY [Fecha Siniestro] DESC";
echo 0;
echo 2;
echo 3;
$rs=mysql_query();
$Siniestros_numRows=0;
?>
<? 
$Otros__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Otros__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Otros is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Siniestro  WHERE Abonado = "+str_replace("'","''",$Otros__MMColParam)+" and not Tipo=1  ORDER BY FechaAperturaExpediente DESC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Otros_numRows=0;
?>
<? 
$SiniestroOtroTramitador__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $SiniestroOtroTramitador__MMColParam=$_GET["Id"];
} 

?>
<? 
$SiniestroOtroTramitador__MMTramitadores="(0)";
if (($_SESSION['CTramitadores']!=""))
{

  $SiniestroOtroTramitador__MMTramitadores=$_SESSION['CTramitadores'];
} 

?>
<? 

// $SiniestroOtroTramitador is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Siniestro  WHERE Abonado = "+str_replace("'","''",$SiniestroOtroTramitador__MMColParam)+" and Tipo=1 AND (not Tramitador in "+str_replace("'","''",$SiniestroOtroTramitador__MMTramitadores)+")  ORDER BY [Fecha Siniestro] DESC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$SiniestroOtroTramitador_numRows=0;
?>
<? 
$Recibos__MMColParam="1";
if (($_GET["id"]!=""))
{

  $Recibos__MMColParam=$_GET["id"];
} 

?>
<? 

// $Recibos_cmd is of type "ADODB.Command"
$Recibos_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Recibos_cmd_CommandText="SELECT * FROM Recibo WHERE cliente = ? ORDER BY fechaemision DESC";
$Recibos_cmd_Prepared=true;
$Recibos_cmd_Parameters=$Append$Recibos_cmd_CreateParameter="param1"$Recibos__MMColParam); // adDouble

$Recibos=$Recibos_cmd_Execute=$Recibos_numRows=0;;
?>
<? 

$Repeat3__numRows=-1;
$Repeat3__index=0;
$Recibos_numRows=$Recibos_numRows+$Repeat3__numRows;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Siniestros_numRows=$Siniestros_numRows+$Repeat1__numRows;
?>
<? 

$Repeat2__numRows=-1;
$Repeat2__index=0;
$Otros_numRows=$Otros_numRows+$Repeat2__numRows;
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
foreach ($_GET as $objItem)
{
  $NextItem="&".$objItem."=";
  if (((strpos($MM_removeList,$NextItem,1) ? strpos($MM_removeList,$NextItem,1)+1 : 0)==0))
  {

    $MM_keepURL=$MM_keepURL.$NextItem.rawurlencode($_GET[$objItem]);
  } 

}

// add the Form variables to the MM_keepForm string
foreach ($_POST as $objItem)
{
  $NextItem="&".$objItem."=";
  if (((strpos($MM_removeList,$NextItem,1) ? strpos($MM_removeList,$NextItem,1)+1 : 0)==0))
  {

    $MM_keepForm=$MM_keepForm.$NextItem.rawurlencode($_POST[$objItem]);
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
<title>Datos de Abonado</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" bgproperties="fixed" text="#000000" topmargin="30">
  <script language="JavaScript" src="menu.js"></script>
  <script language="JavaScript" src="funciones.js"></script>
<? if ((($_GET["Agente"]=="Si") && (!($Item["ANombre"]$Value=="rumbo"))))
{
?>
<script language="javascript">window.open("AgenteAgradecimiento.asp?Id=<?   echo (->$Item["Id"]->$Value);?>")</script>
<? } ?>
        <? if (($Item["ModeloContrato"]$Value==2))
{
?>
<h1>Abono caducado</h1><? } ?>
<table width="100%" border="0">
  <tr>
    <td>Nro de cliente: <? echo (->$Item["Id"]->$Value);?><br>
      <? if (($Item["ModeloContrato"]$Value>2))
{
?>Fecha de abono: <?   echo (->$Item["FechaAbono"]->$Value);?><? } ?> Fecha de alta:<? echo (->$Item["FechaPrimerAbono"]->$Value);?> Modelo de contrato: 
      <? echo ->$Item["modcontrato"]->$Value;?>
      <br>
      Agente: <? echo (->$Item["ANombre"]->$Value);?><a href="AgenteAgradecimiento.asp?Id=<? echo (->$Item["Id"]->$Value);?>" target="_blank"><img src="Imagenes/carta.gif" alt="Carta de agradecimiento al agente" width="19" height="19" border="0"></a></td>
    <td align="right" valign="top"><? if (($Siniestros==0) && ($Otros==0))
{
?><a href="ClienteBorrar.asp?Id=<?   echo (->$Item["Id"]->$Value);?>"><img src="Imagenes/Borrar.gif" name="Borrar" width="20" height="20" border="0" id="Borrar"></a><? } ?></td>
  </tr>
</table>
<table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
  <tr>
    <td colspan="2" bgcolor="#EEEEEE">Nombre: <? echo (->$Item["Nombre"]->$Value);?></td>
    <td bgcolor="#EEEEEE">Apellidos: <? echo (->$Item["Apellido1"]->$Value);?>&nbsp;<? echo (->$Item["Apellido2"]->$Value);?></td>
    <td bgcolor="#EEEEEE">DNI:<? echo (->$Item["NIF"]->$Value);?></td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#EEEEEE">Direccion: <? echo (->$Item["Direccion"]->$Value);?></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#EEEEEE">C.P.: <? echo (->$Item["Codigo Postal"]->$Value);?></td>
    <td bgcolor="#EEEEEE">Localidad: <? echo (->$Item["Localidad"]->$Value);?></td>
    <td bgcolor="#EEEEEE">Provincia: <? echo (->$Item["Provincia"]->$Value);?></td>
  </tr>
  <tr>
    <td bgcolor="#EEEEEE">Telefono1:&nbsp;<? echo (->$Item["Telefono 1"]->$Value);?></td>
    <td bgcolor="#EEEEEE">Telefono2:&nbsp;<? echo (->$Item["Telefono 2"]->$Value);?></td>
    <td bgcolor="#EEEEEE">Telefono3:&nbsp;<? echo (->$Item["Telefono 3"]->$Value);?></td>
    <td bgcolor="#EEEEEE">Email:&nbsp;<? echo (->$Item["Email"]->$Value);?></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#EEEEEE">Fecha de nacimiento: <? echo (->$Item["FechaNacimiento"]->$Value);?><br>
      Fecha de caducidad del carnet de conducir: <? echo (->$Item["FechaCadCarnet"]->$Value);?></td>
    <td colspan="2" bgcolor="#EEEEEE">Colectivo:<? echo (->$Item["Colectivo"]->$Value);?></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#EEEEEE">Estado civil: <? echo ->$Item["EstadoCivil"];?></td>
    <td colspan="2" bgcolor="#EEEEEE">Hijos: <? echo ->$Item["Hijos"];?></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#EEEEEE">Profesion: <? echo ->$Item["Profesion"];?></td>
    <td colspan="2" bgcolor="#EEEEEE">Ingresos: <? echo ->$Item["Ingresos"];?></td>
  </tr>
</table>
<p><a href="ClienteActualizar.asp?Id=<? echo (->$Item["Id"]->$Value);?>">Modificar 
  datos</a> <? if (($Item["ModeloContrato"]$Value>3))
{
?>
<br>
  <a href="ContratoImprimirSalida.asp?ID=<?   echo (->$Item["Id"]->$Value);?>" target="_blank">Imprimir 
  contrato de abono</a><? } ?></p>
<p>Notas<br>
  <? echo (->$Item["Notas"]->$Value);?> </p>
<p>
  <? 
if (!($Item["Notas"]$Value==null))
{
  print "<p>Notas:<br>".str_replace("\r\n","<br>",->$Item["Notas"]->$Value);
} ?> 
</p>
<p>Siniestros:<a href="SiniestroAnadir.asp?Id=<? echo (->$Item["Id"]->$Value);?>">A&ntilde;adir 
  siniestro</a></p>
<table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
  <tr> 
    <td>Fecha del siniestro:</td>
    <td>Lugar:</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!($Siniestros==0))))
{

?>
  <tr <?   if ($Item["Fase"]$Value==7)
  {
    print " bgcolor=\"#999999\" ";
  } ?>> 
    <td><A HREF="Siniestro.asp?<?   echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".->$Item["Id"]->$Value;?>"><?   if (($Item["Fecha Siniestro"]$Value==""))
  {
?>Sin fecha<?   }
    else
  {
?><?     echo (->$Item["Fecha Siniestro"]->$Value);?></A><?     if (($Item["Representado"]$Value==true))
    {
?> reprensando a <?       echo (->$Item["Nombre"]->$Value);?><?     } ?><?   } ?>
</td>
    <td><A HREF="Siniestro.asp?<?   echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".->$Item["Id"]->$Value;?>"><?   if (($Item["Lugar"]$Value==""))
  {
?>Sin lugar<?   }
    else
  {
?><?     echo (->$Item["Lugar"]->$Value);?><?   } ?></A></td>
  </tr>
  <? 
  $ultimoid=->$Item["Id"]->$value;
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Siniestros=mysql_fetch_array($Siniestros_query);
  $Siniestros_BOF=0;

} 
if ((($Repeat1__index==1) && ($Otros==0) && (!($_GET["NoSalto"]=="1"))))
{

  
  $Siniestros=null;

  
  $Otros=null;

  
  $SiniestroOtroTramitador=null;

  $Recibos->Close();
  $Recibos=null;

  
  $Abonado=null;

  ob_clean();

  header("Location: "."Siniestro.asp?Id=".$ultimoid);
} 

?> 
</table>
<p>
</p>
<p>Otros:<a href="SiniestroOtrosAnadir.asp?Id=<? echo (->$Item["Id"]->$Value);?>">A&ntilde;adir</a></p>
<table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
  <tr>
    <td height="22">Fecha de apertura:</td>
    <td>Tipo:</td>
  </tr>
  <? 
while((($Repeat2__numRows!=0) && (!($Otros==0))))
{

?>
  <tr <?   if ($Item["Fase"]$Value==7)
  {
    print " bgcolor=\"#999999\" ";
  } ?>>
    <td><a href="SiniestroOtros.asp?<?   echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".->$Item["Id"]->$Value;?>"><?   echo (->$Item["FechaAperturaExpediente"]->$Value);?></a></td>
    <td><A HREF="SiniestroOtros.asp?<?   echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".->$Item["Id"]->$Value;?>">
      <?   if (($Item["Tipo"]$Value==2))
  {
?>
      Consulta de Abogado
      <?   }
    else
  if (($Item["Tipo"]$Value==3))
  {
?>
      <?     echo (->$Item["TipoTexto"]->$Value);?>
      <?   }
    else
  if (($Item["Tipo"]$Value==4))
  {
?>
      Remitido a otra oficina: <?     echo (->$Item["TipoTexto"]->$Value);?>
      <?   }
    else
  if (($Item["Tipo"]$Value==5))
  {
?>
      Servicios a cliente de otra oficina: <?     echo (->$Item["TipoTexto"]->$Value);?>
      <?   }
    else
  {
?>
      Recurso de multa: <?     echo (->$Item["TipoTexto"]->$Value);?>
<?   } ?>
          </A></td>
  </tr>
  <? 
  $Repeat2__index=$Repeat2__index+1;
  $Repeat2__numRows=$Repeat2__numRows-1;
  $Otros=mysql_fetch_array($Otros_query);
  $Otros_BOF=0;

} 
?>

</table>
<div hidden="none">
<? if ((!($SiniestroOtroTramitador==0)))
{
?>
<p>Siniestros tramitados por otro tramitador: </p>
<table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
  <tr>
    <td>Fecha del siniestro:</td>
    <td>Lugar:</td>
  </tr>
<? 
  while((!($SiniestroOtroTramitador==0)))
  {

?>
  <tr <?     if ($Item["Fase"]$Value==7)
    {
      print " bgcolor=\"#999999\" ";
    } ?>>
    <td><a href="Siniestro.asp?Id=<?     echo (->$Item["Id"]->$Value);?>"><?     echo (->$Item["Fecha Siniestro"]->$Value);?>
        <?     if (($Item["Representado"]$Value==true))
    {
?>
      reprensando a <?       echo (->$Item["Nombre"]->$Value);?>
    <?     } ?></a>    </td>
    <td><?     echo (->$Item["Lugar"]->$Value);?></td>
  </tr>
  <? 
    $SiniestroOtroTramitador=mysql_fetch_array($SiniestroOtroTramitador_query);
    $SiniestroOtroTramitador_BOF=0;

  } 
?>
</table>
</div>
<p>
  <? } ?>
</p>
<p><a name="recibos"></a>Recibos:</p>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td>Concepto</td>
    <td>Fecha de emisi&oacute;n </td>
    <td>Fecha de cobro</td>
    <td>Cuantia</td>
    <? if ($_SESSION['CFacturas']==true)
{
?><td>Borrar</td><? } ?>
  </tr>
  <? 
while((($Repeat3__numRows!=0) && (!$Recibos->EOF)))
{

?>
    <tr>
      <td><a href="Recibo.asp?id=<?   echo ($Recibos->Fields->$Item["id"]->$Value);?>"><?   echo ($Recibos->Fields->$Item["concepto"]->$Value);?></a></td>
      <td><?   echo ($Recibos->Fields->$Item["fechaemision"]->$Value);?></td>
      <td><?   echo ($Recibos->Fields->$Item["fechacobro"]->$Value);?></td>
      <td><div align="right"><?   echo ($Recibos->Fields->$Item["cuantia"]->$Value);?>&euro;</div></td>
      <?   if ($_SESSION['CFacturas']==true)
  {
?><td><div align="right"><img onClick="if (confirm('Estas seguro de borrar este recibo?')) document.location.href='ReciboBorrar.asp?Id=<?     echo ($Recibos->Fields->$Item["id"]->$Value);?>&Cliente=<?     echo (->$Item["Id"]->$Value);?>';" src="Imagenes/Borrar.gif" width="20"></div></td><?   } ?>
    </tr>
    <? 
  $Repeat3__index=$Repeat3__index+1;
  $Repeat3__numRows=$Repeat3__numRows-1;
  $Recibos->MoveNext();
} 
?>
</table>
<p><a href="ReciboAdd.asp?cliente=<? echo (->$Item["Id"]->$Value);?>">A&ntilde;adir recibo</a> </p>
</body>
</html>
<? 

$Siniestros=null;

?>
<? 

$Otros=null;

?>
<? 

$SiniestroOtroTramitador=null;

?>
<? 
$Recibos->Close();
$Recibos=null;

?>
<? 

$Abonado=null;

?>

