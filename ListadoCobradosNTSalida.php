<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Cobrados__MMFComienzo="1/1/2000";
if (($_POST["FComienzo"]!=""))
{

  $Cobrados__MMFComienzo=$_POST["FComienzo"];
} 

?>
<? 
$Cobrados__MMFFinal="31/12/2030";
if (($_POST["FFinal"]!=""))
{

  $Cobrados__MMFFinal=$_POST["FFinal"];
} 

?>
<? 

// $Cobrados is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT DISTINCT Abonados.Nombre as AbNombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.PagoAgente, Siniestro.Id as SiniId, Siniestro.Percivido, Profesionales.Nombre, Agentes.Nombre as AgNombre  FROM (((Abonados INNER JOIN Siniestro ON Abonados.Id = Siniestro.Abonado) INNER JOIN Facturas ON Siniestro.Id = Facturas.Siniestro) INNER JOIN Agentes ON Abonados.Agente = Agentes.Id) INNER JOIN Profesionales ON Facturas.Valor = Profesionales.ID  WHERE (((Facturas.FechaPago) Between format('"+str_replace("'","''",$Cobrados__MMFComienzo)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Cobrados__MMFFinal)+"','dd/mm/yyyy')) AND ((Profesionales.Nombre)='Honorarios rumbo') AND ((Siniestro.Tipo)=3))";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Cobrados_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Cobrados_numRows=$Cobrados_numRows+$Repeat1__numRows;
?>
<html>
<head>
<title>Listado de cobrados no trafico</title>
</head>

<body topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<table width="100%"  border="1" cellspacing="0">
  <tr bgcolor="#00CC00">
    <td>Nombre</td>
    <td>Agente</td>
    <td>Pago al Agente </td>
    <td>Beneficio</td>
  </tr>
<? $totalcobrado=0;
$totalagente=0;?>
  <? 
while((($Repeat1__numRows!=0) && (!($Cobrados==0))))
{

?>
  <tr>
    <td><a href="Siniestro.asp?Id=<?   echo (->$Item["SiniId"]->$Value);?>"><?   echo (->$Item["AbNombre"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?></a></td>
    <td><?   echo (->$Item["AgNombre"]->$Value);?></td>
    <td><?   echo (->$Item["PagoAgente"]->$Value);?> &euro; </td>
    <td><?   echo (->$Item["Percivido"]->$Value);?> &euro; </td>
  </tr>
  <? 
  if (!(($Item["Percivido"]$Value)==""))
  {
    $totalcobrado=$totalcobrado+(->$Item["Percivido"]->$Value);
  } 
  if (!($Item["PagoAgente"]$Value)=="")
  {
    $totalagente=$totalagente+(->$Item["PagoAgente"]->$Value);
  } 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Cobrados=mysql_fetch_array($Cobrados_query);
  $Cobrados_BOF=0;

} 
?>
  <tr>
    <td colspan="2"><div align="right">Total:</div></td>
    <td><? echo $totalagente;?>&euro;</td>
    <td><? echo $totalcobrado;?>&euro;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="right">Media:</div></td>
<? if ($Repeat1__index==0)
{
?>
    <td>0 &euro;</td>
    <td>0 &euro;</td>
<? }
  else
{
?>    <td><?   echo $totalagente/$Repeat1__index;?>&euro;</td>
    <td><?   echo $totalcobrado/$Repeat1__index;?>&euro;</td><? } ?>
  </tr>
</table>
<br>
Total:<? echo $Repeat1__index;?>
</body>
</html>
<? 

$Cobrados=null;

?>

