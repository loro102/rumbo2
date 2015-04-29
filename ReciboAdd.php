<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
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
if (((${"MM_insert"})=="form1"))
{

  if ((!$MM_abortEdit))
  {

// execute the insert

    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="INSERT INTO Recibo (cliente, concepto, fechaemision, fechacobro, cuantia, notas, FechaEnvioTarjeta) VALUES (?, ?, ?, ?, ?, ?, ?)";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"        MM_IIF($_POST["cliente"],$_POST["cliente"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["Concepto"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"        MM_IIF($_POST["fechaemision"],$_POST["fechaemision"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"        MM_IIF($_POST["fechacobro"],$_POST["fechacobro"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"        MM_IIF($_POST["cuantia"],$_POST["cuantia"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"    $_POST["notas"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"        MM_IIF($_POST["fechaenviotarjeta"],$_POST["fechaenviotarjeta"],null);// adDBTimeStamp
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

    header("Location: "."Cliente.asp?Id=".$_GET["cliente"]."#recibos");
  } 

} 

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>A&ntilde;adir recibo</title>
</head>

<body topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<form id="form1" name="form1" method="POST" action="<? echo $MM_editAction;?>">
  <input name="cliente" type="hidden" id="cliente" value="<? echo $_GET["cliente"];?>" /> 
  Concepto:
  <input name="Concepto" type="text" id="Concepto" size="100" maxlength="200" />
  <br />
  Fecha de emisi&oacute;n:
<input name="fechaemision" type="text" id="fechaemision" size="15" maxlength="10" />
Fecha de cobro: 
<input name="fechacobro" type="text" id="fechacobro" size="15" maxlength="10" />
Fecha de envio de tarjeta:
<input name="fechaenviotarjeta" type="text" id="fechaenviotarjeta" size="15" maxlength="10" />
<br />
Cuantia:
<input name="cuantia" type="text" id="cuantia" />
<br />
Notas:
<textarea name="notas" cols="100" rows="9" id="notas"></textarea>
<br />
<input type="submit" name="Submit" value="Enviar" />
<input type="hidden" name="MM_insert" value="form1">
</form>
</body>
</html>

