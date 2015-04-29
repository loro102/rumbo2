i
<?php require("Connections/connrumbo.php"); ?>
<?php require_once('Connections/connrumbo.php'); ?>
<?php require_once('funciones.php'); ?>




<?php
echo ramdomid(11);
?>

<?php
$randomid=ramdomid(11);
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

//if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "frmClave")) {
  //$insertSQL = sprintf("INSERT INTO log (Texto, Usuario) VALUES (%s, %s)",
  //                     GetSQLValueString($_POST['txtClave'], "text"),
  //                     GetSQLValueString($_POST['txtNombre'], "text"));
	//$insertSQL = sprintf("INSERT INTO log (Texto, Usuario,IP,Identificativo) VALUES (%s, %s, %s, %s)",
		//GetSQLValueString('Conecta', "text"),
		//GetSQLValueString($_POST['txtNombre'] , "text"),
		//GetSQLValueString($_SERVER["REMOTE_ADDR"] , "text"),
		//GetSQLValueString(ramdomid(11), "text"));
		
 // mysql_select_db($database_connrumbo, $connrumbo);
 // $Result1 = mysql_query($insertSQL, $connrumbo) or die(mysql_error());
//}
?>
<?php
session_start();
	$_SESSION["CuentaVerExpedientes_session"]=0;
  	$_SESSION["Modaseguradora_session"]=0;
  	$_SESSION["CTramitadores_session"]=0;
  	$_SESSION["CFacturas_session"]=0;
  	$_SESSION["Siniestro_session"]=0;
  	$_SESSION["CBeneficio_session"]=0;
  	$_SESSION["CModsiniestros_session"]=0;
  	$_SESSION["CIndemnizacion_session"]=0;
  	$_SESSION["CVerFacturas_session"]=0;
  	$_SESSION["CControlFases_session"]=0;
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
	
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['txtNombre'])) {
  $loginUsername=$_POST['txtNombre'];
  $password=$_POST['txtClave'];
  $MM_fldUserAuthorization = "Nivel";
  $MM_redirectLoginSuccess = "/rumbo2/Principal.php";
  $MM_redirectLoginFailed = "/rumbo2/index.php?error=1";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_connrumbo, $connrumbo);
  	
  $LoginRS__query=sprintf("SELECT * FROM claves WHERE Nombre=%s AND Clave=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $connrumbo) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'Nivel');
	$loginStrtramitador = mysql_result($LoginRS,0,'tramitadores');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	
	$_SESSION['CTramitadores'] = $loginStrtramitador;
	$_SESSION['CBeneficio'] = mysql_result($LoginRS,0,'beneficio');
	$_SESSION['CFacturas'] = mysql_result($LoginRS,0,'facturas');
	$_SESSION['CModsiniestros'] = mysql_result($LoginRS,0,'modsiniestro');
	$_SESSION['CIndemnizacion'] = mysql_result($LoginRS,0,'Indemnizacion');
	$_SESSION['CVerFacturas'] = mysql_result($LoginRS,0,'VerFacturas');
	$_SESSION['CControlFases'] = mysql_result($LoginRS,0,'ControlFases');
	$_SESSION['Modaseguradora'] = mysql_result($LoginRS,0,'Modaseguradora');

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
	if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "frmClave")) {
  //$insertSQL = sprintf("INSERT INTO log (Texto, Usuario) VALUES (%s, %s)",
  //                     GetSQLValueString($_POST['txtClave'], "text"),
  //                     GetSQLValueString($_POST['txtNombre'], "text"));
	$insertSQL = sprintf("INSERT INTO log (Texto, Usuario,IP,Identificativo) VALUES (%s, %s, %s, %s)",
		GetSQLValueString('Conecta bien', "text"),
		GetSQLValueString($_POST['txtNombre'] , "text"),
		GetSQLValueString($_SERVER["REMOTE_ADDR"] , "text"),
		GetSQLValueString(ramdomid(11), "text"));
		
  mysql_select_db($database_connrumbo, $connrumbo);
  $Result1 = mysql_query($insertSQL, $connrumbo) or die(mysql_error());
}
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
	  if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "frmClave")) {
  //$insertSQL = sprintf("INSERT INTO log (Texto, Usuario) VALUES (%s, %s)",
  //                     GetSQLValueString($_POST['txtClave'], "text"),
  //                     GetSQLValueString($_POST['txtNombre'], "text"));
	$insertSQL = sprintf("INSERT INTO log (Texto, Usuario,IP,Identificativo) VALUES (%s, %s, %s, %s)",
		GetSQLValueString('Conecta mal', "text"),
		GetSQLValueString($_POST['txtNombre'] , "text"),
		GetSQLValueString($_SERVER["REMOTE_ADDR"] , "text"),
		GetSQLValueString(ramdomid(11), "text"));
		
  mysql_select_db($database_connrumbo, $connrumbo);
  $Result1 = mysql_query($insertSQL, $connrumbo) or die(mysql_error());
}
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>


<html>
<head>
<title>Rumbo Juridico</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body bgcolor="#00CC00" text="#FFFFFF">
<table width="100%" border="0">
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td align="center"><img src="Imagenes/logo.jpg" width="400"></td>
    <td rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><p><font color="#FF0000"><b> 
  <?php 
	$fallo=isset($_GET['error']);
	if ($fallo=="1")
	{?>
  <font color="#0000FF">  Error en identificacion. Intentelo de nuevo.  </font>
  <?php }
  ?>
  <?php 
	$fallo=isset($_GET['error']);
	if ($fallo=="2")
	{?>
  <font color="#0000FF">  Ha intentado entrar en una zona restringida,por favor identifiquese.  </font>
  <?php }
  ?>
   <?php 
	$salir=isset($_GET['salir']);
	if ($salir=="1")
	{?>
  <font color="#0000FF">  Ha Cerrado la sesion correctamente.  </font>
  <?php }
  ?>

    </b></font></p>
      <p>&nbsp;</p>
      <form name="frmClave" method="POST" action="<?php echo $editFormAction; ?>">
      <p>Nombre:
          <input type="text" name="txtNombre">
      </p>
      <p>Clave:
          <input type="password" name="txtClave">
      </p>
      <p>
        <input type="submit" name="Submit" value="Entrar">
        <script language="JavaScript" type="text/JavaScript">
frmClave.txtNombre.focus()
    </script>
        <br>
        <!---<a href="../rumbo2/index.php">Programa antiguo</a><br>-->
        <font size="-7"><a href="cambiaclave.php">Cambiar contrase&ntilde;a</a></font> </p>
      <input type="hidden" name="MM_insert" value="frmClave">
      </form></td>
  </tr>
</table>
</body>
</html>
