<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connRumbo.php"); ?>
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
    $MM_editCmd_CommandText="UPDATE Agentes SET Nombre = ?, NIF = ?, Direccion = ?, CP = ?, Localidad = ?, Provincia = ?, Profesion = ?, Contrato = ?, FechaContrato = ?, Telefono1 = ?, Telefono2 = ?, Telefono3 = ?, email = ?, CCC = ?, Comercial = ?, Placa = ?, Pegatina = ?, Portatriptico = ?, Homologado = ?, Notas = ?, Activo = ? WHERE Id = ?";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["Nombre"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["NIF"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["Direccion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"    $_POST["CP"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["Localidad"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"    $_POST["Provincia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"    $_POST["Profesion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"        MM_IIF($_POST["Contrato"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"        MM_IIF($_POST["FechaContrato"],$_POST["FechaContrato"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"    $_POST["Telefono1"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param11"    $_POST["Telefono2"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param12"    $_POST["Telefono3"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param13"    $_POST["email"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param14"    $_POST["CCC"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param15"    $_POST["Comercial"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param16"        MM_IIF($_POST["Placa"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param17"        MM_IIF($_POST["Pegatina"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param18"        MM_IIF($_POST["Portatriptico"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param19"        MM_IIF($_POST["Homologado"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param20"    $_POST["notas"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param21"        MM_IIF($_POST["Activo"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param22"        MM_IIF($_POST["MM_recordId"],$_POST["MM_recordId"],null);// adDouble
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

// append the query string to the redirect URL
    $MM_editRedirectUrl="AgenteListar.asp";
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
$Agente__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Agente__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Agente_cmd is of type "ADODB.Command"
$Agente_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Agente_cmd_CommandText="SELECT * FROM Agentes WHERE Id = ?";
$Agente_cmd_Prepared=true;
$Agente_cmd_Parameters=$Append$Agente_cmd_CreateParameter="param1"$Agente__MMColParam); // adDouble

$Agente=$Agente_cmd_Execute=$Agente_numRows=0;;
?>
<? 
$Comisiones__IDAgente="0";
if (($_GET["Id"]!=""))
{

  $Comisiones__IDAgente=$_GET["Id"];
} 

?>
<? 

// $Comisiones is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.Nombre,Abonados.Apellido1, Facturas.ValorReal, Siniestro.FechaAperturaExpediente, Siniestro.FechaCierreExpediente, Facturas.Id, Facturas.FormaPago  FROM Agentes, Abonados, Facturas, Siniestro  WHERE (Agentes.Id=Abonados.Agente) and (Siniestro.Abonado=Abonados.Id) and (Facturas.Siniestro=Siniestro.Id) and (Facturas.Tabla=9) and (Facturas.Valor=1743125314) and (Agentes.Id="+str_replace("'","''",$Comisiones__IDAgente)+")  ORDER BY Siniestro.FechaAperturaExpediente DESC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Comisiones_numRows=0;
?>
<? 
$Abonados__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Abonados__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Abonados is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Id, Nombre, Apellido1, Apellido2 FROM Abonados WHERE Agente = "+str_replace("'","''",$Abonados__MMColParam)+" ORDER BY Apellido1 ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Abonados_numRows=0;
?>
<? 
$Abonos_con_siniestro__NroAgente="0";
if (($_GET["Id"]!=""))
{

  $Abonos_con_siniestro__NroAgente=$_GET["Id"];
} 

?>
<? 

// $Abonos_con_siniestro is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.Nombre,Abonados.Apellido1,Abonados.Apellido2, Siniestro.Id, Siniestro.FechaAperturaExpediente, Abonados.Id as aid  FROM Abonados, Siniestro  WHERE Siniestro.Abonado=Abonados.Id and Siniestro.Tipo=1 and Abonados.Agente="+str_replace("'","''",$Abonos_con_siniestro__NroAgente)+" and Siniestro.Fase<100  ORDER BY Siniestro.FechaAperturaExpediente ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Abonos_con_siniestro_numRows=0;
?>
<? 
$Visitas__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Visitas__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Visitas_cmd is of type "ADODB.Command"
$Visitas_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Visitas_cmd_CommandText="SELECT * FROM VisitasAgentes WHERE AgenteId = ? ORDER BY Fecha DESC";
$Visitas_cmd_Prepared=true;
$Visitas_cmd_Parameters=$Append$Visitas_cmd_CreateParameter="param1"$Visitas__MMColParam); // adDouble

$Visitas=$Visitas_cmd_Execute=$Visitas_numRows=0;;
?>
<? 

// $Notrafico_cmd is of type "ADODB.Command"
$Notrafico_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Notrafico_cmd_CommandText="SELECT Abonados.Nombre,Abonados.Apellido1,Abonados.Apellido2, Siniestro.Id, Siniestro.FechaAperturaExpediente FROM Abonados, Siniestro WHERE Siniestro.Abonado=Abonados.Id and Siniestro.Tipo=3 and Abonados.Agente="+str_replace("'","''",$Comisiones__IDAgente)+" and Siniestro.Fase<100 ORDER BY Siniestro.FechaAperturaExpediente ASC";
$Notrafico_cmd_Prepared=true;

$Notrafico=$Notrafico_cmd_Execute=$Notrafico_numRows=0;;
?>
<? 

// $Remitidos_cmd is of type "ADODB.Command"
$Remitidos_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Remitidos_cmd_CommandText="SELECT Abonados.Nombre,Abonados.Apellido1,Abonados.Apellido2, Siniestro.Id, Siniestro.FechaAperturaExpediente FROM Abonados, Siniestro WHERE Siniestro.Abonado=Abonados.Id and Siniestro.Tipo=4 and Abonados.Agente="+str_replace("'","''",$Comisiones__IDAgente)+" and Siniestro.Fase<100 ORDER BY Siniestro.FechaAperturaExpediente ASC";
$Remitidos_cmd_Prepared=true;

$Remitidos=$Remitidos_cmd_Execute=$Remitidos_numRows=0;;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Comisiones_numRows=$Comisiones_numRows+$Repeat1__numRows;
?>
<? 

$Repeat3__numRows=-1;
$Repeat3__index=0;
$Abonos_con_siniestro_numRows=$Abonos_con_siniestro_numRows+$Repeat3__numRows;
?>
<? 

$Repeat5__numRows=-1;
$Repeat5__index=0;
$Notrafico_numRows=$Notrafico_numRows+$Repeat5__numRows;
?>
<? 

$Repeat4__numRows=-1;
$Repeat4__index=0;
$Visitas_numRows=$Visitas_numRows+$Repeat4__numRows;
?>
<? 

$Repeat2__numRows=-1;
$Repeat2__index=0;
$Abonados_numRows=$Abonados_numRows+$Repeat2__numRows;
?>
<? 

$Repeat6__numRows=-1;
$Repeat6__index=0;
$Remitidos_numRows=$Remitidos_numRows+$Repeat6__numRows;
?>
<html>
<head>
<title>Modificar Agente</title>
   <!-Hoja de estilos del calendario -->
  <link rel="stylesheet" type="text/css" media="all" href="jscalendar-1.0/calendar-blue2.css" title="win2k-cold-1" />

  <!-- librería principal del calendario -->
 <script type="text/javascript" src="jscalendar-1.0/calendar.js"></script>

 <!-- librería para cargar el lenguaje deseado -->
  <script type="text/javascript" src="jscalendar-1.0/lang/calendar-es.js"></script>

  <!-- librería que declara la función Calendar.setup, que ayuda a generar un calendario en unas pocas líneas de código -->
  <script type="text/javascript" src="jscalendar-1.0/calendar-setup.js"></script> 

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<table width="100%"  border="0" cellspacing="0">
  <tr>
    <td><em><strong>Datos del agente: </strong></em></td>
    <td align="right"><? if (($Abonos_con_siniestro==0) && ($Abonados==0))
{
?><a href="AgenteBorrar.asp?Id=<?   echo ($Agente->Fields->$Item["Id"]->$Value);?>"><img src="Imagenes/Borrar.gif" alt="Borrar" width="20" height="20" border="0"></a><? } ?></td>
  </tr>
</table>
<form method="POST" action="<? echo $MM_editAction;?>" name="form1">
  <p>Nombre: 
    <input name="Nombre" type="text" value="<? echo ($Agente->Fields->$Item["Nombre"]->$Value);?>" size="100" maxlength="150">
    NIF: 
    <input name="NIF" type="text" value="<? echo ($Agente->Fields->$Item["NIF"]->$Value);?>" size="14" maxlength="50">
    <br>
    Direccion: 
    <input name="Direccion" type="text" value="<? echo ($Agente->Fields->$Item["Direccion"]->$Value);?>" size="120" maxlength="200">
    <br>
    CP: 
    <input name="CP" type="text" value="<? echo ($Agente->Fields->$Item["CP"]->$Value);?>" size="5" maxlength="20">
    Localidad: 
    <input name="Localidad" type="text" value="<? echo ($Agente->Fields->$Item["Localidad"]->$Value);?>" size="32" maxlength="50">
    Provincia: 
    <input name="Provincia" type="text" value="<? echo ($Agente->Fields->$Item["Provincia"]->$Value);?>" size="32" maxlength="50">
    <br>
    Profesion: 
    <input name="Profesion" type="text" id="Profesion" value="<? echo ($Agente->Fields->$Item["Profesion"]->$Value);?>" size="50" maxlength="50">
    Contrato:
    <input <? if (($Agente->Fields$Item["Contrato"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?> name="Contrato" type="checkbox" id="Contrato" value="checkbox"> 
    Fecha: 
    <input name="FechaContrato" type="text" id="FechaContrato" value="<? echo ($Agente->Fields->$Item["FechaContrato"]->$Value);?>">
    <br>
    Telefono1: 
    <input name="Telefono1" type="text" value="<? echo ($Agente->Fields->$Item["Telefono1"]->$Value);?>" size="32" maxlength="50">
    Telefono2: 
    <input name="Telefono2" type="text" value="<? echo ($Agente->Fields->$Item["Telefono2"]->$Value);?>" size="32" maxlength="50">
    Telefono3: 
    <input name="Telefono3" type="text" value="<? echo ($Agente->Fields->$Item["Telefono3"]->$Value);?>" size="32" maxlength="50">
    email:
    <input name="email" type="text" id="email" value="<? echo ($Agente->Fields->$Item["email"]->$Value);?>" size="32" maxlength="100">
    <br>
    CCC: 
    <input name="CCC" type="text" value="<? echo ($Agente->Fields->$Item["CCC"]->$Value);?>" size="50" maxlength="50">
    Comercial: 
    <input name="Comercial" type="text" value="<? echo ($Agente->Fields->$Item["Comercial"]->$Value);?>" size="50" maxlength="50">
    Placa: 
    <input type="checkbox" name="Placa" value=1  <? if (($Agente->Fields$Item["Placa"]$Value==true))
{
  print "checked";
  print "";
} ?>>
Pegatina:
<input <? if (((($Agente->Fields->$Item["Pegatina"]->$Value))==(true)))
{
  print "checked";
  print "";
} ?> name="Pegatina" type="checkbox" id="Pegatina" value="checkbox">
Portatriptico:
<input <? if (((($Agente->Fields->$Item["Portatriptico"]->$Value))==(true)))
{
  print "checked";
  print "";
} ?> name="Portatriptico" type="checkbox" id="Portatriptico" value="checkbox">
Activo:
<input name="Homologado" type="checkbox" id="Homologado" value="checkbox" <? if (($Agente->Fields$Item["Homologado"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?>>
<br>
    Notas:
    <textarea name="notas" cols="100" rows="5" id="notas"><? echo ($Agente->Fields->$Item["Notas"]->$Value);?></textarea>
</p>
  <input name="submit" type="submit" value="Actualizar registro">
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo $Agente->Fields->$Item["Id"]->$Value;?>">
</form>
<p>
  <script language="JavaScript" type="text/JavaScript">
form1.Nombre.focus()
</script>
Visitas:</p>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC">
    <td>Fecha</td>
    <td>Comercial</td>
    <td>Nota</td>
  </tr>
  <? 
while((($Repeat4__numRows!=0) && (!$Visitas->EOF)))
{

?>
    <tr>
      <td><?   echo ($Visitas->Fields->$Item["Fecha"]->$Value);?></td>
      <td><?   echo ($Visitas->Fields->$Item["Comercial"]->$Value);?></td>
      <td><?   echo ($Visitas->Fields->$Item["Comentario"]->$Value);?></td>
    </tr>
    <? 
  $Repeat4__index=$Repeat4__index+1;
  $Repeat4__numRows=$Repeat4__numRows-1;
  $Visitas->MoveNext();
} 
?>
</table>
<form name="form2" method="post" action="VisitaInsertar.php" onSubmit="javascript:while (document.form2.Nota.value.indexOf(String.fromCharCode(13,10))>0){document.form2.Nota.value=document.form2.Nota.value.replace(String.fromCharCode(13,10),'<br>');}">
  <p>Fecha: 
    <input name="Fecha" type="text" id="Fecha">
    <input type="button" id="lanzador" value="..." />
    <!-- script que define y configura el calendario-->
    <script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fecha",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador"     // el id del botón que lanzará el calendario
});
    </script> 

  Comercial
  <input name="Comercial" type="text" id="Comercial" maxlength="100"> 
  Notas:
  <textarea name="Nota" cols="50" rows="3" id="Nota"></textarea>  
  <input name="AgenteId" type="hidden" id="AgenteId" value="<? echo ($Agente->Fields->$Item["Id"]->$Value);?>">
  </p>
  <p align="center">
    <input type="submit" name="Submit" value="Insertar visita">
</p>
</form>
<p>&nbsp;</p>
<p>Listado de comisiones:</p>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC">
    <td>Nombre</td>
    <td>Valor</td>
    <td>Fecha de apertura de expediente</td>
    <td>Fecha de cierre</td>
  </tr>
  <? 
$pendiente=0;
while((($Repeat1__numRows!=0) && (!($Comisiones==0))))
{

?>
  <tr <?   if (($Item["FormaPago"]==1))
  {
    print "bgcolor=\"#FF0000\"";
  } ?>>
    <td><?   echo (->$Item["Nombre"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido1"]->$Value);?></td>
    <td><?   echo (->$Item["ValorReal"]->$Value);?>&euro;</td>
    <td><?   echo (->$Item["FechaAperturaExpediente"]->$Value);?></td>
	<td><?   echo (->$Item["FechaCierreExpediente"]->$Value);?></td>
  </tr>
  <? 
  if (($Item["FormaPago"]==1))
  {
    $pendiente=$pendiente+(->$Item["ValorReal"]->$Value);
  } 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Comisiones=mysql_fetch_array($Comisiones_query);

} 
?>
</table>
<p>Total de pagos:<? echo $Repeat1__index;?> - 
  Pendiente de pago: <? echo $pendiente;?>&euro;
</p>
<? 
$suma=0;
function existe($a)
{
  extract($GLOBALS);

  foreach ($todos as $i)
  {
    if ($i==$a)
    {

      $function_ret=true;
      return $function_ret;

    } 

  }
  $function_ret=false;
  return $function_ret;
} 
?>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC">
    <td>Siniestros de los que es agente </td>
    <td>Casos no tr&aacute;fico de los que es agente </td>
  </tr>
  <tr valign="top">
    <td rowspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<? 
$siniestros=0;
while((($Repeat3__numRows!=0) && (!($Abonos_con_siniestro==0))))
{

?>
  <tr>
    <td><? 
  if (existe(->$Item["aid"]->$Value))
  {

    print " ";
  }
    else
  {

    $todos[$suma]=->$Item["aid"]->$Value;
    $suma=$suma+1;
    print $suma;
//response.Write("-"&Abonos_con_siniestro.Fields.Item("aid").Value)
  } ?></td>
    <td><a href="siniestro.asp?Id=<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?></a>
 abierto el <?   echo (->$Item["FechaAperturaExpediente"]->$Value);?></td>
  </tr>
<? 
  $siniestros=$siniestros+1;
  $Repeat3__index=$Repeat3__index+1;
  $Repeat3__numRows=$Repeat3__numRows-1;
  $Abonos_con_siniestro=mysql_fetch_array($Abonos_con_siniestro_query);

} 
?></table></td>
    <td><? 
while((($Repeat5__numRows!=0) && (!$Notrafico->EOF)))
{

?>
<a href="siniestro.asp?Id=<?   echo ($Notrafico->Fields->$Item["Id"]->$Value);?>"><?   echo ($Notrafico->Fields->$Item["Nombre"]->$Value);?></a><a href="siniestro.asp?Id=<?   echo ($Notrafico->Fields->$Item["Id"]->$Value);?>">&nbsp;<?   echo ($Notrafico->Fields->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo ($Notrafico->Fields->$Item["Apellido2"]->$Value);?></a> abierto el <?   echo ($Notrafico->Fields->$Item["FechaAperturaExpediente"]->$Value);?><br>
        <? 
  $Repeat5__index=$Repeat5__index+1;
  $Repeat5__numRows=$Repeat5__numRows-1;
  $Notrafico->MoveNext();
} 
?></td>
  </tr>
<? if ((!$Remitidos->EOF))
{
?>  <tr valign="top">
    <td bgcolor="#CCCCCC">Casos remitidos a otras oficinas</td>
  </tr>
  <tr valign="top">
    <td><? 
  while((($Repeat6__numRows!=0) && (!$Remitidos->EOF)))
  {

?>
        <a href="siniestro.asp?Id=<?     echo ($Remitidos->Fields->$Item["Id"]->$Value);?>"><?     echo ($Remitidos->Fields->$Item["Nombre"]->$Value);?></a><a href="siniestro.asp?Id=<?     echo ($Remitidos->Fields->$Item["Id"]->$Value);?>">&nbsp;<?     echo ($Remitidos->Fields->$Item["Apellido1"]->$Value);?>&nbsp;<?     echo ($Remitidos->Fields->$Item["Apellido2"]->$Value);?></a> abierto el <?     echo ($Remitidos->Fields->$Item["FechaAperturaExpediente"]->$Value);?>
        <? 
    $Repeat6__index=$Repeat6__index+1;
    $Repeat6__numRows=$Repeat6__numRows-1;
    $Remitidos->MoveNext();
  } 
?>
</td>
  </tr><? } ?>
</table>
<p>Clientes de los que es agente:<br>
<? 
while((($Repeat2__numRows!=0) && (!($Abonados==0))))
{

?>
<a href="Cliente.asp?Id=<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?></a><br>
<? 
  $Repeat2__index=$Repeat2__index+1;
  $Repeat2__numRows=$Repeat2__numRows-1;
  $Abonados=mysql_fetch_array($Abonados_query);

} 
?>
N&uacute;mero de clientes:<? echo $Repeat2__index;?></p>
<script language="javascript">
cadena=document.form1.email.value;
for(i=0; i<cadena.length; )
{
	if(cadena.charAt(i)==" ")
		cadena=cadena.substring(i+1, cadena.length);
	else
		break;
}

for(i=cadena.length-1; i>=0; i=cadena.length-1)
{
	if(cadena.charAt(i)==" ")
		cadena=cadena.substring(0,i);
	else
		break;
}
document.form1.email.value=cadena;
</script>
</body>
</html>
<? 
$Agente->Close();
$Agente=null;

?>
<? 

$Comisiones=null;

?>
<? 

$Abonados=null;

?>
<? 

$Abonos_con_siniestro=null;

?>
<? 
$Visitas->Close();
$Visitas=null;

?>
<? 
$Notrafico->Close();
$Notrafico=null;

?>
<? 
$Remitidos->Close();
$Remitidos=null;

?>

