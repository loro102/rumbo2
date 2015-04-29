<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:46 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Abonado__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Abonado__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Abonado is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.*, Siniestro.[Fecha Siniestro] as FechaSini  FROM Abonados, Siniestro  WHERE Siniestro.Id = "+str_replace("'","''",$Abonado__MMColParam)+" and Abonados.Id=Siniestro.Abonado";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Abonado_numRows=0;
?>
<? //Session.lcid=1034  ?>
<html>
<head>
<title>Etiquetas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="25">
<p>
  <script language="JavaScript" src="menu.js"></script>
</p>
<form name="form1" method="get" action="etiquetasalida.php">
  <table width="100%" border="0">
    <tr>
      <td>Nombre: 
        <input name="Nombre" type="text" id="Nombre2" value="<? echo (->$Item["Nombre"]->$Value);?>&nbsp;<? echo (->$Item["Apellido1"]->$Value);?>&nbsp;<? echo (->$Item["Apellido2"]->$Value);?>"> <br>
        Direccion: 
        <input name="Direccion" type="text" id="Direccion2" value="<? echo (->$Item["Direccion"]->$Value);?>"> <br>
        Localidad: 
        <input name="Localidad" type="text" id="Localidad" value="<? echo (->$Item["Codigo Postal"]->$Value);?>&nbsp;<? echo (->$Item["Localidad"]->$Value);?>&nbsp;(<? echo (->$Item["Provincia"]->$Value);?>)"> <br>
        Telefonos: 
        <input name="Telefonos" type="text" id="Telefonos" value="<? 
print ->$Item["Telefono 1"]->$Value;
if (!($Item["Telefono 2"]$Value==""))
{
  print "/".->$Item["Telefono 2"]->$Value;
} 
if (!($Item["Telefono 3"]$Value==""))
{
  print "/".->$Item["Telefono 3"]->$Value;
} ?>"><br>        Fecha del siniestro: 
        <input name="FechaSini" type="text" id="FechaSini" value="<? echo (->$Item["FechaSini"]->$Value);?>">
 </td>
      <td><table width="100%" border="1" cellspacing="0" bordercolor="#000000">
          <tr> 
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="1">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="2">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="3">
              </div></td>
          </tr>
          <tr> 
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="4">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="5">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="6">
              </div></td>
          </tr>
          <tr> 
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="7">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="8">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="9">
              </div></td>
          </tr>
          <tr> 
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="10">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="11">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="12">
              </div></td>
          </tr>
          <tr> 
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="13">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="14">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="15">
              </div></td>
          </tr>
          <tr> 
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="16">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="17">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="18">
              </div></td>
          </tr>
          <tr> 
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="19">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="20">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="21">
              </div></td>
          </tr>
          <tr> 
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="22">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="23">
              </div></td>
            <td><div align="center"> 
                <input type="radio" name="radiobutton" value="24">
              </div></td>
          </tr>
        </table></td>
    </tr>
  </table>
  <p align="center"> 
    <input type="submit" name="Submit" value="Imprimir">
    <br>
  </p>
</form>
<p>&nbsp; </p>
</body>
</html>
<? 

$Abonado=null;

?>

