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

// $Comisiones_cmd is of type "ADODB.Command"
$Comisiones_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Comisiones_cmd_CommandText="SELECT Siniestro.Id, Sum(Facturas.[Cuantia rumbo]) AS [SumaDeCuantia rumbo], Abonados.Nombre, Abonados.Apellido1, Abonados.Apellido2, Fases.Texto, Siniestro.FirmadoAnexo, Siniestro.Fase FROM (Facturas INNER JOIN (Siniestro INNER JOIN Abonados ON Siniestro.Abonado = Abonados.Id) ON Facturas.Siniestro = Siniestro.Id) INNER JOIN Fases ON Siniestro.Fase = Fases.Id GROUP BY Siniestro.Id, Abonados.Nombre, Abonados.Apellido1, Abonados.Apellido2, Fases.Texto, Siniestro.FirmadoAnexo, Siniestro.Fase HAVING (((Siniestro.Fase)<30)) ORDER BY Sum(Facturas.[Cuantia rumbo]) DESC;";
$Comisiones_cmd_Prepared=true;

$Comisiones=$Comisiones_cmd_Execute=$Comisiones_numRows=0;;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Comisiones_numRows=$Comisiones_numRows+$Repeat1__numRows;
?>
<html>
<head>
<title>Facturas de clientes</title>
</head>

<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" bgproperties="fixed" text="#000000" topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<table width="100%"  border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td>Nombre</td>
    <td>Fase</td>
    <? if ($_SESSION['CBeneficio']==true)
{
?><td align="right">Pagado</td><? } ?>
  </tr>
  <? 
$total=0;
while((($Repeat1__numRows!=0) && (!$Comisiones->EOF)))
{

?>
  <tr>
    <td><a href="Siniestro.asp?Id=<?   echo ($Comisiones->Fields->$Item["Id"]->$Value);?>"><?   echo ($Comisiones->Fields->$Item["Nombre"]->$Value);?>&nbsp;<?   echo ($Comisiones->Fields->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo ($Comisiones->Fields->$Item["Apellido2"]->$Value);?></a></td>
    <td><?   echo ($Comisiones->Fields->$Item["Texto"]->$Value);?></td>
    <?   if ($_SESSION['CBeneficio']==true)
  {
?><td align="right"><?     echo ($Comisiones->Fields->$Item["SumaDeCuantia rumbo"]->$Value);?>&euro;</td><?   } ?>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Comisiones->MoveNext();
} 
?>
</table>
</body>
</html>
<? 
$Comisiones->Close();
$Comisiones=null;

?>

