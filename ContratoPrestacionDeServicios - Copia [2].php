<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:45 2015
 ?>
<? require("general.php"); ?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Siniestro__MMColParam="1";
if (($_GET["Siniestro"]!=""))
{

  $Siniestro__MMColParam=$_GET["Siniestro"];
} 

?>
<? 

// $Siniestro is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Siniestro WHERE Id = "+str_replace("'","''",$Siniestro__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Siniestro_numRows=0;
?>
<? 
$Abonado__MMColParam="1";
if (($_GET["Abonado"]!=""))
{

  $Abonado__MMColParam=$_GET["Abonado"];
} 

?>
<? 

// $Abonado is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Abonados WHERE Id = "+str_replace("'","''",$Abonado__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Abonado_numRows=0;
?>
<? 

// $fso is of type "Scripting.FileSystemObject"
//set b=fso.OpenTextFile(CarpetaDocumentos&request.QueryString("Contrato")&".rtf",1,false,0)
$b=fopen("C:\\Documentos\\Plantilla\\"+$_GET["Contrato"]+".rtf","r");
// b=f.OpenAsTextStream(1,0)
$a=fgets($b,65535);();


$a=str_replace("--==NOMBRE==--",(->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value),$a);
$a=str_replace("--==NIF==--",(->$Item["NIF"]->$Value),$a);
$a=str_replace("--==FECHASINIESTRO==--",(->$Item["Fecha Siniestro"]->$Value),$a);
$a=str_replace("--==HOY==--",time()(),$a);
$a=str_replace("--==DIRECCION==--",(->$Item["Direccion"]->$Value),$a);
$a=str_replace("--==LOCALIDAD==--",(->$Item["Localidad"]->$Value),$a);

$a=str_replace("á","\\'e1",$a);
$a=str_replace("é","\\'e9",$a);
$a=str_replace("í","\\'ed",$a);
$a=str_replace("ó","\\'f3",$a);
$a=str_replace("ú","\\'fa",$a);
$a=str_replace("Ã¡","\\'e1",$a); //á
$a=str_replace("Ã©","\\'e9",$a); //é
$a=str_replace("Ã­","\\'ed",$a); //í
$a=str_replace("Ã³","\\'f3",$a); //ó
$a=str_replace("Ãº","\\'fa",$a); //ú
$a=str_replace("Ã±","\\'f1",$a); //ñ
$a=str_replace("Ã‘","\\'d1",$a); //ñ
$a=str_replace("Âº","\\ba",$a); //º
$a=str_replace("â‚¬","\\'80",$a); //€
$a=str_replace("Ã","\\'c1",$a); //Á
$a=str_replace("Ã‰","\\'c9",$a); //É
$a=str_replace("Ã","\\'cd",$a); //Í
$a=str_replace("Ã“","\\'d3",$a); //Ó
$a=str_replace("Ãš","\\'da",$a); //Ú
//a=replace(a,"","\\aa")'ª

if ((!file_exists($Carpeta_clientes.(->$Item["Id"]->$Value))))
{

  header("Content-type: "."application/vnd.ms-word");   header("content-disposition".": "."inline; filename=".$_GET["Contrato"].".rtf");
  print $a;
}
  else
{

  $objTextStream=fopen($Carpeta_clientes.(->$Item["Id"]->$Value)."\\".$_GET["Contrato"].".rtf","w");
  fputs($objTextStream,$a);
  fclose($objTextStream);
?>
<html>
<body>
<script language="javascript">
//window.open('<?   echo $Ruta_red.(->$Item["Id"]->$Value)."/Contrato de prestacion de servicios.rtf";?>');
//window.location=('Siniestro.asp?Id=<?   echo (->$Item["Id"]->$Value);?>&Capa=<? $_GET["Capa"]?>');
window.location='<?   echo $Ruta_red.(->$Item["Id"]->$Value)."/".$_GET["Contrato"].".rtf";?>';
</script>
</body>
</html>
<? } ?>
<? 

$Siniestro=null;

?>
<? 

$Abonado=null;

?>

