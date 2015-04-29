<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$caducan__inicio="1/1/2000";
if ((mktime(0,0,0,strftime("%m",time()),16,strftime("%Y",time())-1)!=""))
{

  $caducan__inicio=mktime(0,0,0,strftime("%m",time()),16,strftime("%Y",time())-1);
} 

?>
<? 
$caducan__fin="1/1/2099";
if (($dateadd["D"][-1][$dateadd["M"][1][mktime(0,0,0,strftime("%m",time()),16,strftime("%Y",time())-1)]]!=""))
{

  $caducan__fin=$dateadd["D"][-1][$dateadd["M"][1][mktime(0,0,0,strftime("%m",time()),16,strftime("%Y",time())-1)]];
} 

?>
<? 

// $caducan_cmd is of type "ADODB.Command"
$caducan_cmd_ActiveConnection=$MM_connrumbo_STRING;
$caducan_cmd_CommandText="SELECT Abonados.*, ModelosContrato.Nombre as NombreModelo FROM Abonados, ModelosContrato WHERE (Abonados.FechaAbono between format(?,'dd/mm/yyyy') and format(?,'dd/mm/yyyy')) and Abonados.ModeloContrato>2 and Abonados.ModeloContrato=ModelosContrato.Id ORDER BY Abonados.FechaAbono desc";
$caducan_cmd_Prepared=true;
$caducan_cmd_Parameters=$Append$caducan_cmd_CreateParameter="param1"$caducan__inicio); // adDBTimeStamp
$caducan_cmd_Parameters=$Append$caducan_cmd_CreateParameter="param2"$caducan__fin); // adDBTimeStamp

$caducan=$caducan_cmd_Execute=$caducan_numRows=0;;
?>
<? 
$caducados__inicio="1/1/2000";
if (($dateadd["D"][-1][$dateadd["M"][-1][mktime(0,0,0,strftime("%m",time()),16,strftime("%Y",time())-1)]]!=""))
{

  $caducados__inicio=$dateadd["D"][-1][$dateadd["M"][-1][mktime(0,0,0,strftime("%m",time()),16,strftime("%Y",time())-1)]];
} 

?>
<? 
$caducados__fin="1/1/2099";
if ((mktime(0,0,0,strftime("%m",time()),15,strftime("%Y",time())-1)!=""))
{

  $caducados__fin=mktime(0,0,0,strftime("%m",time()),15,strftime("%Y",time())-1);
} 

?>
<? 

// $caducados is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Abonados  WHERE (FechaAbono between format('"+str_replace("'","''",$caducados__inicio)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$caducados__fin)+"','dd/mm/yyyy') )  and (ModeloContrato=2) ORDER BY FechaAbono desc";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$caducados_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$caducan_numRows=$caducan_numRows+$Repeat1__numRows;
?>
<? 

$Repeat2__numRows=-1;
$Repeat2__index=0;
$caducados_numRows=$caducados_numRows+$Repeat2__numRows;
?>
<html>
<head>
<title>Abonos que caducan</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body background="Imagenes/fondo.gif" bgproperties="fixed" topmargin="30">
<script language="JavaScript" src="menu.js"></script>
Abonos que caducan el <? echo $dateadd["M"][1][mktime(0,0,0,strftime("%m",time()),1,strftime("%Y",time()))];?>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr bgcolor="#CCCCCC">
    <td>Nombre</td>
    <td>Direcci&oacute;n</td>
    <td>Localidad</td>
    <td>Fecha de abono</td>
    <td>Fecha primer abono</td>
    <td>Modelo</td>
    <td>CCC</td>
    <td>Dto</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!$caducan->EOF)))
{

?>
  <tr>
    <td><?   echo ($caducan->Fields->$Item["Nombre"]->$Value);?>&nbsp;<?   echo ($caducan->Fields->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo ($caducan->Fields->$Item["Apellido2"]->$Value);?></td>
    <td><?   echo ($caducan->Fields->$Item["Direccion"]->$Value);?></td>
    <td><?   echo ($caducan->Fields->$Item["Codigo Postal"]->$Value);?>&nbsp;<?   echo ($caducan->Fields->$Item["Localidad"]->$Value);?> (<?   echo ($caducan->Fields->$Item["Provincia"]->$Value);?>)</td>
    <td><?   echo ($caducan->Fields->$Item["FechaAbono"]->$Value);?></td>
    <td><?   echo ($caducan->Fields->$Item["FechaPrimerAbono"]->$Value);?></td>
    <td><?   echo ($caducan->Fields->$Item["NombreModelo"]->$Value);?></td>
    <td><?   echo ($caducan->Fields->$Item["CCC"]->$Value);?></td>
    <td><?   echo ($caducan->Fields->$Item["Descuento"]->$Value);?></td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $caducan->MoveNext();
} 
?>
</table>
Abonos que caducar&oacute;n el <? echo mktime(0,0,0,strftime("%m",time()),1,strftime("%Y",time()));?>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr bgcolor="#CCCCCC">
    <td>Nombre</td>
    <td>Direcci&oacute;n</td>
    <td>Localidad</td>
    <td>Fecha de abono / primer abono </td>
    <td>DNI</td>
    <td>CCC</td>
    <td>Dto</td>
  </tr>
  <? 
while((($Repeat2__numRows!=0) && (!($caducados==0))))
{

?>
  <tr>
    <td><?   echo (->$Item["Nombre"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?></td>
    <td><?   echo (->$Item["Direccion"]->$Value);?></td>
    <td><?   echo (->$Item["Codigo Postal"]->$Value);?>&nbsp;<?   echo (->$Item["Localidad"]->$Value);?> (<?   echo (->$Item["Provincia"]->$Value);?>)</td>
    <td><?   echo (->$Item["FechaAbono"]->$Value);?> - <?   echo (->$Item["FechaPrimerAbono"]->$Value);?></td><td><?   echo (->$Item["NIF"]->$Value);?></td>
    <td><?   echo (->$Item["CCC"]->$Value);?></td>
    <td><?   echo (->$Item["Descuento"]->$Value);?></td>
  </tr>
  <? 
  $Repeat2__index=$Repeat2__index+1;
  $Repeat2__numRows=$Repeat2__numRows-1;
  $caducados=mysql_fetch_array($caducados_query);

} 
?>
</table>
</body>
</html>
<? 
$caducan->Close();
$caducan=null;

?>
<? 

$caducados=null;

?>

