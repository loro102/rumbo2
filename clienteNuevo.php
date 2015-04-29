<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $Contratos_cmd is of type "ADODB.Command"
$Contratos_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Contratos_cmd_CommandText="SELECT * FROM ModelosContrato ORDER BY Id ASC";
$Contratos_cmd_Prepared=true;

$Contratos=$Contratos_cmd_Execute=$Contratos_numRows=0;;
?>
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
if (((${"MM_insert"})=="frmDatos"))
{

  if ((!$MM_abortEdit))
  {

// execute the insert

    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="INSERT INTO Abonados (Nombre, Apellido1, Apellido2, Agente, Colectivo, Precio, Descuento, ModeloContrato, NIF, Direccion, [Codigo Postal], Localidad, Provincia, FechaNacimiento, FechaAbono, FechaPrimerAbono, [Telefono 1], [Telefono 2], [Telefono 3], Email, CCC, Notas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["txtNombre"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["txtApellido1"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["txtApellido2"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"        MM_IIF($_POST["Agente"],$_POST["Agente"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["Colectivo"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"        MM_IIF($_POST["PRecio"],$_POST["PRecio"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"        MM_IIF($_POST["Descuento"],$_POST["Descuento"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"        MM_IIF($_POST["ModeloContrato"],$_POST["ModeloContrato"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"    $_POST["txtNIF"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"    $_POST["txtDireccion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param11"        MM_IIF($_POST["txtCP"],$_POST["txtCP"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param12"    $_POST["Localidad"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param13"    $_POST["Provincia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param14"        MM_IIF($_POST["txtFNac"],$_POST["txtFNac"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param15"        MM_IIF($_POST["txtFAbono"],$_POST["txtFAbono"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param16"        MM_IIF($_POST["FechaPrimerAbono"],$_POST["FechaPrimerAbono"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param17"    $_POST["txtTlfno1"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param18"    $_POST["txtTlfno2"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param19"    $_POST["txtTfno3"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param20"    $_POST["txtEmail"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param21"    $_POST["CCC"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param22"    $_POST["notas"]// adLongVarWChar
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

// append the query string to the redirect URL
    $MM_editRedirectUrl="ClienteResultadoBusqueda.asp?Caducado=TRUE&Agente=Si&txtNIF="+$_POST["txtNIF"];
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

// $Agentes_cmd is of type "ADODB.Command"
$Agentes_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Agentes_cmd_CommandText="SELECT Id, Nombre FROM Agentes ORDER BY Nombre ASC";
$Agentes_cmd_Prepared=true;


$Agentes=$Agentes_cmd_Execute=$Agentes_numRows=0;;
?>
<html>
<head>
<title>Insertar cliente nuevo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>
<body bgcolor="#FFFFFF" text="#000000" topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<p>Datos del nuevo abonado:</p>
<script language="JavaScript">
function actualiza() {
frmDatos.Precio.value=frmDatos.Precio.value.replace(',','.');
frmDatos.FechaPrimerAbono.value=frmDatos.txtFAbono.value;
return true;
}
</script>
<form name="frmDatos" method="POST" action="<? echo $MM_editAction;?>" onSubmit="actualiza();">
  <p>Nombre: 
    <input type="text" name="txtNombre">
    Primer apellido : 
    <input type="text" name="txtApellido1">
    Segundo apellido: 
    <input type="text" name="txtApellido2">
    <br>
    Agente: 
    <select name="Agente" id="Agente">
      <? 
while((!$Agentes->EOF))
{

?>
      <option value="<?   echo ($Agentes->Fields->$Item["Id"]->$Value);?>" <?   if ((!!isset("339500856")))
  {
    if ((($Agentes->Fields->$Item["Id"]->$Value)==("339500856")))
    {
      print "SELECTED";
      print "";
    } 
  } ?> ><?   echo ($Agentes->Fields->$Item["Nombre"]->$Value);?></option>
      <? 
  $Agentes->MoveNext();
} 
if (($Agentes->CursorType>0))
{

  $Agentes->MoveFirst;
}
  else
{

  $Agentes->Requery;
} 

?>
    </select>
    
    Colectivo: 
    <input name="Colectivo" type="text" id="Colectivo">
    
    Precio: 
    <input name="PRecio" type="text" id="PRecio" value="0" size="7" maxlength="15">
Descuento:
<input name="Descuento" type="text" id="Descuento" value="0" size="4" maxlength="3">
Modelo de contrato:
<select name="ModeloContrato" id="ModeloContrato">
  <? 
while((!$Contratos->EOF))
{

?><option value="<?   echo ($Contratos->Fields->$Item["Id"]->$Value);?>" <?   if ((!!isset("1")))
  {
    if ((($Contratos->Fields->$Item["Id"]->$Value)==("1")))
    {
      print "selected=\"selected\"";
      print "";
    } 
  } ?> ><?   echo ($Contratos->Fields->$Item["Nombre"]->$Value);?></option>
  <? 
  $Contratos->MoveNext();
} 
if (($Contratos->CursorType>0))
{

  $Contratos->MoveFirst;
}
  else
{

  $Contratos->Requery;
} 

?>
</select>
<br>
    NIF: 
    <input type="text" name="txtNIF">
    <br>
    Direccion: 
    <input type="text" name="txtDireccion">
    <br>
    Codigo postal: 
<script language="JavaScript">
function busca_CP() {
if (document.frmDatos.Localidad.value=="") {
	window.open('buscacp.asp?CP='+document.frmDatos.txtCP.value+'&form=frmDatos','CP','dependent,height=1,width=1,left=0,top=0');
	window.focus();
	}
}
</script>    <input type="text" name="txtCP" onChange="busca_CP();">
    Localidad: 
    <input name="Localidad" type="text" id="Localidad">
<script language="javascript">
function buscarCorreos(poblacion) {
a=window.open();
a.document.write('<form name="searchForm" method="post" action="www.correos.es/ss/Satellite/site/pagina-buscador_codigos_postales/sidioma=es_ES"><input type="hidden" name="buscar" value="no"><input type="hidden" name="city" size="25" class="FormObject" value="'+poblacion+'">');
a.document.write('<input TYPE="hidden" NAME="exact" value="1"></form>Buscando codigo postal....');
a.document.searchForm.submit();
}
</script>
    <a href="http://www.correos.es/contenido/13-MenuRec2/04-MenuRec24/1010_s-CodPostal.php" target="_blank"><img src="Imagenes/buscar.gif" alt="Buscar codigo postal" width="17" height="18" border="0"></a>
Provincia: 
<input name="Provincia" type="text" id="Provincia">
    <br>
    Fecha de Nacimiento: 
    <input type="text" name="txtFNac">
    <br>
    Fecha de alta: 
    <input name="txtFAbono" type="text" onChange="javascript:frmDatos.FechaPrimerAbono.value=frmDatos.txtFAbono.value;" value="<? echo time()();?>">
    <input name="FechaPrimerAbono" type="hidden" id="FechaPrimerAbono" value="<? echo time()();?>">
    <input name="AbonoCaducado" type="hidden" value="1">
    Telefono 1: 
    <input type="text" name="txtTlfno1">
    Telefono 2: 
    <input type="text" name="txtTlfno2">
    <br>
    Móvil: 
    <input type="text" name="txtTfno3">
    Email: 
    <input type="text" name="txtEmail">
    <br>
    CCC:
    <input name="CCC" type="text" id="CCC" size="50" maxlength="50">
    <br>
    Notas: 
    <textarea name="notas" cols="80" id="notas"></textarea>
    <br><script language="javascript" src="funciones.js"></script>
    <input name="Submit" type="submit" onClick="MM_validateForm('txtNombre','','R','PRecio','','RisNum');trim(document.frmDatos.txtNombre);trim(document.frmDatos.txtApellido1);trim(document.frmDatos.txtApellido2);return document.MM_returnValue;" value="Enviar">
  </p>
  <input type="hidden" name="MM_insert" value="frmDatos">
  <script language="JavaScript" type="text/JavaScript">
frmDatos.txtNombre.focus()
</script>
</form><iframe  id="myFrame"  frameborder="0"  vspace="0"  hspace="0"  marginwidth="0"  marginheight="0" width="1"  scrolling="no"  height="1"> </iframe>
</body>
</html>
<? 
$Contratos->Close();
$Contratos=null;

?>
<? 
$Agentes->Close();
$Agentes=null;

?>

