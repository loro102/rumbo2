<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $Listado_cmd is of type "ADODB.Command"
$Listado_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Listado_cmd_CommandText="SELECT Abonados.Nombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.[Fecha Siniestro], Profesionales.Nombre as PNombre, Fases.Texto, Siniestro.Id FROM Fases INNER JOIN (Profesionales INNER JOIN ((Abonados INNER JOIN Siniestro ON Abonados.Id = Siniestro.Abonado) INNER JOIN SiniestroProfesional ON Siniestro.Id = SiniestroProfesional.Siniestro) ON Profesionales.ID = SiniestroProfesional.Profesional) ON Fases.Id = Siniestro.Fase WHERE (((Profesionales.Tipo)=1) AND ((Siniestro.AsistenciaJuridica)=False) AND ((Siniestro.Tipo)=1) AND ((Fases.Id)<70)) ORDER BY Siniestro.[Fecha Siniestro], Fases.Id;";
$Listado_cmd_Prepared=true;

$Listado=$Listado_cmd_Execute=$Listado_numRows=0;;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Listado_numRows=$Listado_numRows+$Repeat1__numRows;
?>
<head>
<title>Listado de expedientes con abogadoy sin marcar la asistencia juridica</title>
</head>

<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" bgproperties="fixed" text="#000000" topmargin="30"><script language="JavaScript" src="menu.js"></script>
<table width="100%"  border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC">
    <td>Nombre</td>
    <td>Fecha de siniestro </td>
    <td>Abogado</td>
    <td>Fase</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!$Listado->EOF)))
{

?>
    <tr>
      <td><a href="Siniestro.asp?Id=<?   echo ($Listado->Fields->$Item["Id"]->$Value);?>"><?   echo ($Listado->Fields->$Item["Nombre"]->$Value);?>&nbsp;<?   echo ($Listado->Fields->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo ($Listado->Fields->$Item["Apellido2"]->$Value);?></a></td>
      <td><?   echo ($Listado->Fields->$Item["Fecha Siniestro"]->$Value);?></td>
      <td><?   echo ($Listado->Fields->$Item["PNombre"]->$Value);?></td>
      <td><?   echo ($Listado->Fields->$Item["Texto"]->$Value);?></td>
    </tr>
    <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Listado->MoveNext();
} 
?>
</table>
</body>
</html>
<? 
$Listado->Close();
$Listado=null;

?>

