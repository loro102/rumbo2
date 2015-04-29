<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Abonado__MMColParam="1";
if (($_GET["AbonadoId"]!=""))
{

  $Abonado__MMColParam=$_GET["AbonadoId"];
} 

?>
<? 

// $Abonado is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Abonados WHERE Id = "+str_replace("'","''",$Abonado__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Abonado_numRows=0;
?>
<? 
$Siniestro__MMColParam="1";
if (($_GET["SiniestroId"]!=""))
{

  $Siniestro__MMColParam=$_GET["SiniestroId"];
} 

?>
<? 

// $Siniestro is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Siniestro WHERE Id = "+str_replace("'","''",$Siniestro__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Siniestro_numRows=0;
?>
<? 
$Abogado__NSiniestro="1";
if (($_GET["SiniestroId"]!=""))
{

  $Abogado__NSiniestro=$_GET["SiniestroId"];
} 

?>
<? 

// $Abogado is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Profesionales.Nombre, Profesionales.Ext1  FROM Profesionales,SiniestroProfesional  where SiniestroProfesional.Siniestro="+str_replace("'","''",$Abogado__NSiniestro)+" and Profesionales.ID=SiniestroProfesional.Profesional and Profesionales.Tipo=1";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Abogado_numRows=0;
?>
<? 
$Procurador__NSiniestro="1";
if (($_GET["SiniestroId"]!=""))
{

  $Procurador__NSiniestro=$_GET["SiniestroId"];
} 

?>
<? 

// $Procurador is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Profesionales.Nombre, Profesionales.Ciudad  FROM Profesionales,SiniestroProfesional  WHERE SiniestroProfesional.Siniestro="+str_replace("'","''",$Procurador__NSiniestro)+" and Profesionales.ID=SiniestroProfesional.Profesional and Profesionales.Tipo=7";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Procurador_numRows=0;
?>
<html>
<head>
<title>Solicitud de Abogado y Procurador</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30">
<strong><em> 
<script language="JavaScript" src="menu.js"></script>
</em></strong>
<form name="form1" method="post" action="">
  <p>Lugar: 
    <input name="textfield" type="text" value="Le&oacute;n">
    Fecha:
    <input name="textfield2" type="text" value="<? echo time()();?>">
  </p>
  <p>Datos del cliente:</p>
  <p>Nombre: 
    <input name="Nombre" type="text" id="Nombre" value="<? echo (->$Item["Nombre"]->$Value);?>&nbsp;<? echo (->$Item["Apellido1"]->$Value);?>&nbsp;<? echo (->$Item["Apellido2"]->$Value);?>" size="50">
    <br>
    Direccion: 
    <input name="Direccion" type="text" id="Direccion" value="<? echo (->$Item["Direccion"]->$Value);?>" size="60">
    <br>
    Localidad: 
    <input name="CPCiudad" type="text" id="CPCiudad" value="<? echo (->$Item["Codigo Postal"]->$Value);?>&nbsp;<? echo (->$Item["Localidad"]->$Value);?>(<? echo (->$Item["Provincia"]->$Value);?>)" size="50">
  </p>
  <p>Datos del siniestro:</p>
  <p>Fecha del siniestro: 
    <input name="FSiniestro" type="text" id="FSiniestro" value="<? echo (->$Item["Fecha Siniestro"]->$Value);?>">
    N&uacute;mero de poliza: 
    <input name="NPoliza" type="text" id="NPoliza" value="<? echo (->$Item["Nro Poliza"]->$Value);?>">
  </p>
  <p>Abogado:</p>
  <p>Nombre: 
    <input name="Abogado" type="text" id="Abogado" value="<? echo (->$Item["Nombre"]->$Value);?>" size="60">
    N&uacute;mero de colegiado: 
    <input name="NroAbogado" type="text" id="NroAbogado" value="<? echo (->$Item["Ext1"]->$Value);?>">
  </p>
  <p>Procurador:</p>
  <p>Nombre: 
    <input name="Procurador" type="text" id="Procurador" value="<? echo (->$Item["Nombre"]->$Value);?>" size="60">
    Localidad: 
    <input name="CiudadProcurador" type="text" id="CiudadProcurador" value="<? echo (->$Item["Ciudad"]->$Value);?>">
  </p>
  <p>Datos de la compa&ntilde;ia:</p>
  <p>Nombre: 
    <input name="Compania" type="text" id="Compania" value="<? echo (->$Item["Compañia"]->$Value);?>" size="50">
    <br>
    Direccion: 
    <input name="CDireccion" type="text" id="CDireccion" size="60">
    <br>
    Localidad: 
    <input name="CCPCiudad" type="text" id="CCPCiudad" size="50">
  </p>
  </form>
</body>
</html>
<? 

$Abonado=null;

?>
<? 

$Siniestro=null;

?>
<? 

$Abogado=null;

?>
<? 

$Procurador=null;

?>

