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
    $MM_editCmd_CommandText="UPDATE Recibo SET concepto = ?, fechaemision = ?, fechacobro = ?, cuantia = ?, notas = ?, FechaEnvioTarjeta = ? WHERE id = ?";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["Concepto"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"        MM_IIF($_POST["fechaemision"],$_POST["fechaemision"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"        MM_IIF($_POST["fechacobro"],$_POST["fechacobro"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"        MM_IIF($_POST["cuantia"],$_POST["cuantia"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["notas"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"        MM_IIF($_POST["fechaenviotarjeta"],$_POST["fechaenviotarjeta"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"        MM_IIF($_POST["MM_recordId"],$_POST["MM_recordId"],null);// adDouble
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

    header("Location: "."Cliente.asp?id="+($_POST["cliente"])+"#recibos");
  } 

} 

?>
<? 
$recibo__MMColParam="1";
if (($_GET["id"]!=""))
{

  $recibo__MMColParam=$_GET["id"];
} 

?>
<? 

// $recibo_cmd is of type "ADODB.Command"
$recibo_cmd_ActiveConnection=$MM_connrumbo_STRING;
$recibo_cmd_CommandText="SELECT * FROM Recibo WHERE id = ?";
$recibo_cmd_Prepared=true;
$recibo_cmd_Parameters=$Append$recibo_cmd_CreateParameter="param1"$recibo__MMColParam); // adDouble

$recibo=$recibo_cmd_Execute=$recibo_numRows=0;;
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Recibo</title>
</head>

<body topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<form id="form1" name="form1" method="POST" action="<? echo $MM_editAction;?>">
  Concepto:
  <input name="Concepto" type="text" id="Concepto" value="<? echo ($recibo->Fields->$Item["concepto"]->$Value);?>" size="100" maxlength="200" />
  <input name="cliente" type="hidden" id="cliente" value="<? echo ($recibo->Fields->$Item["cliente"]->$Value);?>" />
  <br />
  Fecha de emisi&oacute;n:
<input name="fechaemision" type="text" id="fechaemision" value="<? echo ($recibo->Fields->$Item["fechaemision"]->$Value);?>" size="15" maxlength="10" />
Fecha de cobro: 
<input name="fechacobro" type="text" id="fechacobro" value="<? echo ($recibo->Fields->$Item["fechacobro"]->$Value);?>" size="15" maxlength="10" />
Fecha de envio de tarjeta:
<input name="fechaenviotarjeta" type="text" id="fechaenviotarjeta" value="<? echo ($recibo->Fields->$Item["FechaEnvioTarjeta"]->$Value);?>" size="15" maxlength="10" />
<br />
Cuantia:
<input name="cuantia" type="text" id="cuantia" value="<? echo ($recibo->Fields->$Item["cuantia"]->$Value);?>" />
<br />
Notas:
<textarea name="notas" cols="100" rows="9" id="notas"><? echo ($recibo->Fields->$Item["notas"]->$Value);?></textarea>
<br />
<input type="submit" name="Submit" value="Enviar" />
<input type="hidden" name="MM_update" value="form1">
<input type="hidden" name="MM_recordId" value="<? echo $recibo->Fields->$Item["id"]->$Value;?>">
</form>
</body>
</html>
<? 
$recibo->Close();
$recibo=null;

?>

