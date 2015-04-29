<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:45 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $MM_editCmd is of type "ADODB.Command"
$MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;
$MM_editCmd_CommandText="delete from DocClientes where ID=".$_GET["Id"];
$MM_editCmd_Execute=$MM_editCmd_ActiveConnection=$Close;;

header("Location: ".$_SERVER["HTTP_REFERER"]);
?>
