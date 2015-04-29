<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 ?>

<? 
header("Content-type: "."application/vnd.ms-word"); header("content-disposition".": "."inline; filename=InformeAnual.doc");
// $fso is of type "Scripting.FileSystemObject"
$b=fopen("C:\\Mis documentos\\Documentos\\AUTORIZACION PARA TAXI.rtf","r");

// b=f.OpenAsTextStream(1,0)
$a=fgets($b,65535);();

$a=str_replace("--==NOMBRE==--",$_GET["Nombre"],$a);
$a=str_replace("--==DNI==--",$_GET["Nif"],$a);
$a=str_replace("--==FECHASINIESTRO==--",$_GET["FechaSiniestro"],$a);
$a=str_replace("--==HOY==--",time()(),$a);
print $a;
?>
