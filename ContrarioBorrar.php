<?
  session_start();
  session_register("paginaant_session");
  session_register("MM_Username_session");
  session_register("PAnt_session");
  session_register("MM_UserAuthorization_session");
  session_register("CuentaVerExpedientes_session");
  session_register("Modaseguradora_session");
  session_register("CTramitadores_session");
  session_register("CFacturas_session");
  session_register("Siniestro_session");
?>
<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
// *** Edit Operations: declare variables




$MM_editAction=($_SERVER["SCRIPT_NAME"]);
if (($_GET!=""))
{

  $MM_editAction=$MM_editAction."?".$_GET;
} 


// boolean to abort record edit
$MM_abortEdit=false;

// query string to execute
$MM_editQuery="";
?>
<? 
// *** Delete Record: declare variables

if (((${"MM_delete"})=="form1" && (${"MM_recordId"})!=""))
{


  $MM_editConnection=$MM_connrumbo_STRING;
  $MM_editTable="Contrarios";
  $MM_editColumn="Id";
  $MM_recordId=""+$_POST["MM_recordId"]+"";
  $MM_editRedirectUrl="Siniestro.asp?Id=".$_SESSION['Siniestro'];

} 

?>
<? 
// *** Delete Record: construct a sql delete statement and execute it

if (((${"MM_delete"})!="" && (${"MM_recordId"})!=""))
{


// create the sql delete statement
  $MM_editQuery="delete from ".$MM_editTable." where ".$MM_editColumn." = ".$MM_recordId;

  if ((!$MM_abortEdit))
  {

// execute the delete
    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_editConnection;    
    $MM_editCmd_CommandText=$MM_editQuery;    
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

    if (($MM_editRedirectUrl!=""))
    {

      header("Location: ".$MM_editRedirectUrl);
    } 

  } 


} 

?>
<? 
$Contrarios__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Contrarios__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Contrarios is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Contrarios WHERE Id = "+str_replace("'","''",$Contrarios__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Contrarios_numRows=0;
?>
<html>
<head>
<title>Borrar Contrario</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
</head>

<body topmargin="30">
<strong><em>
  
<script language="JavaScript" src="menu.js"></script>
Borrar Contrario:</em></strong> 
<table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
  <tr> 
    <td colspan="4"><strong>Nombre: <? echo (->$Item["Nombre"]->$Value);?>&nbsp;<? echo (->$Item["Apellido1"]->$Value);?>&nbsp;<? echo (->$Item["Apellido2"]->$Value);?></strong></td>
  </tr>
  <tr> 
    <td colspan="4">Direccion:<br>
      &nbsp;&nbsp;&nbsp;&nbsp;<? echo (->$Item["Direccion"]->$Value);?><br>
      &nbsp;&nbsp;&nbsp;&nbsp;<? echo (->$Item["Codigo Postal"]->$Value);?>&nbsp;<? echo (->$Item["Localidad"]->$Value);?>&nbsp;(&nbsp;<? echo (->$Item["Provincia"]->$Value);?>&nbsp;)</td>
  </tr>
  <tr> 
    <td>Telefono1:<? echo (->$Item["Telefono 1"]->$Value);?></td>
    <td>Telefono2:<? echo (->$Item["Telefono 2"]->$Value);?></td>
    <td>Telefono3:<? echo (->$Item["Telefono 3"]->$Value);?></td>
    <td>Email: <? echo (->$Item["Email"]->$Value);?></td>
  </tr>
  <tr> 
    <td colspan="2">Fecha de nacimiento: <? echo (->$Item["FechaNacimiento"]->$Value);?></td>
    <td colspan="2">NIF: <? echo (->$Item["NIF"]->$Value);?></td>
  </tr>
  <tr> 
    <td colspan="2">Vehiculo:<? echo (->$Item["Vehiculo"]->$Value);?></td>
    <td colspan="2">Conductor: <? echo (->$Item["Conductor"]->$Value);?></td>
  </tr>
  <tr> 
    <td colspan="2">Nro Poliza:<? echo (->$Item["Nro poliza"]->$Value);?></td>
    <td colspan="2">Ref Expediente:<? echo (->$Item["Ref expediente"]->$Value);?></td>
  </tr>
  <tr> 
    <td colspan="2">Matricula:<? echo (->$Item["Matricula"]->$Value);?></td>
    <td colspan="2">Compa&ntilde;ia:<? echo (->$Item["Compañia"]->$Value);?></td>
  </tr>
  <tr> 
    <td colspan="2">Propietario:<? echo (->$Item["Propietario"]->$Value);?></td>
    <td colspan="2">Tramitador: <? echo (->$Item["tramitador cia"]->$Value);?></td>
  </tr>
</table>
<form name="form1" method="POST" action="<? echo $MM_editAction;?>">
  <table width="100%" border="0">
    <tr align="center"> 
      <td> 
        <input type="submit" name="Submit" value="Borrar"> <input type="hidden" name="MM_delete" value="form1"> 
        <input type="hidden" name="MM_recordId" value="<? echo ->$Item["Id"]->$Value;?>"> 
      </td>
      <td>
<input name="Submit2" type="submit" onClick="MM_goToURL('parent','Siniestro.asp?Id=<? echo (->$Item["Siniestro"]->$Value);?>');return document.MM_returnValue" value="Cancelar"></td>
    </tr>
  </table>
</form>
</body>
</html>
<? 

$Contrarios=null;

?>

