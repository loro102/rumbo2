<?php require_once('Connections/connrumbo.php'); ?>
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

$MM_restrictGoTo = "index.php?error=2";
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
$tramita_finprocedimiento = "-1";
if (isset($_SESSION['CTramitadores'])) {
  $tramita_finprocedimiento = $_SESSION['CTramitadores'];
}
mysql_select_db($database_connrumbo, $connrumbo);
$query_finprocedimiento = sprintf("SELECT siniestro.Id, siniestro.`Fecha Siniestro`, abonados.Nombre, abonados.Apellido1, abonados.Apellido2, siniestro.Representado, siniestro.Nombre as RNombre ,DATEDIFF(date_add(siniestro.`Fecha Siniestro`,INTERVAL 6 MONTH),CURDATE()) AS falta,DATE_FORMAT(siniestro.`Fecha Siniestro`, '%%d-%%m-%%Y') fecha FROM siniestro INNER JOIN abonados on siniestro.Abonado=abonados.Id WHERE siniestro.`Fecha Siniestro` between date_add(CURDATE(),INTERVAL -6 MONTH) AND date_add(CURDATE(),INTERVAL -15 DAY) AND siniestro.PresentadaDenuncia=0 AND siniestro.Fase<=30 AND siniestro.Tramitador in %s ORDER BY siniestro.`Fecha Siniestro`", GetSQLValueString($tramita_finprocedimiento, "varchar"));
$finprocedimiento = mysql_query($query_finprocedimiento, $connrumbo) or die(mysql_error());
$row_finprocedimiento = mysql_fetch_assoc($finprocedimiento);
$totalRows_finprocedimiento = mysql_num_rows($finprocedimiento);
?>


<body style="background-color: transparent;" onLoad="window.parent.document.getElementById('finproc').style.height=document.body.scrollHeight;"> 
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC">
    <td bgcolor="#CCCCCC">Nombre</td>
    <td>Fecha de siniestro</td>
    <td>Dias que faltan</td>
  </tr>
 
  <?php do { ?>
    <tr>
      <td><a href="Siniestro.php?Id=<?php echo $row_finprocedimiento['Id']; ?>" target="_parent"> <?php echo $row_finprocedimiento['Apellido1']; ?> <?php echo $row_finprocedimiento['Apellido2']; ?>,<?php echo $row_finprocedimiento['Nombre']; ?> <?php if ($row_finprocedimiento['Representado']==1){ ?>
	  representando a <?php echo $row_finprocedimiento['RNombre']; ?><?php } ?></a></td>
      <td><?php echo $row_finprocedimiento['fecha']; ?></td>
      <td><?php echo $row_finprocedimiento['falta']; ?></td>
    </tr>
    <?php } while ($row_finprocedimiento = mysql_fetch_assoc($finprocedimiento)); ?>

</table>
<div align="right">
<h6>Entradas: <?php echo $totalRows_finprocedimiento;?></h6>
</div>
</body>
</html>
<?php
mysql_free_result($finprocedimiento);
?>
