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
    $MM_editCmd_CommandText="UPDATE Aseguradoras SET aseguradora = ?, telefono = ?, fax = ?, email = ?, direccion = ?, localidad = ?, provincia = ?, cp = ?, Notas = ? WHERE Id = ?";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["aseguradora"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["telefono"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["fax"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"    $_POST["email"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["direccion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"    $_POST["localidad"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"    $_POST["provincia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"    $_POST["cp"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"    $_POST["notas"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"        MM_IIF($_POST["MM_recordId"],$_POST["MM_recordId"],null);// adDouble
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

// append the query string to the redirect URL
    $MM_editRedirectUrl="Aseguradora.asp";
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
$aseguro__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $aseguro__MMColParam=$_GET["Id"];
} 

?>
<? 

// $aseguro_cmd is of type "ADODB.Command"
$aseguro_cmd_ActiveConnection=$MM_connrumbo_STRING;
$aseguro_cmd_CommandText="SELECT * FROM Aseguradoras WHERE Id = ?";
$aseguro_cmd_Prepared=true;
$aseguro_cmd_Parameters=$Append$aseguro_cmd_CreateParameter="param1"$aseguro__MMColParam); // adDouble

$aseguro=$aseguro_cmd_Execute=$aseguro_numRows=0;;
?>
<h1>Editar Aseguradora <? echo ($aseguro->Fields->$Item["aseguradora"]->$Value);?></h1>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form method="post" action="<? echo $MM_editAction;?>" name="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Aseguradora:</td>
      <td><input type="text" name="aseguradora" value="<? echo ($aseguro->Fields->$Item["aseguradora"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Telefono:</td>
      <td><input type="text" name="telefono" value="<? echo ($aseguro->Fields->$Item["telefono"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fax:</td>
      <td><input type="text" name="fax" value="<? echo ($aseguro->Fields->$Item["fax"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Email:</td>
      <td><input type="text" name="email" value="<? echo ($aseguro->Fields->$Item["email"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Direccion:</td>
      <td><input type="text" name="direccion" value="<? echo ($aseguro->Fields->$Item["direccion"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Localidad:</td>
      <td><input type="text" name="localidad" value="<? echo ($aseguro->Fields->$Item["localidad"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Provincia:</td>
      <td><input type="text" name="provincia" value="<? echo ($aseguro->Fields->$Item["provincia"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Cp:</td>
      <td><input type="text" name="cp" value="<? echo ($aseguro->Fields->$Item["cp"]->$Value);?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Notas:</td>
      <td><textarea name="notas" cols="100" rows="10"><? echo ($aseguro->Fields->$Item["Notas"]->$Value);?></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Actualizar registro"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo $aseguro->Fields->$Item["Id"]->$Value;?>">
</form>
<p>&nbsp;</p>


<? 
$aseguro->Close();
$aseguro=null;

?>

