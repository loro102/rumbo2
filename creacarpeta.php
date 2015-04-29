<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:45 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? require("general.php"); ?>
<? 
$Siniestro__DAbonado="0";
if (($_GET["Id"]!=""))
{

  $Siniestro__DAbonado=$_GET["Id"];
} 

?>
<? 

// $Siniestro is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Siniestro.Id  FROM Siniestro  WHERE Abonado="+str_replace("'","''",$Siniestro__DAbonado)+"  ORDER BY [Fecha Siniestro] DESC";
echo 0;
echo 2;
echo 1;
print ;
$rs=mysql_query();
print ($Siniestro==0);
$Siniestro_numRows=0;
?>
<? 
// $FS is of type "Scripting.FileSystemObject"
while((file_exists($Carpeta_clientes.(->$Item["Id"]->$Value))))
{

  $Siniestro=mysql_fetch_array($Siniestro_query);
  $Siniestro_BOF=0;

} 
mkdir($Carpeta_clientes.(->$Item["Id"]->$Value),0777);
header("Location: "."Siniestro.asp?Id=".(->$Item["Id"]->$Value));
?>
<? 

$Siniestro=null;

?>

