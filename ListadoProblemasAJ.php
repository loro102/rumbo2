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

// $SinFechaPresent_cmd is of type "ADODB.Command"
$SinFechaPresent_cmd_ActiveConnection=$MM_connrumbo_STRING;
$SinFechaPresent_cmd_CommandText="SELECT Abonados.Nombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.Id, Siniestro.[Fecha Siniestro], Siniestro.Fase, Siniestro.FechaEntregaAJ FROM Abonados INNER JOIN Siniestro ON Abonados.Id = Siniestro.Abonado WHERE (((Siniestro.Fase)=60) AND ((Siniestro.FechaEntregaAJ) Is Null)) OR (((Siniestro.Fase)=65) AND ((Siniestro.FechaEntregaAJ) Is Null));";
$SinFechaPresent_cmd_Prepared=true;

$SinFechaPresent=$SinFechaPresent_cmd_Execute=$SinFechaPresent_numRows=0;;
?>
<? 

// $SinCuantia_cmd is of type "ADODB.Command"
$SinCuantia_cmd_ActiveConnection=$MM_connrumbo_STRING;
$SinCuantia_cmd_CommandText="SELECT Abonados.Nombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.[Fecha Siniestro], Siniestro.AsistenciaJuridica, Siniestro.CuantiaAsistenciaJuridica, Siniestro.Fase, Siniestro.Id FROM Abonados INNER JOIN Siniestro ON Abonados.Id = Siniestro.Abonado WHERE (((Siniestro.AsistenciaJuridica)=True) AND ((Siniestro.CuantiaAsistenciaJuridica) Is Null) AND ((Siniestro.Fase)<60)) OR (((Siniestro.AsistenciaJuridica)=True) AND ((Siniestro.CuantiaAsistenciaJuridica)='') AND ((Siniestro.Fase)<60)) ORDER BY Siniestro.[Fecha Siniestro]";
$SinCuantia_cmd_Prepared=true;

$SinCuantia=$SinCuantia_cmd_Execute=$SinCuantia_numRows=0;;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Listado_numRows=$Listado_numRows+$Repeat1__numRows;
?>
<? 

$Repeat2__numRows=-1;
$Repeat2__index=0;
$SinFechaPresent_numRows=$SinFechaPresent_numRows+$Repeat2__numRows;
?>
<? 

$Repeat3__numRows=-1;
$Repeat3__index=0;
$SinCuantia_numRows=$SinCuantia_numRows+$Repeat3__numRows;
?>
<head>
<title>Listado de expedientes con problemas con la AJ</title>
</head>

<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" bgproperties="fixed" text="#000000" topmargin="30"><script language="JavaScript" src="menu.js"></script>
<p>Expediente con abogado y sin marcar la asistencia jurídica:</p>
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
</table><p>Expedientes en pendiente de aistencia jurídica pero sin fecha de presentación:</p>
<table width="100%"  border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC">
    <td>Nombre</td>
    <td>Fecha de siniestro </td>
  </tr>
  <? 
while((($Repeat2__numRows!=0) && (!$SinFechaPresent->EOF)))
{

?>
    <tr>
      <td><a href="Siniestro.asp?Id=<?   echo ($SinFechaPresent->Fields->$Item["Id"]->$Value);?>"><?   echo ($SinFechaPresent->Fields->$Item["Nombre"]->$Value);?>&nbsp;<?   echo ($SinFechaPresent->Fields->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo ($SinFechaPresent->Fields->$Item["Apellido2"]->$Value);?></a></td>
      <td><?   echo ($SinFechaPresent->Fields->$Item["Fecha Siniestro"]->$Value);?>&nbsp;</td>
    </tr>
    <? 
  $Repeat2__index=$Repeat2__index+1;
  $Repeat2__numRows=$Repeat2__numRows-1;
  $SinFechaPresent->MoveNext();
} 
?>
</table>

<p>Expedientes con AJ pero sin cuantia:</p>
<table width="100%"  border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC">
    <td>Nombre</td>
    <td>Fecha de siniestro </td>
  </tr>
  <? 
while((($Repeat3__numRows!=0) && (!$SinCuantia->EOF)))
{

?>
    <tr>
      <td><a href="Siniestro.asp?Id=<?   echo ($SinCuantia->Fields->$Item["Id"]->$Value);?>"><?   echo ($SinCuantia->Fields->$Item["Nombre"]->$Value);?>&nbsp;<?   echo ($SinCuantia->Fields->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo ($SinCuantia->Fields->$Item["Apellido2"]->$Value);?></a></td>
      <td><?   echo ($SinCuantia->Fields->$Item["Fecha Siniestro"]->$Value);?>&nbsp;</td>
    </tr>
    <? 
  $Repeat3__index=$Repeat3__index+1;
  $Repeat3__numRows=$Repeat3__numRows-1;
  $SinCuantia->MoveNext();
} 
?>
</table>
</body>
</html>
<? 
$Listado->Close();
$Listado=null;

?>
<? 
$SinFechaPresent->Close();
$SinFechaPresent=null;

?>
<? 
$SinCuantia->Close();
$SinCuantia=null;

?>

