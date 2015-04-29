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
<? //if session("CBeneficio")=false then
//Response.Redirect("SiniestroActualizar2.asp?Id="+Request.QueryString("Id"))
//end if ?>
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
    $MM_editCmd_CommandText="UPDATE Siniestro SET Abonado = ?, Representado = ?, Nombre = ?, DNIRepresentado = ?, FechaNacRepresentado = ?, Fase = ?, Tramitador = ?, FirmadoAnexo = ?, AbonadoMomentoSiniestro = ?, CasoTipo = ?, CasoTipo2 = ?, Laboral = ?, FechaAperturaExpediente = ?, FechaCierreExpediente = ?, FechaTalon = ?, FechaCobroCliente = ?, FechaCobrorumbo = ?, FechaArchivo = ?, Cerrador = ?, [Fecha Siniestro] = ?, [Hora Siniestro] = ?, [Fecha Baja] = ?, [Fecha Alta] = ?, [Fecha AltaHosp] = ?,[Fecha Ingreso] = ?,[Fecha Direccion] = ?,FechaAltaForense = ?, [Desarrollo accidente] = ?, Lugar = ?, Localidad = ?, Circunstacias = ?, [Daños Vehiculo] = ?, Condicion = ?, [Daños Personales] = ?, AsistenciaSanitaria = ?, NroProcedimiento = ?, DiligenciasPrevias = ?, AsistenciaJuridica = ?, [Firma carta abogado procurador] = ?, CuantiaAsistenciaJuridica = ?, AJCobrada = ?, FechaEntregaAJ = ?,[Fecha Designacion] = ?, PresentadaDenuncia = ?, AccidentesCorporales = ?, CuantiaAccidentesCorporales = ?, Vehiculo = ?, Matricula = ?, Conductor = ?, Tomador = ?, [Nro Poliza] = ?, RefExpediente = ?, Compañia = ?, [Fecha poliza] = ?, [Fin poliza] = ?, Indemnizacion = ?, CobroCliente = ?, Percivido = ?, IndemnizacionReal = ?, PagoAgente = ?, Deuda = ?, [tramitador cia]= ?, fechaofm= ?, fecharofm= ?, ofm= ?,tiproc=?, cobroaj=? , fechaden=?, dem=?, fechadem=? ,fechaudi=?, fechajuicio=? WHERE Id = ?";    
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
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param43"        MM_IIF($_POST["Fecha_Designacion"],$_POST["Fecha_Designacion"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param44"        MM_IIF($_POST["Denuncia"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param45"        MM_IIF($_POST["AccidentesCorporales"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param46"    $_POST["CuantiaAccidentesCorporales"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param47"    $_POST["Vehiculo"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param48"    $_POST["Matricula"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param49"    $_POST["Conductor"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param50"    $_POST["Tomador"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param51"    $_POST["Nro_Poliza"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param52"    $_POST["RefExpediente"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param53"    $_POST["Compaia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param54"        MM_IIF($_POST["Fecha_poliza"],$_POST["Fecha_poliza"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param55"        MM_IIF($_POST["Fin_poliza"],$_POST["Fin_poliza"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param56"        MM_IIF($_POST["Indemnizacion"],$_POST["Indemnizacion"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param57"        MM_IIF($_POST["CobroCliente"],$_POST["CobroCliente"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param58"        MM_IIF($_POST["Percivido"],$_POST["Percivido"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param59"        MM_IIF($_POST["IndemnizacionReal"],$_POST["IndemnizacionReal"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param60"        MM_IIF($_POST["PagoAgente"],$_POST["PagoAgente"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param61"        MM_IIF($_POST["Deuda"],$_POST["Deuda"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param62"    $_POST["tramicia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param63"        MM_IIF($_POST["fechaofm"],$_POST["fechaofm"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param64"        MM_IIF($_POST["fecharofm"],$_POST["fecharofm"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param65"        MM_IIF($_POST["ofm"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param66"    $_POST["tiproc"]// adVarWChar  
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param67"        MM_IIF($_POST["cobroaj"],$_POST["cobroaj"],null);// adDBTimeStamp  
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param68"        MM_IIF($_POST["fechaden"],$_POST["fechaden"],null);// adDBTimeStamp 
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param44"        MM_IIF($_POST["dem"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param68"        MM_IIF($_POST["fechadem"],$_POST["fechadem"],null);// adDBTimeStamp 
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param69"        MM_IIF($_POST["fechaudi"],$_POST["fechaudi"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param70"        MM_IIF($_POST["fechajuicio"],$_POST["fechajuicio"],null);// adDBTimeStamp 
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param71"        MM_IIF($_POST["MM_recordId"],$_POST["MM_recordId"],null);// adDouble
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

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
echo "SELECT * FROM Fases WHERE Id>=".($Siniestro->Fields->$Item["Fase"]->$Value)." AND ((NOT texto in ('Archivado','Incobrados','No llego a buen puerto')) OR (Id=".($Siniestro->Fields->$Item["Fase"]->$Value).")) ORDER BY Id ASC";
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
<? 

// $Aseguradora_cmd is of type "ADODB.Command"
$Aseguradora_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Aseguradora_cmd_CommandText="SELECT * FROM Aseguradoras ORDER BY aseguradora ASC";
$Aseguradora_cmd_Prepared=true;

$Aseguradora=$Aseguradora_cmd_Execute=$Aseguradora_numRows=0;;
?>
<? 
$tramitador_cia__MMColParam=($Siniestro->Fields->$Item["Compañia"]->$Value);
if ((${"MM_EmptyValue"}!=""))
{

  $tramitador_cia__MMColParam=${"MM_EmptyValue"};
} 

?>
<? 

// $tramitador_cia_cmd is of type "ADODB.Command"
$tramitador_cia_cmd_ActiveConnection=$MM_connrumbo_STRING;
$tramitador_cia_cmd_CommandText="SELECT * FROM Tramitadorcia WHERE aseguradora LIKE ? ORDER BY Nombre ASC";
$tramitador_cia_cmd_Prepared=true;
$tramitador_cia_cmd_Parameters=$Append$tramitador_cia_cmd_CreateParameter="param1"$tramitador_cia__MMColParam); // adVarChar

$tramitador_cia=$tramitador_cia_cmd_Execute=$tramitador_cia_numRows=0;;
?>
<html>
<head>
<!-Hoja de estilos del calendario -->
  <link rel="stylesheet" type="text/css" media="all" href="jscalendar-1.0/calendar-blue2.css" title="win2k-cold-1" />

  <!-- librería principal del calendario -->
 <script type="text/javascript" src="jscalendar-1.0/calendar.js"></script>

 <!-- librería para cargar el lenguaje deseado -->
  <script type="text/javascript" src="jscalendar-1.0/lang/calendar-es.js"></script>

  <!-- librería que declara la función Calendar.setup, que ayuda a generar un calendario en unas pocas líneas de código -->
  <script type="text/javascript" src="jscalendar-1.0/calendar-setup.js"></script>


<title>Actualizacion de datos de siniestro</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<style>
  .imagenNO {display:none;}
  .imagen {display:block;}
</style>
<body topmargin="30">

<script language="JavaScript" src="menu.js"></script>
<script language="JavaScript" src="funciones.js"></script>
<script language="JavaScript">
function ajusta_comas() {
//form1.Indemnizacion.value=form1.Indemnizacion.value.replace('.',',');
//form1.Percivido.value=form1.Percivido.value.replace('.',',');
//form1.IndemnizacionReal.value=form1.IndemnizacionReal.value.replace('.',',');
//form1.PagoAgente.value=form1.PagoAgente.value.replace('.',',');
//form1.CAJuridica.value=form1.CAJuridica.value.replace('.',',');
//form1.CobroCliente.value=form1.CobroCliente.value.replace('.',',');
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
  <div class="imagenNO" id="desc"> Nombre del representado: 
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
  <table border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr> 
      <td colspan="6" nowrap="nowrap"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="13%" nowrap="nowrap">Tramitador: 
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
            <td width="16%"><input <? if (($Siniestro->Fields$Item["FirmadoAnexo"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?> name="FirmadoAnexo" type="checkbox" id="FirmadoAnexo" value="checkbox">
            Firmado anexo al contrato</td>
            <td width="15%"><input <? if (($Siniestro->Fields$Item["AbonadoMomentoSiniestro"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?> name="AbonadoMomentoSiniestro" type="checkbox" id="AbonadoMomentoSiniestro" value="checkbox">
            Abonado en el momento del siniestro </td>
            <td width="7%" align="right">Caso tipo:             </td>
            <td width="5%"><select name="CasoTipo" id="CasoTipo" onChange="form1.Cambios.value=form1.Cambios.value+'tipo1='+form1.CasoTipo.options[form1.CasoTipo.selectedIndex].text+';'">>
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
            </select></td>            <td width="11%" align="right">Caso tipo cont: 
            </td>
            <td width="4%"><select name="CasoTipo2" id="CasoTipo2" onChange="form1.Cambios.value=form1.Cambios.value+'tipo2='+form1.CasoTipo2.options[form1.CasoTipo2.selectedIndex].text+';'">>
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
            <td width="29%">Accidente Laboral: 
              <input name="Laboral" type="checkbox" id="Laboral" value="checkbox" <? if (($Siniestro->Fields$Item["Laboral"]$Value==true))
{
  print "checked";
  print "";
} ?>></td>
          </tr>
      </table></td>
    </tr>
    <tr> 
      <td nowrap="nowrap">Fecha de apertura del expediente:
        
  <br><input name="FAExped" type="text" id="FAExped" value="<? echo ($Siniestro->Fields->$Item["FechaAperturaExpediente"]->$Value);?>" size="10"><input type="button" id="lanzador" value="..." />
          <!-- script que define y configura el calendario-->
        <script type="text/javascript">
   Calendar.setup({
    inputField     :    "FAExped",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador"     // el id del botón que lanzará el calendario
});
    </script> 
          
          
        
        <br>Fecha del cierre del expediente:
        
  <br><input name="FCExped" type="text" id="FCExped" value="<? echo ($Siniestro->Fields->$Item["FechaCierreExpediente"]->$Value);?>" size="10"><input type="button" id="lanzador1" value="..." />
          <!-- script que define y configura el calendario-->
        <script type="text/javascript">
   Calendar.setup({
    inputField     :    "FCExped",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador1"     // el id del botón que lanzará el calendario
});
    </script> 
          
          
      </td>
      
      <td colspan="2" nowrap="nowrap">Fecha de cobro Cliente:
        
       <br> <input name="FechaCobroCliente" type="text" value="<? echo ($Siniestro->Fields->$Item["FechaCobroCliente"]->$Value);?>" size="10" maxlength="10"id="FechaCobroCliente"><input type="button" id="lanzador2" value="..." />
          <!-- script que define y configura el calendario-->
        <script type="text/javascript">
   Calendar.setup({
    inputField     :    "FechaCobroCliente",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador2"     // el id del botón que lanzará el calendario
});
    </script> 
          
          <br>
        Fecha de cobro Empresa:<br>
        
  <input name="FechaCobrorumbo" type="text" value="<? echo ($Siniestro->Fields->$Item["FechaCobrorumbo"]->$Value);?>" size="10" maxlength="10" id ="FechaCobrorumbo"><input type="button" id="lanzador3" value="..." />
          <!-- script que define y configura el calendario-->
        <script type="text/javascript">
   Calendar.setup({
    inputField     :    "FechaCobrorumbo",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador3"     // el id del botón que lanzará el calendario
});
    </script> 
          
          <br>
      </td>
      <td nowrap="nowrap">Fecha del Talon:
        
          <input name="FechaTalon" type="text" value="<? echo ($Siniestro->Fields->$Item["FechaTalon"]->$Value);?>" size="10" id="FechaTalon">
          <input type="button" id="lanzador4" value="..." />
          <!-- script que define y configura el calendario-->
        <script type="text/javascript">
   Calendar.setup({
    inputField     :    "FechaTalon",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador4"     // el id del botón que lanzará el calendario
});
          </script><br>Cerrado por
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
  </select><br>
          Fecha de Archivo:
            <input name="FechaArchivo" type="text" id="FechaArchivo" value="<? echo ($Siniestro->Fields->$Item["FechaArchivo"]->$Value);?>" size="10" maxlength="10"><input type="button" id="lanzador5" value="..." />
    <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "FechaArchivo",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador5"     // el id del botón que lanzará el calendario
});
    </script> 


      </td>
      <td nowrap="nowrap">Fecha Baja Laboral:
  <input type="text" name="Fecha_Baja" id="Fecha_Baja" value="<? echo ($Siniestro->Fields->$Item["Fecha Baja"]->$Value);?>" size="10"><input type="button" id="lanzador6" value="..." />
          <!-- script que define y configura el calendario-->
        <script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fecha_Baja",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador6"     // el id del botón que lanzará el calendario
});
          </script> 
          
          
        
       <br> Fecha Alta Laboral:
  <input type="text" name="Fecha_Alta" id="Fecha_Alta" value="<? echo ($Siniestro->Fields->$Item["Fecha Alta"]->$Value);?>" size="10">
  <input type="button" id="lanzador7" value="..." />
  <!-- script que define y configura el calendario-->
        <script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fecha_Alta",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador7"     // el id del botón que lanzará el calendario
});
          </script> 
        
        <br>Fecha de Alta Direcci&oacute;n M&eacute;dica:
          <input name="FechaDireccion" type="text" id="FechaDireccion" value="<? echo ($Siniestro->Fields->$Item["Fecha Direccion"]->$Value);?>" size="10">
          <input type="button" id="lanzador8" value="..." />
          <!-- script que define y configura el calendario-->
        <script type="text/javascript">
   Calendar.setup({
    inputField     :    "FechaDireccion",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador8"     // el id del botón que lanzará el calendario
});
    </script> 
      </td>
    </tr>
    <tr> 
      <td colspan="3">Fecha Siniestro: 
        <input type="text" name="Fecha_Siniestro" id="Fecha_Siniestro" value="<? echo ($Siniestro->Fields->$Item["Fecha Siniestro"]->$Value);?>" size="20"><input type="button" id="lanzador9" value="..." />
    <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fecha_Siniestro",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador9"     // el id del botón que lanzará el calendario
});
    </script> 

 
        <br>
        Hora Siniestro: 
        <input type="text" name="Hora_Siniestro" value="<? echo ($Siniestro->Fields->$Item["Hora Siniestro"]->$Value);?>" size="20"></td>
      <td colspan="3">Fecha Ingreso Hospitalario:
        <input name="FechaIngreso" type="text" id="FechaIngreso" value="<? echo ($Siniestro->Fields->$Item["Fecha Ingreso"]->$Value);?>" size="20"><input type="button" id="lanzador10" value="..." />
    <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "FechaIngreso",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador10"     // el id del botón que lanzará el calendario
});
    </script><br>
          Fecha de alta Hospitalaria: 
          <input name="FechaSalidaHospital" type="text" id="FechaSalidaHospital" value="<? echo ($Siniestro->Fields->$Item["Fecha AltaHosp"]->$Value);?>" size="20"><input type="button" id="lanzador11" value="..." />
    <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "FechaSalidaHospital",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador11"     // el id del botón que lanzará el calendario
});
    </script><br>Fecha de alta forense:
    <input name="FechaAltaForense" type="text" id="FechaAltaForense" value="<? echo ($Siniestro->Fields->$Item["FechaAltaForense"]->$Value);?>" size="20"><input type="button" id="lanzador12" value="..." />
          <!-- script que define y configura el calendario-->
        <script type="text/javascript">
   Calendar.setup({
    inputField     :    "FechaAltaForense",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador12"     // el id del botón que lanzará el calendario
});
          </script> 
          <br>Fecha de Oferta Motivada:
    <input name="fechaofm" type="text" id="fechaofm" value="<? echo ($Siniestro->Fields->$Item["fechaofm"]->$Value);?>" size="20"><input type="button" id="lanzador18" value="..." />
          <!-- script que define y configura el calendario-->
        <script type="text/javascript">
   Calendar.setup({
    inputField     :    "fechaofm",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador18"     // el id del botón que lanzará el calendario
});
          </script>
          <br>Fecha de Respuesta Motivada:
    <input name="fecharofm" type="text" id="fecharofm" value="<? echo ($Siniestro->Fields->$Item["fecharofm"]->$Value);?>" size="20"><input type="button" id="lanzador19" value="..." />
          <!-- script que define y configura el calendario-->
        <script type="text/javascript">
   Calendar.setup({
    inputField     :    "fecharofm",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador19"     // el id del botón que lanzará el calendario
});
          </script>
          
<br>Respuesta Motivada Aceptada:
    <input <? if (($Siniestro->Fields$Item["ofm"]$Value==true))
{
  print "checked";
  print "";
} ?> type="checkbox" name="ofm" value=1 >

          
      </td>
    </tr>
    <tr> 
      <td colspan="6">Desarrollo del accidente: 
        <input type="text" name="Desarrollo_accidente" value="<? echo ($Siniestro->Fields->$Item["Desarrollo accidente"]->$Value);?>" size="32"> 
        <br> <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td valign="top">Lugar: 
              <input name="Lugar" type="text" autocomplete="off" value="<? echo ($Siniestro->Fields->$Item["Lugar"]->$Value);?>" size="32"> 
              <br>
              Localidad: 
              <input name="Localidad" type="text" id="Localidad" value="<? echo ($Siniestro->Fields->$Item["Localidad"]->$Value);?>" size="32"></td>
            <td valign="top">Descripci&oacute;n Expediente:
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
      </td>
     <td colspan="4">Da&ntilde;os Personales: 
        <input type="text" name="Daos_Personales" value="<? echo ($Siniestro->Fields->$Item["Daños Personales"]->$Value);?>" size="32"> <td colspan="3">Cuantia Asitencia Sanitaria: 
      <input name="AsistenciaSanitaria" type="text" id="AsistenciaSanitaria" value="<? echo ($Siniestro->Fields->$Item["AsistenciaSanitaria"]->$Value);?>"></td>
    </tr>
    <tr> 
      <td>
      Tipo de Procedimiento
      

    <select name="tiproc" id="tiproc">
      <option value="<? echo ($Siniestro->Fields->$Item["tiproc"]->$Value);?>"selected><? echo ($Siniestro->Fields->$Item["tiproc"]->$Value);?></option>
      <option value=""<? if (($Siniestro->Fields$Item["tiproc"]$Value==""))
{
?>style="display:none;<? } ?>>Ninguno</option>
      <option value="Civil Ordinario"<? if (($Siniestro->Fields$Item["tiproc"]$Value=="Civil Ordinario"))
{
?>style="display:none;<? } ?>>Civil Ordinario</option>
      <option value="Civil Verbal"<? if (($Siniestro->Fields$Item["tiproc"]$Value=="Civil Verbal"))
{
?>style="display:none;<? } ?>>Civil Verbal</option>
      <option value="Civil Monitorio"<? if (($Siniestro->Fields$Item["tiproc"]$Value=="Civil Monitorio"))
{
?>style="display:none;<? } ?>>Civil Monitorio</option>
      <option value="Civil Cambiario"<? if (($Siniestro->Fields$Item["tiproc"]$Value=="Civil Cambiario"))
{
?>style="display:none;<? } ?>>Civil Cambiario</option>
      <option value="Penal Faltas"<? if (($Siniestro->Fields$Item["tiproc"]$Value=="Penal Faltas"))
{
?>style="display:none;<? } ?>>Penal Faltas</option>
      <option value="Penal Abreviado"<? if (($Siniestro->Fields$Item["tiproc"]$Value=="Penal Verbal"))
{
?>style="display:none;<? } ?>>Penal Verbal</option>
      <option value="Penal Ordinario"<? if (($Siniestro->Fields$Item["tiproc"]$Value=="Penal Ordinario"))
{
?>style="display:none;<? } ?>>Penal Monitorio</option>
    </select>

      <br>
      N&uacute;mero de procedimiento: 
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
      <td colspan="3">Firma carta abogado:
          <input <? if (($Siniestro->Fields$Item["Firma carta abogado procurador"]$Value==true))
{
  print "checked";
  print "";
} ?> type="checkbox" name="Firma_carta_abogado_procurador" value=1 >
          <br>
          Cuantia: 
          <input name="CAJuridica" type="text" id="CAJuridica" value="<? echo ($Siniestro->Fields->$Item["CuantiaAsistenciaJuridica"]->$Value);?>" maxlength="30">
          <br>
        Fecha Reclamaci&oacute;n AJ:
        <input name="FPAJ" type="text" id="FPAJ" value="<? echo ($Siniestro->Fields->$Item["FechaEntregaAJ"]->$Value);?>">
        <input type="button" id="lanzador15" value="..." /><!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "FPAJ",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador15"     // el id del botón que lanzará el calendario
});
    </script> 
        <br>
        Fecha Designaci&oacute;n Abogado: <input name="Fecha_Designacion" type="text" id="Fecha_Designacion" value="<? echo ($Siniestro->Fields->$Item["Fecha Designacion"]->$Value);?>"><input type="button" id="lanzador16" value="..." /><!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fecha_Designacion",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador16"     // el id del botón que lanzará el calendario
});
    </script> 
        <br>
        AJ Cobrada: 
        <input <? if (($Siniestro->Fields$Item["AJCobrada"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?> name="AJCobrada" type="checkbox" id="AJCobrada" value="checkbox">
        Fecha de cobro de la AJ:
        <input name="cobroaj" type="text" id="cobroaj" value="<? echo ($Siniestro->Fields->$Item["cobroaj"]->$Value);?>">
        <input type="button" id="lanzador20" value="..." /><!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "cobroaj",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador20"     // el id del botón que lanzará el calendario
});
    </script> 
        <br>


      </td>
    </tr>
    <tr> 
      <td colspan="3">Presentada Denuncia:<input <? if (($Siniestro->Fields$Item["PresentadaDenuncia"]$Value==true))
{
  print "checked";
  print "";
} ?> name="Denuncia" type="checkbox" id="Denuncia" value="checkbox"> 
        Fecha de la denuncia:
        <input name="fechaden" type="text" id="fechaden" value="<? echo ($Siniestro->Fields->$Item["fechaden"]->$Value);?>">
        <input type="button" id="lanzador21" value="..." /><!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "fechaden",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador21"     // el id del botón que lanzará el calendario
});
    </script> </td>
    <td colspan="4">
        Fecha de la Audiencia Previa:
        <input name="fechaudi" type="text" id="fechaudi" value="<? echo ($Siniestro->Fields->$Item["fechaudi"]->$Value);?>">
        <input type="button" id="lanzador23" value="..." /><!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "fechaudi",     // id del campo de texto
    showsTime      :    true,  
    ifFormat     :     "%d/%m/%Y %H:%M",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador23"     // el id del botón que lanzará el calendario
});
    </script> </td>
    <tr> 
      <td colspan="3">Presentada Demanda:<input <? if (($Siniestro->Fields$Item["dem"]$Value==true))
{
  print "checked";
  print "";
} ?> name="dem" type="checkbox" id="dem" value="checkbox"> 
        Fecha de la demanda:
        <input name="fechadem" type="text" id="fechadem" value="<? echo ($Siniestro->Fields->$Item["fechadem"]->$Value);?>">
        <input type="button" id="lanzador22" value="..." /><!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "fechadem",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador22"     // el id del botón que lanzará el calendario
});
    </script> </td>
    <td colspan="4">
        Fecha de Juicio:
        <input name="fechajuicio" type="text" id="fechajuicio" value="<? echo ($Siniestro->Fields->$Item["fechajuicio"]->$Value);?>">
        <input type="button" id="lanzador24" value="..." /><!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "fechajuicio", 
    showsTime      :    true,     // id del campo de texto
     ifFormat     :     "%d/%m/%Y %H:%M",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador24"     // el id del botón que lanzará el calendario
});
    </script> </td>
    </tr>
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
  <strong><em>Datos del vehiculo:</em></strong>
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
        
        <select name="Compaia" id="select">
          <option value="" <? if ((!!isset(($Siniestro->Fields->$Item["Compañia"]->$Value))))
{
  if ((""==(($Siniestro->Fields->$Item["Compañia"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>Ninguno</option>
          <? 
while((!$Aseguradora->EOF))
{

?>
<option value="<?   echo ($Aseguradora->Fields->$Item["aseguradora"]->$Value);?>" <?   if ((!!isset(($Siniestro->Fields->$Item["Compañia"]->$Value))))
  {
    if ((($Aseguradora->Fields->$Item["aseguradora"]->$Value)==(($Siniestro->Fields->$Item["Compañia"]->$Value))))
    {
      print "selected=\"selected\"";
      print "";
    } 
  } ?> ><?   echo ($Aseguradora->Fields->$Item["aseguradora"]->$Value);?></option>
<? 
  $Aseguradora->MoveNext();
} 
if (($Aseguradora->CursorType>0))
{

  $Aseguradora->MoveFirst;
}
  else
{

  $Aseguradora->Requery;
} 

?>
        </select><br>
        Tramitador Cia
        <select name="tramicia" id="tramicia">
          <option value="" <? if ((!!isset(($Siniestro->Fields->$Item["tramitador cia"]->$Value))))
{
  if ((""==(($Siniestro->Fields->$Item["tramitador cia"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>Ninguno</option>
          <? 
while((!$tramitador_cia->EOF))
{

?>
          <option value="<?   echo ($tramitador_cia->Fields->$Item["Nombre"]->$Value);?>" <?   if ((!!isset(($Siniestro->Fields->$Item["tramitador cia"]->$Value))))
  {
    if ((($tramitador_cia->Fields->$Item["Nombre"]->$Value)==(($Siniestro->Fields->$Item["tramitador cia"]->$Value))))
    {
      print "selected=\"selected\"";
      print "";
    } 
  } ?> ><?   echo ($tramitador_cia->Fields->$Item["Nombre"]->$Value);?></option>
          <? 
  $tramitador_cia->MoveNext();
} 
if (($tramitador_cia->CursorType>0))
{

  $tramitador_cia->MoveFirst;
}
  else
{

  $tramitador_cia->Requery;
} 

?>
        </select></td>
    </tr>
    <tr> 
      <td>Fecha Poliza: 
        <input type="text" name="Fecha_poliza" id="Fecha_poliza" value="<? echo ($Siniestro->Fields->$Item["Fecha poliza"]->$Value);?>" size="20"><input type="button" id="lanzador13" value="..." />
    <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fecha_poliza",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador13"     // el id del botón que lanzará el calendario
});
    </script> 

</td>
      <td>Fin Poliza: 
        <input type="text" name="Fin_poliza" id="Fin_poliza" value="<? echo ($Siniestro->Fields->$Item["Fin poliza"]->$Value);?>" size="20"><input type="button" id="lanzador14" value="..." />
    <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fin_poliza",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador14"     // el id del botón que lanzará el calendario
});
    </script> 

</td>
    </tr>
  </table>
  <br>
  <? if ($_SESSION['CBeneficio']==true)
{

//Response.Redirect("SiniestroActualizar2.asp?Id="+Request.QueryString("Id"))
?>
  <table align="center">
    <tr valign="baseline"> 
      <td nowrap align="right">Indemnizacion final al cliente:</td>
      <td><input name="Indemnizacion" type="text" id="Indemnizacion" value="<?   echo ($Siniestro->Fields->$Item["Indemnizacion"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">A pagar por el cliente:</td>
      <td> <input type="text" name="CobroCliente" value="<?   echo ($Siniestro->Fields->$Item["CobroCliente"]->$Value);?>" size="32"></tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Beneficio Expediente:</td>
      <td><input name="Percivido" type="text" id="Percivido" value="<?   echo ($Siniestro->Fields->$Item["Percivido"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Indemnizacion sin facturas:</td>
      <td><input name="IndemnizacionReal" type="text" id="IndemnizacionReal" value="<?   echo ($Siniestro->Fields->$Item["IndemnizacionReal"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Pago al agente:</td>
      <td><input name="PagoAgente" type="text" id="PagoAgente" value="<?   echo ($Siniestro->Fields->$Item["PagoAgente"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Deuda:</td>
      <td><input name="Deuda" type="text" id="Deuda" value="<?   echo ($Siniestro->Fields->$Item["Deuda"]->$Value);?>" size="32"></td>
    </tr>
  </table>
  <? } ?>
  <p align="center"> 
    <input type="hidden" name="MM_update" value="form1">
    <input type="hidden" name="MM_recordId" value="<? echo $Siniestro->Fields->$Item["Id"]->$Value;?>">
    <input name="submit" type="submit" value="Actualizar registro">
  
</form>

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
<? 
$Aseguradora->Close();
$Aseguradora=null;

?>
<? 
$tramitador_cia->Close();
$tramitador_cia=null;

?>

