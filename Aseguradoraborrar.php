<?
  session_start();
  session_register("paginaant_session");
  session_register("MM_Username_session");
  session_register("PAnt_session");
  session_register("MM_UserAuthorization_session");
  session_register("CuentaVerExpedientes_session");
  session_register("Modaseguradora_session");
?>
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
// *** Delete Record: construct a sql delete statement and execute it

if (((${"MM_delete"})=="form2" && (${"MM_recordId"})!=""))
{


  if ((!$MM_abortEdit))
  {

// execute the delete
    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="DELETE FROM Aseguradoras WHERE Id = ?";    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["MM_recordId"]// adDouble
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
$aseguradora__MMColParam="1";
if (($_GET["id"]!=""))
{

  $aseguradora__MMColParam=$_GET["id"];
} 

?>
<? 

// $aseguradora_cmd is of type "ADODB.Command"
$aseguradora_cmd_ActiveConnection=$MM_connrumbo_STRING;
$aseguradora_cmd_CommandText="SELECT * FROM Aseguradoras WHERE Id = ?";
$aseguradora_cmd_Prepared=true;
$aseguradora_cmd_Parameters=$Append$aseguradora_cmd_CreateParameter="param1"$aseguradora__MMColParam); // adDouble

$aseguradora=$aseguradora_cmd_Execute=$aseguradora_numRows=0;;
?>
<? if (($_SESSION['MM_Username']==""))
{
  header("Location: "."index.asp");
} ?>

<html>
<head>
<title>Aseguradoras</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="pragma" content="no-cache">
<script language="JavaScript" src="menu.js"></script>

<!--Mesaje de confirmacion -->

</head>
<body >
<h1>Borrar Aseguradora</h1>
<p>&nbsp;</p>
<form method="POST" action="<? echo $MM_editAction;?>" name="form2">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Aseguradora:</td>
      <td><input type="text" name="aseguradora2" value="<? echo ($aseguradora->Fields->$Item["aseguradora"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Telefono:</td>
      <td><input type="text" name="telefono" value="<? echo ($aseguradora->Fields->$Item["telefono"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fax:</td>
      <td><input type="text" name="fax" value="<? echo ($aseguradora->Fields->$Item["fax"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Email:</td>
      <td><input type="email" name="email" value="<? echo ($aseguradora->Fields->$Item["email"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Direcci&oacute;n:</td>
      <td><input type="text" name="direccion" value="<? echo ($aseguradora->Fields->$Item["direccion"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">C&oacute;digo Postal:</td>
      <td><input type="text" name="cp" value="<? echo ($aseguradora->Fields->$Item["cp"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Localidad:</td>
      <td><input type="text" name="localidad" value="<? echo ($aseguradora->Fields->$Item["localidad"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Provincia:</td>
      <td><input type="text" name="provincia" value="<? echo ($aseguradora->Fields->$Item["provincia"]->$Value);?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input name="" type="submit" onclick="return confirm('¿Esta seguro que desea borrar el registro ?')" value="Borrar registro"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
  <input type="hidden" name="MM_delete" value="form2">
  <input type="hidden" name="MM_recordId" value="<? echo $aseguradora->Fields->$Item["Id"]->$Value;?>">
</form>
<p>&nbsp;</p>
</body>
</html>
<? 
$aseguradora->Close();
$aseguradora=null;

?>

