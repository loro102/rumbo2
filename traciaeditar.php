<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
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
    $MM_editCmd_CommandText="UPDATE Tramitadorcia SET Nombre = ?, Telefono = ?, Fax = ?, Email = ?, aseguradora = ?, Notas = ?, Cargo = ? WHERE Id = ?";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["Nombre"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["Telefono"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["Fax"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"    $_POST["Email"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["aseguradora"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["notas"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["cargo"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"        MM_IIF($_POST["MM_recordId"],$_POST["MM_recordId"],null);// adDouble
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
$aseguro_cmd_CommandText="SELECT * FROM Tramitadorcia WHERE Id = ?";
$aseguro_cmd_Prepared=true;
$aseguro_cmd_Parameters=$Append$aseguro_cmd_CreateParameter="param1"$aseguro__MMColParam); // adDouble

$aseguro=$aseguro_cmd_Execute=$aseguro_numRows=0;;
?>
<h1>Editar Tramitador <? echo ($aseguro->Fields->$Item["nombre"]->$Value);?></h1>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form method="post" action="<? echo $MM_editAction;?>" name="form1">
  <table align="center">
     <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input type="text" name="Nombre" value="<? echo ($aseguro->Fields->$Item["nombre"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Telefono:</td>
      <td><input type="text" name="Telefono" value="<? echo ($aseguro->Fields->$Item["Telefono"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fax:</td>
      <td><input type="text" name="Fax" value="<? echo ($aseguro->Fields->$Item["Fax"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Email:</td>
      <td><input type="text" name="Email" value="<? echo ($aseguro->Fields->$Item["Email"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Aseguradora:</td>
      <td><input name="aseguradora" type="text" value="<? echo ($aseguro->Fields->$Item["Aseguradora"]->$Value);?>" size="32" readonly></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Notas:</td>
      <td><textarea name="notas" cols="100" rows="10"></textarea></td>
      <tr valign="baseline">
      <td nowrap align="right">Cargo:</td>
      <td><input name="cargo" type="text" value="<? echo ($aseguro->Fields->$Item["cargo"]->$Value);?>" size="32"></td>
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

