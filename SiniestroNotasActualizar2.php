<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
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
mysql_query("INSERT INTO NotasSiniestro (siniestroid,usuario,fecha,notas) VALUES (".$_POST["sid"].",'".$_POST["usuario"]."',now(),'".$_POST["Notas2"]."')",$base);
mysql_close($base);

// append the query string to the redirect URL
$MM_editRedirectUrl="Siniestro.asp";
if (($_GET!=""))
{

  if (((strpos($MM_editRedirectUrl,"?",1) ? strpos($MM_editRedirectUrl,"?",1)+1 : 0)==0))
  {

    $MM_editRedirectUrl=$MM_editRedirectUrl."?".$_GET;
  }
    else
  {

    $MM_editRedirectUrl=$MM_editRedirectUrl."&".$_GET;
  } 

} 

header("Location: ".$MM_editRedirectUrl);


?>
<? header("Location: "."index.asp");?>
