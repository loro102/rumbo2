<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Siniestros__FApInicio="1/1/2000";
if (($_POST["FApInicio"]!=""))
{

  $Siniestros__FApInicio=$_POST["FApInicio"];
} 

?>
<? 
$Siniestros__FApFin="31/12/2050";
if (($_POST["FApFin"]!=""))
{

  $Siniestros__FApFin=$_POST["FApFin"];
} 

?>
<? 

// $Siniestros is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.Nombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.Id, Siniestro.TipoTexto, Siniestro.FechaAperturaExpediente  FROM Abonados, Siniestro  WHERE (Siniestro.Abonado=Abonados.Id) and (Siniestro.Tipo>1) and (Siniestro.FechaAperturaExpediente is null or Siniestro.FechaAperturaExpediente between format('"+str_replace("'","''",$Siniestros__FApInicio)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Siniestros__FApFin)+"','dd/mm/yyyy'))";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Siniestros_numRows=0;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Otros Asuntos</title>
</head>

<body>
<table border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<? 

$Siniestros=null;

?>

