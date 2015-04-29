<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
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
    $MM_editCmd_CommandText="UPDATE Abonados SET EstadoCivil = ?, Hijos = ?, Profesion = ?, Ingresos = ?, Notas2 = ? WHERE Id = ?";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["EstadoCivil"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"        MM_IIF($_POST["Hijos"],$_POST["Hijos"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["Profesion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"        MM_IIF($_POST["Ingresos"],$_POST["Ingresos"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["Notas2"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"        MM_IIF($_POST["MM_recordId"],$_POST["MM_recordId"],null);// adDouble
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
<? 
$ING__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $ING__MMColParam=$_GET["Id"];
} 

?>
<? 

// $ING_cmd is of type "ADODB.Command"
$ING_cmd_ActiveConnection=$MM_connrumbo_STRING;
$ING_cmd_CommandText="SELECT Id, EstadoCivil, Hijos, Profesion, Ingresos, Notas2 FROM Abonados WHERE Id = ?";
$ING_cmd_Prepared=true;
$ING_cmd_Parameters=$Append$ING_cmd_CreateParameter="param1"$ING__MMColParam); // adDouble

$ING=$ING_cmd_Execute=$ING_numRows=0;;
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Datos ING</title>
</head>

<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" bgproperties="fixed" text="#000000" topmargin="30">
  <script language="JavaScript" src="menu.js"></script>
<form method="POST" action="<? echo $MM_editAction;?>" name="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">EstadoCivil:</td>
      <td><input type="text" name="EstadoCivil" value="<? echo ($ING->Fields->$Item["EstadoCivil"]->$Value);?>" size="32">
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Hijos:</td>
      <td><input type="text" name="Hijos" value="<? echo ($ING->Fields->$Item["Hijos"]->$Value);?>" size="32">
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Profesion:</td>
      <td><input type="text" name="Profesion" value="<? echo ($ING->Fields->$Item["Profesion"]->$Value);?>" size="32">
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Ingresos:</td>
      <td><input type="text" name="Ingresos" value="<? echo ($ING->Fields->$Item["Ingresos"]->$Value);?>" size="32">
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Notas2:</td>
      <td><textarea name="Notas2" cols="50" rows="5"><? echo ($ING->Fields->$Item["Notas2"]->$Value);?></textarea>
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Actualizar registro">
      </td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo $ING->Fields->$Item["Id"]->$Value;?>">
</form>
<p>&nbsp;</p>
</body>
</html>
<? 
$ING->Close();
$ING=null;

?>

