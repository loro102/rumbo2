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
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
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
    $MM_editCmd_CommandText="UPDATE Profesionales SET Nombre = ?, NIFCIF = ?, Especialidad = ?, NombreFiscal = ?, Direccion = ?, CP = ?, Ciudad = ?, Provincia = ?, Telefono1 = ?, Telefono2 = ?, Telefono3 = ?, Email = ?, Fax = ?, Notas = ?, Notas2 = ?, AcuerdoPago = ?, SumaIndemnizacion = ?, Homologado = ?,colegiado=? WHERE ID = ?";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["Nombre"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["NIFCIF"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["Especialidad"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"    $_POST["NombreFiscal"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["Direccion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"    $_POST["CP"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"    $_POST["Ciudad"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"    $_POST["Provincia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"    $_POST["Telefono1"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"    $_POST["Telefono2"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param11"    $_POST["Telefono3"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param12"    $_POST["Email"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param13"    $_POST["Fax"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param14"    $_POST["Notas"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param15"    $_POST["Notas2"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param16"        MM_IIF($_POST["AcuerdoPago"],$_POST["AcuerdoPago"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param17"        MM_IIF($_POST["SumaInd"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param18"        MM_IIF($_POST["Homologado"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param19"    $_POST["colegiado"]
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param20"        MM_IIF($_POST["MM_recordId"],$_POST["MM_recordId"],null);// adDouble
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

// append the query string to the redirect URL
    $MM_editRedirectUrl="ProfesionalModificar.asp";
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
$Profesional__MMColParam="1";
if (($_GET["ID"]!=""))
{

  $Profesional__MMColParam=$_GET["ID"];
} 

?>
<? 

// $Profesional_cmd is of type "ADODB.Command"
$Profesional_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Profesional_cmd_CommandText="SELECT * FROM Profesionales WHERE ID = ?";
$Profesional_cmd_Prepared=true;
$Profesional_cmd_Parameters=$Append$Profesional_cmd_CreateParameter="param1"$Profesional__MMColParam); // adDouble

$Profesional=$Profesional_cmd_Execute=$Profesional_numRows=0;;
?>
<? 
$Fras__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Fras__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Fras_cmd is of type "ADODB.Command"
$Fras_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Fras_cmd_CommandText="SELECT * FROM Facturas WHERE Valor = ?";
$Fras_cmd_Prepared=true;
$Fras_cmd_Parameters=$Append$Fras_cmd_CreateParameter="param1"$Fras__MMColParam); // adDouble

$Fras=$Fras_cmd_Execute=$Fras_numRows=0;;
?>
<? 
$enlaces__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $enlaces__MMColParam=$_GET["Id"];
} 

?>
<? 

// $enlaces_cmd is of type "ADODB.Command"
$enlaces_cmd_ActiveConnection=$MM_connrumbo_STRING;
$enlaces_cmd_CommandText="SELECT * FROM SiniestroProfesional WHERE Profesional = ?";
$enlaces_cmd_Prepared=true;
$enlaces_cmd_Parameters=$Append$enlaces_cmd_CreateParameter="param1"$enlaces__MMColParam); // adDouble

$enlaces=$enlaces_cmd_Execute=$enlaces_numRows=0;;
?>
<html>
<head>
<title>Modificar Profesional</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30">
<p>
  <script language="JavaScript" src="menu.js"></script>
</p>


  
<table width="100%"  border="0" cellspacing="0">
  <tr>
    <td><em><strong>Datos del profesional:</strong></em></td>
    <td align="right"><? if ($Fras->EOF && $enlaces->EOF)
{
?><a href="ProfesionalBorrar.asp?Id=<?   echo ($Profesional->Fields->$Item["ID"]->$Value);?>"><img src="Imagenes/Borrar.gif" alt="Borrar" width="20" height="20" border="0"></a><? } ?></td>
  </tr>
</table>

<form ACTION="<? echo $MM_editAction;?>" METHOD="POST" name="form1">
  <p>Nombre: 
    <input name="Nombre" type="text" value="<? echo ($Profesional->Fields->$Item["Nombre"]->$Value);?>" size="50" maxlength="50">
NIF/CIF:    
<input name="NIFCIF" type="text" id="NIFCIF" value="<? echo ($Profesional->Fields->$Item["NIFCIF"]->$Value);?>">
Especialidad:
<input name="Especialidad" type="text" id="Especialidad" value="<? echo ($Profesional->Fields->$Item["Especialidad"]->$Value);?>" maxlength="50">
<br>Nº de Colegiado: 
    <input name="colegiado" type="text" value="<? echo ($Profesional->Fields->$Item["colegiado"]->$Value);?>" size="50" maxlength="50">
    <br>Nombre Fiscal : 
<input name="NombreFiscal" type="text" id="NombreFiscal" value="<? echo ($Profesional->Fields->$Item["NombreFiscal"]->$Value);?>" maxlength="200">
<br>
    Direccion: 
    <input name="Direccion" type="text" value="<? echo ($Profesional->Fields->$Item["Direccion"]->$Value);?>" size="100" maxlength="100">
    <br>
    CP: 
    <input name="CP" type="text" value="<? echo ($Profesional->Fields->$Item["CP"]->$Value);?>" size="10" maxlength="50">
    Ciudad: 
    <input name="Ciudad" type="text" value="<? echo ($Profesional->Fields->$Item["Ciudad"]->$Value);?>" size="50" maxlength="50">
    Provincia: 
    <input name="Provincia" type="text" value="<? echo ($Profesional->Fields->$Item["Provincia"]->$Value);?>" size="50" maxlength="50">
    <br>
    Telefono1: 
    <input name="Telefono1" type="text" value="<? echo ($Profesional->Fields->$Item["Telefono1"]->$Value);?>" size="15" maxlength="50">
    Telefono2: 
    <input name="Telefono2" type="text" value="<? echo ($Profesional->Fields->$Item["Telefono2"]->$Value);?>" size="15" maxlength="50">
    Telefono3: 
    <input name="Telefono3" type="text" value="<? echo ($Profesional->Fields->$Item["Telefono3"]->$Value);?>" size="15" maxlength="50">
    Email: 
    <input name="Email" type="text" value="<? echo ($Profesional->Fields->$Item["Email"]->$Value);?>" size="20" maxlength="50">
    FAX: 
    <input name="Fax" type="text" value="<? echo ($Profesional->Fields->$Item["Fax"]->$Value);?>" size="15" maxlength="50">
    <br>
    Notas:
    <textarea name="Notas" cols="100" rows="15" id="Notas"><? echo ($Profesional->Fields->$Item["Notas"]->$Value);?></textarea>
    <br>
<? if ($_SESSION['CBeneficio']==true)
{
?>
    Notas2:
    <textarea name="Notas2" cols="100" rows="15" id="Notas2"><?   echo ($Profesional->Fields->$Item["Notas2"]->$Value);?></textarea>
    <br>
<? }
  else
{
?>
<input name="Notas2" type="hidden" value="<?   echo ($Profesional->Fields->$Item["Notas2"]->$Value);?>">
<? } ?>
Acuerdo de pago:
<select name="AcuerdoPago" id="AcuerdoPago">
  <option value="0" selected <? if ((!!isset(($Profesional->Fields->$Item["AcuerdoPago"]->$Value))))
{
  if (("0"==(($Profesional->Fields->$Item["AcuerdoPago"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>A la emision de factura</option>
  <option value="1" <? if ((!!isset(($Profesional->Fields->$Item["AcuerdoPago"]->$Value))))
{
  if (("1"==(($Profesional->Fields->$Item["AcuerdoPago"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>A 30 d&iacute;as</option>
  <option value="2" <? if ((!!isset(($Profesional->Fields->$Item["AcuerdoPago"]->$Value))))
{
  if (("2"==(($Profesional->Fields->$Item["AcuerdoPago"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>A 60 d&iacute;as</option>
  <option value="3" <? if ((!!isset(($Profesional->Fields->$Item["AcuerdoPago"]->$Value))))
{
  if (("3"==(($Profesional->Fields->$Item["AcuerdoPago"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>A 90 d&iacute;as</option>
  <option value="4" <? if ((!!isset(($Profesional->Fields->$Item["AcuerdoPago"]->$Value))))
{
  if (("4"==(($Profesional->Fields->$Item["AcuerdoPago"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>Al alta</option>
  <option value="5" <? if ((!!isset(($Profesional->Fields->$Item["AcuerdoPago"]->$Value))))
{
  if (("5"==(($Profesional->Fields->$Item["AcuerdoPago"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>Al cobro</option>
  <option value="-1" <? if ((!!isset(($Profesional->Fields->$Item["AcuerdoPago"]->$Value))))
{
  if (("-1"==(($Profesional->Fields->$Item["AcuerdoPago"]->$Value))))
  {
    print "selected=\"selected\"";
    print "";
  } 
} ?>>No determinado</option>
    </select>
<br>
    Sus facturas cuentan para la indemnizaci&oacute;n
<input <? if (($Profesional->Fields$Item["SumaIndemnizacion"]$Value==true))
{
  print "checked";
  print "";
} ?> name="SumaInd" type="checkbox" id="SumaInd" value="checkbox">
  Homologado:
  <input <? if (($Profesional->Fields$Item["Homologado"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?> name="Homologado" type="checkbox" id="Homologado" value="checkbox">
  </p>
  <p> 
  <input name="submit" type="submit" value="Actualizar registro">
</p>

  
  

  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo $Profesional->Fields->$Item["ID"]->$Value;?>">
</form>
<p>
<script language="JavaScript" type="text/JavaScript">
form1.Nombre.focus()
</script>
</p>
</body>
</html>
<? 
$Profesional->Close();
$Profesional=null;

?>
<? 
$Fras->Close();
$Fras=null;

?>
<? 
$enlaces->Close();
$enlaces=null;

?>
<? $_SESSION['paginaant']=$_SERVER["HTTP_REFERER"];
?>
