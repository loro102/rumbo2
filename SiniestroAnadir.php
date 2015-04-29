<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $Tramitador_cmd is of type "ADODB.Command"
$Tramitador_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Tramitador_cmd_CommandText="SELECT * FROM Tramitadores WHERE Activo=True ORDER BY Nombre";
$Tramitador_cmd_Prepared=true;

$Tramitador=$Tramitador_cmd_Execute=$Tramitador_numRows=0;;
?>
<? 

// $Aseguradora_cmd is of type "ADODB.Command"
$Aseguradora_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Aseguradora_cmd_CommandText="SELECT * FROM Aseguradoras ORDER BY aseguradora";
$Aseguradora_cmd_Prepared=true;

$Aseguradora=$Aseguradora_cmd_Execute=$Aseguradora_numRows=0;;
?>
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
echo "SELECT Nombre, Apellido1, Apellido2 FROM Abonados WHERE Id = "+str_replace("'","''",$Abonado__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Abonado_numRows=0;
?>
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
if (((${"MM_insert"})=="form1"))
{

  if ((!$MM_abortEdit))
  {

// execute the insert

    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="INSERT INTO Siniestro (Representado, Nombre, DNIRepresentado, FechaNacRepresentado, Tramitador, CasoTipo, FechaAperturaExpediente, AbonadoMomentoSiniestro, CasoTipo2, [Fecha Siniestro], [Hora Siniestro], [Fecha Baja], [Fecha Alta], [Fecha AltaHosp],[Fecha Ingreso], [Fecha Direccion], Laboral, [Desarrollo accidente], Lugar, Localidad, Circunstacias, Condicion, [Daños Vehiculo], [Daños Personales], [Firma carta abogado procurador], AsistenciaJuridica, CuantiaAsistenciaJuridica, Vehiculo, Matricula, Conductor, Tomador, [Nro Poliza], RefExpediente, Compañia, [Fecha poliza], [Fin poliza], EstimacionIndemnizacion, DiasImpeditivosValor, DiasNoImpeditivosValor, DiasHospitalizadosValor, Deuda, Abonado,Incapacidad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?)";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"        MM_IIF($_POST["Representado"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["NombreRepresentado"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["DNIRepresentado"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"        MM_IIF($_POST["FecNacRepresentado"],$_POST["FecNacRepresentado"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"        MM_IIF($_POST["Tramitador"],$_POST["Tramitador"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"        MM_IIF($_POST["CasoTipo"],$_POST["CasoTipo"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"        MM_IIF($_POST["FechaApertiraExpediente"],$_POST["FechaApertiraExpediente"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"        MM_IIF($_POST["AbonadoMomentoSiniestro"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"        MM_IIF($_POST["CasoTipo2"],$_POST["CasoTipo2"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"        MM_IIF($_POST["Fecha_Siniestro"],$_POST["Fecha_Siniestro"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param11"        MM_IIF($_POST["Hora_Siniestro"],$_POST["Hora_Siniestro"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param12"        MM_IIF($_POST["Fecha_Baja"],$_POST["Fecha_Baja"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param13"        MM_IIF($_POST["Fecha_Alta"],$_POST["Fecha_Alta"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param14"        MM_IIF($_POST["Fecha_Salida"],$_POST["Fecha_Salida"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param15"        MM_IIF($_POST["Fecha_Ingreso"],$_POST["Fecha_Ingreso"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param16"        MM_IIF($_POST["Fecha_Medica"],$_POST["Fecha_Medica"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param17"        MM_IIF($_POST["Laboral"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param18"    $_POST["Desarrollo_accidente"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param19"    $_POST["Lugar"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param20"    $_POST["Localidad"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param21"    $_POST["Circunstacias"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param22"    $_POST["Condicion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param23"    $_POST["Daos_Vehiculo"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param24"    $_POST["Daos_Personales"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param24"        MM_IIF($_POST["Firma_carta_abogado_procurador"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param25"        MM_IIF($_POST["AJuridica"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param26"        MM_IIF($_POST["CAJuridica"],$_POST["CAJuridica"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param27"    $_POST["Veliculo"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param28"    $_POST["Matricula"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param29"    $_POST["Conductor"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param30"    $_POST["Tomador"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param31"    $_POST["NPoliza"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param32"    $_POST["RExpediente"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param33"    $_POST["Compania"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param34"        MM_IIF($_POST["FPoliza"],$_POST["FPoliza"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param35"        MM_IIF($_POST["FinPoliza"],$_POST["FinPoliza"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param36"        MM_IIF($_POST["EstimacionIndemnizacion"],$_POST["EstimacionIndemnizacion"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param37"        MM_IIF($_POST["DiaImpeditivo"],$_POST["DiaImpeditivo"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param38"        MM_IIF($_POST["DiaNoImpedivo"],$_POST["DiaNoImpedivo"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param39"        MM_IIF($_POST["Diahospital"],$_POST["Diahospital"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param40"        MM_IIF($_POST["Deuda"],$_POST["Deuda"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param41"        MM_IIF($_POST["Abonado"],$_POST["Abonado"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param42"        MM_IIF($_POST["incapacidad"],$_POST["incapacidad"],null);// adDouble

    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

// append the query string to the redirect URL
    $MM_editRedirectUrl="Cliente.asp";
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
<html>
<head>
<!-- Carga el calendario -->
<!-Hoja de estilos del calendario -->
  <link rel="stylesheet" type="text/css" media="all" href="jscalendar-1.0/calendar-blue2.css" title="win2k-cold-1" />

  <!-- librería principal del calendario -->
 <script type="text/javascript" src="jscalendar-1.0/calendar.js"></script>

 <!-- librería para cargar el lenguaje deseado -->
  <script type="text/javascript" src="jscalendar-1.0/lang/calendar-es.js"></script>

  <!-- librería que declara la función Calendar.setup, que ayuda a generar un calendario en unas pocas líneas de código -->
  <script type="text/javascript" src="jscalendar-1.0/calendar-setup.js"></script>
  <!-- Fin carga de calendario -->
<title>A&ntilde;adir Siniestro</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}
//-->
</script>
<style>
  .imagenNO {display:none;}
  .imagen {display:block;}
</style>
</head>
<body bgcolor="#FFFFFF" text="#000000" topmargin="25">
<script language="JavaScript" src="menu.js"></script>
<script language="javascript">
function insertarcita() {
//alert("hola");
//window.open("AgendaInsertarRapida.asp?Fecha=<? echo $DateAdd["D"][0][$DateAdd["D"][10][time()()]];?><%&Cita=Mirar si estan metidos todos los datos de <? echo (->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value);?><%");
//alert("hola2");
}
</script>
<form method="POST" action="<? echo $MM_editAction;?>" name="form1" onSubmit="javascript:insertarcita();">
  <p> 
    <input name="Representado" type="checkbox" id="Representado" value="checkbox" onClick="if (form1.Representado.checked==false) window.desc.className='imagenNO'; else window.desc.className='imagen';">
    Siniestro representado (contrato a menores, familiar, etc.)<br>
  <div class="imagenNO" id="desc"> Nombre del representado: 
    <input name="NombreRepresentado" type="text" id="NombreRepresentado" size="60" maxlength="250">
    DNI: 
    <input name="DNIRepresentado" type="text" id="DNIRepresentado" size="15" maxlength="15">
    Fecha de nacimiento: 
    <input name="FecNacRepresentado" type="text" id="FecNacRepresentado">
  </div></p>
  <table align="center">
    <tr valign="baseline"> 
      <td width="231" align="right" nowrap>Tramitador:</td>
      <td width="46"> <select name="Tramitador" id="Tramitador">
          <? 
while((!$Tramitador->EOF))
{

?>
          <option value="<?   echo ($Tramitador->Fields->$Item["Id"]->$Value);?>" <?   if ((!!isset("1")))
  {
    if ((($Tramitador->Fields->$Item["Id"]->$Value)==("1")))
    {
      print "SELECTED";
      print "";
    } 
  } ?> ><?   echo ($Tramitador->Fields->$Item["Nombre"]->$Value);?></option>
          <? 
  $Tramitador->MoveNext();
} 
if (($Tramitador->CursorType>0))
{

  $Tramitador->MoveFirst;
}
  else
{

  $Tramitador->Requery;
} 

?>
        </select></td>
      <td width="75" align="right">Caso Tipo: </td>
      <td width="45"><select name="CasoTipo" id="CasoTipo">
        <option value="1" selected>1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select></td>
      <td width="197" rowspan="2" align="right" nowrap>Fecha de apertura:</td>
      <td width="221" rowspan="2"> <input name="FechaApertiraExpediente" type="text" id="FechaApertiraExpediente" value="<? echo time()();?>" size="30"></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap>Abonado en el momento del siniestro: </td>
      <td><input name="AbonadoMomentoSiniestro" type="checkbox" id="AbonadoMomentoSiniestro" value="checkbox"></td>
      <td align="right" nowrap="nowrap">Caso Tipo cont:</td>
      <td><select name="CasoTipo2" id="CasoTipo2">
        <option value="1" selected>1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Fecha Siniestro:</td>
      <td colspan="3"> <input type="text" name="Fecha_Siniestro" value="" size="20" id="Fecha1"> <input type="button" id="lanzador1" value="..." />
    <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fecha1",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador1"     // el id del botón que lanzará el calendario
});
    </script> </td>
      <td align="right" nowrap>Hora Siniestro:</td>
      <td><input type="text" name="Hora_Siniestro" value="" size="30"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Fecha Baja Laboral:</td>
      <td colspan="3"> <input type="text" name="Fecha_Baja" value="" size="20"id="Fecha2">
        <input type="button" id="lanzador2" value="..." />
    <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fecha2",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador2"     // el id del botón que lanzará el calendario
});
    </script>  </td>
      <td align="right" nowrap>Fecha Alta Laboral:</td>
      <td><input type="text" name="Fecha_Alta" value="" size="20"id="Fecha3">
        <input type="button" id="lanzador3" value="..." />
        <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fecha3",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador3"     // el id del botón que lanzará el calendario
});
    </script> </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Fecha Ingreso Hospitalario:</td>
      <td colspan="3"> <input type="text" name="Fecha_Ingreso" value="" size="20"id="Fecha4">
    <input type="button" id="lanzador4" value="..." />
    <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fecha4",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador4"     // el id del botón que lanzará el calendario
});
    </script>  </td>
      <td align="right" nowrap>Fecha Alta Hospitalaria:</td>
      <td><input type="text" name="Fecha_Salida" value="" size="20"id="Fecha5">
        <input type="button" id="lanzador5" value="..." />
        <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fecha5",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador5"     // el id del botón que lanzará el calendario
});
    </script> </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">&nbsp;</td>
      <td colspan="3"><!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fecha4",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador4"     // el id del botón que lanzará el calendario
});
    </script>  </td>
      <td align="right" nowrap>Fecha Alta Direcci&oacute;n M&eacute;dica:</td>
      <td><input type="text" name="Fecha_Medica" value="" size="20"id="Fecha8">
        <input type="button" id="lanzador8" value="..." />
        <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fecha8",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador8"     // el id del botón que lanzará el calendario
});
    </script> </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Accidente Laboral:</td>
      <td colspan="5"><input name="Laboral" type="checkbox" id="Laboral" value="checkbox"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Desarrollo accidente:</td>
      <td colspan="5"> <input type="text" name="Desarrollo_accidente" value="" size="100%">      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Lugar:</td>
      <td colspan="5"> <input name="Lugar" type="text" value="Lugar del siniestro" size="100%"> </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Localidad:</td>
      <td colspan="5"><input name="Localidad" type="text" id="Localidad" size="100%"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Descripci&oacute;n del Expediente:</td>
      <td colspan="5"> <input type="text" name="Circunstacias" value="" size="100%">      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Condici&oacute;n:</td>
      <td colspan="5"> <input name="Condicion" type="text" id="Condicion" size="100%">      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Daños Vehiculo:</td>
      <td colspan="5"> <input type="text" name="Daos_Vehiculo" value="" size="100%">      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Daños Personales:</td>
      <td colspan="5"> <input type="text" name="Daos_Personales" value="" size="100%">      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">&nbsp;</td>
      <td colspan="3">Firma carta abogado procurador: <input type="checkbox" name="Firma_carta_abogado_procurador" value=1 >      </td>
      <td>Asistencia Juridica: 
        <input name="AJuridica" type="checkbox" id="AJuridica" value="checkbox"></td>
      <td>Cuantia Asistencia Juridica: 
        <input name="CAJuridica" type="text" id="CAJuridica"></td>
    </tr>
    <tr valign="baseline"> 
      <td colspan="6" align="right" nowrap><div align="left"><u><strong>Datos 
          del vehiculo:</strong></u></div></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Vehiculo:</td>
      <td colspan="5"><input name="Veliculo" type="text" id="Veliculo" size="100%"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Matricula:</td>
      <td colspan="5"><input name="Matricula" type="text" id="Matricula" size="100%"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Conductor:</td>
      <td colspan="5"><input name="Conductor" type="text" id="Conductor" size="100%"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Tomador:</td>
      <td colspan="5"><input name="Tomador" type="text" id="Tomador" size="100%"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Nro Poliza::</td>
      <td colspan="5"><input name="NPoliza" type="text" id="NPoliza" size="100%"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Ref Expediente:</td>
      <td colspan="5"><input name="RExpediente" type="text" id="RExpediente" size="100%"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Compa&ntilde;ia:</td>
      <td colspan="5"><select name="Compania" id="Compania">
          <option value="">Ninguno</option>
          <? 
while((!$Aseguradora->EOF))
{

?>
          <option value="<?   echo ($Aseguradora->Fields->$Item["aseguradora"]->$Value);?>"><?   echo ($Aseguradora->Fields->$Item["aseguradora"]->$Value);?></option>
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
      </select></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Fecha poliza:</td>
      <td colspan="5"><input name="FPoliza" type="text" id="FPoliza" size="10">
    <input type="button" id="lanzador6" value="..." />
    <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "FPoliza",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador6"     // el id del botón que lanzará el calendario
});
    </script></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Fin Poliza:</td>
      <td colspan="5"><input name="FinPoliza" type="text" id="FinPoliza" size="10">
    <input type="button" id="lanzador7" value="..." />
    <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "FinPoliza",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador7"     // el id del botón que lanzará el calendario
});
    </script></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Estimacion de indemnizacion:</td>
      <td colspan="5"><input name="EstimacionIndemnizacion" type="text" id="EstimacionIndemnizacion" value="0" size="10">
      <input name="DiaImpeditivo" type="hidden" id="DiaImpeditivo" value="58.24">
      <input name="DiaNoImpedivo" type="hidden" id="DiaNoImpedivo" value="31.34">
      <input name="Diahospital" type="hidden" id="Diahospital" value="71.63">
      <input name="Deuda" type="hidden" id="Deuda" value="0">
      <input name="incapacidad" type="hidden" id="incapacidad" value="0"></td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">&nbsp;</td>
      <td colspan="5"> <input type="submit" value="Insertar registro"> </td>
    </tr>
  </table>
  
<input type="hidden" name="MM_insert" value="form1">
<input type="hidden" name="Abonado" value="<? echo ${"Id"};?>">
</form>
</body>
</html>
<? 
$Tramitador->Close();
$Tramitador=null;

?>
<? 

$Abonado=null;

?>
<? 
$Aseguradora->Close();
$Aseguradora=null;

?>

