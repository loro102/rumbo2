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
<? //Session.lcid=1034  ?>

<? require("Connections/connrumbo.php"); ?>
<? 
$Siniestros__DFecha1="1/1/1980";
if (($_POST["Fecha1"]!=""))
{

  $Siniestros__DFecha1=$_POST["Fecha1"];
} 

?>
<? 
$Siniestros__DFecha2="31/12/2050";
if (($_POST["Fecha2"]!=""))
{

  $Siniestros__DFecha2=$_POST["Fecha2"];
} 

?>
<? 
$Siniestros__DFechaAE1="1/1/1980";
if (($_POST["FechaAE1"]!=""))
{

  $Siniestros__DFechaAE1=$_POST["FechaAE1"];
} 

?>
<? 
$Siniestros__DFechaAE2="31/12/2050";
if (($_POST["FechaAE2"]!=""))
{

  $Siniestros__DFechaAE2=$_POST["FechaAE2"];
} 

?>
<? 
$Siniestros__DFechaCE1="1/1/1980";
if (($_POST["FechaCE1"]!=""))
{

  $Siniestros__DFechaCE1=$_POST["FechaCE1"];
} 

?>
<? 
$Siniestros__DFechaCE2="31/12/2050";
if (($_POST["FechaCE2"]!=""))
{

  $Siniestros__DFechaCE2=$_POST["FechaCE2"];
} 

?>
<? 
$Siniestros__DLugar="%";
if (($_POST["Lugar"]!=""))
{

  $Siniestros__DLugar=$_POST["Lugar"];
} 

?>
<? 
$Siniestros__DCompAseguradora="%";
if (($_POST["CompAseguradora"]!=""))
{

  $Siniestros__DCompAseguradora=$_POST["CompAseguradora"];
} 

?>
<? 
$Siniestros__DFases="0";
if (($_POST["Fases"]!=""))
{

  $Siniestros__DFases=$_POST["Fases"];
} 

?>
<? 

// $Siniestros is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT DISTINCT Fases.Texto as FTexto, Siniestro.Matricula, Siniestro.fechaden,Siniestro.fechaudi,Siniestro.fechajuicio, Siniestro.fechadem, Siniestro.fechaofm, Siniestro.fecharofm,Siniestro.CasoTipo, Siniestro.FechaCobrorumbo ,Siniestro.CasoTipo2, Siniestro.AsistenciaJuridica, Siniestro.PagoAgente, Abonados.Nombre, Abonados.Apellido1, Siniestro.Deuda, Abonados.Apellido2, Abonados.Notas as NotasAbonado, [Fecha Siniestro], Siniestro.Id, [Fecha Alta],[Fecha Direccion],  FechaAperturaExpediente, FechaCierreExpediente, Lugar, Indemnizacion, EstimacionIndemnizacion, [Expediente Cerrado], [Desarrollo accidente], Percivido, Siniestro.Fase, Siniestro.FechaArchivo, Tramitadores.Nombre as TNombre, Agentes.Nombre as AgenteNombre, Siniestro.Representado, Siniestro.Nombre as NombreRepresentado, Siniestro.Cerrador, Siniestro.Compañia,Siniestro.[tramitador cia] ,Siniestro.Tramitador,Siniestro.Indemnizacion FROM Abonados, Tramitadores, Agentes, Fases,";
if (($_POST["Profesional1"]==""))
{

    echo +" Siniestro ";
}
  else
{

    echo +" (SiniestroProfesional AS SiniestroProfesional_1 INNER JOIN (SiniestroProfesional INNER JOIN Siniestro ON SiniestroProfesional.Siniestro = Siniestro.Id) ON SiniestroProfesional_1.Siniestro = Siniestro.Id) ";
} 

echo +" WHERE (Abonados.Id = Siniestro.Abonado) and (Siniestro.[Fecha Siniestro] is null or Siniestro.[Fecha Siniestro] between format('"+str_replace("'","''",$Siniestros__DFecha1)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Siniestros__DFecha2)+"','dd/mm/yyyy')) and (Siniestro.FechaAperturaExpediente is null or Siniestro.FechaAperturaExpediente between format('"+str_replace("'","''",$Siniestros__DFechaAE1)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Siniestros__DFechaAE2)+"','dd/mm/yyyy')) and (Siniestro.FechaCierreExpediente is null or Siniestro.FechaCierreExpediente between format('"+str_replace("'","''",$Siniestros__DFechaCE1)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Siniestros__DFechaCE2)+"','dd/mm/yyyy')) AND (Siniestro.Lugar like '"+str_replace("'","''",$Siniestros__DLugar)+"') and (Siniestro.Compañia Like  '%"+str_replace("'","''",$Siniestros__DCompAseguradora)+"%') and Tramitadores.Id=Siniestro.Tramitador and Agentes.Id=Abonados.Agente and Siniestro.Fase=Fases.Id and Siniestro.Fase in "+str_replace("'","''",$Siniestros__DFases)+" and (Siniestro.Tramitador in "+$_POST["tramitador"]+") and "+$_POST["AJ"]+" and "+$_POST["CT1"]+" and "+$_POST["CT2"]+$_POST["Profesional1"]+$_POST["Profesional2"];
// if (Request.form("CiaContraria")<>"") then Siniestros.Source = Siniestros.Source + " and (Contrarios.Compañia = '"" + Replace(Request.form("CiaContraria"), "'", "''") + "'') and (Contrarios.Siniestro=Siniestro.Id)"
//if (request.Form("cerrados")="checkbox") then Siniestros.Source = Siniestros.Source + " and (Siniestro.Fase=70)"
if (($_POST["alta"]=="checkbox"))
{
    echo +" and (Siniestro.[Fecha Alta] between format('"+$_POST["FechaAlta1"]+"','dd/mm/yyyy') and format('"+$_POST["FechaAlta2"]+"','dd/mm/yyyy'))";
} 

if (($_POST["alta"]=="checkbox"))
{
    echo +" and (Siniestro.[Fecha Alta] between format('"+$_POST["FechaAlta1"]+"','dd/mm/yyyy') and format('"+$_POST["FechaAlta2"]+"','dd/mm/yyyy'))";
} 

if (($_POST["FechaCobrorumbo"]=="checkbox"))
{
    echo +" and (Siniestro.FechaCobrorumbo between format('"+$_POST["FechaCobrorumbo1"]+"','dd/mm/yyyy') and format('"+$_POST["FechaCobrorumbo2"]+"','dd/mm/yyyy')) and Siniestro.FechaCobrorumbo is not null ";
} 
if (($_POST["FechaArchivo"]=="checkbox"))
{
    echo +" and (Siniestro.FechaArchivo between format('"+$_POST["FechaArchivo1"]+"','dd/mm/yyyy') and format('"+$_POST["FechaArchivo2"]+"','dd/mm/yyyy')) and Siniestro.FechaArchivo is not null ";
} 
//if not(request.Form("Fase")="") then Siniestros.Source = Siniestros.Source + " and Siniestro.Fase="&request.form("Fase")
if (($_POST["accidentescorporales"]=="checkbox"))
{
    echo +" and (Siniestro.AccidentesCorporales=True)";
} 
echo +"  ORDER BY ".$_POST["orden"];
echo 0;
echo 2;
echo 1;
$rs=mysql_query();
$Siniestros_numRows=0;
?>

<? 

// $Cia_cmd is of type "ADODB.Command"
$Cia_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Cia_cmd_CommandText="SELECT * FROM Aseguradoras WHERE Id = ?";
$Cia_cmd_Prepared=true;
$Cia_cmd_Parameters=$Append$Cia_cmd_CreateParameter="param1"$Cia__MMColParam); // adDouble

$Cia=$Cia_cmd_Execute=$Cia_numRows=0;;
?>


<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Siniestros_numRows=$Siniestros_numRows+$Repeat1__numRows;
?>
<? 
?>

<? 
// *** Go To Record and Move To Record: create strings for maintaining URL and Form parameters



// create the list of parameters which should not be maintained
$MM_removeList="&index=";
if (($MM_paramName!=""))
{

  $MM_removeList=$MM_removeList."&".$MM_paramName."=";
} 


$MM_keepURL="";
$MM_keepForm="";
$MM_keepBoth="";
$MM_keepNone="";

// add the URL parameters to the MM_keepURL string
foreach ($_GET as $MM_item)
{
  $MM_nextItem="&".$MM_item."=";
  if (((strpos($MM_removeList,$MM_nextItem,1) ? strpos($MM_removeList,$MM_nextItem,1)+1 : 0)==0))
  {

    $MM_keepURL=$MM_keepURL.$MM_nextItem.rawurlencode($_GET[$MM_item]);
  } 

}

// add the Form variables to the MM_keepForm string
foreach ($_POST as $MM_item)
{
  $MM_nextItem="&".$MM_item."=";
  if (((strpos($MM_removeList,$MM_nextItem,1) ? strpos($MM_removeList,$MM_nextItem,1)+1 : 0)==0))
  {

    $MM_keepForm=$MM_keepForm.$MM_nextItem.rawurlencode($_POST[$MM_item]);
  } 

}

// create the Form + URL string and remove the intial '&' from each of the strings
$MM_keepBoth=$MM_keepURL.$MM_keepForm;
if (($MM_keepBoth!=""))
{

  $MM_keepBoth=substr($MM_keepBoth,strlen($MM_keepBoth)-(strlen($MM_keepBoth)-1));
} 

if (($MM_keepURL!=""))
{

  $MM_keepURL=substr($MM_keepURL,strlen($MM_keepURL)-(strlen($MM_keepURL)-1));
} 

if (($MM_keepForm!=""))
{

  $MM_keepForm=substr($MM_keepForm,strlen($MM_keepForm)-(strlen($MM_keepForm)-1));
} 


// a utility function used for adding additional parameters to these strings
function MM_joinChar($firstItem)
{
  extract($GLOBALS);

  if (($firstItem!=""))
  {

    $function_ret="&";
  }
    else
  {

    $function_ret="";
  } 

  return $function_ret;
} 
?>
<html>
<head>
<title>Listado de siniestros</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.Estilo1 {font-size: smaller}
.Estilo2 {font-size: x-small}
-->
</style>
</head>

<body topmargin="25">
<script language="JavaScript" src="menu.js"></script>
<? if ((($Siniestros==0)))
{
?>
No hay resultados.
<? }
  else
{
?>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#00FF00"> 
    <td>Nombre</td>
    <td>Lugar</td>
    <td>Fecha de siniestro</td>
    <td>Fecha de apertura del expediente</td>
<?   if ($_POST["M4"]=="1")
  {
?><td>Fecha de cierre del expediente</td><?   } ?>
<?   if ($_POST["M12"]=="1")
  {
?><td>Fecha de archivo</td><?   } ?>
<?   if ($_POST["M13"]=="1")
  {
?><td>Fecha de alta</td><?   } ?>
<?   if ($_POST["M15"]=="1")
  {
?><td>Fecha de alta medica</td><?   } ?>
<?   if ($_POST["M1"]=="1")
  {
?><td>Tramitador</td><?   } ?>
<?   if ($_POST["M6"]=="1")
  {
?><td>Fase</td><?   } ?>
<?   if ($_POST["M2"]=="1")
  {
?><td>Agente</td><?   } ?>
<?   if ($_POST["M5"]=="1")
  {
?><td>Pago al Agente</td><?   } ?>
<?   if ($_POST["M3"]=="1")
  {
?><td>Beneficio</td><?   } ?>
<?   if ($_POST["M8"]=="1")
  {
?><td>Indeminzacion</td><?   } ?>
<?   if ($_POST["M11"]=="1")
  {
?><td>Deuda</td><?   } ?>
<?   if ($_POST["M9"]=="1")
  {
?><td>AJ</td><?   } ?>
<?   if ($_POST["M10"]=="1")
  {
?><td>Fecha cobro rumbo</td><?   } ?>
<?   if ($_POST["M14"]=="1")
  {
?><td>Matricula</td><?   } ?>
<?   if ($_POST["M17"]=="1")
  {
?><td>Cia</td><?   } ?>
<?   if ($_POST["M16"]=="1")
  {
?><td>Tramitador Cia</td><?   } ?>
<?   if ($_POST["M23"]=="1")
  {
?><td>Fecha Denuncia</td><?   } ?>
<?   if ($_POST["M24"]=="1")
  {
?><td>Fecha Demanda</td><?   } ?>
<?   if ($_POST["M25"]=="1")
  {
?><td>Fecha OFM</td><?   } ?>
<?   if ($_POST["M26"]=="1")
  {
?><td>Fecha Respuesta</td><?   } ?>
<?   if ($_POST["M27"]=="1")
  {
?><td>Fecha Audiencia</td><?   } ?>
<?   if ($_POST["M28"]=="1")
  {
?><td>Fecha Juicio</td><?   } ?>

    <td>Puntos</td>
  </tr>
  <? 
  $indemni=0;
  $estimaindemni=0;
  $beneficiorumbo=0;
  $puntos=0;
  $puntos2=0;
  $ajs=0;
  while((($Repeat1__numRows!=0) && (!($Siniestros==0))))
  {

?>
  <tr <?     if (($Item["Fase"]$Value==7))
    {
      print "bgcolor=\"#CCCCCC\"";
    } ?>> 
    <td><A HREF="Siniestro.asp?<?     echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".->$Item["Id"]->$Value;?>"><?     echo (->$Item["Nombre"]->$Value);?>&nbsp;<?     echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?     echo (->$Item["Apellido2"]->$Value);?></A>
        <?     if (($Item["Representado"]$Value==true))
    {
?><br>
      <font size="-4">representando a <?       echo (->$Item["NombreRepresentado"]->$Value);?></font>
    <?     } ?></td>
    <td><font size="-4"><?     echo (->$Item["Desarrollo accidente"]->$Value);?><br>
    <?     echo (->$Item["Lugar"]->$Value);?></font></td>
    <td><?     echo (->$Item["Fecha Siniestro"]->$Value);?></td>
	<td><?     echo (->$Item["FechaAperturaExpediente"]->$Value);?>&nbsp;</td>
<?     if ($_POST["M4"]=="1")
    {
?><td><?       echo (->$Item["FechaCierreExpediente"]->$Value);?>&nbsp;</td><?     } ?>
<?     if ($_POST["M12"]=="1")
    {
?><td><?       echo (->$Item["FechaArchivo"]->$Value);?>&nbsp;</td><?     } ?>
<?     if ($_POST["M13"]=="1")
    {
?><td><?       echo (->$Item["Fecha Alta"]->$Value);?>&nbsp;</td><?     } ?>
<?     if ($_POST["M15"]=="1")
    {
?><td>
<?       echo (->$Item["Fecha Direccion"]->$Value);?></td><?     } ?>
<?     if ($_POST["M1"]=="1")
    {
?><td><span class="Estilo1"><?       echo (->$Item["TNombre"]->$Value);?></span></td><?     } ?>
<?     if ($_POST["M6"]=="1")
    {
?><td><span class="Estilo1"><?       echo (->$Item["FTexto"]->$Value);?></span></td><?     } ?>
<?     if ($_POST["M2"]=="1")
    {
?><td><span class="Estilo1"><?       echo (->$Item["AgenteNombre"]->$Value);?><?       if (($Item["AgenteNombre"]$Value=="rumbo"))
      {
        print " - ".->$Item["NotasAbonado"]->$Value;
      } ?></span></td><?     } ?>
<?     if ($_POST["M5"]=="1")
    {
?><td><span class="Estilo1"><?       echo (->$Item["PagoAgente"]->$Value);?></span></td><?     } ?>
<?     if ($_POST["M3"]=="1")
    {
?><td><span class="Estilo1"><?       echo (->$Item["Percivido"]->$Value);?></span></td><?     } ?>
<?     if ($_POST["M8"]=="1")
    {
?><td><span class="Estilo1"><?       if ($_SESSION['CIndemnizacion']==true)
      {
?><?         echo (->$Item["Indemnizacion"]->$Value);?><?       } ?></span></td><?     } ?>
<?     if ($_POST["M11"]=="1")
    {
?><td><span class="Estilo1"><?       echo (->$Item["Deuda"]->$Value);?></span></td><?     } ?>
<?     if ($_POST["M9"]=="1")
    {
?><td><span class="Estilo1"><?       if (($Item["AsistenciaJuridica"]$Value))
      {
?>Si<?       }
        else
      {
?>No<?       } ?></span></td>
<?     } ?>
<?     if ($_POST["M10"]=="1")
    {
?><td><span class="Estilo1"><?       echo ->$Item["FechaCobrorumbo"]->$Value;?></span></td>
<?     } ?>
<?     if ($_POST["M14"]=="1")
    {
?><td><span class="Estilo1"><?       echo ->$Item["Matricula"]->$Value;?></span></td>
<?     } ?>
<?     if ($_POST["M17"]=="1")
    {
?><td><span class="Estilo1"><?       echo ->$Item["Compañia"]->$Value;?></span></td>
<?     } ?>
<?     if ($_POST["M16"]=="1")
    {
?><td><span class="Estilo1"><?       echo ->$Item["tramitador cia"]->$Value;?></span></td>
<?     } ?>
<?     if ($_POST["M14"]=="1")
    {
?><td><span class="Estilo1"><?       echo ->$Item["Matricula"]->$Value;?></span></td>
<?     } ?>
<?     if ($_POST["M23"]=="1")
    {
?><td><span class="Estilo1"><?       echo ->$Item["fechaden"]->$Value;?></span></td>
<?     } ?>
<?     if ($_POST["M24"]=="1")
    {
?><td><span class="Estilo1"><?       echo ->$Item["fechadem"]->$Value;?></span></td>
<?     } ?>
<?     if ($_POST["M25"]=="1")
    {
?><td><span class="Estilo1"><?       echo ->$Item["fechaofm"]->$Value;?></span></td>
<?     } ?>
<?     if ($_POST["M26"]=="1")
    {
?><td><span class="Estilo1"><?       echo ->$Item["fecharofm"]->$Value;?></span></td>
<?     } ?>
<?     if ($_POST["M27"]=="1")
    {
?><td><span class="Estilo1"><?       echo ->$Item["fechaudi"]->$Value;?></span></td>
<?     } ?>
<?     if ($_POST["M28"]=="1")
    {
?><td><span class="Estilo1"><?       echo ->$Item["fechajuicio"]->$Value;?></span></td>
<?     } ?>

    <td><p><?     echo (->$Item["CasoTipo"]->$Value);?>/<?     echo (->$Item["CasoTipo2"]->$Value);?></p></td>
  </tr>
  <? 
    $puntos=$puntos+->$Item["CasoTipo"]->$Value;
    $puntos2=$puntos2+->$Item["CasoTipo2"]->$Value;
    if (!($Item["Indemnizacion"]$Value==""))
    {
      $indemni=$indemni+->$Item["Indemnizacion"]->$Value;
    } 
    if (!($Item["Percivido"]$Value==""))
    {
      $beneficiorumbo=$beneficiorumbo+->$Item["Percivido"]->$Value;
    } 
    if (!($Item["EstimacionIndemnizacion"]$Value==""))
    {
      $estimaindemni=$estimaindemni+->$Item["EstimacionIndemnizacion"]->$Value;
    } 
    if (($Item["AsistenciaJuridica"]$Value==true))
    {
      $ajs=$ajs+1;
    } 
    $Repeat1__index=$Repeat1__index+1;
    $Repeat1__numRows=$Repeat1__numRows-1;
    $Siniestros=mysql_fetch_array($Siniestros_query);
    $Siniestros_BOF=0;

  } 
?>
</table>
Total siniestros: <?   echo $Repeat1__index;?> (<?   echo $ajs;?> con asistencia jur&iacute;dica)<br>
<?   if ($_SESSION['CIndemnizacion']==true)
  {
?>Indemnizaciones: <?     echo $indemni;?>&euro;<br><?   } ?>
<?   if ($_SESSION['CBeneficio']==true)
  {
?>
Beneficio rumbo: <?     echo $beneficiorumbo;?>&euro;<br>
Puntos:<?     echo $puntos;?>/<?     echo $puntos2;?> (<?     echo round($puntos/$Repeat1__index,2);?>/<?     echo round($puntos2/$Repeat1__index,2);?> de media)
<?   } ?>
<? } ?>
</body>
</html>
<? 

$Siniestros=null;

?>

