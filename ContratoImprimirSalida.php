<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:45 2015
 ?>
<? require("general.php"); ?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Cliente__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Cliente__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Cliente is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Abonados  WHERE Id = "+str_replace("'","''",$Cliente__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Cliente_numRows=0;
?>

<? 
header("Content-type: "."application/vnd.ms-word"); header("content-disposition".": "."inline; filename=ContratoAbono.doc");

// $fso is of type "Scripting.FileSystemObject"

if (($Item["ModeloContrato"]$Value==5))
{

  $b=fopen($CarpetaDocumentos+"Plus01.rtf","r");
}
  else
{

  $b=fopen($CarpetaDocumentos+"ContratoAbonado.rtf","r");
} 


// b=f.OpenAsTextStream(1,0)
$a=fgets($b,65535);();

$a=str_replace("--==NOMBRE==--",(->$Item["Nombre"]->$Value)+" "+(->$Item["Apellido1"]->$Value)+" "+(->$Item["Apellido2"]->$Value),$a);
$a=str_replace("--==DIRECCION==--",(->$Item["Direccion"]->$Value),$a);
$a=str_replace("--==LOCALIDAD==--",(->$Item["Codigo Postal"]->$Value)+" "+(->$Item["Localidad"]->$Value)+" ( "+(->$Item["Provincia"]->$Value)+")",$a);
$a=str_replace("--==DNI==--",(->$Item["NIF"]->$Value),$a);
$a=str_replace("--==FIRMANTE==--",$GeneralGerente,$a);
$a=str_replace("--==GERENTE==--",$GeneralGerente,$a);
$a=str_replace("--==NIFGERENTE==--",$GeneralGerenteNIF,$a);
$a=str_replace("--==DOMICILIOGERENTE==--",$GeneralGerenteDomicilio,$a);
$a=str_replace("--==VECINOGERENTE==--",$GeneralGerenteVecino,$a);
$a=str_replace("--==DOMICIOEMPRESA==--",$GeneralDomicilioEmpresa,$a);
$a=str_replace("--==CIFEMPRESA==--",$GeneralCIF,$a);
$a=str_replace("--==EMPRESA==--",$GeneralEmpresa,$a);


$a=str_replace("--==DIA==--",$Day[(->$Item["FechaAbono"]->$Value)],$a);
$a=str_replace("--==MES==--",strftime("%F",strftime("%m",(->$Item["FechaAbono"]->$Value))),$a);
$a=str_replace("--==ANO==--",strftime("%Y",(->$Item["FechaAbono"]->$Value)),$a);

$a=str_replace("--==MATRICULAS==--",(->$Item["Matriculas"]->$Value),$a);
$a=str_replace("--==CUANTIA==--",(->$Item["Precio"]->$Value),$a);

$a=str_replace("--==FUERO==--",$GeneralFuero,$a);

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


$Cliente=null;


print $a;
?>

