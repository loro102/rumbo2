<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:45 2015
 ?>

<? 
header("Content-type: "."application/vnd.ms-word"); header("content-disposition".": "."inline; filename=InformeAnual.doc");

// $fso is of type "Scripting.FileSystemObject"
$b=fopen("C:\\Mis documentos\\Documentos\\ContratoAbonadoDetras.rtf","r");

// b=f.OpenAsTextStream(1,0)
$a=fgets($b,65535);();

$a=str_replace("--==NOMBRE==--",$_GET["Nombre"],$a);
$a=str_replace("--==FIRMANTE==--",$_GET["firmante"],$a);
$a=str_replace("--==DIA==--",$_GET["dia"],$a);
$a=str_replace("--==MES==--",$_GET["mes"],$a);
$a=str_replace("--==ANO==--",$_GET["ano"],$a);
print $a;
?>
