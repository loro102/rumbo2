<? // asp2php (vbscript) converted
$CODEPAGE="1252"; ?>
<!--#include file="../Connections/Avata_seguros.php" -->
<? 

// $Recordset1 is of type "ADODB.Recordset"

echo $MM_Avata_seguros_STRING;
echo "SELECT * FROM Asegurado ORDER BY FechaBusqueda DESC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Recordset1_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Recordset1_numRows=$Recordset1_numRows+$Repeat1__numRows;
?>
<html>
<head>
<title>Seguros Avata</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body background="Imagenes/fondo.gif" bgproperties="fixed">
<p><a href="AseguradoInsertar.php">Insertar</a></p>
<table width="100%" border="1" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <td>Fecha Busqueda</td>
    <td>Nombre</td>
    <td>Tipo de seguro</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!($Recordset1==0))))
{

?>
  <tr>
    <td><?   echo (.$Item["FechaBusqueda"].$Value); ?></td>
    <td><a href="Asegurado.asp?IdAsegurado=<?   echo (.$Item["Id"].$Value); ?>"><?   echo (.$Item["Nombre"].$Value); ?></a></td>
    <td><?   echo (.$Item["TipoSeguro"].$Value); ?></td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Recordset1=mysql_fetch_array($Recordset1_query);

} 
?>
</table>
<p>&nbsp;</p>
</body>
</html>
<? 

$Recordset1=null;

?>

