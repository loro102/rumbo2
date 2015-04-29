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
    $MM_editCmd_CommandText="UPDATE Tramitadores SET Id = ?, Nombre = ?, Direccion = ?, CP = ?, Ciudad = ?, Provincia = ?, Telefono1 = ?, Telefono2 = ?, Telefono3 = ?, Email = ?, Fax = ?, Activo = ?, s_GUID = ? WHERE Id = ?";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"        MM_IIF($_POST["Id"],$_POST["Id"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["Nombre"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["Direccion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"    $_POST["CP"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["Ciudad"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"    $_POST["Provincia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"    $_POST["Telefono1"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"    $_POST["Telefono2"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"    $_POST["Telefono3"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"    $_POST["Email"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param11"    $_POST["Fax"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param12"        MM_IIF($_POST["Activo"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param13"        MM_IIF($_POST["s_GUID"],$_POST["s_GUID"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param14"        MM_IIF($_POST["MM_recordId"],$_POST["MM_recordId"],null);// adDouble
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    
  } 

} 

?>
<? 
$Recordset1__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Recordset1__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Recordset1_cmd is of type "ADODB.Command"
$Recordset1_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Recordset1_cmd_CommandText="SELECT * FROM Tramitadores WHERE Id = ?";
$Recordset1_cmd_Prepared=true;
$Recordset1_cmd_Parameters=$Append$Recordset1_cmd_CreateParameter="param1"$Recordset1__MMColParam); // adDouble

$Recordset1=$Recordset1_cmd_Execute=$Recordset1_numRows=0;;
?>
<? 
$Recordset1->Close();
$Recordset1=null;

?>

<form method="post" action="<? echo $MM_editAction;?>" name="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Id:</td>
      <td><input type="text" name="Id" value="<? echo ($Recordset1->Fields->$Item["Id"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input type="text" name="Nombre" value="<? echo ($Recordset1->Fields->$Item["Nombre"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Direccion:</td>
      <td><input type="text" name="Direccion" value="<? echo ($Recordset1->Fields->$Item["Direccion"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">CP:</td>
      <td><input type="text" name="CP" value="<? echo ($Recordset1->Fields->$Item["CP"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Ciudad:</td>
      <td><input type="text" name="Ciudad" value="<? echo ($Recordset1->Fields->$Item["Ciudad"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Provincia:</td>
      <td><input type="text" name="Provincia" value="<? echo ($Recordset1->Fields->$Item["Provincia"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Telefono1:</td>
      <td><input type="text" name="Telefono1" value="<? echo ($Recordset1->Fields->$Item["Telefono1"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Telefono2:</td>
      <td><input type="text" name="Telefono2" value="<? echo ($Recordset1->Fields->$Item["Telefono2"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Telefono3:</td>
      <td><input type="text" name="Telefono3" value="<? echo ($Recordset1->Fields->$Item["Telefono3"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Email:</td>
      <td><input type="text" name="Email" value="<? echo ($Recordset1->Fields->$Item["Email"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fax:</td>
      <td><input type="text" name="Fax" value="<? echo ($Recordset1->Fields->$Item["Fax"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Activo:</td>
      <td><input type="checkbox" name="Activo" value=1 ></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">S_GUID:</td>
      <td><input type="text" name="s_GUID" value="<? echo ($Recordset1->Fields->$Item["s_GUID"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Actualizar registro"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo $Recordset1->Fields->$Item["Id"]->$Value;?>">
</form>
<p>&nbsp;</p>


