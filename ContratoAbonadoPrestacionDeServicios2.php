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
$a=str_replace("�","\\'e1",$a);
$a=str_replace("�","\\'e9",$a);
$a=str_replace("�","\\'ed",$a);
$a=str_replace("�","\\'f3",$a);
$a=str_replace("�","\\'fa",$a);
$a=str_replace("á","\\'e1",$a); //�
$a=str_replace("é","\\'e9",$a); //�
$a=str_replace("í","\\'ed",$a); //�
$a=str_replace("ó","\\'f3",$a); //�
$a=str_replace("ú","\\'fa",$a); //�
$a=str_replace("ñ","\\'f1",$a); //�
$a=str_replace("Ñ","\\'d1",$a); //�
$a=str_replace("º","\\ba",$a); //�
$a=str_replace("€","\\'80",$a); //�
$a=str_replace("Á","\\'c1",$a); //�
$a=str_replace("É","\\'c9",$a); //�
$a=str_replace("Í","\\'cd",$a); //�
$a=str_replace("Ó","\\'d3",$a); //�
$a=str_replace("Ú","\\'da",$a); //�
//a=replace(a,"","\\aa")'�
print $a;
?>
