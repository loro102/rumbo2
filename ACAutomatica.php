<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? require("general.php"); ?>
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
$Profesional__MMColParam="1";
if (($_GET["Profesional"]!=""))
{

  $Profesional__MMColParam=$_GET["Profesional"];
} 

?>
<? 

// $Profesional is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Profesionales.*, TipoProfesional.AutorizacionCompromiso  FROM Profesionales, TipoProfesional  WHERE Profesionales.ID = "+str_replace("'","''",$Profesional__MMColParam)+" and Profesionales.Tipo=TipoProfesional.Id";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Profesional_numRows=0;
?>
<? 
// $fso is of type "Scripting.FileSystemObject"
$b=fopen("C:\\\\Documentos\\Plantilla\\"+(->$Item["AutorizacionCompromiso"]->$Value)+".rtf","r");

// b=f.OpenAsTextStream(1,0)
$a=fgets($b,65535);();


$a=str_replace("--==NOMBRE==--",(->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value),$a);
$a=str_replace("--==DNI==--",(->$Item["NIF"]->$Value),$a);
$a=str_replace("--==FECHASINIESTRO==--",(->$Item["Fecha Siniestro"]->$Value),$a);
$a=str_replace("--==HOY==--",time()(),$a);
$a=str_replace("--==CLINICA==--",(->$Item["Nombre"]->$Value),$a);
//response.Write(a)
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
  header("Location: "."Siniestro.asp?Id=".(->$Item["Id"]->$Value)."&Capa=".$_GET["Capa"]);
} 
$objTextStream=fopen($Carpeta_clientes.(->$Item["Id"]->$Value)."\\AC ".(->$Item["Nombre"]->$Value)." ".str_replace("/","-",time()()).".rtf","w");
fputs($objTextStream,$a);
fclose($objTextStream);

?>
<html>
<body>
<script language="javascript">
window.open('<? echo $Ruta_red.(->$Item["Id"]->$Value)."/AC ".(->$Item["Nombre"]->$Value)." ".str_replace("/","-",strftime("%m/%d/%y %H:%M:%S %p")()).".rtf";?><%');
window.location=('Siniestro.asp?Id=<? echo (->$Item["Id"]->$Value);?><%&Capa=<? $_GET["Capa"]?><%');
</script>
</body>
</html>
<? 

$Siniestro=null;

?>
<? 

$Abonado=null;

?>
<? 

$Profesional=null;

?>

