<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Siniestros__DDcia="%";
if (($_POST["Cia"]!=""))
{

  $Siniestros__DDcia=$_POST["Cia"];
} 

?>
<? 

// $Siniestros is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.Nombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.Compañia as cpropia, Contrarios.Compañia as cia, Siniestro.Fase, Fases.Texto, Siniestro.Id, Siniestro.[Fecha Siniestro]  FROM Fases INNER JOIN ((Abonados INNER JOIN Siniestro ON Abonados.Id = Siniestro.Abonado) INNER JOIN Contrarios ON Siniestro.Id = Contrarios.Siniestro) ON Fases.Id = Siniestro.Fase  WHERE (((Contrarios.Compañia)like '%"+str_replace("'","''",$Siniestros__DDcia)+"%') AND ((Siniestro.Fase)<70))  ORDER BY Siniestro.Fase";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Siniestros_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Siniestros_numRows=$Siniestros_numRows+$Repeat1__numRows;
?>
<html>
<head>
<title>Listado por Cia. Contraria</title>
</head>

<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" bgproperties="fixed" text="#000000" topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<table width="100%"  border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC">
    <td>Nombre</td>
    <td>Fecha de siniestro </td>
    <td>Compa&ntilde;ia</td>
    <td>Fase</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!($Siniestros==0))))
{

?>
  <tr>
    <td><a href="Siniestro.asp?Id=<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?></a></td>
    <td><?   echo (->$Item["Fecha Siniestro"]->$Value);?></td>
    <td><?   echo (->$Item["cia"]->$Value);?></td>
    <td><?   echo (->$Item["Texto"]->$Value);?></td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Siniestros=mysql_fetch_array($Siniestros_query);
  $Siniestros_BOF=0;

} 
?>
</table>


</body>
</html>
<? 

$Siniestros=null;

?>

