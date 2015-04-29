<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $Efectivos is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Agentes.Id, Agentes.Nombre, Agentes.Localidad, count(Siniestro.Id) as numsiniestros  FROM Abonados, Siniestro, Agentes  WHERE Siniestro.Abonado=Abonados.Id and Abonados.Agente=Agentes.Id and Siniestro.Fase<100 GROUP BY Agentes.Id,Agentes.Nombre,Agentes.Localidad  ORDER BY Agentes.Nombre ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Efectivos_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Efectivos_numRows=$Efectivos_numRows+$Repeat1__numRows;
?>
<html>
<head>
<title>Agentes Efectivos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30" background="Imagenes/fondo.gif" bgproperties="fixed">
<script language="JavaScript" src="menu.js"></script>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>Nombre</td>
    <td>Localidad</td>
    <td>Número de expedientes </td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!($Efectivos==0))))
{

?>
  <tr>
    <td><a href="AgenteModificar.asp?Id=<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?></a></td>
    <td><?   echo (->$Item["Localidad"]->$Value);?></td>
    <td><?   echo (->$Item["numsiniestros"]->$Value);?></td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Efectivos=mysql_fetch_array($Efectivos_query);

} 
?>

</table>
</body>
</html>
<? 

$Efectivos=null;

?>

