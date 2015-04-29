<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $Comisiones is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.Nombre as anombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.Id, Siniestro.[Fecha Siniestro], Profesionales.Nombre  FROM ((Abonados INNER JOIN Siniestro ON Abonados.Id = Siniestro.Abonado) INNER JOIN Facturas ON Siniestro.Id = Facturas.Siniestro) INNER JOIN Profesionales ON Facturas.Valor = Profesionales.ID  WHERE (((Facturas.EstadoPago)=1))  ORDER BY Profesionales.Nombre;";
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
<title>Comisiones sin cobrar</title>
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
while((($Repeat1__numRows!=0) && (!($Comisiones==0))))
{

?>
  <tr>
    <td><a href="Siniestro.asp?Id=<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["anombre"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?></a></td>
    <td><?   echo (->$Item["Fecha Siniestro"]->$Value);?></td>
    <td><?   echo (->$Item["Nombre"]->$Value);?></td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Comisiones=mysql_fetch_array($Comisiones_query);
  $Comisiones_BOF=0;

} 
?>
</table>
</body>
</html>
<? 

$Comisiones=null;

?>

