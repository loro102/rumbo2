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
if (((${"MM_insert"})=="form1"))
{

  if ((!$MM_abortEdit))
  {

// execute the insert

    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="INSERT INTO Tramitadorcia (Nombre, Telefono, Fax, Email, aseguradora,Notas,Cargo) VALUES (?, ?, ?, ?, ?,?,?)";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["Nombre"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["Telefono"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["Fax"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"    $_POST["Email"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["aseguradora"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["notas"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["cargo"]// adVarWChar
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    
  } 

} 

?>
<? 
$Tramitador__MMColParam="1";
if (($_GET["ide"]!=""))
{

  $Tramitador__MMColParam=$_GET["ide"];
} 

?>
<? 

// $Tramitador_cmd is of type "ADODB.Command"
$Tramitador_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Tramitador_cmd_CommandText="SELECT * FROM Tramitadorcia WHERE aseguradora = ? ORDER BY Nombre ASC";
$Tramitador_cmd_Prepared=true;
$Tramitador_cmd_Parameters=$Append$Tramitador_cmd_CreateParameter="param1"$Tramitador__MMColParam); // adVarChar

$Tramitador=$Tramitador_cmd_Execute=$Tramitador_numRows=0;;
?>
<? 
$aseguradoras__MMColParam="1";
if (($_GET["id"]!=""))
{

  $aseguradoras__MMColParam=$_GET["id"];
} 

?>
<? 

// $aseguradoras_cmd is of type "ADODB.Command"
$aseguradoras_cmd_ActiveConnection=$MM_connrumbo_STRING;
$aseguradoras_cmd_CommandText="SELECT * FROM Aseguradoras WHERE Id = ?";
$aseguradoras_cmd_Prepared=true;
$aseguradoras_cmd_Parameters=$Append$aseguradoras_cmd_CreateParameter="param1"$aseguradoras__MMColParam); // adDouble

$aseguradoras=$aseguradoras_cmd_Execute=$aseguradoras_numRows=0;;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Tramitador_numRows=$Tramitador_numRows+$Repeat1__numRows;
?>
<head>
<!--Codigo Javascript para mostrar y ocultar un div -->
<script>

function muestra_oculta(id){
if (document.getElementById){ //se obtiene el id
var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
}
}
window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
muestra_oculta('nuevo_tramitador');/* "contenido_a_mostrar" es el nombre de la etiqueta DIV que deseamos mostrar */
}
</script>
</head>

<body style="background-color: transparent;" onLoad="document.getElementById('Notas').scrollTop = document.getElementById('Notas').scrollHeight"> 
<h3>&nbsp;</h3>
<h3><em><strong>Tramitadores de </strong></em><? echo ($aseguradoras->Fields->$Item["aseguradora"]->$Value);?></h3>
<a style='cursor: pointer; color: #060; text-align: center;' onClick="muestra_oculta('nuevo_tramitador')">Pulse aqui para insertar nuevo tramitador de <? echo ($aseguradoras->Fields->$Item["aseguradora"]->$Value);?> </a>
<div id="nuevo_tramitador" style='display:none'>
<form method="post" action="<? echo $MM_editAction;?>" name="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input type="text" name="Nombre" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Telefono:</td>
      <td><input type="text" name="Telefono" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fax:</td>
      <td><input type="text" name="Fax" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Email:</td>
      <td><input type="text" name="Email" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Aseguradora:</td>
      <td><input name="aseguradora" type="text" value="<? echo ($aseguradoras->Fields->$Item["aseguradora"]->$Value);?>" size="32" readonly></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Notas:</td>
      <td><textarea name="notas" cols="100" rows="10"></textarea></td>
      <tr valign="baseline">
      <td nowrap align="right">Cargo:</td>
      <td><input name="cargo" type="text" value="" size="32"></td>
    </tr>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Insertar registro"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
</div>
<p>&nbsp;</p>
<table border="1">
  <? if (!$Tramitador->EOF || !$Tramitador->BOF)
{
?>
  <tr bgcolor="#00CC00">
    <th width="100%" nowrap="nowrap"><strong>Nombre</strong></th>
    <th width="100%" nowrap="nowrap"><strong>Telefono</strong></th>
    <th width="100%" nowrap="nowrap"><strong>Fax</strong></th>
    <th width="100%" nowrap="nowrap"><strong>Email</strong></th>
    <th width="100%" nowrap="nowrap"><strong>Cargo</strong></th>
    <th width="100%" nowrap="nowrap"><strong>Notas</strong></th>
    <th width="100%" nowrap="nowrap"><strong>Opciones</strong></th>
    </tr>
  <? 
  while((($Repeat1__numRows!=0) && (!$Tramitador->EOF)))
  {

?>
  <tr>
    <td width="100%" nowrap="nowrap"><?     echo ($Tramitador->Fields->$Item["Nombre"]->$Value);?></td>
    <td width="100%" nowrap="nowrap"><?     echo ($Tramitador->Fields->$Item["Telefono"]->$Value);?></td>
    <td width="100%" nowrap="nowrap"><?     echo ($Tramitador->Fields->$Item["Fax"]->$Value);?></td>
    <td width="100%" nowrap="nowrap"><?     echo ($Tramitador->Fields->$Item["Email"]->$Value);?></td>
    <td width="100%" nowrap="nowrap"><?     echo ($Tramitador->Fields->$Item["Cargo"]->$Value);?></td>
    <td width="100%" nowrap="nowrap"><?     echo ($Tramitador->Fields->$Item["Notas"]->$Value);?></td>
    <td width="100%" nowrap="nowrap"><a href="traciaeditar.asp?id=<?     echo ($Tramitador->Fields->$Item["Id"]->$Value);?>"><img src="Imagenes/pencil.gif" width="32" height="30" alt="editar"></a></td>
    </tr>
  <? 
    $Repeat1__index=$Repeat1__index+1;
    $Repeat1__numRows=$Repeat1__numRows-1;
    $Tramitador->MoveNext();
  } 
?>
  <? } 
// end Not Tramitador.EOF Or NOT Tramitador.BOF  ?>
</table>
</body>
</html><? 
$Tramitador->Close();
$Tramitador=null;

?>
<? 
$aseguradoras->Close();
$aseguradoras=null;

?>

