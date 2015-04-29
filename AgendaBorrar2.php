<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $MM_editCmd is of type "ADODB.Command"
$MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;
$MM_editCmd_CommandText="delete from Alertas where ID=".$_GET["Id"];
$MM_editCmd_Execute=$MM_editCmd_ActiveConnection=$Close;;

header("Location: "."Principal.asp");
?>

