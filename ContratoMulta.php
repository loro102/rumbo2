<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:45 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Abonado__MMColParam="1";
if (($_GET["AbonadoId"]!=""))
{

  $Abonado__MMColParam=$_GET["AbonadoId"];
} 

?>
<? 

// $Abonado_cmd is of type "ADODB.Command"
$Abonado_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Abonado_cmd_CommandText="SELECT Abonados.*, ModelosContrato.Multas FROM Abonados, ModelosContrato WHERE Abonados.Id = ? and Abonados.ModeloContrato=ModelosContrato.Id";
$Abonado_cmd_Prepared=true;
$Abonado_cmd_Parameters=$Append$Abonado_cmd_CreateParameter="param1"$Abonado__MMColParam); // adDouble

$Abonado=$Abonado_cmd_Execute=$Abonado_numRows=0;;
?>
<? 
$Siniestro__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Siniestro__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Siniestro_cmd is of type "ADODB.Command"
$Siniestro_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Siniestro_cmd_CommandText="SELECT * FROM Siniestro WHERE Id = ?";
$Siniestro_cmd_Prepared=true;
$Siniestro_cmd_Parameters=$Append$Siniestro_cmd_CreateParameter="param1"$Siniestro__MMColParam); // adDouble

$Siniestro=$Siniestro_cmd_Execute=$Siniestro_numRows=0;;
?>
<head>
<title>Contrato de recurso de multa</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<script language="javascript">
function valida_envia(){
    //valido el nombre
    if (document.form1.nombre.value.length==0){
       alert("Tiene que escribir un nombre");
       document.form1.nombre.focus();
       return false;
    } 
	if (document.form1.fecha.value.length==0){
		alert("Tiene que escribir una fecha");
		document.form1.fecha.focus();
		return false;
	}
	if (document.form1.domicilio.value.length==0){
		alert("Tiene que escribir un domicilio");
		document.form1.domicilio.focus();
		return false;
	}
	if (document.form1.nif.value.length==0){
		alert("Tiene que escribir un nif");
		document.form1.nif.focus();
		return false;
	}
	if (document.form1.importe.value.length==0){
		alert("Tiene que escribir un importe");
		document.form1.importe.focus();
		return false;
	}
	if (document.form1.numeroexp.value.length==0){
		alert("Tiene que escribir un numero de expediente");
		document.form1.numeroexp.focus();
		return false;
	}
	return true;
}
</script>
<form id="form1" name="form1" method="post" action="ContratoMultaSalida.php" onsubmit="return valida_envia()">
  <label>Fecha: <input name="fecha" type="text" id="fecha" size="50" />
  <script language="javascript">

var fecha=new Date();
var diames=fecha.getDate();
var diasemana=fecha.getDay();
var mes=fecha.getMonth() +1 ;
var ano=fecha.getFullYear();

var textosemana = new Array (7);
  textosemana[0]="Domingo";
  textosemana[1]="Lunes";
  textosemana[2]="Martes";
  textosemana[3]="Miércoles";
  textosemana[4]="Jueves";
  textosemana[5]="Viernes";
  textosemana[6]="Sábado";

var textomes = new Array (12);
  textomes[1]="Enero";
  textomes[2]="Febrero";
  textomes[3]="Marzo";
  textomes[4]="Abril";
  textomes[5]="Mayo";
  textomes[6]="Junio";
  textomes[7]="Julio";
  textomes[7]="Agosto";
  textomes[9]="Septiembre";
  textomes[10]="Octubre";
  textomes[11]="Noviembre";
  textomes[12]="Diciembre";

form1.fecha.value=textosemana[diasemana] + ", " + diames + " de " + textomes[mes] + " de " + ano;
</script>

  <br />
  Nombre
y apellidos: 
<input name="nombre" type="text" id="Nombre" value="<? echo ($Abonado->Fields->$Item["Nombre"]->$Value)+" "+($Abonado->Fields->$Item["Apellido1"]->$Value)+" "+($Abonado->Fields->$Item["Apellido2"]->$Value);?>" size="80"/>
  </label>
  <br />
  Domicilio:
  <label>
  <input name="domicilio" type="text" id="domicilio" value="<? echo ($Abonado->Fields->$Item["Direccion"]->$Value);?> de <? echo ($Abonado->Fields->$Item["Localidad"]->$Value);?>" size="40"/>
  <br />
  NIF:
<input name="nif" type="text" id="nif" value="<? echo ($Abonado->Fields->$Item["NIF"]->$Value);?>"/>
</label>
  <br />
  Importe de la multa  y privaci&oacute;n en su caso del permiso o reducci&oacute;n de puntos: 
  <input name="importe" type="text" />
  <br />
  N&uacute;mero de expediente: 
  <input name="numeroexp" type="text" value="<? echo ($Siniestro->Fields->$Item["RefExpediente"]->$Value);?>" />
  <br />
  <input name="AbondadoId" type="hidden" id="AbondadoId" value="<? echo ($Abonado->Fields->$Item["Id"]->$Value);?>" /><input name="FechaAbono" type="hidden" id="FechaAbono" value="<? echo ($Abonado->Fields->$Item["FechaAbono"]->$Value);?>" />
  <input name="Documento" type="hidden" id="Documento" value="<? 
if (($Abonado->Fields$Item["Multas"]$Value==true))
{

  print "Multas1abonado.rtf";
}
  else
{

  print "Multas1.rtf";
} ?>" /> 
<input name="Id" type="hidden" id="Id" value="<? echo $_GET["Id"];?>" />
<br />
<label>
<input type="submit" name="button" id="button" value="Enviar" />
</label>
</form>
</body>
</html>
<? 
$Abonado->Close();
$Abonado=null;

?>
<? 
$Siniestro->Close();
$Siniestro=null;

?>

