<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CodePage="1252";?>
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

// $Siniestro is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Siniestro WHERE Id = "+str_replace("'","''",$Siniestro__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Siniestro_numRows=0;
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
$Cia__MMColParam=(->$Item["Compa�ia"]->$Value);
if ((${"MM_EmptyValue"}!=""))
{

  $Cia__MMColParam=${"MM_EmptyValue"};
} 

?>
<? 

// $Cia_cmd is of type "ADODB.Command"
$Cia_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Cia_cmd_CommandText="SELECT * FROM Aseguradoras WHERE Id = ?";
$Cia_cmd_Prepared=true;
$Cia_cmd_Parameters=$Append$Cia_cmd_CreateParameter="param1"$Cia__MMColParam); // adDouble

$Cia=$Cia_cmd_Execute=$Cia_numRows=0;;
?>
<? 
$Muestra$la$fecha$en$orden$correcto-->;

// Guardamos la fecha en la variable fecha
$fecha=time()();
// Guardamos el dia, mes y a�o en variables
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
if (($Item["Representado"]$Value==true))
{

  $a=str_replace("--==NOMBRE==--",(->$Item["Nombre"]->$Value)." representado por ".(->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value),$a);
}
  else
{

  $a=str_replace("--==NOMBRE==--",(->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value),$a);
} 

$a=str_replace("--==DNI==--",(->$Item["NIF"]->$Value),$a);
if (!($Item["Fecha Siniestro"]$Value==""))
{

  $a=str_replace("--==FECHASINIESTRO==--",->$Item["Fecha Siniestro"]->$Value,$a);
} 

$a=str_replace("--==DIRECCION==--",->$Item["Direccion"]->$Value,$a);
if (($Item["Codigo Postal"]$Value=="") || (!isset(->$Item["Codigo Postal"]->$Value)))
{

  $a=str_replace("--==CODIGOPOSTAL==--"," ",$a);
}
  else
{

  $a=str_replace("--==CODIGOPOSTAL==--",->$Item["Codigo Postal"]->$Value,$a);
} 

$a=str_replace("--==LOCALIDAD==--",->$Item["Localidad"]->$Value,$a);
$a=str_replace("--==PROVINCIA==--",->$Item["Provincia"]->$Value,$a);
//a=replace(a,"--==HOYCORTO==--",date())
$a=str_replace("--==HOYCORTO==--",($fechaespanol),$a);
$a=str_replace("--==HOY==--",$FormatDateTime[time()][1],$a);
//Esta parte sirve para rellenar el documento de abogado
if (!($Item["Compa�ia"]$Value==""))
{

  $a=str_replace("--==CIA==--",$Cia->Fields->$Item["aseguradora"]->$Value,$a);
  $a=str_replace("--==CIADIRECCION==--",$Cia->Fields->$Item["direccion"]->$Value,$a);
  $a=str_replace("--==CIALOCALIDAD==--",$Cia->Fields->$Item["localidad"]->$Value,$a);
  $a=str_replace("--==CIAPROVINCIA==--",$Cia->Fields->$Item["provincia"]->$Value,$a);
  $a=str_replace("--==CIACP==--",$Cia->Fields->$Item["cp"]->$Value,$a);
  $a=str_replace("--==POLIZA==--",->$Item["Nro Poliza"]->$Value,$a);
  if (!($Item["Tomador"]$Value=="El mismo"))
  {

    $a=str_replace("--==TOMADOR==--",->$Item["Tomador"]->$Value,$a);
  }
    else
  {

    $a=str_replace("--==TOMADOR==--",(->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value),$a);
  } 


  $a=str_replace("--==MATRICULA==--",->$Item["Matricula"]->$Value,$a);
} 


//Fin del relleno de documento abogado
$a=str_replace("--==CLINICA==--",(->$Item["Nombre"]->$Value),$a);
$a=str_replace("--==CLINICADOMICILIO==--",(->$Item["Direccion"]->$Value),$a);
$a=str_replace("--==CLINICACP==--",(->$Item["CP"]->$Value),$a);
$a=str_replace("--==CLINICALOCALIDAD==--",(->$Item["Ciudad"]->$Value),$a);
$a=str_replace("--==CLINICAPROVINCIA==--",(->$Item["Provincia"]->$Value),$a);
$a=str_replace("--==CLINICACITA==--",(->$Item["Telefono1"]->$Value),$a);
$a=str_replace("--==ESPECIALIDAD==--",(->$Item["Especialidad"]->$Value),$a);
$a=str_replace("--==EMPRESA==--",($GeneralEmpresa),$a);
$a=str_replace("--==EMPRESACIF==--",($GeneralCIF),$a);
$a=str_replace("--==EMPRESADOMICILIO==--",($GeneralDomicilioEmpresa),$a);
$a=str_replace("--==GERENTE==--",($GeneralGerente),$a);
$a=str_replace("--==GERENTENIF==--",($GeneralGerenteNIF),$a);
$a=str_replace("--==GERENTEDOMICILIO==--",($GeneralGerenteDomicilio),$a);
//response.Write(a)
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
window.open('<?   echo $Ruta_red.(->$Item["Id"]->$Value)."/AC ".(->$Item["Nombre"]->$Value)." ".str_replace("/","-",strftime("%m/%d/%y %H:%M:%S %p")()).".rtf";?>');
window.location=('Siniestro.asp?Id=<?   echo (->$Item["Id"]->$Value);?>&Capa=<? $_GET["Capa"]?>');
window.location='<?   echo $Ruta_red.(->$Item["Id"]->$Value)."/AC ".(->$Item["Nombre"]->$Value)." ".str_replace("/","-",strftime("%m/%d/%y %H:%M:%S %p")()).".rtf";?>';
</script>
</body>
</html>
<? } ?>
<? 

$Siniestro=null;

?>
<? 

$Abonado=null;

?>
<? 

$Profesional=null;

?>
<? 
$Cia->Close();
$Cia=null;

?>

