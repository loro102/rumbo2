<?
  session_start();
  session_register("paginaant_session");
  session_register("MM_Username_session");
  session_register("PAnt_session");
  session_register("MM_UserAuthorization_session");
  session_register("CuentaVerExpedientes_session");
  session_register("Modaseguradora_session");
  session_register("CTramitadores_session");
  session_register("CFacturas_session");
  session_register("Siniestro_session");
  session_register("CBeneficio_session");
  session_register("CModsiniestros_session");
  session_register("CIndemnizacion_session");
  session_register("CVerFacturas_session");
  session_register("CControlFases_session");
?>
<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Siniestros__FApInicio="1/1/2000";
if (($_POST["FApInicio"]!=""))
{

  $Siniestros__FApInicio=$_POST["FApInicio"];
} 

?>
<? 
$Siniestros__FApFin="31/12/2050";
if (($_POST["FApFin"]!=""))
{

  $Siniestros__FApFin=$_POST["FApFin"];
} 

?>
<? 
$Siniestros__DFases="(0)";
if (($_POST["Fases"]!=""))
{

  $Siniestros__DFases=$_POST["Fases"];
} 

?>
<? 
$Siniestros__DTramitadores="(0)";
if (($_POST["Tramitadores"]!=""))
{

  $Siniestros__DTramitadores=$_POST["Tramitadores"];
} 

?>
<? 
$Siniestros__DOrden="Siniestro.FechaAperturaExpediente DESC";
if (($_POST["Orden"]!=""))
{

  $Siniestros__DOrden=$_POST["Orden"];
} 

?>
<? 

// $Siniestros is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.Nombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.Id, Siniestro.TipoTexto, Siniestro.FechaAperturaExpediente, Siniestro.Deuda, Siniestro.Tipo, Tramitadores.Nombre as TNombre, Fases.Texto, Siniestro.CasoTipo, Siniestro.CasoTipo2,Siniestro.Percivido  FROM Abonados, Siniestro, Tramitadores, Fases  WHERE (Siniestro.Abonado=Abonados.Id) and (Siniestro.Tipo=3) and (Siniestro.FechaAperturaExpediente is null or Siniestro.FechaAperturaExpediente between format('"+str_replace("'","''",$Siniestros__FApInicio)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Siniestros__FApFin)+"','dd/mm/yyyy')) and (Siniestro.Tramitador=Tramitadores.Id) and (Siniestro.Fase=Fases.Id) and (Siniestro.Fase in "+str_replace("'","''",$Siniestros__DFases)+") and (Siniestro.Tramitador in "+str_replace("'","''",$Siniestros__DTramitadores)+")";

if ($_POST["FiltroCierre"]=="checkbox")
{
    echo +" and Siniestro.FechaCierreExpediente between format('"+$_POST["FCieInicio"]+"','dd/mm/yyyy') and format('"+$_POST["FCieFin"]+"','dd/mm/yyyy')";
} 

echo +"  ORDER BY "+str_replace("'","''",$Siniestros__DOrden)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Siniestros_numRows=0;
?>
<dim suma_beneficio
suma_beneficio=0
%>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Siniestros_numRows=$Siniestros_numRows+$Repeat1__numRows;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Otros Asuntos</title>
</head>

<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" bgproperties="fixed" text="#000000" topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#00FF00">
    <td>Nombre</td>
    <td>Caso</td>
    <td>Apertura</td>
    <td>Tramitador</td>
    <td>Fase</td>
    <td>Deuda</td>
    <td>Tipo</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!($Siniestros==0))))
{

?>
  <tr>
    <td><a href="SiniestroOtros.asp?Id=<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?></a></td>
    <td><?   if (($Item["Tipo"]$Value==2))
  {

    print "Consulta de abogado";
  }
    else
  {

    print ->$Item["TipoTexto"]->$Value;
  } ?></td>
    <td><?   echo (->$Item["FechaAperturaExpediente"]->$Value);?></td>
    <td><?   echo (->$Item["TNombre"]->$Value);?></td>
    <td><?   echo (->$Item["Texto"]->$Value);?></td>
    <td>&nbsp;<?   echo (->$Item["Deuda"]->$Value);?></td>
    <td><?   echo (->$Item["CasoTipo"]->$Value);?>/<?   echo (->$Item["CasoTipo2"]->$Value);?></td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $suma_beneficio=$suma_beneficio+->$Item["Percivido"]->$Value;
  $Siniestros=mysql_fetch_array($Siniestros_query);
  $Siniestros_BOF=0;

} 
?>

</table>
<p>Total:<? echo $Repeat1__index;?> siniestros
<? if ($_SESSION['CBeneficio']==true)
{
?>
<br>Beneficio rumbo: <?   echo $suma_beneficio;?>&euro;
<? } ?></p>

</body>
</html>
<? 

$Siniestros=null;

?>

