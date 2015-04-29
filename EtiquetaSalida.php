<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:46 2015
 ?>

<? 
header("Content-type: "."application/vnd.ms-word"); header("content-disposition".": "."inline; filename=InformeAnual.doc");

// $fso is of type "Scripting.FileSystemObject"
$b=fopen("C:\\Mis documentos\\Documentos\\etiquetas.rtf","r");

// b=f.OpenAsTextStream(1,0)
$a=fgets($b,65535);();


$a=str_replace("--==NOMBRE".$_GET["radiobutton"]."==--",$_GET["Nombre"],$a);
$a=str_replace("--==DIRECCION".$_GET["radiobutton"]."==--",$_GET["Direccion"],$a);
$a=str_replace("--==LOCALIDAD".$_GET["radiobutton"]."==--",$_GET["Localidad"],$a);
$a=str_replace("--==TELEFONOS".$_GET["radiobutton"]."==--","Telefono:".$_GET["Telefonos"],$a);
$a=str_replace("--==FECHASINI".$_GET["radiobutton"]."==--","Fecha Siniestro:".$_GET["FechaSini"],$a);
for ($b=1; $b<=24; $b=$b+1)
{
  $a=str_replace("--==NOMBRE".$b."==--","",$a);
  $a=str_replace("--==DIRECCION".$b."==--","",$a);
  $a=str_replace("--==LOCALIDAD".$b."==--","",$a);
  $a=str_replace("--==TELEFONOS".$b."==--","",$a);
  $a=str_replace("--==FECHASINI".$b."==--","",$a);

}

print $a;
?>
