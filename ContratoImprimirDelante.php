<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:45 2015
 ?>

<? 
header("Content-type: "."application/vnd.ms-word"); header("content-disposition".": "."inline; filename=InformeAnual.doc");

// $fso is of type "Scripting.FileSystemObject"
$b=fopen("C:\\Mis documentos\\Documentos\\ContratoAbonadoDelante.rtf","r");

// b=f.OpenAsTextStream(1,0)
$a=fgets($b,65535);();

$a=str_replace("--==NOMBRE==--",$_GET["Nombre"],$a);
$a=str_replace("--==DIRECCION==--",$_GET["Direccion"],$a);
$a=str_replace("--==LOCALIDAD==--",$_GET["Ciudad"],$a);
$a=str_replace("--==DNI==--",$_GET["NIF"],$a);

print $a;
?>

