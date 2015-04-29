<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Clientes__MMColParam="False";
if ((${"MM_EmptyValue"}!=""))
{

  $Clientes__MMColParam=${"MM_EmptyValue"};
} 

?>
<? 

// $Clientes_cmd is of type "ADODB.Command"
$Clientes_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Clientes_cmd_CommandText="SELECT Nombre, Apellido1, Apellido2, Direccion, [Codigo Postal], Localidad, Provincia, ModeloContrato FROM Abonados WHERE NoMailing = ? ORDER BY [Codigo Postal] ASC";
$Clientes_cmd_Prepared=true;
$Clientes_cmd_Parameters=$Append$Clientes_cmd_CreateParameter="param1"$Clientes__MMColParam); // adBoolean

$Clientes=$Clientes_cmd_Execute=$Clientes_numRows=0;;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Clientes_numRows=$Clientes_numRows+$Repeat1__numRows;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listado de clientes para mailing</title>
</head>

<body>
<table width="100%" border="1">
  <tr bgcolor="#CCCCCC">
    <td>Nombre</td>
    <td>Direccion</td>
    <td>Localidad</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!$Clientes->EOF)))
{

?>
    <tr <?   if ((($Clientes->Fields$Item["ModeloContrato"]$Value<=2)))
  {
?>bgcolor="#CCCCCC"<?   } ?>>
      <td><?   echo ($Clientes->Fields->$Item["Nombre"]->$Value);?>&nbsp;<?   echo ($Clientes->Fields->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo ($Clientes->Fields->$Item["Apellido2"]->$Value);?></td>
      <td><?   echo ($Clientes->Fields->$Item["Direccion"]->$Value);?></td>
      <td><?   echo ($Clientes->Fields->$Item["Codigo Postal"]->$Value);?>&nbsp;<?   echo ($Clientes->Fields->$Item["Localidad"]->$Value);?>&nbsp;(<?   echo ($Clientes->Fields->$Item["Provincia"]->$Value);?>)</td>
    </tr>
    <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Clientes->MoveNext();
} 
?>
</table>
</body>
</html>
<? 
$Clientes->Close();
$Clientes=null;

?>

