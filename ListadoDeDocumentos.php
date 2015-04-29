<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? require("general.php"); ?>
<? 
$Siniestro__MMColParam="1";
if (($_GET["Siniestro"]!=""))
{

  $Siniestro__MMColParam=$_GET["Siniestro"];
} 

?>
<? 

// $Siniestro_cmd is of type "ADODB.Command"
$Siniestro_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Siniestro_cmd_CommandText="SELECT * FROM Siniestro WHERE Id = ?";
$Siniestro_cmd_Prepared=true;
$Siniestro_cmd_Parameters=$Append$Siniestro_cmd_CreateParameter="param1"$Siniestro__MMColParam); // adDouble

$Siniestro=$Siniestro_cmd_Execute=$Siniestro_numRows=0;;
?>
<? 
$Abonado__MMColParam="1";
if (($_GET["Abonado"]!=""))
{

  $Abonado__MMColParam=$_GET["Abonado"];
} 

?>
<? 

// $Abonado is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Abonados WHERE Id = "+str_replace("'","''",$Abonado__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Abonado_numRows=0;
?>
<? 
// $fso is of type "Scripting.FileSystemObject"
$b=fopen("C:\\Mis documentos\\Documentos\\Documentosenexpedientes.rtf","r");

// b=f.OpenAsTextStream(1,0)
$a=fgets($b,65535);();

//response.Write(Siniestro.Fields.Item("Fecha Siniestro").Value)
if (($Siniestro->Fields$Item["Representado"]$Value==true))
{

  $a=str_replace("--==NOMBRE==--",($Siniestro->Fields->$Item["Nombre"]->$Value)." representado por ".(->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value),$a);
}
  else
{

  $a=str_replace("--==NOMBRE==--",(->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value),$a);
} 

$a=str_replace("--==FECHAAPERTURA==--",($Siniestro->Fields->$Item["FechaAperturaExpediente"]->$Value),$a);

if ((!file_exists($Carpeta_clientes.($Siniestro->Fields->$Item["Id"]->$Value))))
{

  header("Content-type: "."application/vnd.ms-word");   header("content-disposition".": "."inline; filename=Documentosenexpedientes.rtf");
  print $a;
}
  else
{

  $objTextStream=fopen($Carpeta_clientes.($Siniestro->Fields->$Item["Id"]->$Value)."\\AC ".($Profesional->Fields->$Item["Nombre"]->$Value)." ".str_replace("/","-",time()()).".rtf","w");
  fputs($objTextStream,$a);
  fclose($objTextStream);
?>
<html>
<body>
<script language="javascript">
//window.open('<?   echo $Ruta_red.($Siniestro->Fields->$Item["Id"]->$Value)."/AC ".($Profesional->Fields->$Item["Nombre"]->$Value)." ".str_replace("/","-",strftime("%m/%d/%y %H:%M:%S %p")()).".rtf";?>');
//window.location=('Siniestro.asp?Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Capa=<? $_GET["Capa"]?>');
window.location='<?   echo $Ruta_red.($Siniestro->Fields->$Item["Id"]->$Value)."/AC ".($Profesional->Fields->$Item["Nombre"]->$Value)." ".str_replace("/","-",strftime("%m/%d/%y %H:%M:%S %p")()).".rtf";?>';
</script>
</body>
</html>
<? } ?>
<? 
$Siniestro->Close();
$Siniestro=null;

?>
<? 

$Abonado=null;

?>
