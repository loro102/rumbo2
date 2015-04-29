<?
  session_start();
  session_register("paginaant_session");
  session_register("MM_Username_session");
?>
<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? 
if (!($_SESSION['MM_Username']=="joe"))
{
  header("Location: "."index.asp");
} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<? require("Connections/connrumbo.php"); ?>
<? 
if ($_GET["Ok"]=="1")
{


  // $base is of type "ADODB.Connection"
  $a2p_connstr=$MM_connrumbo_STRING;
  $a2p_uid=strstr($a2p_connstr,'uid');
  $a2p_uid=substr($d,strpos($d,'=')+1,strpos($d,';')-strpos($d,'=')-1);
  $a2p_pwd=strstr($a2p_connstr,'pwd');
  $a2p_pwd=substr($d,strpos($d,'=')+1,strpos($d,';')-strpos($d,'=')-1);
  $a2p_database=strstr($a2p_connstr,'dsn');
  $a2p_database=substr($d,strpos($d,'=')+1,strpos($d,';')-strpos($d,'=')-1);
  $base=mysql_connect("localhost",$a2p_uid,$a2p_pwd);
  mysql_select_db($a2p_database,$base);

  mysql_query($_POST["Codigo"],$base);
  mysql_close($base);
} ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Actualizador</title>
<style type="text/css">
<!--
.Estilo1 {color: #FF0000}
-->
</style>
</head>

<body>
<? if ($_GET["Ok"]=="1")
{
?>
<p class="Estilo1">Actualizado</p>
<? } ?>
<form id="form1" name="form1" method="post" action="actualizador.php?Ok=1">
  <p>Codigo:
    <input name="Codigo" type="text" id="Codigo" size="80" maxlength="200" />
    <input type="submit" name="Submit" value="Enviar" />
  </p>
</form>
<p>&nbsp; </p>
</body>
</html>

