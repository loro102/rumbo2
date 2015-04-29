<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $SinNotas_cmd is of type "ADODB.Command"
$SinNotas_cmd_ActiveConnection=$MM_connrumbo_STRING;
$SinNotas_cmd_CommandText="SELECT Abonados.Nombre as abonombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.[Fecha Siniestro], Fases.Texto, Max(NotasSiniestro.fecha) AS MáxDefecha, Siniestro.Id, Tramitadores.Nombre, Max(NotasSiniestro.fecha) AS MáxDefecha1 FROM (((NotasSiniestro INNER JOIN Siniestro ON NotasSiniestro.SiniestroId = Siniestro.Id) INNER JOIN Abonados ON Siniestro.Abonado = Abonados.Id) INNER JOIN Fases ON Siniestro.Fase = Fases.Id) INNER JOIN Tramitadores ON Siniestro.Tramitador = Tramitadores.Id GROUP BY Abonados.Nombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.[Fecha Siniestro], Fases.Texto, Siniestro.Id, Tramitadores.Nombre, Siniestro.Tipo, Siniestro.Fase HAVING (((Max(NotasSiniestro.fecha))<Now()-45) AND ((Siniestro.Tipo)=1) AND ((Siniestro.Fase)<70)) ORDER BY Tramitadores.Nombre, Siniestro.Fase, Max(NotasSiniestro.fecha) DESC;";
$SinNotas_cmd_Prepared=true;

$SinNotas=$SinNotas_cmd_Execute=$SinNotas_numRows=0;;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$SinNotas_numRows=$SinNotas_numRows+$Repeat1__numRows;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Expedientes sin notas en los ultimos 45 días</title>
</head>

<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr bgcolor="#CCCCCC">
    <td>Cliente</td>
    <td>Fecha de siniestro</td>
    <td>Tramitador</td>
    <td>Fase</td>
    <td>Ultima nota</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!$SinNotas->EOF)))
{

?>
    <tr>
      <td><a href="Siniestro.asp?Id=<?   echo ($SinNotas->Fields->$Item["Id"]->$Value);?>"><?   echo ($SinNotas->Fields->$Item["abonombre"]->$Value);?>&nbsp;<?   echo ($SinNotas->Fields->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo ($SinNotas->Fields->$Item["Apellido2"]->$Value);?></a></td>
      <td><?   echo ($SinNotas->Fields->$Item["Fecha Siniestro"]->$Value);?></td>
      <td><?   echo ($SinNotas->Fields->$Item["Nombre"]->$Value);?></td>
      <td><?   echo ($SinNotas->Fields->$Item["Texto"]->$Value);?></td>
      <td><?   echo ($SinNotas->Fields->$Item["MáxDefecha"]->$Value);?></td>
    </tr>
    <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $SinNotas->MoveNext();
} 
?>
</table>
</body>
</html>
<? 
$SinNotas->Close();
$SinNotas=null;

?>

