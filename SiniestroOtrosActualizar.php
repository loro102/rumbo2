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
<? // Session.lcid=1034  ?>
<? 
$MM_editAction=($_SERVER["SCRIPT_NAME"]);
if (($_GET!=""))
{

  $MM_editAction=$MM_editAction."?".htmlspecialchars($_GET);
} 


// boolean to abort record edit
$MM_abortEdit=false;
?>
<? 
// IIf implementation
function MM_IIf($condition,$ifTrue,$ifFalse)
{
  extract($GLOBALS);

  if ($condition=="")
  {

    $function_ret=$ifFalse;
  }
    else
  {

    $function_ret=$ifTrue;
  } 

  return $function_ret;
} 
?>
<? 
if (((${"MM_update"})=="form1"))
{

  if ((!$MM_abortEdit))
  {

// execute the update

    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="UPDATE Siniestro SET Abonado = ?, Tipo = ?, TipoTexto = ?, Fase = ?, Tramitador = ?, CasoTipo = ?, CasoTipo2 = ?, FechaAperturaExpediente = ?, RefExpediente = ?, FechaCierreExpediente = ?, AsistenciaJuridica = ?, FechaEntregaAJ = ?, OtrosDescripcion = ?, OtrosContrario = ?, CobroCliente = ?, Percivido = ?, PagoAgente = ?, Indemnizacion = ?, Deuda = ?, [Expediente Cerrado] = ? WHERE Id = ?";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"        MM_IIF($_POST["Abonado"],$_POST["Abonado"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"        MM_IIF($_POST["Tipo"],$_POST["Tipo"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["TipoTexto"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"        MM_IIF($_POST["fase"],$_POST["fase"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"        MM_IIF($_POST["tramitador"],$_POST["tramitador"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"        MM_IIF($_POST["CasoTipo"],$_POST["CasoTipo"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"        MM_IIF($_POST["CasoTipo2"],$_POST["CasoTipo2"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"        MM_IIF($_POST["FechaApertura"],$_POST["FechaApertura"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"    $_POST["RefExpediente"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"        MM_IIF($_POST["FechaCierre"],$_POST["FechaCierre"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param11"        MM_IIF($_POST["AsistenciaJuridica"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param12"        MM_IIF($_POST["FechaEntregaAJ"],$_POST["FechaEntregaAJ"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param13"    $_POST["OtrosDescripcion"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param14"    $_POST["OtrosContrario"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param15"        MM_IIF($_POST["CobroCliente"],$_POST["CobroCliente"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param16"        MM_IIF($_POST["Percivido"],$_POST["Percivido"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param17"        MM_IIF($_POST["PagoAgente"],$_POST["PagoAgente"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param18"        MM_IIF($_POST["Indemni"],$_POST["Indemni"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param19"        MM_IIF($_POST["Deuda"],$_POST["Deuda"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param20"        MM_IIF($_POST["Expediente_Cerrado"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param21"        MM_IIF($_POST["MM_recordId"],$_POST["MM_recordId"],null);// adDouble
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

// append the query string to the redirect URL
    $MM_editRedirectUrl="SiniestroOtros.asp";
    if (($_GET!=""))
    {

      if (((strpos($MM_editRedirectUrl,"?",1) ? strpos($MM_editRedirectUrl,"?",1)+1 : 0)==0))
      {

        $MM_editRedirectUrl=$MM_editRedirectUrl."?".$_GET;
      }
        else
      {

        $MM_editRedirectUrl=$MM_editRedirectUrl."&".$_GET;
      } 

    } 

    header("Location: ".$MM_editRedirectUrl);
  } 

} 

?>
<? 
$Siniestro__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Siniestro__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Siniestro_cmd is of type "ADODB.Command"
$Siniestro_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Siniestro_cmd_CommandText="SELECT * FROM Siniestro WHERE Id = ?";
$Siniestro_cmd_Prepared=true;
$Siniestro_cmd_Parameters=$Append$Siniestro_cmd_CreateParameter="param1"$Siniestro__MMColParam); // adDouble

$Siniestro=$Siniestro_cmd_Execute=$Siniestro_numRows=0;;
?>
<? 

// $Fase is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Fases WHERE Id>=".($Siniestro->Fields->$Item["Fase"]->$Value)." AND ((NOT texto in ('Archivado','Incobrados','No llego a buen puerto')) OR (Id=".($Siniestro->Fields->$Item["Fase"]->$Value).")) ORDER BY Id ASC";
if ($_SESSION['CControlFases'])
{
    echo "SELECT * FROM Fases ORDER BY Id ASC";
} 
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Fase_numRows=0;
?>
<? 

// $Tramitadores is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Tramitadores";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Tramitadores_numRows=0;
?>
<html>
<head>
<style>
  .imagenNO {display:none;}
  .imagen {display:block;}
</style>
<title>Actualizacion de datos de siniestro</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body topmargin="30">
<p>
  <script language="JavaScript" src="menu.js"></script>
    <script language="JavaScript">
function ajustacomas() {
	//form1.CobroCliente.value=form1.CobroCliente.value.replace('.',',');
	//form1.Percivido.value=form1.Percivido.value.replace('.',',');
	//form1.PagoAgente.value=form1.PagoAgente.value.replace('.',',');
	//form1.Indemni.value=form1.Indemni.value.replace('.',',');
	//form1.Deuda.value=form1.Deuda.value.replace('.',',');
}
function oculta() {
	if (form1.Tipo.value!=6)
		window.multas.className='imagenNO'
		else
		window.multas.className='imagen';
	if (form1.Tipo.value==2)
		window.desc.className='imagenNO'
		else
		window.desc.className='imagen';
}
</script>
<form method="POST" action="<? echo $MM_editAction;?>" name="form1" onSubmit="ajustacomas();oculta()">
  <input type="hidden" name="Abonado" value="<? echo ($Siniestro->Fields->$Item["Abonado"]->$Value);?>" size="32">
  Tipo:
  <select name="Tipo" id="Tipo" onChange="form1.TipoTexto.disabled=(form1.Tipo.value==2);oculta();">
        <option value="2" selected <? if ((!!isset(($Siniestro->Fields->$Item["Tipo"]->$Value))))
{
  if (("2"==(($Siniestro->Fields->$Item["Tipo"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>Consulta de abogado
        <option value="3" <? if ((!!isset(($Siniestro->Fields->$Item["Tipo"]->$Value))))
{
  if (("3"==(($Siniestro->Fields->$Item["Tipo"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>Otros        
        <option value="4" <? if ((!!isset(($Siniestro->Fields->$Item["Tipo"]->$Value))))
{
  if (("4"==(($Siniestro->Fields->$Item["Tipo"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>Cliente remitido a otra oficina</option>
      <option value="5" <? if ((!!isset(($Siniestro->Fields->$Item["Tipo"]->$Value))))
{
  if (("5"==(($Siniestro->Fields->$Item["Tipo"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>Servicios a cliente de otra oficina</option>
    <option value="6" <? if ((!!isset(($Siniestro->Fields->$Item["Tipo"]->$Value))))
{
  if (("6"==(($Siniestro->Fields->$Item["Tipo"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>Recurso de muta</option>
  </select>
  <div class="imagenNO" id="desc">
  Descripcion: 
  <input name="TipoTexto" type="text" id="TipoTexto" value="<? echo ($Siniestro->Fields->$Item["TipoTexto"]->$Value);?>" size="50" maxlength="50"></div>
   Fase: 
   <select name="fase" id="fase">
     <? 
while((!($Fase==0)))
{

?>
     <option value="<?   echo (->$Item["Id"]->$Value);?>" <?   if ((!!isset(($Siniestro->Fields->$Item["Fase"]->$Value))))
  {
    if (((->$Item["Id"]->$Value)==(($Siniestro->Fields->$Item["Fase"]->$Value))))
    {
      print "SELECTED";
      print "";
    } 
  } ?> ><?   echo (->$Item["Texto"]->$Value);?></option>
     <? 
  $Fase=mysql_fetch_array($Fase_query);
  $Fase_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
   </select>
Tramitador:
<select name="tramitador" id="tramitador">
  <? 
while((!($Tramitadores==0)))
{

?>
  <option value="<?   echo (->$Item["Id"]->$Value);?>" <?   if ((!!isset(($Siniestro->Fields->$Item["Tramitador"]->$Value))))
  {
    if (((->$Item["Id"]->$Value)==(($Siniestro->Fields->$Item["Tramitador"]->$Value))))
    {
      print "SELECTED";
      print "";
    } 
  } ?> ><?   echo (->$Item["Nombre"]->$Value);?></option>
  <? 
  $Tramitadores=mysql_fetch_array($Tramitadores_query);
  $Tramitadores_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
</select>
Caso Tipo:
<select name="CasoTipo" id="CasoTipo">
  <option value="1" selected <? if ((!!isset(($Siniestro->Fields->$Item["CasoTipo"]->$Value))))
{
  if (("1"==(($Siniestro->Fields->$Item["CasoTipo"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>1</option>
  <option value="2" <? if ((!!isset(($Siniestro->Fields->$Item["CasoTipo"]->$Value))))
{
  if (("2"==(($Siniestro->Fields->$Item["CasoTipo"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>2</option>
  <option value="3" <? if ((!!isset(($Siniestro->Fields->$Item["CasoTipo"]->$Value))))
{
  if (("3"==(($Siniestro->Fields->$Item["CasoTipo"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>3</option>
  <option value="4" <? if ((!!isset(($Siniestro->Fields->$Item["CasoTipo"]->$Value))))
{
  if (("4"==(($Siniestro->Fields->$Item["CasoTipo"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>4</option>
  <option value="5" <? if ((!!isset(($Siniestro->Fields->$Item["CasoTipo"]->$Value))))
{
  if (("5"==(($Siniestro->Fields->$Item["CasoTipo"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>5</option>
</select>
Caso Tipo Cont:
<select name="CasoTipo2" id="CasoTipo2">
  <option value="1" selected <? if ((!!isset(($Siniestro->Fields->$Item["CasoTipo2"]->$Value))))
{
  if (("1"==(($Siniestro->Fields->$Item["CasoTipo2"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>1</option>
  <option value="2" <? if ((!!isset(($Siniestro->Fields->$Item["CasoTipo2"]->$Value))))
{
  if (("2"==(($Siniestro->Fields->$Item["CasoTipo2"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>2</option>
  <option value="3" <? if ((!!isset(($Siniestro->Fields->$Item["CasoTipo2"]->$Value))))
{
  if (("3"==(($Siniestro->Fields->$Item["CasoTipo2"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>3</option>
  <option value="4" <? if ((!!isset(($Siniestro->Fields->$Item["CasoTipo2"]->$Value))))
{
  if (("4"==(($Siniestro->Fields->$Item["CasoTipo2"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>4</option>
<option value="5" <? if ((!!isset(($Siniestro->Fields->$Item["CasoTipo2"]->$Value))))
{
  if (("5"==(($Siniestro->Fields->$Item["CasoTipo2"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>5</option>
</select>
<br>
  Fecha de apertura:
  <input name="FechaApertura" type="text" id="FechaApertura" value="<? echo ($Siniestro->Fields->$Item["FechaAperturaExpediente"]->$Value);?>">
  <br><div class="imagenNO" id="multas">N&uacute;mero de expediente: 
        <label>
        <input type="text" name="RefExpediente" id="RefExpediente">
        </label>
        <br></div><script language="javascript">oculta();</script>
  Fecha de cierre:
  <input name="FechaCierre" type="text" id="FechaCierre" value="<? echo ($Siniestro->Fields->$Item["FechaCierreExpediente"]->$Value);?>">
  <br>
Asitencia Jur&iacute;dica
<input <? if (($Siniestro->Fields$Item["AsistenciaJuridica"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?> name="AsistenciaJuridica" type="checkbox" id="AsistenciaJuridica" value="checkbox">
  Fecha de presentaci&oacute;n de la asistencia juridica: 
  <input name="FechaEntregaAJ" type="text" id="FechaEntregaAJ" value="<? echo ($Siniestro->Fields->$Item["FechaEntregaAJ"]->$Value);?>">
  <p>Descripci&oacute;n:<br>
    <textarea name="OtrosDescripcion" cols="120" rows="10" id="OtrosDescripcion"><? echo ($Siniestro->Fields->$Item["OtrosDescripcion"]->$Value);?></textarea>
  </p>
  <p>Contrario:<br>
    <textarea name="OtrosContrario" cols="120" rows="10" id="OtrosContrario"><? echo ($Siniestro->Fields->$Item["OtrosContrario"]->$Value);?></textarea>
  </p>
  <table align="center">
    <tr valign="baseline"> 
      <td nowrap align="right">Apagar por el cliente:</td>
      <td> <input type="text" name="CobroCliente" value="<? echo ($Siniestro->Fields->$Item["CobroCliente"]->$Value);?>" size="32"></tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Beneficio rumbo:</td>
      <td><input name="Percivido" type="text" id="Percivido" value="<? echo ($Siniestro->Fields->$Item["Percivido"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Pago al agente:</td>
      <td><input name="PagoAgente" type="text" id="PagoAgente" value="<? echo ($Siniestro->Fields->$Item["PagoAgente"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Indeminizaci&oacute;n:</td>
      <td><input name="Indemni" type="text" id="Indemni" value="<? echo ($Siniestro->Fields->$Item["Indemnizacion"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Deuda:</td>
      <td><input name="Deuda" type="text" id="Deuda" value="<? echo ($Siniestro->Fields->$Item["Deuda"]->$Value);?>" size="32"></td>
    </tr>
  </table>
  <p>Expediente Cerrado: 
    <input <? if (($Siniestro->Fields$Item["Expediente Cerrado"]$Value==true))
{
  print "checked";
  print "";
} ?> type="checkbox" name="Expediente_Cerrado" value=1 >
  </p>
  <p align="center"> 
    <input type="hidden" name="MM_update" value="form1">
    <input type="hidden" name="MM_recordId" value="<? echo $Siniestro->Fields->$Item["Id"]->$Value;?>">
    <input name="submit" type="submit" value="Actualizar registro">
  </p>
</form>
</p>
</body>
</html>
<? 
$Siniestro->Close();
$Siniestro=null;

?>
<? 

$Fase=null;

?>
<? 

$Tramitadores=null;

?>

