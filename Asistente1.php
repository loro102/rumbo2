<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Clinicas__MMColParam="4";
if ((${"MM_EmptyValue"}!=""))
{

  $Clinicas__MMColParam=${"MM_EmptyValue"};
} 

?>
<? 

// $Clinicas is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Profesionales WHERE Tipo = "+str_replace("'","''",$Clinicas__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Clinicas_numRows=0;
?>
<? 
$Medicos__MMColParam="5";
if ((${"MM_EmptyValue"}!=""))
{

  $Medicos__MMColParam=${"MM_EmptyValue"};
} 

?>
<? 

// $Medicos is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Profesionales WHERE Tipo = "+str_replace("'","''",$Medicos__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Medicos_numRows=0;
?>
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="">
<h2>Datos Personales:</h2>
<p>Nombre:
    <input name="Nombre" type="text" id="Nombre">
  Apellido 1:
  <input name="Apellido1" type="text" id="Nombre">
  Apellido 2:
  <input name="Apellido2" type="text" id="Nombre">
  <br>
  DNI:
  <input name="DNI" type="text" id="Nombre">
  <br>
  Direccion:
  <input name="Direccion" type="text" id="Nombre">
  <br>
  CP:
  <input name="CP" type="text" id="Nombre">
  Localidad:
  <input name="Localidad" type="text" id="Nombre">
  Provincia:
  <input name="Provincia" type="text" id="Nombre">
  <br>
  Telefono1:
  <input name="Telefono1" type="text" id="Nombre">
  Telefono2:
  <input name="Telefono2" type="text" id="Nombre">
</p>
<p>Datos del siniestro:</p>
<p>  
Fecha del siniestro:<input name="FSiniestro" type="text" id="Nombre">
<br>
Matricula del vehiculo:<input name="Matricula" type="text" id="Nombre">
<br>
Compañia del seguro:<input name="Cia" type="text" id="Nombre">
Numero de poliza:<input name="NPoliza" type="text" id="Nombre">
</p>
<p>Datos sobre profesionales:</p>
<p>Clinica: 
  <select name="Clinica" id="Clinica">
    <option value="no" selected>Ninguna</option>
    <? 
while((!($Clinicas==0)))
{

?>
    <option value="<?   echo (->$Item["ID"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?></option>
    <? 
  $Clinicas=mysql_fetch_array($Clinicas_query);

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
  Medico:
  <select name="Medico" id="Medico">
  <option value="no" selected>Ninguno</option>
  <? 
while((!($Medicos==0)))
{

?>
  <option value="<?   echo (->$Item["ID"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?></option>
  <? 
  $Medicos=mysql_fetch_array($Medicos_query);

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
  </select>
</p>
</form>
</body>
</html>
<? 

$Clinicas=null;

?>
<? 

$Medicos=null;

?>

