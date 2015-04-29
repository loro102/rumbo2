<?php require_once('Connections/connrumbo.php'); ?>
<?php 
require_once('Connections/connrumbo.php');
require_once('funciones.php') ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "index.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$buscar_busca = "-1";
if (isset($_POST['diligencias'])) {
  $buscar_busca = $_POST['diligencias'];
}
mysql_select_db($database_connrumbo, $connrumbo);
$query_busca = sprintf("SELECT abonados.Nombre, abonados.Apellido1, abonados.Apellido2, siniestro.`Fecha Siniestro` AS FSini, siniestro.Matricula, siniestro.Id, siniestro.DiligenciasPrevias, siniestro.NroProcedimiento FROM  siniestro INNER JOIN abonados ON siniestro.Abonado=abonados.Id WHERE siniestro.DiligenciasPrevias like %s or siniestro.Matricula like %s  AND siniestro.NroProcedimiento like %s ORDER BY siniestro.`Fecha Siniestro` DESC", GetSQLValueString("%" . $buscar_busca . "%", "text"),GetSQLValueString("%" . $buscar_busca . "%", "text"),GetSQLValueString("%" . $buscar_busca . "%", "text"));
$busca = mysql_query($query_busca, $connrumbo) or die(mysql_error());
$row_busca = mysql_fetch_assoc($busca);
$totalRows_busca = mysql_num_rows($busca);
?>
<html>
<head>
<title>Resultados de busqueda de cliente</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" text="#000000" topmargin="30" bgproperties="fixed">
<script language="JavaScript" src="menu.js"></script>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC"> 
    <td width="52%">Abonado</td>
    <td width="18%">Fecha de siniestro</td>
    <td width="30%">Diligencias Previas</td>
  </tr> 

  <?php do { ?>
    <tr>
      <td height="23"><a href="Siniestro.php"><?php echo $row_busca['Apellido1']; ?> <?php echo $row_busca['Apellido2']; ?>,<?php echo $row_busca['Nombre']; ?></a></td>
      <td><?php echo $row_busca['FSini']; ?></td>
      <td><?php echo $row_busca['DiligenciasPrevias']; ?></td>
    </tr>
    <?php } while ($row_busca = mysql_fetch_assoc($busca)); ?>


</table>
</body>
</html>
<?php
mysql_free_result($busca);
?>
