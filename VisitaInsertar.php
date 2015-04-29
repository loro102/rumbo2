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
//response.write("INSERT INTO VisitasAgentes (Fecha,Comercial,Comentario,AgenteId) VALUES ("+Request.Form("Fecha")+","+Request.Form("Comercial")+","+Request.Form("Nota")+","+Request.Form("AgenteId")+")")
mysql_query("INSERT INTO VisitasAgentes (Fecha,Comercial,Comentario,AgenteId) VALUES (#"+$_POST["Fecha"]+"#,'"+$_POST["Comercial"]+"','"+$_POST["Nota"]+"',"+$_POST["AgenteId"]+")",$base);
mysql_close($base);
header("Location: "."AgenteModificar.asp?Id="+$_POST["AgenteId"]);
?>


