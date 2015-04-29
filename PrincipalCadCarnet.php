<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $CadCarnet_cmd is of type "ADODB.Command"
$CadCarnet_cmd_ActiveConnection=$MM_connrumbo_STRING;
$CadCarnet_cmd_CommandText="SELECT Abonados.Id, Abonados.Nombre, Abonados.Apellido1, Abonados.Apellido2, Abonados.FechaCadCarnet FROM Abonados WHERE ((Not (Abonados.FechaCadCarnet) Is Null And (Abonados.FechaCadCarnet) Between Now() And Now()+30));";
$CadCarnet_cmd_Prepared=true;

$CadCarnet=$CadCarnet_cmd_Execute=$CadCarnet_numRows=0;;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$CadCarnet_numRows=$CadCarnet_numRows+$Repeat1__numRows;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body style="background-color: transparent;" onLoad="window.parent.document.getElementById('CadCarnet').style.height=document.body.scrollHeight;"> 
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
    <tr bgcolor="#CCCCCC">
      <td>Nombre</td>
      <td>Fecha de caducidad</td>
    </tr>
    <? 
while((($Repeat1__numRows!=0) && (!$CadCarnet->EOF)))
{

?>
      <tr>
        <td><a href="Cliente.asp?Id=<?   echo ($CadCarnet->Fields->$Item["Id"]->$Value);?>" target="_parent"><?   echo ($CadCarnet->Fields->$Item["Nombre"]->$Value);?>&nbsp;<?   echo ($CadCarnet->Fields->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo ($CadCarnet->Fields->$Item["Apellido2"]->$Value);?></a></td>
        <td><?   echo ($CadCarnet->Fields->$Item["FechaCadCarnet"]->$Value);?></td>
      </tr>
      <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $CadCarnet->MoveNext();
} 
?>

</table>
</body><div align="right">
<h6>Entradas: <? echo $Repeat1__index;?></h6>
</div>
</html>
<? 
$CadCarnet->Close();
$CadCarnet=null;

?>

