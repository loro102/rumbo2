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
    $MM_editCmd_CommandText="UPDATE Abonados SET Nombre = ?, Apellido1 = ?, Apellido2 = ?, Agente = ?, Colectivo = ?, Precio = ?, Descuento = ?, ModeloContrato = ?, NIF = ?, Direccion = ?, [Codigo Postal] = ?, Localidad = ?, Provincia = ?, FechaNacimiento = ?, FechaCadCarnet = ?, FechaAbono = ?, [Telefono 1] = ?, [Telefono 2] = ?, [Telefono 3] = ?, Email = ?, CCC = ?, NoMailing = ?, Matriculas = ?, EstadoCivil = ?, Hijos = ?, Profesion = ?, Ingresos = ?, Notas = ? WHERE Id = ?";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["Nombre"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["Apellido1"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["Apellido2"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"        MM_IIF($_POST["Agente"],$_POST["Agente"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["Colectivo"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"        MM_IIF($_POST["Precio"],$_POST["Precio"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"        MM_IIF($_POST["Descuento"],$_POST["Descuento"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"        MM_IIF($_POST["Modelo"],$_POST["Modelo"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"    $_POST["NIF"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"    $_POST["Direccion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param11"        MM_IIF($_POST["Codigo_Postal"],$_POST["Codigo_Postal"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param12"    $_POST["Localidad"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param13"    $_POST["Provincia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param14"        MM_IIF($_POST["Fecha_Nacimiento"],$_POST["Fecha_Nacimiento"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param15"        MM_IIF($_POST["FechaCadCarnet"],$_POST["FechaCadCarnet"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param16"        MM_IIF($_POST["Fecha_Abono"],$_POST["Fecha_Abono"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param17"    $_POST["Telefono_1"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param18"    $_POST["Telefono_2"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param19"    $_POST["Telefono_3"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param20"    $_POST["Email"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param21"    $_POST["CCC"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param22"        MM_IIF($_POST["NoMailing"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param23"    $_POST["Matriculas"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param24"    $_POST["EstadoCivil"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param25"        MM_IIF($_POST["Hijos"],$_POST["Hijos"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param26"    $_POST["Profesion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param27"        MM_IIF($_POST["Ingresos"],$_POST["Ingresos"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param28"    $_POST["notas"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param29"        MM_IIF($_POST["MM_recordId"],$_POST["MM_recordId"],null);// adDouble
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
$Recordset1__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Recordset1__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Recordset1_cmd is of type "ADODB.Command"
$Recordset1_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Recordset1_cmd_CommandText="SELECT * FROM Abonados WHERE Id = ?";
$Recordset1_cmd_Prepared=true;
$Recordset1_cmd_Parameters=$Append$Recordset1_cmd_CreateParameter="param1"$Recordset1__MMColParam); // adDouble

$Recordset1=$Recordset1_cmd_Execute=$Recordset1_numRows=0;;
?>
<? 

// $Agentes is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Id, Nombre FROM Agentes ORDER BY Nombre ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Agentes_numRows=0;
?>
<? 

// $ModelosContrato_cmd is of type "ADODB.Command"
$ModelosContrato_cmd_ActiveConnection=$MM_connrumbo_STRING;
$ModelosContrato_cmd_CommandText="SELECT * FROM ModelosContrato ORDER BY Id ASC";
$ModelosContrato_cmd_Prepared=true;

$ModelosContrato=$ModelosContrato_cmd_Execute=$ModelosContrato_numRows=0;;
?>
<html>
<head>
<title>Actualizar datos del abonado</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" text="#000000" topmargin="30" onLoad="while (document.form1.notas.value.indexOf('<br>')>0){document.form1.notas.value=document.form1.notas.value.replace('<br>',String.fromCharCode(13,10));}">
<script language="JavaScript" src="menu.js"></script>
<form method="POST" action="<? echo $MM_editAction;?>" name="form1" onSubmit="form1.Precio.value=form1.Precio.value.replace('.',',');while (document.form1.notas.value.indexOf(String.fromCharCode(13,10))>0){document.form1.notas.value=document.form1.notas.value.replace(String.fromCharCode(13,10),'<br>');}">
  <p>Nombre: 
    <input type="text" name="Nombre" value="<? echo ($Recordset1->Fields->$Item["Nombre"]->$Value);?>" size="32">
    Primer apellido : 
    <input type="text" name="Apellido1" value="<? echo ($Recordset1->Fields->$Item["Apellido1"]->$Value);?>" size="32">
    Segundo apellido: 
    <input type="text" name="Apellido2" value="<? echo ($Recordset1->Fields->$Item["Apellido2"]->$Value);?>" size="32">
    <br>
    Agente: 
    <select name="Agente" id="Agente">
      <? 
while((!($Agentes==0)))
{

?>
      <option value="<?   echo (->$Item["Id"]->$Value);?>" <?   if ((!!isset(($Recordset1->Fields->$Item["Agente"]->$Value))))
  {
    if (((->$Item["Id"]->$Value)==(($Recordset1->Fields->$Item["Agente"]->$Value))))
    {
      print "SELECTED";
      print "";
    } 
  } ?> ><?   echo (->$Item["Nombre"]->$Value);?></option>
      <? 
  $Agentes=mysql_fetch_array($Agentes_query);
  $Agentes_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
    </select>
    Colectivo: 
    <input name="Colectivo" type="text" id="Colectivo" value="<? echo ($Recordset1->Fields->$Item["Colectivo"]->$Value);?>" maxlength="50">
    
    Precio: 
    <input name="Precio" type="text" id="Precio" value="<? echo ($Recordset1->Fields->$Item["Precio"]->$Value);?>" size="7" maxlength="15">
Descuento: 
<input name="Descuento" type="text" id="Descuento" value="<? echo ($Recordset1->Fields->$Item["Descuento"]->$Value);?>" size="4" maxlength="3">
Modelo de contrato:
<select name="Modelo" id="Modelo">
  <? 
while((!$ModelosContrato->EOF))
{

?>
  <option value="<?   echo ($ModelosContrato->Fields->$Item["Id"]->$Value);?>" <?   if ((!!isset(($Recordset1->Fields->$Item["ModeloContrato"]->$Value))))
  {
    if ((($ModelosContrato->Fields->$Item["Id"]->$Value)==(($Recordset1->Fields->$Item["ModeloContrato"]->$Value))))
    {
      print "selected=\"selected\"";
      print "";
    } 
  } ?> ><?   echo ($ModelosContrato->Fields->$Item["Nombre"]->$Value);?></option>
  <? 
  $ModelosContrato->MoveNext();
} 
if (($ModelosContrato->CursorType>0))
{

  $ModelosContrato->MoveFirst;
}
  else
{

  $ModelosContrato->Requery;
} 

?>
</select>
<br>
    NIF: 
    <input type="text" name="NIF" value="<? echo ($Recordset1->Fields->$Item["NIF"]->$Value);?>" size="32">
    <br>
    Direccion: 
    <input type="text" name="Direccion" value="<? echo ($Recordset1->Fields->$Item["Direccion"]->$Value);?>" size="32">
    <br>
    Codigo postal: 
    <input type="text" name="Codigo_Postal" value="<? echo ($Recordset1->Fields->$Item["Codigo Postal"]->$Value);?>" size="32">
    Localidad: 
    <input name="Localidad" type="text" id="Localidad" value="<? echo ($Recordset1->Fields->$Item["Localidad"]->$Value);?>" size="32">
    Provincia: 
    <input name="Provincia" type="text" id="Provincia" value="<? echo ($Recordset1->Fields->$Item["Provincia"]->$Value);?>" size="32">
    <br>
    Fecha de Nacimiento: 
    <input type="text" name="Fecha_Nacimiento" value="<? echo ($Recordset1->Fields->$Item["FechaNacimiento"]->$Value);?>" size="32"> Fecha de caducidad del carnet de conducir:
    <input type="text" name="FechaCadCarnet" value="<? echo ($Recordset1->Fields->$Item["FechaCadCarnet"]->$Value);?>" size="32"> 
    <br>
    Fecha Abono: 
    <input type="text" name="Fecha_Abono" value="<? echo ($Recordset1->Fields->$Item["FechaAbono"]->$Value);?>" size="32">
    <!--<script language="JavaScript" type="text/JavaScript">
document.write('<input type="text" name="txtFAbono value="'+(new Date()).getDate()+'/'+(new Date()).getMonth()+'/'+(new Date()).getYear()+'">');
</script>-->
    <a href="#" onClick="javascript:Fecha_Abono.value=(new Date()).getDate()+'/'+(new Date()).getMonth()+'/'+(new Date()).getYear();">Hoy</a> 
    <br>
    Telefono 1: 
    <input type="text" name="Telefono_1" value="<? echo ($Recordset1->Fields->$Item["Telefono 1"]->$Value);?>" size="32">
    Telefono 2: 
    <input type="text" name="Telefono_2" value="<? echo ($Recordset1->Fields->$Item["Telefono 2"]->$Value);?>" size="32">
    <br>
    Telefono 3: 
    <input type="text" name="Telefono_3" value="<? echo ($Recordset1->Fields->$Item["Telefono 3"]->$Value);?>" size="32">
    Email: 
    <input type="text" name="Email" value="<? echo ($Recordset1->Fields->$Item["Email"]->$Value);?>" size="32">
    <br>
    CCC:
    <input name="CCC" type="text" id="CCC" value="<? echo ($Recordset1->Fields->$Item["CCC"]->$Value);?>" size="50" maxlength="50">
    Excluirlo de los mailing
    <input name="NoMailing" type="checkbox" id="NoMailing" value="checkbox" <? if (($Recordset1->Fields$Item["NoMailing"]$Value==true))
{
  print "checked";
  print "";
} ?>>
    <br>
    Matriculas:
    <label></label>
    <input name="Matriculas" type="text" id="Matriculas" value="<? echo ($Recordset1->Fields->$Item["Matriculas"]->$Value);?>" size="80" maxlength="250">
    <br>
    EstadoCivil:
<input type="text" name="EstadoCivil" value="<? echo ($Recordset1->Fields->$Item["EstadoCivil"]->$Value);?>" size="32">
  Hijos:
  <input type="text" name="Hijos" value="<? echo ($Recordset1->Fields->$Item["Hijos"]->$Value);?>" size="32">
  <br>
  Profesion:
  <input type="text" name="Profesion" value="<? echo ($Recordset1->Fields->$Item["Profesion"]->$Value);?>" size="32">
  Ingresos
  <input type="text" name="Ingresos" value="<? echo ($Recordset1->Fields->$Item["Ingresos"]->$Value);?>" size="32">
  <br>
    Notas: 
    <textarea name="notas" cols="80" rows="10" id="notas"><? echo $Recordset1->Fields->$Item["Notas"]->$Value;?></textarea>
  </p>
  <input name="submit" type="submit" value="Actualizar datos">
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo $Recordset1->Fields->$Item["Id"]->$Value;?>">
</form>
</body>
</html>
<? 
$Recordset1->Close();
?>
<? 

$Agentes=null;

?>
<? 
$ModelosContrato->Close();
$ModelosContrato=null;

?>

