<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $Profesional is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM TipoProfesional ORDER BY Texto ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Profesional_numRows=0;
?>

<html>
<head>
<title>Listado de Profesionales</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30">
<p>
  <script language="JavaScript" src="menu.js"></script>
  <em><strong>Introduce datos del agente a buscar:</strong></em></p>
<form name="form1" method="post" action="ProfesionalListarSalida.php">
  Grupo Profesional: 
  <select name="Profesional" id="Profesional">
    <? 
while((!($Profesional==0)))
{

?>
    <option value="<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["Texto"]->$Value);?></option>
    <? 
  $Profesional=mysql_fetch_array($Profesional_query);
  $Profesional_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
  </select>
  <br>
  Nombre: 
  <input name="Nombre" type="text" id="Nombre">
  Especialidad:
  <input name="especialidad" type="text" id="especialidad">
  <br>
  Localidad: 
  <input name="Localidad" type="text" id="Localidad">
  <br>
  <input type="submit" name="Submit" value="Buscar">
</form>
<p>&nbsp; </p>
</body>
</html>
<? 

$Profesional=null;

?>

