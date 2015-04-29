<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $MM_editCmd is of type "ADODB.Command"
$MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;
$MM_editCmd_CommandText="INSERT INTO Alertas(Fecha, Alerta) VALUES ('".$_GET["Fecha"]."','".$_GET["Cita"]."') ";
$MM_editCmd_Execute=$MM_editCmd_ActiveConnection=$Close;;

// Response.Redirect(request.servervariables("HTTP_REFERER"))
?>
<script language="JavaScript">
window.close();
</script>
