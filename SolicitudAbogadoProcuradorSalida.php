<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 ?>
<? require("Connections/connrumbo.php"); ?>

<? 
// $fso is of type "Scripting.FileSystemObject"
$b=fopen("C:\\Mis documentos\\Documentos\\SOLICITUD ABOGADO Y PROCURADOR.rtf","r");

// b=f.OpenAsTextStream(1,0)
$a=fgets($b,65535);();

$a=str_replace("--==NOMBRE==--",$_POST["Nombre"],$a);
$a=str_replace("--==DIRECCION==--",$_POST["Direccion"],$a);
$a=str_replace("--==CPCIUDAD==--",$_POST["CPCiudad"],$a);
$a=str_replace("--==LUGAR==--",$_POST["Lugar"],$a);
$a=str_replace("--==FECHA==--",$_POST["Fecha"],$a);
$a=str_replace("--==COMPANIA==--",$_POST["Compania"],$a);
$a=str_replace("--==CDIRECCION==--",$_POST["CDireccion"],$a);
$a=str_replace("--==CCPCIUDAD==--",$_POST["CCPCiudad"],$a);
$a=str_replace("--==FSINIESTRO==--",$_POST["FSiniestro"],$a);
$a=str_replace("--==NPOLIZA==--",$_POST["Npoliza"],$a);
$a=str_replace("--==MATRICULA==--",$_POST["Matricula"],$a);
$a=str_replace("--==ABOGADO==--",$_POST["Abogado"],$a);
$a=str_replace("--==NROABOGADO==--",$_POST["NroAbogado"],$a);
$a=str_replace("--==PROCURADOR==--",$_POST["Procurador"],$a);
$a=str_replace("--==CIUDADPROCURADOR==--",$_POST["CiudadProcurador"],$a);

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

if ((!file_exists($Carpeta_clientes.$_POST["Siniestro"])))
{

  header("Content-type: "."application/vnd.ms-word");   header("content-disposition".": "."inline; filename=SOLICITUD ABOGADO Y PROCURADOR.rtf");
  print $a;
}
  else
{

  $objTextStream=fopen($Carpeta_clientes.$_POST["Siniestro"]."\\SOLICITUD ABOGADO Y PROCURADOR.rtf","w");
  fputs($objTextStream,$a);
  fclose($objTextStream);
?>
<html>
<body>
<script language="javascript">
window.location='<?   echo $Ruta_red.$_POST["Siniestro"]."/SOLICITUD ABOGADO Y PROCURADOR.rtf";?>';
</script>
</body>
</html>
<? } ?>

