<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:45 2015
 ?>
<? require("general.php"); ?>

<? 
header("Content-type: "."application/vnd.ms-word"); header("content-disposition".": "."inline; filename=ContratoMulta.doc");

// $fso is of type "Scripting.FileSystemObject"
$b=fopen($CarpetaDocumentos+$_POST["Documento"],"r");

// b=f.OpenAsTextStream(1,0)
$a=fgets($b,65535);();

$a=str_replace("--==LOCALIDAD==--",$GeneralLocalidadEmpresa,$a);
$a=str_replace("--==HOY==--",$_POST["fecha"],$a);
$a=str_replace("--==GERENTE==--",$GeneralGerente,$a);
$a=str_replace("--==DOMICILIOEMPRESA==--",$GeneralDomicilioEmpresa,$a);
$a=str_replace("--==NIFGERENTE==--",$GeneralGerenteNIF,$a);

$a=str_replace("--==NOMBRE==--",$_POST["Nombre"],$a);
$a=str_replace("--==DIRECCION==--",$_POST["domicilio"],$a);
$a=str_replace("--==DNI==--",$_POST["NIF"],$a);
$a=str_replace("--==EMPRESA==--",$GeneralEmpresa,$a);
$a=str_replace("--==CIF==--",$GeneralCIF,$a);
$a=str_replace("--==IMPORTE==--",$_POST["importe"],$a);
$a=str_replace("--==NROEXPEDIENTE==--",$_POST["numeroexp"],$a);
$a=str_replace("--==FECHAABONO==--",$_POST["FechaAbono"],$a);

$a=str_replace("--==FUERO==--",$GeneralFuero,$a);

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


