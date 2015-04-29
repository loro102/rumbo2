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
if (((${"MM_insert"})=="form1"))
{

  if ((!$MM_abortEdit))
  {

// execute the insert

    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="INSERT INTO Agentes (Nombre, NIF, Direccion, CP, Localidad, Provincia, Profesion, FechaContrato, Telefono1, Telefono2, Telefono3, CCC, Comercial, Placa, Pegatina, Portatriptico, Notas, Homologado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["Nombre"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["NIF"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["Direccion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"    $_POST["CP"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["Localidad"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"    $_POST["Provincia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"    $_POST["Profesion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"        MM_IIF($_POST["FechaContrato"],$_POST["FechaContrato"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"    $_POST["Telefono1"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"    $_POST["Telefono2"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param11"    $_POST["Telefono3"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param12"    $_POST["CCC"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param13"    $_POST["Comercial"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param14"        MM_IIF($_POST["Placa"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param15"        MM_IIF($_POST["Pegatina"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param16"        MM_IIF($_POST["Portatriptico"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param17"    $_POST["notas"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param18"        MM_IIF($_POST["Homologado"],1,0);// adDouble
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

// append the query string to the redirect URL
    $MM_editRedirectUrl="Principal.asp";
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
<title>Insertar Agente</title>
</head>

<body topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<em><strong>Introduce los datos del nuevo agente: </strong></em> 
<form method="POST" action="<? echo $MM_editAction;?>" name="form1">
  Nombre:
  <input name="Nombre" type="text" value="" size="100" maxlength="150"> 
  NIF: 
  <input name="NIF" type="text" value="" size="14" maxlength="50">
  <br>
  Direcci&oacute;n:
  <input name="Direccion" type="text" value="" size="120" maxlength="200"> 
  <br>
  CP:
  
  <input name="CP" type="text" value="" size="5" maxlength="20">
Localidad:
<input name="Localidad" type="text" value="" size="32" maxlength="50">
Provincia:
<input name="Provincia" type="text" value="" size="32" maxlength="50">
<br>
Profesion:
<input name="Profesion" type="text" value="" size="50" maxlength="50">
Fecha de contrato:
<input type="text" name="FechaContrato" value="" size="32">
<br>
Telefono1:
<input name="Telefono1" type="text" value="" size="32" maxlength="50">
Telefono2:
<input name="Telefono2" type="text" value="" size="32" maxlength="50">
Telefono3:
<input name="Telefono3" type="text" value="" size="32" maxlength="50">
<br>
CCC:
<input name="CCC" type="text" value="" size="50" maxlength="50">
Comercial:
<input name="Comercial" type="text" value="" size="50" maxlength="50">
Placa: 
<input type="checkbox" name="Placa" value=1 >
Pegatina:
<input name="Pegatina" type="checkbox" id="Pegatina" value="checkbox">
Portatriptico:
<input name="Portatriptico" type="checkbox" id="Portatriptico" value="checkbox">
<br>
Notas:
<textarea name="notas" cols="100" id="notas"></textarea> 
<input type="hidden" name="MM_insert" value="form1">
<input name="Homologado" type="hidden" id="Homologado" value="1">
<br>
  <input type="submit" value="Insertar registro">
</form>
</body>
</html>

