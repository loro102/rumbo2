<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Facturas__NroSiniestro="0";
if (($_GET["Id"]!=""))
{

  $Facturas__NroSiniestro=$_GET["Id"];
} 

?>
<? 

// $Facturas is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Facturas.*, Profesionales.Nombre, TipoProfesional.Texto, FormasPago.Texto as FPTexto  FROM Facturas, Profesionales, TipoProfesional, FormasPago  WHERE (Facturas.Siniestro = "+str_replace("'","''",$Facturas__NroSiniestro)+") and (Facturas.Valor=Profesionales.ID) and (Profesionales.Tipo=TipoProfesional.Id) and (Facturas.ValorReal>0) AND (not Facturas.Tabla=1) and (not Facturas.Tabla=7) and (not Facturas.Tabla=9) and (FormasPago.Id=Facturas.FormaPago)  ORDER BY Facturas.Fecha";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Facturas_numRows=0;
?>
<? 
$Datos__NroSiniestro="0";
if (($_GET["Id"]!=""))
{

  $Datos__NroSiniestro=$_GET["Id"];
} 

?>
<? 

// $Datos is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.*  FROM Abonados,Siniestro  WHERE (Siniestro.Abonado=Abonados.Id) AND (Siniestro.Id="+str_replace("'","''",$Datos__NroSiniestro)+")";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Datos_numRows=0;
?>
<? 
$Siniestro__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Siniestro__MMColParam=$_GET["Id"];
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
$AbogyProc__NroSiniestro="0";
if (($_GET["Id"]!=""))
{

  $AbogyProc__NroSiniestro=$_GET["Id"];
} 

?>
<? 

// $AbogyProc is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Facturas.*, Profesionales.Nombre, TipoProfesional.Texto  FROM Facturas, Profesionales, TipoProfesional  WHERE (Facturas.Siniestro = "+str_replace("'","''",$AbogyProc__NroSiniestro)+") and (Facturas.Valor=Profesionales.ID) and (Profesionales.Tipo=TipoProfesional.Id) and (Facturas.[Cuantia rumbo]>0) AND (Facturas.Tabla=1 or Facturas.Tabla=7 or Facturas.Tabla=9)  ORDER BY TipoProfesional.Id";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$AbogyProc_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Facturas_numRows=$Facturas_numRows+$Repeat1__numRows;
?>
<? 

$Repeat2__numRows=-1;
$Repeat2__index=0;
$AbogyProc_numRows=$AbogyProc_numRows+$Repeat2__numRows;
?>
<html>
<head>
<title>Libro de suplidos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1 align="center"><? echo (->$Item["Nombre"]->$Value);?>&nbsp;<? echo (->$Item["Apellido1"]->$Value);?>&nbsp;<? echo (->$Item["Apellido2"]->$Value);?>
</h1>
<h6 align="right">Fecha del siniestro:<? echo (->$Item["Fecha Siniestro"]->$Value);?></h6>
<? 
$total_Importe=0;
?>
<center><table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC"> 
    <td><div align="center"><strong>Fecha</strong></div></td>
    <td><div align="center"><strong>Concepto</strong></div></td>
    <td><div align="center"><strong>Importe</strong></div></td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!($Facturas==0))))
{

?>
  <tr> 
    <td><?   echo (->$Item["Fecha"]->$Value);?>&nbsp;</td>
    <td><?   echo (->$Item["Texto"]->$Value);?> - <?   echo (->$Item["Nombre"]->$Value);?> - <?   echo (->$Item["Descripcion"]->$Value);?>&nbsp;</td>
    <td align="right"><?   echo (->$Item["Cuantia rumbo"]->$Value);?>&nbsp;&euro;</td>
  </tr>
  <? 
  if (!($Item["Cuantia rumbo"]$Value==""))
  {
    $total_Importe=$total_Importe+->$Item["Cuantia rumbo"]->$Value;
  } 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Facturas=mysql_fetch_array($Facturas_query);
  $Facturas_BOF=0;

} 
?>
  <tr bgcolor="#CCCCCC"> 
    <td colspan="2" align="right">SubTotal:</td>
    <td align="right"><? echo $total_Importe;?>&nbsp;&euro;</td>
  </tr>
  <? 
while((($Repeat2__numRows!=0) && (!($AbogyProc==0))))
{

?>
  <tr> 
    <td><?   echo (->$Item["Fecha"]->$Value);?>&nbsp;</td>
    <td><?   echo (->$Item["Texto"]->$Value);?> - <?   echo (->$Item["Nombre"]->$Value);?> - <?   echo (->$Item["Descripcion"]->$Value);?>&nbsp;</td>
    <td align="right"><?   echo (->$Item["Cuantia rumbo"]->$Value);?>&nbsp;&euro;</td>
  </tr>
  <? 
  if (!($Item["Cuantia rumbo"]$Value==""))
  {
    $total_Importe=$total_Importe+->$Item["Cuantia rumbo"]->$Value;
  } 
  $Repeat2__index=$Repeat2__index+1;
  $Repeat2__numRows=$Repeat2__numRows-1;
  $AbogyProc=mysql_fetch_array($AbogyProc_query);
  $AbogyProc_BOF=0;

} 
?>
  <? if (($Repeat2__index>0))
{
?>
  <tr bgcolor="#CCCCCC"> 
    <td colspan="2" align="right">Total a cobrar:</td>
    <td align="right"><?   echo $total_Importe;?>&nbsp;&euro;</td>
  </tr>
  <? } ?>
</table></center>
<!--<p>Fecha	Concepto	Forma Pago	Importe	Fecha Abono	Forma Abono	Importe	Real</p>!-->
</body>
</html>
<? 

$Facturas=null;

?>
<? 

$Datos=null;

?>
<? 

$Siniestro=null;

?>
<? 

$AbogyProc=null;

?>

