<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $Abonado is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.*  FROM Abonados,Siniestro  where Siniestro.Abonado=Abonados.Id and Siniestro.Id=".$_GET["IdSiniestro"];
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Abonado_numRows=0;
?>
<? 
$cadena="\\\\Pc1\\c\\WINDOWS\\Escritorio\\rumbo\\clientes\\".(->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value)."\\".$_GET["Archivo"];
// $Upload is of type "Persits.Upload"
$Upload->SendBinary$cadena$True$True;
?>
<? 

$Abonado=null;

?>

