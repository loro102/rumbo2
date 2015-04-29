<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
//set base = Server.CreateObject("ADODB.Recordset")
//base.ActiveConnection = MM_connrumbo_STRING
//base.Source = "ALTER TABLE Siniestro ADD COLUMN FechaTalon DATETIME"
//base.CursorType = 0
//base.CursorLocation = 2
//base.LockType = 3
//base.Open()

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

mysql_query("CREATE TABLE Recibo (id AUTOINCREMENT PRIMARY KEY, cliente INTEGER, fechaemision DATE, fechacobro DATE, cuantia FLOAT, concepto CHAR(200), notas MEMO)",$base);
mysql_close($base);
header("Location: "."Principal.asp");
?>

