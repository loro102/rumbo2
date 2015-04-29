<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Datos__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Datos__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Datos is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.*, Agentes.Nombre as ANombre, Agentes.Direccion as ADireccion, Agentes.Localidad as ALocalidad, Agentes.CP as ACP, Agentes.Provincia as AProvincia  FROM Abonados, Agentes  WHERE Abonados.Id = "+str_replace("'","''",$Datos__MMColParam)+" and Abonados.Agente=Agentes.Id";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Datos_numRows=0;
?>

<? 
header("Content-type: "."application/vnd.ms-word"); header("content-disposition".": "."inline; filename=AgradecimientoAgente.rtf");

// $fso is of type "Scripting.FileSystemObject"
$b=fopen("C:\\Documentos\\AgentesAgradecimiento.rtf","r");

// b=f.OpenAsTextStream(1,0)
$a=fgets($b,65535);();

$a=str_replace("--==NOMBRE==--",(->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value),$a);
$a=str_replace("--==NOMBREAGENTE==--",(->$Item["ANombre"]->$Value),$a);
$a=str_replace("--==DIRECCIONAGENTE==--",(->$Item["ADireccion"]->$Value),$a);
$a=str_replace("--==LOCALIDADAGENTE==--",(->$Item["ACP"]->$Value)." ".(->$Item["ALocalidad"]->$Value)." (".(->$Item["AProvincia"]->$Value).")",$a);
$a=str_replace("--==HOY==--",time()(),$a);
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
<? 

$Datos=null;

?>

