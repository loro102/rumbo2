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
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:46 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Cobrados__MMFComienzo="1/1/2000";
if (($_POST["FComienzo"]!=""))
{

  $Cobrados__MMFComienzo=$_POST["FComienzo"];
} 

?>
<? 
$Cobrados__MMFFinal="31/12/2030";
if (($_POST["FFinal"]!=""))
{

  $Cobrados__MMFFinal=$_POST["FFinal"];
} 

?>
<? 

// $Cobrados is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT DISTINCT Abonados.Nombre as AbNombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.Id as SiniId, Siniestro.Tipo, Siniestro.Percivido, Profesionales.Nombre, Agentes.Nombre as AgNombre, Siniestro.Cobrocliente  FROM (((Abonados INNER JOIN Siniestro ON Abonados.Id = Siniestro.Abonado) INNER JOIN Facturas ON Siniestro.Id = Facturas.Siniestro) INNER JOIN Agentes ON Abonados.Agente = Agentes.Id) INNER JOIN Profesionales ON Facturas.Valor = Profesionales.ID  WHERE (((Facturas.FechaPago) Between format('"+str_replace("'","''",$Cobrados__MMFComienzo)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Cobrados__MMFFinal)+"','dd/mm/yyyy')) AND ((Profesionales.Nombre)='Honorarios rumbo' AND Siniestro.Tipo=1 AND ((Siniestro.Fase)<100)))";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Cobrados_numRows=0;
?>
<? 
$Cerrados__MMFComienzo="1/1/2000";
if (($_POST["FComienzo"]!=""))
{

  $Cerrados__MMFComienzo=$_POST["FComienzo"];
} 

?>
<? 
$Cerrados__MMFFinal="31/12/2030";
if (($_POST["FFinal"]!=""))
{

  $Cerrados__MMFFinal=$_POST["FFinal"];
} 

?>
<? 

// $Cerrados is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT DISTINCT Abonados.Nombre as AbNombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.[Fecha Siniestro], Siniestro.Fase, Siniestro.FechaAperturaExpediente, Siniestro.FechaCierreExpediente, Siniestro.Indemnizacion, Siniestro.DiasImpeditivos, Siniestro.DiasImpeditivosValor, Siniestro.DiasNoImpeditivos, Siniestro.DiasNoImpeditivosValor, Siniestro.DiasHospitalizados, Siniestro.DiasHospitalizadosValor, Siniestro.PuntosSecuelas, Siniestro.PuntosSecuelasValor, Siniestro.FactorCorrector, Siniestro.Tipo, Siniestro.OpcionFactorCorrector, Siniestro.FactorCorrectorValor, Fases.Texto, Siniestro.Cerrador, Tramitadores.Nombre, Siniestro.PtosPerjuicioEstetico, Siniestro.ValorPuntoPerjuicioEstetico  FROM Tramitadores INNER JOIN (Fases INNER JOIN (Abonados INNER JOIN Siniestro ON Abonados.Id = Siniestro.Abonado) ON Fases.Id = Siniestro.Fase) ON Tramitadores.Id = Siniestro.Cerrador  WHERE (((Siniestro.Fase)>38 And (Siniestro.Fase)<71) AND ((Siniestro.FechaCierreExpediente) Between format('"+str_replace("'","''",$Cerrados__MMFComienzo)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Cerrados__MMFFinal)+"','dd/mm/yyyy')))  ORDER BY Siniestro.FechaCierreExpediente;";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Cerrados_numRows=0;
?>
<? 
$Recordset1__MMFComienzo="1/1/2000";
if (($_POST["FComienzo"]!=""))
{

  $Recordset1__MMFComienzo=$_POST["FComienzo"];
} 

?>
<? 
$Recordset1__MMFFinal="31/12/2030";
if (($_POST["FFinal"]!=""))
{

  $Recordset1__MMFFinal=$_POST["FFinal"];
} 

?>
<? 

// $Recordset1 is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.Nombre as AbNombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.[Fecha Siniestro], Siniestro.FechaAperturaExpediente, Agentes.Nombre, Siniestro.AsistenciaJuridica, Abonados.Notas,Siniestro.Tipo, Siniestro.TipoTexto  FROM Agentes INNER JOIN (Abonados INNER JOIN Siniestro ON Abonados.Id = Siniestro.Abonado) ON Agentes.Id = Abonados.Agente  WHERE (((Siniestro.Tipo=1 or Siniestro.Tipo=3)and(Siniestro.Fase<71)and(Siniestro.FechaAperturaExpediente) Between format('"+str_replace("'","''",$Recordset1__MMFComienzo)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Recordset1__MMFFinal)+"','dd/mm/yyyy')))  ORDER BY Siniestro.FechaAperturaExpediente;";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Recordset1_numRows=0;
?>
<? 
$Cobrados2__MMFComienzo="1/1/2000";
if (($_POST["FComienzo"]!=""))
{

  $Cobrados2__MMFComienzo=$_POST["FComienzo"];
} 

?>
<? 
$Cobrados2__MMFFinal="1/1/2050";
if (($_POST["FFinal"]!=""))
{

  $Cobrados2__MMFFinal=$_POST["FFinal"];
} 

?>
<? 

// $Cobrados2 is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT DISTINCT Abonados.Nombre as AbNombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.Id as SiniId, Siniestro.Tipo, Siniestro.Percivido, Profesionales.Nombre, Agentes.Nombre as AgNombre, Siniestro.Cobrocliente  FROM (((Abonados INNER JOIN Siniestro ON Abonados.Id = Siniestro.Abonado) INNER JOIN Facturas ON Siniestro.Id = Facturas.Siniestro) INNER JOIN Agentes ON Abonados.Agente = Agentes.Id) INNER JOIN Profesionales ON Facturas.Valor = Profesionales.ID  WHERE (((Facturas.FechaPago) Between format('"+str_replace("'","''",$Cobrados2__MMFComienzo)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Cobrados2__MMFFinal)+"','dd/mm/yyyy')) AND ((Profesionales.Nombre)='Honorarios rumbo' AND Siniestro.Tipo>1 AND ((Siniestro.Fase)<100)))";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Cobrados2_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Cobrados_numRows=$Cobrados_numRows+$Repeat1__numRows;
?>
<? 

$Repeat3__numRows=-1;
$Repeat3__index=0;
$Recordset1_numRows=$Recordset1_numRows+$Repeat3__numRows;
?>
<? 

$Repeat2__numRows=-1;
$Repeat2__index=0;
$Cerrados_numRows=$Cerrados_numRows+$Repeat2__numRows;
$Notrafico=0;
?>
<? 

$Repeat4__numRows=-1;
$Repeat4__index=0;
$Cobrados2_numRows=$Cobrados2_numRows+$Repeat4__numRows;
?>
<html>
<head>
<title>Informe</title>
</head>

<body topmargin="30">
<h2>Abiertos:</h2>
<table width="100%"  border="1" cellspacing="0">
  <tr bgcolor="#00CC00">
    <td>Nombre</td>
    <td>Fecha de siniestro </td>
    <td>Fecha de apertura </td>
    <td>AJ</td>
    <td>Agente</td>
  </tr>
  <? 
while((($Repeat3__numRows!=0) && (!($Recordset1==0))))
{

?>
<?   if (($Item["Tipo"]$Value==1))
  {
?>
  <tr>
    <td><?     echo (->$Item["AbNombre"]->$Value);?>&nbsp;<?     echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?     echo (->$Item["Apellido2"]->$Value);?></td>
    <td><?     echo (->$Item["Fecha Siniestro"]->$Value);?></td>
    <td><?     echo (->$Item["FechaAperturaExpediente"]->$Value);?></td>
    <td><?     if (($Item["AsistenciaJuridica"]$Value))
    {
?>
    Si
    <?     }
      else
    {
?>
    No
    <?     } ?></td>
    <td><? 
    if (($Item["Nombre"]$Value)=="rumbo")
    {
?><?       echo (->$Item["Notas"]->$Value);?>
	<?     }
      else
    {
?><?       echo (->$Item["Nombre"]->$Value);?><?     } ?></td>
  </tr>
<?   }
    else
  {
?>
  <tr>
    <td><?     echo (->$Item["AbNombre"]->$Value);?>&nbsp;<?     echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?     echo (->$Item["Apellido2"]->$Value);?></td>
    <td><?     echo (->$Item["TipoTexto"]->$Value);?></td>
    <td><?     echo (->$Item["FechaAperturaExpediente"]->$Value);?></td>
    <td>&nbsp;</td>
    <td><? 
    if (($Item["Nombre"]$Value)=="rumbo")
    {
?><?       echo (->$Item["Notas"]->$Value);?>
	<?     }
      else
    {
?><?       echo (->$Item["Nombre"]->$Value);?><?     } ?></td>
  </tr>
<?     $Notrafico=$Notrafico+1;
  } ?>
  <? 
  $Repeat3__index=$Repeat3__index+1;
  $Repeat3__numRows=$Repeat3__numRows-1;
  $Recordset1=mysql_fetch_array($Recordset1_query);
  $Recordset1_BOF=0;

} 
?>

</table>
<p>Total: <? echo $Repeat3__index;?> (<? echo $Repeat3__index-$Notrafico;?> siniestros y <? echo $Notrafico;?> casos aparte) </p>
<? if ($_SESSION['CBeneficio']==true)
{
?><h2>Cerrados:</h2>
<table width="100%"  border="1" cellspacing="0">
  <tr bgcolor="#00CC00">
    <td>Nombre</td>
    <td>Fase</td>
    <td>Fecha de siniestro</td>
    <td>Fecha de apertura</td>
    <td>Fecha de cierre </td>
    <td>Cuantia</td>
    <td>Cierre</td>
  </tr>
  <? 
  $NoTrafico=0;
  while((($Repeat2__numRows!=0) && (!($Cerrados==0))))
  {

?>
  <tr>
    <td><?     echo (->$Item["AbNombre"]->$Value);?>&nbsp;<?     echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?     echo (->$Item["Apellido2"]->$Value);?></td>
    <td><?     echo (->$Item["Texto"]->$Value);?></td>
    <td><?     echo (->$Item["Fecha Siniestro"]->$Value);?></td>
    <td><?     echo (->$Item["FechaAperturaExpediente"]->$Value);?></td>
    <td><?     echo (->$Item["FechaCierreExpediente"]->$Value);?></td>
    <td><?     echo (->$Item["Indemnizacion"]->$Value);?>&euro;</td>
    <td><table width="100%"  border="1" cellspacing="0">
  <?     if ($Item["DiasImpeditivos"]$Value>0)
    {
?><tr>
    <td><h6><?       echo (->$Item["DiasImpeditivos"]->$Value);?> dias impeditivos</h6></td>
    <td><h6 align="right"><?       echo (->$Item["DiasImpeditivosValor"]->$Value)*(->$Item["DiasImpeditivos"]->$Value);?></h6></td>
  </tr><?     } ?>
  <?     if ($Item["DiasNoImpeditivos"]$Value>0)
    {
?><tr>
    <td><h6><?       echo (->$Item["DiasNoImpeditivos"]->$Value);?> dias no impeditivos</h6></td>
    <td><h6 align="right"><?       echo (->$Item["DiasNoImpeditivosValor"]->$Value)*(->$Item["DiasNoImpeditivos"]->$Value);?></h6></td>
  </tr><?     } ?>
  <?     if ($Item["DiasHospitalizados"]$Value>0)
    {
?><tr>
    <td><h6><?       echo (->$Item["DiasHospitalizados"]->$Value);?> dias hospitalizados</h6></td>
    <td><h6 align="right"><?       echo (->$Item["DiasHospitalizadosValor"]->$Value)*(->$Item["DiasHospitalizados"]->$Value);?></h6></td>
  </tr><?     } ?>
  <?     if ($Item["PuntosSecuelas"]$Value>0)
    {
?><tr>
    <td><h6><?       echo (->$Item["PuntosSecuelas"]->$Value);?> puntos de secuela</h6></td>
    <td><h6 align="right"><?       echo (->$Item["PuntosSecuelasValor"]->$Value)*(->$Item["PuntosSecuelas"]->$Value);?></h6></td>
  </tr><?     } ?>
  <?     if ($Item["PtosPerjuicioEstetico"]$Value>0)
    {
?><tr>
    <td><h6><?       echo (->$Item["PtosPerjuicioEstetico"]->$Value);?> puntos de secuela estetica</h6></td>
    <td><h6 align="right"><?       echo (->$Item["ValorPuntoPerjuicioEstetico"]->$Value)*(->$Item["PtosPerjuicioEstetico"]->$Value);?></h6></td>
  </tr><?     } ?>
  <?     if ($Item["FactorCorrector"]$Value>0)
    {
?><tr>
    <td><h6><?       echo (->$Item["FactorCorrector"]->$Value);?>% de factor de correccion 
          <?       if (($Item["OpcionFactorCorrector"]$Value==2))
      {
?>
          sobre secuelas
          <?       }
        else
      {
?>
          sobre indemnizacion
          <?       } ?>
          <br>
    </h6></td>
    <td><h6 align="right"><?       echo (->$Item["FactorCorrectorValor"]->$Value);?></h6></td>
  </tr><?     } ?>
  <tr>
    <td><h6>Total:</h6></td>
    <td><h6 align="right"><?     echo (->$Item["DiasImpeditivosValor"]->$Value)*(->$Item["DiasImpeditivos"]->$Value)+(->$Item["DiasNoImpeditivosValor"]->$Value)*(->$Item["DiasNoImpeditivos"]->$Value)+(->$Item["DiasHospitalizadosValor"]->$Value)*(->$Item["DiasHospitalizados"]->$Value)+(->$Item["PuntosSecuelasValor"]->$Value)*(->$Item["PuntosSecuelas"]->$Value)+(->$Item["ValorPuntoPerjuicioEstetico"]->$Value)*(->$Item["PtosPerjuicioEstetico"]->$Value)+(->$Item["FactorCorrectorValor"]->$Value);?></h6></td>
  </tr>
</table>
    </td>
  </tr>
  <? 
    if (($Item["Tipo"]$Value>1))
    {

      $NoTrafico=$NoTrafico+1;
    } 

    $Repeat2__index=$Repeat2__index+1;
    $Repeat2__numRows=$Repeat2__numRows-1;
    $Cerrados=mysql_fetch_array($Cerrados_query);
    $Cerrados_BOF=0;

  } 
?>

</table>
Total: <?   echo $Repeat2__index;?> (<?   echo $Repeat2__index-$Notrafico;?> siniestros y <?   echo $Notrafico;?> casos aparte) 
<h2>Cobrados tr&aacute;fico: </h2>
<table width="100%"  border="1" cellspacing="0">
  <tr bgcolor="#00CC00">
    <td>Nombre</td>
    <td>Cobrado</td>
    <td>Beneficio</td>
  </tr>
<?   $totalcobrado=0;
  $totalbeneficio=0;
  $cerosc=0;
  $cerosb=0;?>
  <? 
  while((($Repeat1__numRows!=0) && (!($Cobrados==0))))
  {

?>
  <tr>
    <td><?     echo (->$Item["AbNombre"]->$Value);?>&nbsp;<?     echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?     echo (->$Item["Apellido2"]->$Value);?></td>
    <td> <?     echo (->$Item["Cobrocliente"]->$Value);?>&euro; </td>
    <td><?     echo (->$Item["Percivido"]->$Value);?> &euro; </td>
  </tr>
  <? 
    $totalbeneficio=$totalbeneficio+(->$Item["Percivido"]->$Value);
    if (($Item["Percivido"]$Value==0))
    {
      $cerosc=$cerosc+1;
    } 
    $totalcobrado=$totalcobrado+(->$Item["Cobrocliente"]->$Value);
    if (($Item["Cobrocliente"]$Value==0))
    {
      $cerosb=$cerosb+1;
    } 
    $Repeat1__index=$Repeat1__index+1;
    $Repeat1__numRows=$Repeat1__numRows-1;
    $Cobrados=mysql_fetch_array($Cobrados_query);
    $Cobrados_BOF=0;

  } 
?>
  <tr>
    <td><div align="right">Total:</div></td>
    <td><?   echo $totalcobrado;?>&euro;</td>
    <td><?   echo $totalbeneficio;?>&euro;</td>
  </tr>
  <tr>
    <td><div align="right">Media:</div></td>
<?   if ((!$Repeat1__index==0))
  {
?><td><?     echo round($totalcobrado/$Repeat1__index,2);?> &euro;<?     if ((!$Repeat1__index-$cerosc==0))
    {
?> / <?       echo round($totalcobrado/($Repeat1__index-$cerosc),2);?>&euro; sin ceros<?     } ?></td>
	<td><?     echo round($totalbeneficio/$Repeat1__index,2);?> &euro;<?     if ((!$Repeat1__index-$cerosb==0))
    {
?> / <?       echo round($totalbeneficio/($Repeat1__index-$cerosb),2);?>&euro; sin ceros<?     } ?></td><?   } ?>
  </tr>
</table>
<p><br>
  Total:<?   echo $Repeat1__index;?></p>
<h2>Cobrados no tr&aacute;fico: </h2>
<table width="100%"  border="1" cellspacing="0">
  <tr bgcolor="#00CC00">
    <td>Nombre</td>
    <td>Cobrado</td>
    <td>Beneficio</td>
  </tr>
  <? 
  $totalcobrado=0;
  $totalbeneficio=0;
  $cerosc=0;
  $cerosb=0;?>
  <? 
  while((($Repeat4__numRows!=0) && (!($Cobrados2==0))))
  {

?>
    <tr>
      <td><?     echo (->$Item["AbNombre"]->$Value);?>&nbsp;<?     echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?     echo (->$Item["Apellido2"]->$Value);?></td>
      <td> <?     echo (->$Item["Cobrocliente"]->$Value);?>&euro; </td>
      <td><?     echo (->$Item["Percivido"]->$Value);?> &euro; </td>
    </tr>
    
    <? 
    $totalbeneficio=$totalbeneficio+(->$Item["Percivido"]->$Value);
    if (($Item["Percivido"]$Value==0))
    {
      $cerosc=$cerosc+1;
    } 
    $totalcobrado=$totalcobrado+(->$Item["Cobrocliente"]->$Value);
    if (($Item["Cobrocliente"]$Value==0))
    {
      $cerosb=$cerosb+1;
    } 

    $Repeat4__index=$Repeat4__index+1;
    $Repeat4__numRows=$Repeat4__numRows-1;
    $Cobrados2=mysql_fetch_array($Cobrados2_query);
    $Cobrados2_BOF=0;

  } 
?><tr>
      <td><div align="right">Total:</div></td>
      <td><?   echo $totalcobrado;?>&euro;</td>
      <td><?   echo $totalbeneficio;?>&euro;</td>
    </tr>
  <tr>
    <td><div align="right">Media:</div></td>
<?   if ((!$Repeat4__index==0))
  {
?><td><?     echo round($totalcobrado/$Repeat4__index,2);?> &euro;<?     if ((!$Repeat4__index-$cerosc==0))
    {
?> / <?       echo round($totalcobrado/($Repeat4__index-$cerosc),2);?>&euro; sin ceros<?     } ?></td>
	<td><?     echo round($totalbeneficio/$Repeat4__index,2);?> &euro;<?     if ((!$Repeat4__index-$cerosb==0))
    {
?> / <?       echo round($totalbeneficio/($Repeat4__index-$cerosb),2);?>&euro; sin ceros<?     } ?></td><?   } ?>
  </tr>
</table>
<p>Total:<?   echo $Repeat4__index;?></p>
<? } ?>
</body>
</html>
<? 

$Cobrados=null;

?>
<? 

$Cerrados=null;

?>
<? 

$Recordset1=null;

?>
<? 

$Cobrados2=null;

?>

