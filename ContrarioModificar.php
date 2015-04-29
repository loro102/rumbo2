<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
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
    $MM_editCmd_CommandText="UPDATE Contrarios SET Culpable = ?, Nombre = ?, Apellido1 = ?, Apellido2 = ?, Direccion = ?, [Codigo Postal] = ?, Localidad = ?, Provincia = ?, NIF = ?, FechaNacimiento = ?, Email = ?, [Telefono 1] = ?, [Telefono 2] = ?, [Telefono 3] = ?, Vehiculo = ?, Matricula = ?, Conductor = ?, [Nro poliza] = ?, [Ref expediente] = ?, [Compañia] = ?, [Tramitador cia] = ?, Propietario = ?, Tomador = ? WHERE Id = ?";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"        MM_IIF($_POST["Culpable"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["Nombre"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["Apellido1"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"    $_POST["Apellido2"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["Direccion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"        MM_IIF($_POST["Codigo_Postal"],$_POST["Codigo_Postal"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"    $_POST["Localidad"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"    $_POST["Provincia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"    $_POST["NIF"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"        MM_IIF($_POST["Fecha_Nacimiento"],$_POST["Fecha_Nacimiento"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param11"    $_POST["Email"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param12"    $_POST["Telefono_1"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param13"    $_POST["Telefono_2"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param14"    $_POST["Telefono_3"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param15"    $_POST["Vehiculo"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param16"    $_POST["Matricula"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param17"    $_POST["Conductor"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param18"    $_POST["Nro_poliza"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param19"    $_POST["Ref_expediente"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param20"    $_POST["Compaia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param21"    $_POST["tramitadorcia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param22"    $_POST["Propietario"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param23"    $_POST["Tomador"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param24"        MM_IIF($_POST["MM_recordId"],$_POST["MM_recordId"],null);// adDouble
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
$Contrarios__MMColParam="1";
if (($_GET["IdContrario"]!=""))
{

  $Contrarios__MMColParam=$_GET["IdContrario"];
} 

?>
<? 

// $Contrarios is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Contrarios  WHERE Id = "+str_replace("'","''",$Contrarios__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Contrarios_numRows=0;
?>
<? 

// $contrario_cmd is of type "ADODB.Command"
$contrario_cmd_ActiveConnection=$MM_connrumbo_STRING;
$contrario_cmd_CommandText="SELECT * FROM Contrarios WHERE id = ? ORDER BY Nombre ASC";
$contrario_cmd_Prepared=true;
$contrario_cmd_Parameters=$Append$contrario_cmd_CreateParameter="param1"$Contrarios__MMColParam); // adVarChar

$contrario=$contrario_cmd_Execute=$contrario_numRows=0;;
?>
<? 

// $aseguradoras_cmd is of type "ADODB.Command"
$aseguradoras_cmd_ActiveConnection=$MM_connrumbo_STRING;
$aseguradoras_cmd_CommandText="SELECT * FROM Aseguradoras ORDER BY aseguradora ASC";
$aseguradoras_cmd_Prepared=true;

$aseguradoras=$aseguradoras_cmd_Execute=$aseguradoras_numRows=0;;
?>
<? 
$tramitador_cia__MMColParam=(->$Item["Compañia"]->$Value);
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
<title>Modificar datos del contrario</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30">
<form ACTION="<? echo $MM_editAction;?>" METHOD="POST" name="form1">
  <p><strong><em> 
    <script language="JavaScript" src="menu.js"></script>
Responsable del siniestro:
<input <? if (($Item["Culpable"]$Value==true))
{
  print "checked";
  print "";
} ?> name="Culpable" type="checkbox" id="Culpable" value="checkbox">
</em></strong></p>
  <table width="100%" border="1" cellspacing="0" bordercolor="#000000">
    <tr> 
      <td>Nombre: 
        <input type="text" name="Nombre" value="<? echo (->$Item["Nombre"]->$Value);?>" size="32"></td>
      <td>Apellido1: 
        <input type="text" name="Apellido1" value="<? echo (->$Item["Apellido1"]->$Value);?>" size="32"></td>
      <td>Apellido2: 
        <input type="text" name="Apellido2" value="<? echo (->$Item["Apellido2"]->$Value);?>" size="32"></td>
    </tr>
    <tr> 
      <td colspan="3">Direccion: 
        <input type="text" name="Direccion" value="<? echo (->$Item["Direccion"]->$Value);?>" size="32"></td>
    </tr>
    <tr> 
      <td>Codigo Postal: 
        <input type="text" name="Codigo_Postal" value="<? echo (->$Item["Codigo Postal"]->$Value);?>" size="32"></td>
      <td>Localidad:        </td>
      <td>Provincia: 
        <input type="text" name="Provincia" value="<? echo (->$Item["Provincia"]->$Value);?>" size="32"></td>
    </tr>
    <tr> 
      <td>Nif: 
        <input type="text" name="NIF" value="<? echo (->$Item["NIF"]->$Value);?>" size="32"></td>
      <td>Fecha Nacimiento: 
      <input type="text" name="Localidad" value="<? echo (->$Item["Localidad"]->$Value);?>" size="32">        <input type="text" name="Fecha_Nacimiento" value="<? echo (->$Item["FechaNacimiento"]->$Value);?>" size="32"></td>
      <td>Email: 
        <input type="text" name="Email" value="<? echo (->$Item["Email"]->$Value);?>" size="32"></td>
    </tr>
    <tr> 
      <td>Telefono1: 
        <input type="text" name="Telefono_1" value="<? echo (->$Item["Telefono 1"]->$Value);?>" size="32"></td>
      <td>Telefono2: 
        <input type="text" name="Telefono_2" value="<? echo (->$Item["Telefono 2"]->$Value);?>" size="32"></td>
      <td>Telefono3: 
        <input type="text" name="Telefono_3" value="<? echo (->$Item["Telefono 3"]->$Value);?>" size="32"></td>
    </tr>
  </table>
  <br>
  <table width="100%" border="1" cellspacing="0" bordercolor="#000000">
    <tr> 
      <td>Vehiculo: 
        <input type="text" name="Vehiculo" value="<? echo (->$Item["Vehiculo"]->$Value);?>" size="32"></td>
      <td>Matricula: 
        <input type="text" name="Matricula" value="<? echo (->$Item["Matricula"]->$Value);?>" size="32"></td>
      <td>Conductor: 
        <input type="text" name="Conductor" value="<? echo (->$Item["Conductor"]->$Value);?>" size="32"></td>
    </tr>
    <tr> 
      <td>Nro Poliza: 
        <input type="text" name="Nro_poliza" value="<? echo (->$Item["Nro poliza"]->$Value);?>" size="32"></td>
      <td>Ref expediente: 
        <input type="text" name="Ref_expediente" value="<? echo (->$Item["Ref expediente"]->$Value);?>" size="32"></td>
      <td>Compa&ntilde;ia: 
        
        <select name="Compaia" id="Compaia">
          <option value="" <? if ((!!isset((->$Item["Compañia"]->$Value))))
{
  if ((""==((->$Item["Compañia"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>Ninguno</option>
          <? 
while((!$aseguradoras->EOF))
{

?>
          <option value="<?   echo ($aseguradoras->Fields->$Item["aseguradora"]->$Value);?>" <?   if ((!!isset((->$Item["Compañia"]->$Value))))
  {
    if ((($aseguradoras->Fields->$Item["aseguradora"]->$Value)==((->$Item["Compañia"]->$Value))))
    {
      print "selected=\"selected\"";
      print "";
    } 
  } ?> ><?   echo ($aseguradoras->Fields->$Item["aseguradora"]->$Value);?></option>
          <? 
  $aseguradoras->MoveNext();
} 
if (($aseguradoras->CursorType>0))
{

  $aseguradoras->MoveFirst;
}
  else
{

  $aseguradoras->Requery;
} 

?>
        </select><br>
        Tramitador:
        <label for="select"></label>
        <select name="tramitadorcia" id="tramitadorcia" >
          <option value="" <? if ((!!isset((->$Item["Tramitador cia"]->$Value))))
{
  if ((""==((->$Item["Tramitador cia"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>Ninguno</option>
          <? 
while((!$tramitador_cia->EOF))
{

?>
          <option value="<?   echo ($tramitador_cia->Fields->$Item["Nombre"]->$Value);?>" <?   if ((!!isset((->$Item["Tramitador cia"]->$Value))))
  {
    if ((($tramitador_cia->Fields->$Item["Nombre"]->$Value)==((->$Item["Tramitador cia"]->$Value))))
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
      <td colspan="3">Propietario: 
        <input type="text" name="Propietario" value="<? echo (->$Item["Propietario"]->$Value);?>" size="32"></td>
    </tr>
    <tr> 
      <td colspan="3">Tomador: 
        <input type="text" name="Tomador" value="<? echo (->$Item["Tomador"]->$Value);?>" size="32"></td>
    </tr>
  </table>
  <p align="center"><em><strong> 
    <input name="submit" type="submit" value="Actualizar registro">
    </strong></em> </p>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo ->$Item["Id"]->$Value;?>">
</form>
</body>
</html>
<? 

$Contrarios=null;

?>
<? 
$aseguradoras->Close();
$aseguradoras=null;

?>
<? 
$tramitador_cia->Close();
$tramitador_cia=null;

?>

