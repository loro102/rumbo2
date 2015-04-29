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

    // $MM_editCmd2 is of type "ADODB.Command"
    $MM_editCmd2_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd2_CommandText="INSERT INTO Log(Texto, Usuario,Identificativo,IP) VALUES ('Actualiza siniestro:".$_POST["Cambios"]."','".$_SESSION['MM_Username']."','".$_POST["MM_recordId"]."','".$_SERVER["REMOTE_ADDR"]."') ";    
    $MM_editCmd2_Execute=    $MM_editCmd2_ActiveConnection=$Close;;    
  } 

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
    $MM_editCmd_CommandText="UPDATE Siniestro SET Abonado = ?, Representado = ?, Nombre = ?, DNIRepresentado = ?, FechaNacRepresentado = ?, Fase = ?, Tramitador = ?, FirmadoAnexo = ?, AbonadoMomentoSiniestro = ?, CasoTipo = ?, CasoTipo2 = ?, Laboral = ?, FechaAperturaExpediente = ?, FechaCierreExpediente = ?, FechaTalon = ?, FechaCobroCliente = ?, FechaCobrorumbo = ?, FechaArchivo = ?, Cerrador = ?, [Fecha Siniestro] = ?, [Hora Siniestro] = ?, [Fecha Baja] = ?, [Fecha Alta] = ?,[Fecha AltaHosp] = ?,[Fecha Ingreso] = ?,[Fecha Direccion] = ?, FechaAltaForense = ?, [Desarrollo accidente] = ?, Lugar = ?, Localidad = ?, Circunstacias = ?, [Daños Vehiculo] = ?, Condicion = ?, [Daños Personales] = ?, AsistenciaSanitaria = ?, NroProcedimiento = ?, DiligenciasPrevias = ?, AsistenciaJuridica = ?, [Firma carta abogado procurador] = ?, CuantiaAsistenciaJuridica = ?, FechaEntregaAJ = ?, AJCobrada = ?, PresentadaDenuncia = ?, AccidentesCorporales = ?, CuantiaAccidentesCorporales = ?, Vehiculo = ?, Matricula = ?, Conductor = ?, Tomador = ?, [Nro Poliza] = ?, RefExpediente = ?, Compañia = ?, [Fecha poliza] = ?, [Fin poliza] = ? WHERE Id = ?";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"        MM_IIF($_POST["Abonado"],$_POST["Abonado"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"        MM_IIF($_POST["Representado"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["NombreRepresentado"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"    $_POST["DNIRepresentado"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"        MM_IIF($_POST["FecNacRepresentado"],$_POST["FecNacRepresentado"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"        MM_IIF($_POST["Fase"],$_POST["Fase"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"        MM_IIF($_POST["Tramitador"],$_POST["Tramitador"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"        MM_IIF($_POST["FirmadoAnexo"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"        MM_IIF($_POST["AbonadoMomentoSiniestro"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"        MM_IIF($_POST["CasoTipo"],$_POST["CasoTipo"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param11"        MM_IIF($_POST["CasoTipo2"],$_POST["CasoTipo2"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param12"        MM_IIF($_POST["Laboral"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param13"        MM_IIF($_POST["FAExped"],$_POST["FAExped"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param14"        MM_IIF($_POST["FCExped"],$_POST["FCExped"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param15"        MM_IIF($_POST["FechaTalon"],$_POST["FechaTalon"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param16"        MM_IIF($_POST["FechaCobroCliente"],$_POST["FechaCobroCliente"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param17"        MM_IIF($_POST["FechaCobrorumbo"],$_POST["FechaCobrorumbo"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param18"        MM_IIF($_POST["FechaArchivo"],$_POST["FechaArchivo"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param19"        MM_IIF($_POST["Cerrador"],$_POST["Cerrador"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param20"        MM_IIF($_POST["Fecha_Siniestro"],$_POST["Fecha_Siniestro"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param21"        MM_IIF($_POST["Hora_Siniestro"],$_POST["Hora_Siniestro"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param22"        MM_IIF($_POST["Fecha_Baja"],$_POST["Fecha_Baja"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param23"        MM_IIF($_POST["Fecha_Alta"],$_POST["Fecha_Alta"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param24"        MM_IIF($_POST["FechaSalidaHospital"],$_POST["FechaSalidaHospital"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param25"        MM_IIF($_POST["FechaIngreso"],$_POST["FechaIngreso"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param26"        MM_IIF($_POST["FechaDireccion"],$_POST["FechaDireccion"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param27"        MM_IIF($_POST["FechaAltaForense"],$_POST["FechaAltaForense"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param28"    $_POST["Desarrollo_accidente"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param29"    $_POST["Lugar"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param30"    $_POST["Localidad"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param31"    $_POST["Circunstacias"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param32"    $_POST["Daos_Vehiculo"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param33"    $_POST["Condicion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param34"    $_POST["Daos_Personales"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param35"        MM_IIF($_POST["AsistenciaSanitaria"],$_POST["AsistenciaSanitaria"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param36"    $_POST["NroProcedimiento"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param37"    $_POST["DiligenciasPrevias"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param38"        MM_IIF($_POST["AJuridica"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param39"        MM_IIF($_POST["Firma_carta_abogado_procurador"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param40"    $_POST["CAJuridica"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param41"        MM_IIF($_POST["AJCobrada"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param42"        MM_IIF($_POST["FPAJ"],$_POST["FPAJ"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param43"        MM_IIF($_POST["Denuncia"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param44"        MM_IIF($_POST["AccidentesCorporales"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param45"    $_POST["CuantiaAccidentesCorporales"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param46"    $_POST["Vehiculo"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param47"    $_POST["Matricula"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param48"    $_POST["Conductor"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param49"    $_POST["Tomador"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param50"    $_POST["Nro_Poliza"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param51"    $_POST["RefExpediente"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param52"    $_POST["Compaia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param53"        MM_IIF($_POST["Fecha_poliza"],$_POST["Fecha_poliza"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param54"        MM_IIF($_POST["Fin_poliza"],$_POST["Fin_poliza"],null);// adDBTimeStamp    MM_editCmd.Execute
    $MM_editCmd_ActiveConnection=$Close;    

// append the query string to the redirect URL
    $MM_editRedirectUrl="Siniestro.asp";
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

// $Tramitadores_cmd is of type "ADODB.Command"
$Tramitadores_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Tramitadores_cmd_CommandText="SELECT * FROM Tramitadores ORDER BY Nombre";
$Tramitadores_cmd_Prepared=true;

$Tramitadores=$Tramitadores_cmd_Execute=$Tramitadores_numRows=0;;
?>
<? 

// $Fases is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Fases WHERE Id>=".($Siniestro->Fields->$Item["Fase"]->$Value)." AND ((NOT texto in ('Archivado','Incobrados','No llego a buen puerto')) OR (Id=".($Siniestro->Fields->$Item["Fase"]->$Value).")) OR ((".($Siniestro->Fields->$Item["Fase"]->$Value)."<40) and (Id>=10) and (Id<40)) ORDER BY Id ASC";
if ($_SESSION['CControlFases'])
{
    echo "SELECT * FROM Fases ORDER BY Id ASC";
} 
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Fases_numRows=0;
?>
<html>
<head>
<title>Actualizacion de datos de siniestro</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<style>
  .imagenNO {display:none;}
  .imagen {display:block;}
</style>
<body topmargin="30">
<p>
  <script language="JavaScript" src="menu.js"></script>
  <script language="JavaScript" src="funciones.js"></script>
  <script language="JavaScript">
function ajusta_comas() {
form1.Indemnizacion.value=form1.Indemnizacion.value.replace('.',',');
form1.Percivido.value=form1.Percivido.value.replace('.',',');
form1.IndemnizacionReal.value=form1.IndemnizacionReal.value.replace('.',',');
form1.PagoAgente.value=form1.PagoAgente.value.replace('.',',');
form1.CAJuridica.value=form1.CAJuridica.value.replace('.',',');
form1.CobroCliente.value=form1.CobroCliente.value.replace('.',',');
//form1.EstimacionIndemnizacion.value=form1.EstimacionIndemnizacion.value.replace('.',',');
//form1.ValorDiaImpeditivo.value=form1.ValorDiaImpeditivo.value.replace('.',',');
//form1.ValorDiaNoImpeditivo.value=form1.ValorDiaNoImpeditivo.value.replace('.',',');
//form1.ValorDiaHospitalizacion.value=form1.ValorDiaHospitalizacion.value.replace('.',',');
//form1.ValorPuntoSecuela.value=form1.ValorPuntoSecuela.value.replace('.',',');
}
function comprobar() {
if ((form1.Fase.value>=39) && (!esfecha(form1.FCExped))) {
	alert("Debes introducir la fecha de cierre del expediente.");
	return false;
	}
if ((form1.Fase.value==39) && (!esfecha(form1.FechaTalon))) {
	alert("Debes introducir la fecha de llegada del talon.");
	return false;
	}
if ((form1.Fase.value>=50) && (!esfecha(form1.FechaCobroCliente))) {
	alert("Debes introducir la fecha en que cobro el cliente.");
	return false;
	}
if ((form1.Fase.value==60) && (!esfecha(form1.FechaCobrorumbo))) {
	alert("Debes introducir la fecha en que cobro rumbo.");
	return false;
	}
ajusta_comas();
return true;
}
</script>
<form method="POST" action="<? echo $MM_editAction;?>" name="form1" onSubmit="return comprobar();">
  <input type="hidden" name="Abonado" value="<? echo ($Siniestro->Fields->$Item["Abonado"]->$Value);?>" size="32">
  <input <? if (($Siniestro->Fields$Item["Representado"]$Value==true))
{
  print "checked";
  print "";
} ?> name="Representado" type="checkbox" id="Representado" value="checkbox"  onClick="if (form1.Representado.checked==false) window.desc.className='imagenNO'; else window.desc.className='imagen';">
  Siniestro representado (contrato a menores, familiar, etc.)
  <input name="Cambios" type="hidden" id="Cambios">
  <br>
  <div class="imagenNO" id="desc"> Nombre: 
    <input name="NombreRepresentado" type="text" id="NombreRepresentado" value="<? echo ($Siniestro->Fields->$Item["Nombre"]->$Value);?>" size="60" maxlength="250">
    DNI: 
    <input name="DNIRepresentado" type="text" id="DNIRepresentado" value="<? echo ($Siniestro->Fields->$Item["DNIRepresentado"]->$Value);?>" size="15" maxlength="15">
    Fecha de nacimiento: 
    <input name="FecNacRepresentado" type="text" id="FecNacRepresentado" value="<? echo ($Siniestro->Fields->$Item["FechaNacRepresentado"]->$Value);?>">
  </div>
  <div align="center">Fase: 
    <select name="Fase" id="Fase" onChange="form1.Cambios.value=form1.Cambios.value+'Fase='+form1.Fase.options[form1.Fase.selectedIndex].text+';'">>
      <? 
while((!($Fases==0)))
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
  $Fases=mysql_fetch_array($Fases_query);
  $Fases_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
    </select>
  </div>
  <table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
    <tr> 
      <td colspan="6"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td>Tramitador: 
              <select name="Tramitador" id="Tramitador" onChange="form1.Cambios.value=form1.Cambios.value+'tramitador='+form1.Tramitador.options[form1.Tramitador.selectedIndex].text+';'">
                <? 
while((!$Tramitadores->EOF))
{

?>
                <option value="<?   echo ($Tramitadores->Fields->$Item["Id"]->$Value);?>" <?   if ((!!isset(($Siniestro->Fields->$Item["Tramitador"]->$Value))))
  {
    if ((($Tramitadores->Fields->$Item["Id"]->$Value)==(($Siniestro->Fields->$Item["Tramitador"]->$Value))))
    {
      print "SELECTED";
      print "";
    } 
  } ?> ><?   echo ($Tramitadores->Fields->$Item["Nombre"]->$Value);?></option>
                <? 
  $Tramitadores->MoveNext();
} 
if (($Tramitadores->CursorType>0))
{

  $Tramitadores->MoveFirst;
}
  else
{

  $Tramitadores->Requery;
} 

?>
              </select></td>
            <td><input <? if (($Siniestro->Fields$Item["FirmadoAnexo"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?> name="FirmadoAnexo" type="checkbox" id="FirmadoAnexo" value="checkbox">
            Firmado anexo al contrato</td>
            <td><input <? if (($Siniestro->Fields$Item["AbonadoMomentoSiniestro"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?> name="AbonadoMomentoSiniestro" type="checkbox" id="AbonadoMomentoSiniestro" value="checkbox">
            Abonado en el momento del siniestro </td>
            <td align="right"><p>Caso tipo: </p>            </td>
            <td><select name="CasoTipo" id="CasoTipo" onChange="form1.Cambios.value=form1.Cambios.value+'tipo1='+form1.CasoTipo.options[form1.CasoTipo.selectedIndex].text+';'">>
              <option value="1" <? if ((!!isset(($Siniestro->Fields->$Item["CasoTipo"]->$Value))))
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
            </select></td>            <td align="right"><p>Caso tipo cont: </p>
            </td>
            <td><select name="CasoTipo2" id="CasoTipo2" onChange="form1.Cambios.value=form1.Cambios.value+'tipo2='+form1.CasoTipo2.options[form1.CasoTipo2.selectedIndex].text+';'">>
              <option value="1" <? if ((!!isset(($Siniestro->Fields->$Item["CasoTipo2"]->$Value))))
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
            </select></td>
            <td>Accidente Laboral: 
              <input name="Laboral" type="checkbox" id="Laboral" value="checkbox" <? if (($Siniestro->Fields$Item["Laboral"]$Value==true))
{
  print "checked";
  print "";
} ?>></td>
          </tr>
      </table></td>
    </tr>
    <tr> 
      <td>Fecha de apertura del expediente: 
        <input name="FAExped" type="text" id="FAExped" value="<? echo ($Siniestro->Fields->$Item["FechaAperturaExpediente"]->$Value);?>" size="32"></td>
      <td>Fecha del cierre del expediente:      
      <input name="FCExped" type="text" id="FCExped" value="<? echo ($Siniestro->Fields->$Item["FechaCierreExpediente"]->$Value);?>" size="32"></td>
      <td>Fecha del Talon:
        <input name="FechaTalon" type="text" value="<? echo ($Siniestro->Fields->$Item["FechaTalon"]->$Value);?>"></td>
      <td colspan="2">Fecha de cobro por parte del cliente:
      <input name="FechaCobroCliente" type="text" value="<? echo ($Siniestro->Fields->$Item["FechaCobroCliente"]->$Value);?>" maxlength="10"><br>
      Fecha de cobro por parte de rumbo:
      <input name="FechaCobrorumbo" type="text" value="<? echo ($Siniestro->Fields->$Item["FechaCobrorumbo"]->$Value);?>" maxlength="10"><br>
      Fecha de archivo:
      <input name="FechaArchivo" type="text" id="FechaArchivo" value="<? echo ($Siniestro->Fields->$Item["FechaArchivo"]->$Value);?>" maxlength="10"></td>
      <td>Cerrado por 
        <select name="Cerrador" id="Cerrador">
          <? 
while((!$Tramitadores->EOF))
{

?>
          <option value="<?   echo ($Tramitadores->Fields->$Item["Id"]->$Value);?>" <?   if ((!!isset(($Siniestro->Fields->$Item["Cerrador"]->$Value))))
  {
    if ((($Tramitadores->Fields->$Item["Id"]->$Value)==(($Siniestro->Fields->$Item["Cerrador"]->$Value))))
    {
      print "SELECTED";
      print "";
    } 
  } ?> ><?   echo ($Tramitadores->Fields->$Item["Nombre"]->$Value);?></option>
          <? 
  $Tramitadores->MoveNext();
} 
if (($Tramitadores->CursorType>0))
{

  $Tramitadores->MoveFirst;
}
  else
{

  $Tramitadores->Requery;
} 

?>
      </select></td>
    </tr>
    <tr> 
      <td colspan="3">Fecha Siniestro: 
        <input type="text" name="Fecha_Siniestro" value="<? echo ($Siniestro->Fields->$Item["Fecha Siniestro"]->$Value);?>" size="32"> 
        <br>
        Hora Siniestro: 
        <input type="text" name="Hora_Siniestro" value="<? echo ($Siniestro->Fields->$Item["Hora Siniestro"]->$Value);?>" size="32"></td>
      <td colspan="3">Fecha Baja Laboral: 
        <input type="text" name="Fecha_Baja" value="<? echo ($Siniestro->Fields->$Item["Fecha Baja"]->$Value);?>" size="32"> 
        <br>
        Fecha Alta Medica: 
        <input type="text" name="Fecha_Alta" value="<? echo ($Siniestro->Fields->$Item["Fecha Alta"]->$Value);?>" size="32">
        <br>
        Fecha de alta forense: 
        <input name="FechaAltaForense" type="text" id="FechaAltaForense" value="<? echo ($Siniestro->Fields->$Item["FechaAltaForense"]->$Value);?>" size="32"></td>
    </tr>
    <tr> 
      <td colspan="6">Desarrollo del accidente: 
        <input type="text" name="Desarrollo_accidente" value="<? echo ($Siniestro->Fields->$Item["Desarrollo accidente"]->$Value);?>" size="32"> 
        <br> <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td valign="top">Lugar: 
              <input type="text" name="Lugar" value="<? echo ($Siniestro->Fields->$Item["Lugar"]->$Value);?>" size="32"> 
              <br>
              Localidad: 
              <input name="Localidad" type="text" id="Localidad" value="<? echo ($Siniestro->Fields->$Item["Localidad"]->$Value);?>" size="32"></td>
            <td valign="top">Circustancias: 
              <input type="text" name="Circunstacias" value="<? echo ($Siniestro->Fields->$Item["Circunstacias"]->$Value);?>" size="32"></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td colspan="3">Da&ntilde;os del vehiculo: 
        <input type="text" name="Daos_Vehiculo" value="<? echo ($Siniestro->Fields->$Item["Daños Vehiculo"]->$Value);?>" size="32"></td>
      <td colspan="3">Condici&oacute;n: 
        <input name="Condicion" type="text" id="Condicion" value="<? echo ($Siniestro->Fields->$Item["Condicion"]->$Value);?>" size="32"></td>
    </tr>
    <tr> 
      <td colspan="5">Da&ntilde;os Personales: 
        <input type="text" name="Daos_Personales" value="<? echo ($Siniestro->Fields->$Item["Daños Personales"]->$Value);?>" size="32"></td>
      <td>Cuantia Asitencia Sanitaria: 
      <input name="AsistenciaSanitaria" type="text" id="AsistenciaSanitaria" value="<? echo ($Siniestro->Fields->$Item["AsistenciaSanitaria"]->$Value);?>"></td>
    </tr>
    <tr> 
      <td>N&uacute;mero de procedimiento: 
        <input name="NroProcedimiento" type="text" id="NroProcedimiento" value="<? echo ($Siniestro->Fields->$Item["NroProcedimiento"]->$Value);?>" size="30" maxlength="50"> 
        <br>
        Diligencias previas: 
        <input name="DiligenciasPrevias" type="text" id="DiligenciasPrevias" value="<? echo ($Siniestro->Fields->$Item["DiligenciasPrevias"]->$Value);?>" maxlength="50"></td>
      <td colspan="2">Asistencia Juridica: 
        <input <? if (($Siniestro->Fields$Item["AsistenciaJuridica"]$Value==true))
{
  print "checked";
  print "";
} ?> name="AJuridica" type="checkbox" id="AJuridica" value="checkbox"></td>
      <td colspan="3"><p>Firma carta abogado:
          <input <? if (($Siniestro->Fields$Item["Firma carta abogado procurador"]$Value==true))
{
  print "checked";
  print "";
} ?> type="checkbox" name="Firma_carta_abogado_procurador" value=1 >
          <br>
          Cuantia: 
          <input name="CAJuridica" type="text" id="CAJuridica" value="<? echo ($Siniestro->Fields->$Item["CuantiaAsistenciaJuridica"]->$Value);?>" maxlength="30">
          <br>
        Fecha de presentacion de la AJ:
        <input name="FPAJ" type="text" id="FPAJ" value="<? echo ($Siniestro->Fields->$Item["FechaEntregaAJ"]->$Value);?>">
        <br>
        AJ Cobrada: 
        <input <? if (($Siniestro->Fields$Item["AJCobrada"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?> name="AJCobrada" type="checkbox" id="AJCobrada" value="checkbox">
      </p>      </td>
    </tr>
    <tr> 
      <td colspan="6">Presentada denuncia:
      <input <? if (($Siniestro->Fields$Item["PresentadaDenuncia"]$Value==true))
{
  print "checked";
  print "";
} ?> name="Denuncia" type="checkbox" id="Denuncia" value="checkbox"></td>
    </tr>
    <tr> 
      <td colspan="6">Cobertura de accidentes corporales del conductor 
        <input <? if (($Siniestro->Fields$Item["AccidentesCorporales"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?> name="AccidentesCorporales" type="checkbox" id="AccidentesCorporales" value="checkbox">
        <br>
Cuantia: 
<input name="CuantiaAccidentesCorporales" type="text" id="CuantiaAccidentesCorporales" value="<? echo ($Siniestro->Fields->$Item["CuantiaAccidentesCorporales"]->$Value);?>" size="50" maxlength="250"></td>
    </tr>
  </table>
  <p><strong><em>Datos del vehiculo:</em></strong></p>
  <table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
    <tr> 
      <td>Vehiculo: 
        <input type="text" name="Vehiculo" value="<? echo ($Siniestro->Fields->$Item["Vehiculo"]->$Value);?>" size="32"></td>
      <td>Matricula: 
        <input type="text" name="Matricula" value="<? echo ($Siniestro->Fields->$Item["Matricula"]->$Value);?>" size="32"></td>
    </tr>
    <tr> 
      <td colspan="2">Conductor: 
        <input type="text" name="Conductor" value="<? echo ($Siniestro->Fields->$Item["Conductor"]->$Value);?>" size="32"></td>
    </tr>
    <tr> 
      <td colspan="2">Tomador: 
        <input type="text" name="Tomador" value="<? echo ($Siniestro->Fields->$Item["Tomador"]->$Value);?>" size="32"></td>
    </tr>
    <tr> 
      <td>Nro Poliza. 
        <input type="text" name="Nro_Poliza" value="<? echo ($Siniestro->Fields->$Item["Nro Poliza"]->$Value);?>" size="32"></td>
      <td>Ref Expediente: 
        <input type="text" name="RefExpediente" value="<? echo ($Siniestro->Fields->$Item["RefExpediente"]->$Value);?>" size="32"></td>
    </tr>
    <tr> 
      <td colspan="2">Compa&ntilde;ia: 
        <input type="text" name="Compaia" value="<? echo ($Siniestro->Fields->$Item["Compañia"]->$Value);?>" size="32"></td>
    </tr>
    <tr> 
      <td>Fecha Poliza: 
        <input type="text" name="Fecha_poliza" value="<? echo ($Siniestro->Fields->$Item["Fecha poliza"]->$Value);?>" size="32"></td>
      <td>Fin Poliza: 
        <input type="text" name="Fin_poliza" value="<? echo ($Siniestro->Fields->$Item["Fin poliza"]->$Value);?>" size="32"></td>
    </tr>
  </table>
  <br>
  <p align="center"> 
    <input type="hidden" name="MM_update" value="form1">
    <input type="hidden" name="MM_recordId" value="<? echo $Siniestro->Fields->$Item["Id"]->$Value;?>">
    <input name="submit" type="submit" value="Actualizar registro">
  </p>
</form>
</p>
<script language="JavaScript">
if (form1.Representado.checked==false)
	window.desc.className='imagenNO';
else
	window.desc.className='imagen';
</script>
</body>
</html>
<? 
$Siniestro->Close();
$Siniestro=null;

?>
<? 
$Tramitadores->Close();
$Tramitadores=null;

?>
<? 

$Fases=null;

?>

