<?php require_once('Connections/connrumbo.php'); ?>

<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php?salir=1";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>

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

<html>
<head>
<title>Principal</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="pragma" content="no-cache">
<style type="text/css">
<!--

.Estilo1 {font-size: xx-small}

-->
</style>
</head>
<body bgcolor="#FFFFFF" background="Imagenes/fondo1.jpg" bgproperties="fixed" text="#000000" topmargin="30">

<script language="JavaScript" src="menu.js"></script>

<?php if ($_SESSION['MM_UserGroup']=="admin")
{
	echo $_SESSION['CTramitadores'];
	echo $_SESSION['MM_Username'];
 ?>
<p><a href="listadoUsuarios.php">Administracion usuarios</a></p>
<?php } ?>
<table width="100%" border="0">
  <tr>
    <td><form name="form1" method="post" action="ClienteResultadoBusqueda2.php">
  <p> Buscar cliente:<br>
    <input name="txtNombre" type="text" id="txtNombre">
    <input type="submit" name="Submit" value="Buscar">
  </p>
</form>  <script language="JavaScript">form1.txtNombre.focus();
  </script>
</td>
    <td><form name="form2" method="post" action="SiniestroResultadoBusqueda.php">
        <p> Buscar siniestro:<br>
    Nº de Procedimiento,Diligencias Previas o Matricula:
    <input name="diligencias" type="text" id="diligencias">
    <input type="submit" name="Submit" value="Buscar">
  </p>
</form></td>
  </tr>
</table>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" bgcolor="#CCCCCC">
      <tr>
        <td>Citas</td>
        <td><div align="right"><a href="#" onClick="document.getElementById('citas').style.display='none'"><img src="Imagenes/minimize.gif" width="14" height="14" alt="Contraer"></a><a href="PrincipalCitas.php" target="citas" onClick="document.getElementById('citas').style.display='block'"><img src="Imagenes/maximize.gif" width="14" height="14" alt="Expandir"></a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><iframe id="citas" name="citas" src="cargando.htm" style="display:none;width:100%;height:300px" AllowTransparency frameborder="0" marginwidth="0"></iframe></td>
  </tr>
</table><br>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" bgcolor="#CCCCCC">
      <tr>
        <td>Expedientes con m&aacute;s de 20 d&iacute;as sin Revisar</td>
        <td><div align="right"><a href="#" onClick="document.getElementById('SinVisita').style.display='none'"><img src="Imagenes/minimize.gif" width="14" height="14" alt="Contraer"></a><a href="PrincipalSinVisita.php" target="SinVisita" onClick="document.getElementById('SinVisita').style.display='block'"><img src="Imagenes/maximize.gif" width="14" height="14" alt="Expandir"></a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><iframe id="SinVisita" name="SinVisita" src="cargando.htm" style="display:none;width:100%;height:300px" AllowTransparency frameborder="0" marginwidth="0" scrolling="no"></iframe></td>
  </tr>
</table><br><table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" bgcolor="#CCCCCC">
      <tr>
        <td>Fines de procedimiento penal</td>
        <td><div align="right"><a href="#" onClick="document.getElementById('finproc').style.display='none'"><img src="Imagenes/minimize.gif" width="14" height="14" alt="Contraer"></a><a href="PrincipalFinProc.php" target="finproc" onClick="document.getElementById('finproc').style.display='block'"><img src="Imagenes/maximize.gif" width="14" height="14" alt="Expandir"></a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><iframe id="finproc" name="finproc" src="cargando.htm" style="display:none;width:100%;height:300px" AllowTransparency frameborder="0" marginwidth="0" scrolling="no"></iframe></td>
  </tr>
</table><br><table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" bgcolor="#CCCCCC">
      <tr>
        <td>Asuntos con m&aacute;s de 1 mes Pendientes de Asistencia Juridica</td>
        <td><div align="right"><a href="#" onClick="document.getElementById('DosmesesAJ').style.display='none'"><img src="Imagenes/minimize.gif" width="14" height="14" alt="Contraer"></a><a href="PrincipalDosmesesAJ.php" target="DosmesesAJ" onClick="document.getElementById('DosmesesAJ').style.display='block'"><img src="Imagenes/maximize.gif" width="14" height="14" alt="Expandir"></a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><iframe id="DosmesesAJ" name="DosmesesAJ" src="cargando.htm" style="display:none;width:100%;height:300px" AllowTransparency frameborder="0" marginwidth="0" scrolling="no"></iframe></td>
  </tr>
</table><br>
<?php if (($_SESSION['CFacturas']==true))
{
?><table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" bgcolor="#CCCCCC">
      <tr>
        <td>Expedientes que llevan m&aacute;s de quince d&iacute;as Pendientes de Facturas</td>
        <td><div align="right"><a href="#" onClick="document.getElementById('PteFras').style.display='none'"><img src="Imagenes/minimize.gif" width="14" height="14" alt="Contraer"></a><a href="PrincipalPteFras.php" target="PteFras" onClick="document.getElementById('PteFras').style.display='block'"><img src="Imagenes/maximize.gif" width="14" height="14" alt="Expandir"></a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><iframe id="PteFras" name="PteFras" src="cargando.htm" style="display:none;width:100%;height:300px" AllowTransparency frameborder="0" marginwidth="0" scrolling="no"></iframe></td>
  </tr>
</table><br>
<?php } ?>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" bgcolor="#CCCCCC">
      <tr>
        <td>M&aacute;s de 20 d&iacute;as con Alta Forense y SIN Informe</td>
        <td><div align="right"><a href="#" onClick="document.getElementById('Forense').style.display='none'"><img src="Imagenes/minimize.gif" width="14" height="14" alt="Contraer"></a><a href="PrincipalForense.php" target="Forense" onClick="document.getElementById('Forense').style.display='block'"><img src="Imagenes/maximize.gif" width="14" height="14" alt="Expandir"></a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><iframe id="Forense" name="Forense" src="cargando.htm" style="display:none;width:100%;height:300px" AllowTransparency frameborder="0" marginwidth="0" scrolling="no"></iframe></td>
  </tr>
</table><br>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" bgcolor="#CCCCCC">
      <tr>
        <td>Expedientes que ten&iacute;an que haber llegado el Tal&oacute;n</td>
        <td><div align="right"><a href="#" onClick="document.getElementById('Talones').style.display='none'"><img src="Imagenes/minimize.gif" width="14" height="14" alt="Contraer"></a><a href="PrincipalTalones.php" target="Talones" onClick="document.getElementById('Talones').style.display='block'"><img src="Imagenes/maximize.gif" width="14" height="14" alt="Expandir"></a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><iframe id="Talones" name="Talones" src="cargando.htm" style="display:none;width:100%;height:300px" AllowTransparency frameborder="0" marginwidth="0" scrolling="no"></iframe></td>
  </tr>
</table><br>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" bgcolor="#CCCCCC">
      <tr>
        <td>Expedientes Pendientes de Cobro Empresa</td>
        <td><div align="right"><a href="#" onClick="document.getElementById('PtesPago').style.display='none'"><img src="Imagenes/minimize.gif" width="14" height="14" alt="Contraer"></a><a href="PrincipalPtesPago.php" target="PtesPago" onClick="document.getElementById('PtesPago').style.display='block'"><img src="Imagenes/maximize.gif" width="14" height="14" alt="Expandir"></a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><iframe id="PtesPago" name="PtesPago" src="cargando.htm" style="display:none;width:100%;height:300px" AllowTransparency frameborder="0" marginwidth="0" scrolling="no"></iframe></td>
  </tr>
</table><br>
<?php if ($_SESSION['CFacturas']==true)
{
?>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" bgcolor="#CCCCCC">
      <tr>
        <td>Expedientes con Facturas Pendientes de Pago</td>
        <td><div align="right"><a href="#" onClick="document.getElementById('Facturas').style.display='none'"><img src="Imagenes/minimize.gif" width="14" height="14" alt="Contraer"></a><a href="PrincipalFacturas.php" target="Facturas" onClick="document.getElementById('Facturas').style.display='block'"><img src="Imagenes/maximize.gif" width="14" height="14" alt="Expandir"></a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><iframe id="Facturas" name="Facturas" src="cargando.htm" style="display:none;width:100%;height:300px" AllowTransparency frameborder="0" marginwidth="0" scrolling="no"></iframe></td>
  </tr>
</table><br><?php } ?>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" bgcolor="#CCCCCC">
      <tr>
        <td>Clientes a los que le caduca en carnet de conducir en 30 d&iacute;as</td>
        <td><div align="right"><a href="#" onClick="document.getElementById('CadCarnet').style.display='none'"><img src="Imagenes/minimize.gif" width="14" height="14" alt="Contraer"></a><a href="PrincipalCadCarnet.php" target="CadCarnet" onClick="document.getElementById('CadCarnet').style.display='block'"><img src="Imagenes/maximize.gif" width="14" height="14" alt="Expandir"></a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><iframe id="CadCarnet" name="CadCarnet" src="cargando.htm" style="display:none;width:100%;height:300px" AllowTransparency frameborder="0" marginwidth="0" scrolling="no"></iframe></td>
  </tr>
</table>
<a href="<?php echo $logoutAction ?>">Desconectar</a>


</body>
</html>
