<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Recibos__MMFComienzo="1/1/2001";
if (($_POST["FComienzo"]!=""))
{

  $Recibos__MMFComienzo=$_POST["FComienzo"];
} 

?>
<? 
$Recibos__MMFFinal="1/1/2050";
if (($_POST["FFinal"]!=""))
{

  $Recibos__MMFFinal=$_POST["FFinal"];
} 

?>
<? 
$Recibos__MMFComienzo2="1/1/2001";
if (($_POST["FComienzo2"]!=""))
{

  $Recibos__MMFComienzo2=$_POST["FComienzo2"];
} 

?>
<? 
$Recibos__MMFFinal2="1/1/2050";
if (($_POST["FFinal2"]!=""))
{

  $Recibos__MMFFinal2=$_POST["FFinal2"];
} 

?>
<? 

// $Recibos_cmd is of type "ADODB.Command"
$Recibos_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Recibos_cmd_CommandText="SELECT Abonados.Nombre, Abonados.Apellido1, Abonados.Apellido2, Recibo.*, Recibo.fechacobro FROM Recibo INNER JOIN Abonados ON Recibo.cliente = Abonados.Id WHERE (((Recibo.fechaemision) Between format(?,'dd/mm/yyyy') And format(?,'dd/mm/yyyy')) AND ((Recibo.fechacobro) Between format(?,'dd/mm/yyyy') And format(?,'dd/mm/yyyy'))) ";
$Recibos_cmd_Prepared=true;
$Recibos_cmd_Parameters=$Append$Recibos_cmd_CreateParameter="param1"$Recibos__MMFComienzo); // adDBTimeStamp
$Recibos_cmd_Parameters=$Append$Recibos_cmd_CreateParameter="param2"$Recibos__MMFFinal); // adDBTimeStamp
$Recibos_cmd_Parameters=$Append$Recibos_cmd_CreateParameter="param3"$Recibos__MMFComienzo2); // adDBTimeStamp
$Recibos_cmd_Parameters=$Append$Recibos_cmd_CreateParameter="param4"$Recibos__MMFFinal2); // adDBTimeStamp

$Recibos=$Recibos_cmd_Execute=$Recibos_numRows=0;;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Recibos_numRows=$Recibos_numRows+$Repeat1__numRows;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Listado de recibos</title>
</head>

<body bgcolor="#FFFFFF" text="#000000" topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC">
    <td>Fecha de emisi&oacute;n</td>
    <td>Fecha de cobro</td>
    <td>Cliente</td>
    <td>Cuantia</td>
    <td>Concepto</td>
    <td>Notas</td>
  </tr><? 
$suma_cuantia=0;
?>
  <? 
while((($Repeat1__numRows!=0) && (!$Recibos->EOF)))
{

?>
    <tr>
      <td><?   echo ($Recibos->Fields->$Item["fechaemision"]->$Value);?></td>
      <td><?   echo ($Recibos->Fields->$Item["fechacobro"]->$Value);?></td>
      <td><?   echo ($Recibos->Fields->$Item["Nombre"]->$Value);?>&nbsp;<?   echo ($Recibos->Fields->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo ($Recibos->Fields->$Item["Apellido2"]->$Value);?></td>
      <td><?   echo ($Recibos->Fields->$Item["cuantia"]->$Value);?></td>
      <td><?   echo ($Recibos->Fields->$Item["concepto"]->$Value);?></td>
      <td><?   echo ($Recibos->Fields->$Item["notas"]->$Value);?></td>
    </tr>
    <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $suma_cuantia=$suma_cuantia+$Recibos->Fields->$Item["cuantia"]->$Value;
  $Recibos->MoveNext();
} 
?>
</table>
<p>Total de recibos:<? echo $Repeat1__index;?><br>Importe total:<? echo $suma_cuantia;?>&euro;</p>
</body>
</html>
<? 
$Recibos->Close();
$Recibos=null;

?>

