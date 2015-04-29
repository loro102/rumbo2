<?
  session_start();
  session_register("paginaant_session");
  session_register("MM_Username_session");
  session_register("PAnt_session");
  session_register("MM_UserAuthorization_session");
  session_register("CuentaVerExpedientes_session");
  session_register("Modaseguradora_session");
  session_register("CTramitadores_session");
  session_register("CFacturas_session");
  session_register("Siniestro_session");
  session_register("CBeneficio_session");
?>
<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:46 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $Comisiones is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.Nombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.Id, Siniestro.[Fecha Siniestro], Profesionales.Nombre as PNombre, Fases.Texto, Facturas.ValorReal  FROM Fases INNER JOIN (((Abonados INNER JOIN Siniestro ON Abonados.Id = Siniestro.Abonado) INNER JOIN Facturas ON Siniestro.Id = Facturas.Siniestro) INNER JOIN Profesionales ON Facturas.Valor = Profesionales.ID) ON Fases.Id = Siniestro.Fase  WHERE (((Fases.Id)<=50) AND ((Facturas.EstadoPago)>0) AND ((Facturas.EstadoCobro)=0) AND ((Facturas.ValorReal)>0))  ORDER BY Fases.Id;";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Comisiones_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Comisiones_numRows=$Comisiones_numRows+$Repeat1__numRows;
?>
<html>
<head>
<title>Facturas adelantadas</title>
</head>

<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" bgproperties="fixed" text="#000000" topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<table width="100%"  border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td>Nombre</td>
    <td>Fecha de Siniestro </td>
    <td>Profesional</td>
    <td>Fase</td>
    <? if ($_SESSION['CBeneficio']==true)
{
?><td>Pagado</td><? } ?>
  </tr>
  <? 
$total=0;
while((($Repeat1__numRows!=0) && (!($Comisiones==0))))
{

?>
  <tr>
    <td><a href="Siniestro.asp?Id=<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?></a></td>
    <td><?   echo (->$Item["Fecha Siniestro"]->$Value);?></td>
    <td><?   echo (->$Item["PNombre"]->$Value);?></td>
    <td><?   echo (->$Item["Texto"]->$Value);?></td>
    <?   if ($_SESSION['CBeneficio']==true)
  {
?><td><?     echo (->$Item["ValorReal"]->$Value);?>&euro;</td><?   } ?>
  </tr>
  <? 
  if (!($Item["ValorReal"]$Value==""))
  {
    $total=$total+->$Item["ValorReal"]->$Value;
  } 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Comisiones=mysql_fetch_array($Comisiones_query);
  $Comisiones_BOF=0;

} 
?>
</table>
<? if ($_SESSION['CBeneficio']==true)
{
?><p>Cantidad adelantada: <?   echo $total;?>&euro;</p>
<? } ?>
</body>
</html>
<? 

$Comisiones=null;

?>

