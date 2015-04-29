<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 ?>

<? 
header("Content-type: "."application/vnd.ms-word"); header("content-disposition".": "."inline; filename=PrestacionDeServicios.doc");

// $fso is of type "Scripting.FileSystemObject"
$b=fopen("C:\\Documentos\\Contrato prestacion servicios abonado.rtf","r");

// b=f.OpenAsTextStream(1,0)
$a=fgets($b,65535);();


$a=str_replace("--==NOMBRE==--",$_GET["Nombre"],$a);
$a=str_replace("--==NIF==--",$_GET["Nif"],$a);
$a=str_replace("--==FECHASINIESTRO==--",$_GET["FechaSiniestro"],$a);
$a=str_replace("--==HOY==--",time()(),$a);
$a=str_replace("--==DIRECCION==--",$_GET["Direccion"],$a);
$a=str_replace("--==LOCALIDAD==--",$_GET["Localidad"],$a);
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
print $a;
?>
