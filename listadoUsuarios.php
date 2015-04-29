<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $Usuarios is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Id, Nombre FROM Claves ORDER BY Nombre ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Usuarios_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Usuarios_numRows=$Usuarios_numRows+$Repeat1__numRows;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Lista de usuarios</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000" topmargin="30" background="Imagenes/fondo.gif" bgproperties="fixed">
<table width="100%"  border="1" cellspacing="0">
  <tr bgcolor="#00CC00">
    <td>Id</td>
    <td>Nombre</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!($Usuarios==0))))
{

?>
  <tr>
    <td><a href="Usuario.asp?Id=<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["Id"]->$Value);?></a></td>
    <td><a href="Usuario.asp?Id=<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?></a></td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Usuarios=mysql_fetch_array($Usuarios_query);
  $Usuarios_BOF=0;

} 
?>
</table>
<p><a href="AbogadoInsertar.php">Insertar abogados</a></p>
<p>
  <script language="JavaScript" src="menu.js"></script>
</p>


</body>
</html>
<? 

$Usuarios=null;

?>

