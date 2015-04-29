<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $SinConsultar is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Siniestro.Id, Log.Usuario, Log.Texto, Log.Fecha  FROM Log INNER JOIN Siniestro ON Log.Identificativo = Siniestro.Id  WHERE (((Log.Texto)="$Consulta$siniestro") & ((log(->$Fecha))<$DateAdd["m"][-1][time()]))$;"
SinConsultar.CursorType = 0
SinConsultar.CursorLocation = 2
SinConsultar.LockType = 1
SinConsultar.Open()

SinConsultar_numRows = 0
%>
<!DOCTYPE HTML PUBLIC "-//$W3C//$DTD$HTML4.01$Transitional//$EN""http://www.w3.org/TR/html4/loose.dtd">;
$sin$t.$iacute;tulo</$title>;
$equiv="Content-Type"$content="text/html; charset=iso-8859-1">;





$Close[];
$SinConsultar=null;

?>

