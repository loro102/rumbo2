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
 ?>
<? 
// *** Restrict Access To Page: Grant or deny access to this page
$MM_authorizedUsers="admin";
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
<? require("Connections/connrumbo.php"); ?>
<? 

// $Usuarios is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Claves";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Usuarios_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Usuarios_numRows=$Usuarios_numRows+$Repeat1__numRows;
?>
<html>
<head>
<title>Listado de usuarios</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="100%" border="1">
  <? 
while((($Repeat1__numRows!=0) && (!($Usuarios==0))))
{

?>
  <tr> 
    <td><a href="Usuario.asp?Id=<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?></a></td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Usuarios=mysql_fetch_array($Usuarios_query);
  $Usuarios_BOF=0;

} 
?>
</table>
<p><a href="AbogadoInsertar.php">Insertar abogados</a></p>
</body>
</html>
<? 

$Usuarios=null;

?>

