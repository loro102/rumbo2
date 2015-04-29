<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:45 2015
 $CodePage="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? require("general.php"); ?>

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
echo "SELECT * FROM Profesionales WHERE Id = "+str_replace("'","''",$Abonado__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Abonado_numRows=0;
?>
<? 
$Profesional__MMColParam="1";
if (($_GET["Profesional"]!=""))
{

  $Profesional__MMColParam=$_GET["Profesional"];
} 

?>
<? 

// $Profesional is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Profesionales.*, TipoProfesional.AutorizacionCompromiso  FROM Profesionales, TipoProfesional  WHERE Profesionales.ID = "+str_replace("'","''",$Profesional__MMColParam)+" and Profesionales.Tipo=TipoProfesional.Id";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Profesional_numRows=0;
?>

<? 
//abogados

// $abogado_cmd is of type "ADODB.Command"
$abogado_cmd_ActiveConnection=$MM_connrumbo_STRING;
$abogado_cmd_CommandText="SELECT * FROM tramitadores WHERE Id = ?";
$abogado_cmd_Prepared=true;
$abogado_cmd_Parameters=$Append$abogado_cmd_CreateParameter="param1"$abogado__MMColParam); // adDouble

$abogado=$abogado_cmd_Execute=$abogado_numRows=0;;
?>

<? 
$Muestra$la$fecha$en$orden$correcto-->;

// Guardamos la fecha en la variable fecha
$fecha=time()();
// Guardamos el dia, mes y año en variables
$dia=$day[$fecha];
$mes=strftime("%m",$fecha);
$ano=strftime("%Y",$fecha);
//damos formato a la fecha dentro de fechaespanol
$fechaespanol=$dia."/".$mes."/".$ano;
// $fso is of type "Scripting.FileSystemObject"
//set b=fso.OpenTextFile("C:\\Documentos\\Plantilla\\"+request.QueryString("Doc")+".rtf",1,false,0)
$b=fopen(($CarpetaDocumentos)+$_GET["Doc"]+".rtf","r");
// b=f.OpenAsTextStream(1,0)
$a=fgets($b,65535);();

//response.Write(Siniestro.Fields.Item("Fecha Siniestro").Value)
$a=str_replace("--==NOMBRE==--",(->$Item["Nombre"]->$Value),$a);
if (($Item["NombreFiscal"]$Value=="") || (!isset(->$Item["NombreFiscal"]->$Value)))
{

  $a=str_replace("--==NOMBREFISCAL==--"," ",$a);
}
  else
{

  $a=str_replace("--==NOMBREFISCAL==--",->$Item["NombreFiscal"]->$Value,$a);
} 

$a=str_replace("--==ESPECIALIDAD==--",(->$Item["Especialidad"]->$Value),$a);
$a=str_replace("--==NIF==--",(->$Item["NIFCIF"]->$Value),$a);
$a=str_replace("--==DIRECCION==--",->$Item["Direccion"]->$Value,$a);
if (($Item["CP"]$Value=="") || (!isset(->$Item["CP"]->$Value)))
{

  $a=str_replace("--==CODIGOPOSTAL==--"," ",$a);
}
  else
{

  $a=str_replace("--==CODIGOPOSTAL==--",->$Item["CP"]->$Value,$a);
} 

$a=str_replace("--==LOCALIDAD==--",->$Item["Ciudad"]->$Value,$a);
$a=str_replace("--==PROVINCIA==--",->$Item["Provincia"]->$Value,$a);
if (($Item["Telefono1"]$Value=="") || (!isset(->$Item["Telefono1"]->$Value)))
{

  $a=str_replace("--==TELEFONO==--"," ",$a);
}
  else
{

  $a=str_replace("--==TELEFONO==--",->$Item["Telefono1"]->$Value,$a);
} 

if (($Item["Telefono2"]$Value=="") || (!isset(->$Item["Telefono2"]->$Value)))
{

  $a=str_replace("--==TELEFONO2==--"," ",$a);
}
  else
{

  $a=str_replace("--==TELEFONO2==--",->$Item["Telefono2"]->$Value,$a);
} 

if (($Item["Telefono3"]$Value=="") || (!isset(->$Item["Telefono3"]->$Value)))
{

  $a=str_replace("--==TELEFONO3==--"," ",$a);
}
  else
{

  $a=str_replace("--==TELEFONO3==--",->$Item["Telefono3"]->$Value,$a);
} 

if (($Item["Fax"]$Value=="") || (!isset(->$Item["Fax"]->$Value)))
{

  $a=str_replace("--==FAX==--"," ",$a);
}
  else
{

  $a=str_replace("--==FAX==--",->$Item["Fax"]->$Value,$a);
} 

if (($Item["Email"]$Value=="") || (!isset(->$Item["Email"]->$Value)))
{

  $a=str_replace("--==EMAIL==--"," ",$a);
}
  else
{

  $a=str_replace("--==EMAIL==--",->$Item["Email"]->$Value,$a);
} 

//a=replace(a,"--==HOYCORTO==--",date())
$a=str_replace("--==HOYCORTO==--",($fechaespanol),$a);
$a=str_replace("--==HOY==--",$FormatDateTime[time()][1],$a);
//Esta parte sirve para rellenar el documento de abogado





//response.Write(a)
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
if ((!file_exists($Carpeta_clientes.(->$Item["Id"]->$Value))))
{

  header("Content-type: "."application/vnd.ms-word");   header("content-disposition".": "."inline; filename=Autorizacion y compromiso.rtf");
//Response.AddHeader "content-disposition", "inline; filename=Autorizacion y compromiso "&(Profesional.Fields.Item("Nombre").Value)&".rtf"
  print $a;
}
  else
{

  $objTextStream=fopen($Carpeta_clientes.(->$Item["Id"]->$Value)."\\AC ".(->$Item["Nombre"]->$Value)." ".str_replace("/","-",time()()).".rtf","w");
  fputs($objTextStream,$a);
  fclose($objTextStream);
?>
<html>
<body>
<script language="javascript">
window.open('<?   echo $Ruta_red.($Siniestro->Fields->$Item["Id"]->$Value)."/AC ".(->$Item["Nombre"]->$Value)." ".str_replace("/","-",strftime("%m/%d/%y %H:%M:%S %p")()).".rtf";?>');
window.location=('Siniestro.asp?Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Capa=<? $_GET["Capa"]?>');
window.location='<?   echo $Ruta_red.($Siniestro->Fields->$Item["Id"]->$Value)."/AC ".(->$Item["Nombre"]->$Value)." ".str_replace("/","-",strftime("%m/%d/%y %H:%M:%S %p")()).".rtf";?>';
</script>
</body>
</html>
<? } ?>

<? 

$Abonado=null;

?>



