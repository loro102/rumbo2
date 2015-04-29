<?php require_once('Connections/connrumbo.php'); ?>
<?php require_once('Connections/connrumbo.php'); 
 require_once('funciones.php'); ?>

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
header("Content-Type: text/html;charset=utf-8");
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

$colname_clientes = "-1";
if (isset($_POST['txtNombre'])) {
  $colname_clientes = $_POST['txtNombre'];
}
mysql_select_db($database_connrumbo, $connrumbo);
$query_clientes = sprintf("SELECT * FROM abonados WHERE concat_ws(' ',Nombre,Apellido1,Apellido2) like %s  OR NIF like %s ORDER BY Apellido1 ASC", GetSQLValueString("%" . $colname_clientes . "%", "text"),GetSQLValueString("%" . $colname_clientes . "%", "text"));
$clientes = mysql_query($query_clientes, $connrumbo) or die(mysql_error());
$row_clientes = mysql_fetch_assoc($clientes);
$totalRows_clientes = mysql_num_rows($clientes);

$colname_siniestros = "-1";
if (isset($_POST['txtNombre'])) {
  $colname_siniestros = $_POST['txtNombre'];
}
$var2_siniestros = 0;
if (isset($_SESSION['CTramitadores'])) {
  $var2_siniestros = $_SESSION['CTramitadores'];
}

mysql_select_db($database_connrumbo, $connrumbo);
$query_siniestros = sprintf("SELECT * FROM siniestro WHERE Representado=True AND Nombre LIKE %s and Tramitador IN %s", GetSQLValueString("%" . $colname_siniestros . "%", "text"),GetSQLValueString($var2_siniestros, "varchar"));
$siniestros = mysql_query($query_siniestros, $connrumbo) or die(mysql_error());
$row_siniestros = mysql_fetch_assoc($siniestros);
$totalRows_siniestros = mysql_num_rows($siniestros);
?>

<html>
<head>
<title>Resultados de busqueda de cliente</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" text="#000000" topmargin="30" bgproperties="fixed">
<script language="JavaScript" src="menu.js"></script>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC"> 
    <td>Nombre</td>
    <td>NIF</td>
  </tr>
   <?php do { ?>
    <tr <?   if (($Item["ModeloContrato"]==2))
  {
    print "bgcolor=\"#FF0000\"";
  } ?> 
      <td><a href="Cliente.php"><?php echo $row_clientes['Apellido1']; ?> <?php echo $row_clientes['Apellido2']; ?>,<?php echo $row_clientes['Nombre']; ?></a></td>
      <td><?php echo $row_clientes['NIF']; ?></td>
    </tr>
    <?php } while ($row_clientes = mysql_fetch_assoc($clientes)); ?>

</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td width="300"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr align="right" valign="top">
          <td><div align="right">
            <h6>Leyenda:</h6>
          </div>
          </td>
          <td><table width="10" height="10" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FF0000">
              <tr>
                <td></td>
              </tr>
          </table></td><td align="left"><h6>Abono caducado</h6></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<p>Siniestros enlazados:<br>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC">
    <td width="64%">Nombre</td>
    <td width="36%">NIF<
     
      </td>    
  </tr>
  <?php do { ?>
  <tr> 
    <td><a href="Siniestro.php"><?php echo $row_siniestros['Nombre']; ?></a></td>
    <td><?php echo $row_siniestros['DNIRepresentado']; ?></td><?php } while ($row_siniestros = mysql_fetch_assoc($siniestros)); ?>
  </tr>


</table></p>
</body>
</html>
<?php
mysql_free_result($clientes);

mysql_free_result($siniestros);
?>
