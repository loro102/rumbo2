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
  session_register("CBeneficio_session");
  session_register("CModsiniestros_session");
  session_register("CIndemnizacion_session");
  session_register("CVerFacturas_session");
  session_register("CControlFases_session");
?>
<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 $CODEPAGE="1252";?>
<? 
if (!($_SESSION['MM_Username']=="joe"))
{
  header("Location: "."index.asp");
} ?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $MM_editCmd is of type "ADODB.Command"
$MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;
$MM_editCmd_CommandText="delete from Claves where Id=".$_GET["Id"];
$MM_editCmd_Execute=$MM_editCmd_ActiveConnection=$Close;;

header("Location: "."usuarios.asp");
?>


