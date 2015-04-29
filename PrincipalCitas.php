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

mysql_select_db($database_connrumbo, $connrumbo);
$query_Recordset1 = "SELECT * ,DATE_FORMAT(alertas.Fecha, '%d-%m-%Y') fecha FROM alertas WHERE (Fecha <=now()) ORDER BY Fecha DESC";
$Recordset1 = mysql_query($query_Recordset1, $connrumbo) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<body style="background-color: transparent;" onLoad="window.parent.document.getElementById('citas').style.height=document.body.scrollHeight;"> 
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <!----<tr bgcolor="#CCCCCC"> 
    <td>Cita</td>
    <td>Fecha</td>
    <td>&nbsp;</td>
  </tr>--->
<script language="javascript">
function borranota(num) {
	if (confirm("¿Desea borrar la alerta?,presione ACEPTAR para borrar, en el caso contrario presione CANCELAR"))
		document.location.href="AgendaBorrar.php?Id="+num;
}
</script>

  <?php do { ?>
    <tr> 
      <td><?php echo $row_Recordset1['Alerta']; ?></td>
      <td width="10%"><?php echo $row_Recordset1['fecha']; ?></td>
      <td width="25" height=10><a href="#" onClick="javascript:borranota(<?php echo $row_Recordset1['Id']; ?>)"><img src="Imagenes/Borrar.gif" width="22" border="0"></a></td>
    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
  
</table>
<div align="right">
<h6>Entradas: <?php echo $totalRows_Recordset1;?></h6>
</div></body>
<?php
mysql_free_result($Recordset1);
?>
