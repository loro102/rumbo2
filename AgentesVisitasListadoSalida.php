<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Visitas__DAgente="%";
if (($_POST["Agente"]!=""))
{

  $Visitas__DAgente=$_POST["Agente"];
} 

?>
<? 
$Visitas__DLocalidad="%";
if (($_POST["Localidad"]!=""))
{

  $Visitas__DLocalidad=$_POST["Localidad"];
} 

?>
<? 
$Visitas__FI="01/01/2000";
if (($_POST["FInicio"]!=""))
{

  $Visitas__FI=$_POST["FInicio"];
} 

?>
<? 
$Visitas__FF="01/01/2099";
if (($_POST["FFin"]!=""))
{

  $Visitas__FF=$_POST["FFin"];
} 

?>
<? 

// $Visitas_cmd is of type "ADODB.Command"
$Visitas_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Visitas_cmd_CommandText="SELECT Agentes.Id, Agentes.Nombre, Agentes.Comercial, Agentes.Localidad, VisitasAgentes.Fecha, VisitasAgentes.Comentario FROM VisitasAgentes INNER JOIN Agentes ON VisitasAgentes.AgenteId = Agentes.Id WHERE (((Agentes.Comercial) Like ?) AND ((Agentes.Localidad) Like ?) AND ((VisitasAgentes.Fecha) Between format(?,'dd/mm/yyyy') And format(?,'dd/mm/yyyy'))) ORDER BY VisitasAgentes.Fecha DESC;";
$Visitas_cmd_Prepared=true;
$Visitas_cmd_Parameters=$Append$Visitas_cmd_CreateParameter="param1"$Visitas__DAgente+"%"); // adVarChar
$Visitas_cmd_Parameters=$Append$Visitas_cmd_CreateParameter="param2"$Visitas__DLocalidad+"%"); // adVarChar
$Visitas_cmd_Parameters=$Append$Visitas_cmd_CreateParameter="param3"$Visitas__FI); // adDBTimeStamp
$Visitas_cmd_Parameters=$Append$Visitas_cmd_CreateParameter="param4"$Visitas__FF); // adDBTimeStamp

$Visitas=$Visitas_cmd_Execute=$Visitas_numRows=0;;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Visitas_numRows=$Visitas_numRows+$Repeat1__numRows;
?>
<html>
<head>
<title>Listado de facturas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="20">
<script language="JavaScript" src="menu.js"></script>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bordercolor="#000000" bgcolor="#CCCCCC">
    <td>Fecha</td>
    <td>Agente</td>
    <td>Comercial</td>
    <td>Localidad</td>
    <td>Comentario</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!$Visitas->EOF)))
{

?>
    <tr>
      <td><?   echo ($Visitas->Fields->$Item["Fecha"]->$Value);?></td>
      <td><a href="AgenteModificar.asp?Id=<?   echo ($Visitas->Fields->$Item["Id"]->$Value);?>"><?   echo ($Visitas->Fields->$Item["Nombre"]->$Value);?></a></td>
      <td><?   echo ($Visitas->Fields->$Item["Comercial"]->$Value);?></td>
      <td><?   echo ($Visitas->Fields->$Item["Localidad"]->$Value);?></td>
      <td><?   echo ($Visitas->Fields->$Item["Comentario"]->$Value);?></td>
    </tr>
    <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Visitas->MoveNext();
} 
?>
</table>

</body>
</html>
<? 
$Visitas->Close();
$Visitas=null;

?>

