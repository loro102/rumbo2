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
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
<? 
// *** Restrict Access To Page: Grant or deny access to this page
$MM_authorizedUsers="direccion,admin,tramitador";
$MM_authFailedURL="Principal.asp";
$MM_grantAccess=false;
if ($_SESSION['MM_Username']!="")
{

  if ((false || ($_SESSION['MM_UserAuthorization'])=="") || 
     ((strpos($MM_authorizedUsers,$_SESSION['MM_UserAuthorization'],1) ? strpos($MM_authorizedUsers,$_SESSION['MM_UserAuthorization'],1)+1 : 0))
  {

    $MM_grantAccess=true;
  } 

} 

if (!$MM_grantAccess)
{

  $MM_qsChar="?";
  if (((strpos($MM_authFailedURL,"?",1) ? strpos($MM_authFailedURL,"?",1)+1 : 0))
  {
    $MM_qsChar="&";
  } 
  $MM_referrer=$_SERVER["PHP_SELF"];
  if ((strlen($_GET[])>0))
  {
    $MM_referrer=$MM_referrer."?".$_GET[];
  } 
  $MM_authFailedURL=$MM_authFailedURL.$MM_qsChar."accessdenied=".rawurlencode($MM_referrer);
  header("Location: ".$MM_authFailedURL);
} 

?>
<? 

// $Aseguradora_cmd is of type "ADODB.Command"
$Aseguradora_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Aseguradora_cmd_CommandText="SELECT * FROM Aseguradoras ORDER BY aseguradora ASC";
$Aseguradora_cmd_Prepared=true;

$Aseguradora=$Aseguradora_cmd_Execute=$Aseguradora_numRows=0;;
?>
<html>
<head>
<title>Listado por compa&ntilde;ia contraria</title>
</head>
<script language="JavaScript" src="menu.js"></script>
<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" bgproperties="fixed" text="#000000" topmargin="30">
<form action="ListadoCiaContrariaSalida.php" method="post" name="form1" id="form1">
  Compa&ntilde;ia a listar: 
  
  <label for="Cia"></label>
  <select name="Cia" id="Cia">
    <option value="">Todas</option>
    <? 
while((!$Aseguradora->EOF))
{

?>
    <option value="<?   echo ($Aseguradora->Fields->$Item["aseguradora"]->$Value);?>"><?   echo ($Aseguradora->Fields->$Item["aseguradora"]->$Value);?></option>
    <? 
  $Aseguradora->MoveNext();
} 
if (($Aseguradora->CursorType>0))
{

  $Aseguradora->MoveFirst;
}
  else
{

  $Aseguradora->Requery;
} 

?>
  </select>
  <input type="submit" name="Submit" value="Enviar">
</form>

</body>
</html>
<? 
$Aseguradora->Close();
$Aseguradora=null;

?>

