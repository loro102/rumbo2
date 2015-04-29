<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $Facturas is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.Nombre as anombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.[Fecha Siniestro], Profesionales.Nombre, Siniestro.Id  FROM ((Abonados INNER JOIN Siniestro ON Abonados.Id = Siniestro.Abonado) INNER JOIN Facturas ON Siniestro.Id = Facturas.Siniestro) INNER JOIN Profesionales ON Facturas.Valor = Profesionales.ID  WHERE (((Facturas.FormaPago)<2 And (Facturas.FormaPago)=1) AND ((Siniestro.Fase)>=55 and (Siniestro.Fase)<=70))  ORDER BY Profesionales.Nombre";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Facturas_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Facturas_numRows=$Facturas_numRows+$Repeat1__numRows;
?>
<html>
<head>
<title>Pagos sin hacer</title>
</head>

<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" bgproperties="fixed" text="#000000" topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<table width="100%"  border="1" cellspacing="0" bordercolor="#000000">
  <tr>
    <td>Nombre</td>
    <td>Fecha de Siniestro </td>
    <td>Profesional</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!($Facturas==0))))
{

?>
  <tr>
    <td><a href="Siniestro.asp?Id=<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["aNombre"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?></a></td>
    <td><?   echo (->$Item["Fecha Siniestro"]->$Value);?></td>
    <td><?   echo (->$Item["Nombre"]->$Value);?></td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Facturas=mysql_fetch_array($Facturas_query);
  $Facturas_BOF=0;

} 
?>
</table>
</body>
</html>
<? 

$Facturas=null;

?>

