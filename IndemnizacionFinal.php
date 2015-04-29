<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:46 2015
 $CODEPAGE="1252";?>
<? 
if (($_GET["excel"]=="1"))
{

  header("Content-type: "."application/vnd.ms-excel");   header("content-disposition".": "."inline; filename=Indemnizacion_final.xls");
} 

?>
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
echo "SELECT Facturas.*, Profesionales.Nombre, TipoProfesional.Texto, FormasPago.Texto as FPTexto  FROM Facturas, Profesionales, TipoProfesional, FormasPago  WHERE (Facturas.Siniestro = "+str_replace("'","''",$Facturas__NroSiniestro)+") and (Facturas.Valor=Profesionales.ID) and (Profesionales.Tipo=TipoProfesional.Id) AND (not Facturas.Tabla=1) and (not Facturas.Tabla=7) and (not Facturas.Tabla=9) and (FormasPago.Id=Facturas.FormaPago) and (Profesionales.SumaIndemnizacion=True) and (Facturas.NoLaPagan=false)  ORDER BY Facturas.Fecha";
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

// $Siniestro_cmd is of type "ADODB.Command"
$Siniestro_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Siniestro_cmd_CommandText="SELECT * FROM Siniestro WHERE Id = ?";
$Siniestro_cmd_Prepared=true;
$Siniestro_cmd_Parameters=$Append$Siniestro_cmd_CreateParameter="param1"$Siniestro__MMColParam); // adDouble

$Siniestro=$Siniestro_cmd_Execute=$Siniestro_numRows=0;;
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
<title>Indemnizacion</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="125">
<h1 align="center">
<? if (($Siniestro->Fields$Item["Representado"]$Value==true))
{
?>
<?   echo ($Siniestro->Fields->$Item["Nombre"]->$Value);?>
<? }
  else
{
?>
<?   echo (->$Item["Nombre"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?>
<? } ?>
</h1>
<h3 align="right">&nbsp;</h3>
<h6 align="right">Fecha del siniestro:<? echo ($Siniestro->Fields->$Item["Fecha Siniestro"]->$Value);?></h6>
<? $suma_indemnizacion=0;?>
<table width="100%" border="1" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td><strong>Dias impeditivos:</strong></td>
    <td><strong>Indemnizacion diaria:</strong></td>
    <td align="right"><strong>Cuantia:</strong></td>
  </tr>
  <tr>
    <td><? echo ($Siniestro->Fields->$Item["DiasImpeditivos"]->$Value);?></td>
    <td><? echo ($Siniestro->Fields->$Item["DiasImpeditivosValor"]->$Value);?></td>
    <td align="right"><? echo ($Siniestro->Fields->$Item["DiasImpeditivos"]->$Value)*($Siniestro->Fields->$Item["DiasImpeditivosValor"]->$Value);?></td>
	<? if (!($Siniestro->Fields$Item["DiasImpeditivos"]$Value==""))
{
  $suma_indemnizacion=($Siniestro->Fields->$Item["DiasImpeditivos"]->$Value)*($Siniestro->Fields->$Item["DiasImpeditivosValor"]->$Value);
} ?>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td><strong>Dias no impeditivos:</strong></td>
    <td><strong>Indemnizacion diaria:</strong></td>
    <td align="right"><strong>Cuantia:</strong></td>
  </tr>
  <tr>
    <td><? echo ($Siniestro->Fields->$Item["DiasNoImpeditivos"]->$Value);?></td>
    <td><? echo ($Siniestro->Fields->$Item["DiasNoImpeditivosValor"]->$Value);?></td>
    <td align="right"><? echo ($Siniestro->Fields->$Item["DiasNoImpeditivos"]->$Value)*($Siniestro->Fields->$Item["DiasNoImpeditivosValor"]->$Value);?>&euro;</td>
	<? if (!($Siniestro->Fields$Item["DiasNoImpeditivos"]$Value==""))
{
  $suma_indemnizacion=$suma_indemnizacion+($Siniestro->Fields->$Item["DiasNoImpeditivos"]->$Value)*($Siniestro->Fields->$Item["DiasNoImpeditivosValor"]->$Value);
} ?>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td><strong>Dias hospitalizados:</strong></td>
    <td><strong>Indemnizacion diaria:</strong></td>
    <td align="right"><strong>Cuantia:</strong></td>
  </tr>
  <tr>
    <td><? echo ($Siniestro->Fields->$Item["DiasHospitalizados"]->$Value);?></td>
    <td><? echo ($Siniestro->Fields->$Item["DiasHospitalizadosValor"]->$Value);?></td>
    <td align="right"><? echo ($Siniestro->Fields->$Item["DiasHospitalizados"]->$Value)*($Siniestro->Fields->$Item["DiasHospitalizadosValor"]->$Value);?>&euro;</td>
	<? if (!($Siniestro->Fields$Item["DiasHospitalizados"]$Value==""))
{
  $suma_indemnizacion=$suma_indemnizacion+($Siniestro->Fields->$Item["DiasHospitalizados"]->$Value)*($Siniestro->Fields->$Item["DiasHospitalizadosValor"]->$Value);
} ?>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td><strong>Puntos de secuela:</strong></td>
    <td><strong>Valor del punto:</strong></td>
    <td align="right"><strong>Cuantia:</strong></td>
  </tr>
  <tr>
    <td><? echo ($Siniestro->Fields->$Item["PuntosSecuelas"]->$Value);?></td>
    <td><? echo ($Siniestro->Fields->$Item["PuntosSecuelasValor"]->$Value);?></td>
    <td align="right"><? echo ($Siniestro->Fields->$Item["PuntosSecuelas"]->$Value)*($Siniestro->Fields->$Item["PuntosSecuelasValor"]->$Value);?>&euro;</td>
	<? if (!($Siniestro->Fields$Item["PuntosSecuelas"]$Value==""))
{
  $suma_indemnizacion=$suma_indemnizacion+($Siniestro->Fields->$Item["PuntosSecuelas"]->$Value)*($Siniestro->Fields->$Item["PuntosSecuelasValor"]->$Value);
} ?>
  </tr><? if (($Siniestro->Fields$Item["PtosPerjuicioEstetico"]$Value>0))
{
?>  <tr bgcolor="#CCCCCC">
    <td><strong>Puntos de secuela estetica:</strong></td>
    <td><strong>Valor del punto:</strong></td>
    <td align="right"><strong>Cuantia:</strong></td>
  </tr>
  <tr>
    <td><?   echo ($Siniestro->Fields->$Item["PtosPerjuicioEstetico"]->$Value);?></td>
    <td><?   echo ($Siniestro->Fields->$Item["ValorPuntoPerjuicioEstetico"]->$Value);?></td>
    <td align="right"><?   echo ($Siniestro->Fields->$Item["PtosPerjuicioEstetico"]->$Value)*($Siniestro->Fields->$Item["ValorPuntoPerjuicioEstetico"]->$Value);?>&euro;</td>
	<?   if (!($Siniestro->Fields$Item["PtosPerjuicioEstetico"]$Value==""))
  {
    $suma_indemnizacion=$suma_indemnizacion+($Siniestro->Fields->$Item["PtosPerjuicioEstetico"]->$Value)*($Siniestro->Fields->$Item["ValorPuntoPerjuicioEstetico"]->$Value);
  } ?>
  </tr><? } ?>
  <tr bgcolor="#CCCCCC">
    <td colspan="2"><strong>Factor corrector (%):</strong></td>
    <td align="right"><strong>Cuantia:</strong></td>
  </tr>
  <tr>
    <td colspan="2"><? echo ($Siniestro->Fields->$Item["FactorCorrector"]->$Value);?></td>
    <td align="right"><? echo ($Siniestro->Fields->$Item["FactorCorrectorValor"]->$Value);?>&euro;</td>
  </tr>
  <? if ((($Siniestro->Fields$Item["Incapacidad"]$Value)!=0))
{
?><tr bgcolor="#CCCCCC">
    <td colspan="2"><strong>Incapacidad:</strong></td>
    <td align="right"><strong>Cuantia:</strong></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td align="right"><?   echo ($Siniestro->Fields->$Item["Incapacidad"]->$Value);?>&euro;</td>
  </tr><? } ?>
  <tr bgcolor="#CCCCCC">
    <td colspan="2" align="right"><strong>Subtotal:</strong></td>
    <td align="right"><? echo round($suma_indemnizacion+$Siniestro->Fields->$Item["FactorCorrectorValor"]->$Value+$Siniestro->Fields->$Item["Incapacidad"]->$Value,2);?></td>
  </tr>
  <tr><td height="10" colspan="3"></td>
  </tr>
<? 
$total_Importe=0;
?><br>
  <tr bgcolor="#CCCCCC">
    <td colspan="2"><div align="center"><strong>Concepto</strong></div></td>
    <td><div align="center"><strong>Importe</strong></div></td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!($Facturas==0))))
{

?>
  <tr>
    <td colspan="2"><?   echo (->$Item["Texto"]->$Value);?> - <?   echo (->$Item["Nombre"]->$Value);?> - <?   echo (->$Item["Descripcion"]->$Value);?>&nbsp;</td>
    <td align="right"><?   echo (->$Item["ValorIndemnizacion"]->$Value);?>&nbsp;&euro;</td>
  </tr>
  <? 
  if (!($Item["ValorIndemnizacion"]$Value==""))
  {
    $total_Importe=$total_Importe+->$Item["ValorIndemnizacion"]->$Value;
  } 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Facturas=mysql_fetch_array($Facturas_query);
  $Facturas_BOF=0;

} 
?>
  <tr bgcolor="#CCCCCC">
    <td align="right" bgcolor="#CCCCCC" colspan="2"><strong>SubTotal:</strong></td>
    <td align="right"><? echo $total_Importe;?>&nbsp;&euro;</td>
  </tr>
</table>
<h1 align="right"><br>
  Total:<? echo round(($total_Importe+$suma_indemnizacion+$Siniestro->Fields->$Item["FactorCorrectorValor"]->$Value+$Siniestro->Fields->$Item["Incapacidad"]->$Value),2);?> &euro; </h1>
</body>
</html>
<? 

$Facturas=null;

?>
<? 

$Datos=null;

?>
<? 
$Siniestro->Close();
$Siniestro=null;

?>

