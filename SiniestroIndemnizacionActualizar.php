<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$MM_editAction=($_SERVER["SCRIPT_NAME"]);
if (($_GET!=""))
{

  $MM_editAction=$MM_editAction."?".htmlspecialchars($_GET);
} 


// boolean to abort record edit
$MM_abortEdit=false;
?>
<? 
// IIf implementation
function MM_IIf($condition,$ifTrue,$ifFalse)
{
  extract($GLOBALS);

  if ($condition=="")
  {

    $function_ret=$ifFalse;
  }
    else
  {

    $function_ret=$ifTrue;
  } 

  return $function_ret;
} 
?>
<? 
if (((${"MM_update"})=="form1"))
{

  if ((!$MM_abortEdit))
  {

// execute the update

    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="UPDATE Siniestro SET DiasImpeditivos = ?, DiasImpeditivosValor = ?, DiasNoImpeditivos = ?, DiasNoImpeditivosValor = ?, DiasHospitalizados = ?, DiasHospitalizadosValor = ?, PuntosSecuelas = ?, PuntosSecuelasValor = ?, PtosPerjuicioEstetico = ?, ValorPuntoPerjuicioEstetico = ?, FactorCorrector = ?, OpcionFactorCorrector = ?, FactorCorrectorValor = ?, Incapacidad = ? WHERE Id = ?";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"        MM_IIF($_POST["DiasImpeditivos"],$_POST["DiasImpeditivos"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"        MM_IIF($_POST["ValorDiaImpeditivo"],$_POST["ValorDiaImpeditivo"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"        MM_IIF($_POST["DiasNoImpeditivos"],$_POST["DiasNoImpeditivos"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"        MM_IIF($_POST["ValorDiaNoImpeditivo"],$_POST["ValorDiaNoImpeditivo"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"        MM_IIF($_POST["DiasHospitalizacion"],$_POST["DiasHospitalizacion"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"        MM_IIF($_POST["ValorDiaHospitalizacion"],$_POST["ValorDiaHospitalizacion"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"        MM_IIF($_POST["PuntosSecuela"],$_POST["PuntosSecuela"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"        MM_IIF($_POST["ValorPuntoSecuela"],$_POST["ValorPuntoSecuela"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"        MM_IIF($_POST["PuntosSecuelaEstetica"],$_POST["PuntosSecuelaEstetica"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"        MM_IIF($_POST["ValorPuntoSecuelaEstetica"],$_POST["ValorPuntoSecuelaEstetica"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param11"        MM_IIF($_POST["FactorCorrector"],$_POST["FactorCorrector"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param12"        MM_IIF($_POST["OFC"],$_POST["OFC"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param13"        MM_IIF($_POST["FactorCorrectorValor"],$_POST["FactorCorrectorValor"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param14"        MM_IIF($_POST["Incapacidad"],$_POST["Incapacidad"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param15"        MM_IIF($_POST["MM_recordId"],$_POST["MM_recordId"],null);// adDouble
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

// append the query string to the redirect URL
    $MM_editRedirectUrl="Siniestro.asp";
    if (($_GET!=""))
    {

      if (((strpos($MM_editRedirectUrl,"?",1) ? strpos($MM_editRedirectUrl,"?",1)+1 : 0)==0))
      {

        $MM_editRedirectUrl=$MM_editRedirectUrl."?".$_GET;
      }
        else
      {

        $MM_editRedirectUrl=$MM_editRedirectUrl."&".$_GET;
      } 

    } 

    header("Location: ".$MM_editRedirectUrl);
  } 

} 

?>
<? 
$Siniestro__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Siniestro__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Siniestro is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Siniestro.*, Abonados.FechaNacimiento  FROM Siniestro , Abonados  WHERE Siniestro.Id = "+str_replace("'","''",$Siniestro__MMColParam)+" and Abonados.Id=Siniestro.Abonado";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Siniestro_numRows=0;
?>
<html>
<head>
<title>Actualizar Indemnizacion Final</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.Estilo2 {font-size: smaller}
-->
</style>
</head>

<body topmargin="30"><script language="JavaScript" src="menu.js"></script>
<script language="JavaScript" src="funciones.js"></script>
<script language="JavaScript">
function actualiza() {
form1.FactorCorrector.value=form1.FactorCorrector.value.replace(',','.');
return true;
}
</script>
<form name="form1" method="POST" action="<? echo $MM_editAction;?>" onSubmit="actualiza();" onKeyPress="actualiza_datos();">  <p><strong><em>Indemnizacion final:</em></strong></p>
  <table width="100%" border="1" cellspacing="0" bordercolor="#000000">
    <tr> 
      <td width="46%">Dias Impeditivos:<br> 
        <input name="DiasImpeditivos" type="text" id="DiasImpeditivos" value="<? echo (->$Item["DiasImpeditivos"]->$Value);?>" onChange="actualiza_datos();">
      <? if (!(($Item["Fecha Baja"]$Value==null) || ($Item["Fecha Alta"]$Value==null)))
{
?>
	  <img src="Imagenes/calculadora2.gif" width="15" height="21" border="0" onClick="form1.DiasImpeditivos.value=<?   echo $DateDiff["d"][->$Item["Fecha Baja"]->$Value][->$Item["Fecha Alta"]->$Value];?>;"><? } ?></td>
      <td width="54%">Valor del dia impeditivo:<br>        <input name="ValorDiaImpeditivo" type="text" id="ValorDiaImpeditivo2" value="<? echo (->$Item["DiasImpeditivosValor"]->$Value);?>" onChange="actualiza_datos();"></td>
	  <td>Total:
      <br>        <input type="text" id="total1" onChange="actualiza_datos();"></td>
    </tr>
    <tr> 
      <td>Dias No Impeditivos: <br>        <input name="DiasNoImpeditivos" type="text" id="DiasNoImpeditivos" value="<? echo (->$Item["DiasNoImpeditivos"]->$Value);?>" onChange="actualiza_datos();"></td>
      <td>Valor del dia no impeditivo:<br>        <input name="ValorDiaNoImpeditivo" type="text" id="ValorDiaNoImpeditivo" value="<? echo (->$Item["DiasNoImpeditivosValor"]->$Value);?>" onChange="actualiza_datos();"></td>
	  <td>Total:<br>
      <input type="text" id="total2"></td>
    </tr>
    <tr> 
      <td>Dias de hospitalizacion: <br>        <input name="DiasHospitalizacion" type="text" id="DiasHospitalizacion" value="<? echo (->$Item["DiasHospitalizados"]->$Value);?>" onChange="actualiza_datos();"></td>
      <td>Valor del dia de hospitalizacion:<br>        <input name="ValorDiaHospitalizacion" type="text" id="ValorDiaHospitalizacion" value="<? echo (->$Item["DiasHospitalizadosValor"]->$Value);?>" onChange="actualiza_datos();"></td>
	  <td>Total:<br>
      <input type="text" id="total3"></td>
    </tr>
    <tr> 
      <td>Puntos de Secuela:<br>        <input name="PuntosSecuela" type="text" id="PuntosSecuela" value="<? echo (->$Item["PuntosSecuelas"]->$Value);?>" onChange="actualiza_datos();"></td>
      <td>Valor del punto de secuela:<br>        <input name="ValorPuntoSecuela" type="text" id="ValorPuntoSecuela" value="<? echo (->$Item["PuntosSecuelasValor"]->$Value);?>" onChange="actualiza_datos();"></td>
	  <td>Total:<br>
      <input type="text" id="total4"></td>
    </tr>
    <tr> 
      <td>Puntos de Secuela Estetica:<br>        <input name="PuntosSecuelaEstetica" type="text" id="PuntosSecuelaEstetica" value="<? echo (->$Item["PtosPerjuicioEstetico"]->$Value);?>" onChange="actualiza_datos();"></td>
      <td>Valor del punto de secuela estetica:<br>        <input name="ValorPuntoSecuelaEstetica" type="text" id="ValorPuntoSecuelaEstetica" value="<? echo (->$Item["ValorPuntoPerjuicioEstetico"]->$Value);?>" onChange="actualiza_datos();"></td>
	  <td>Total:<br>
      <input type="text" id="total4"></td>
    </tr>
    <tr> 
      <td colspan="2"><table width="100%" border="0">
        <tr>
          <td rowspan="3">Factor Corrector:<br>
              <input name="FactorCorrector" type="text" id="FactorCorrector2" value="<? echo (->$Item["FactorCorrector"]->$Value);?>" onChange="actualiza_datos();"></td>
          <td><input name="OFC" type="radio" value="1" checked onChange="actualiza_datos();">
              <span class="Estilo2">Sobre indemnizaci&oacute;n </span></td>
        </tr>
        <tr>
          <td><input name="OFC" type="radio" value="2" onChange="actualiza_datos();">
              <span class="Estilo2">Sobre secuelas </span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table></td>
      <td>Total:<br>
      <input name="FactorCorrectorValor" type="text" id="total5" value="<? echo (->$Item["FactorCorrectorValor"]->$Value);?>"></td>
    </tr>				<tr>
				  <td colspan="2">Incapacidad</td>
				  <td>Total:<br>
                    <input name="Incapacidad" type="text" id="Incapacidad" value="<? echo (->$Item["Incapacidad"]->$Value);?>"></td></tr>

    <tr>
      <td colspan="2">&nbsp;</td>
      <td>Total:<br>
      <input type="text" id="total6"></td>
    </tr>
  </table>

  <div align="center">
    <input type="submit" name="Submit" value="Actualizar">
  </div>

  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo ->$Item["Id"]->$Value;?>">
</form>
<script language="JavaScript" src="ValorPunto.js"></script>
<script language="JavaScript">
function actualiza_datos() {
form1.ValorDiaImpeditivo.value=form1.ValorDiaImpeditivo.value.replace(',','.');
form1.ValorDiaNoImpeditivo.value=form1.ValorDiaNoImpeditivo.value.replace(',','.');
form1.ValorDiaHospitalizacion.value=form1.ValorDiaHospitalizacion.value.replace(',','.');
form1.ValorPuntoSecuela.value=form1.ValorPuntoSecuela.value.replace(',','.');
form1.total1.value=form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value;
form1.total2.value=form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value;
form1.total3.value=form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value;
form1.total4.value=form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value;
if (form1.OFC[1].checked)
	form1.total5.value=form1.FactorCorrector.value*(form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value+form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value+form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value+form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value+form1.PuntosSecuelaEstetica.value*form1.ValorPuntoSecuelaEstetica.value)/100
else
	form1.total5.value=form1.FactorCorrector.value*(form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value+form1.PuntosSecuelaEstetica.value*form1.ValorPuntoSecuelaEstetica.value)/100;
form1.total6.value=Math.round(100*(form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value+form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value+form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value+form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value+form1.FactorCorrector.value*(form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value+form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value+form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value+form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value)/100))/100;
form1.ValorPuntoSecuela.value=valorpunto(<? echo $datediff["YYYY"][->$Item["FechaNacimiento"]->$Value][->$Item["Fecha Siniestro"]->$Value];?><%,form1.PuntosSecuela.value);
}
actualiza_datos();
form1.ValorDiaImpeditivo.value=form1.ValorDiaImpeditivo.value.replace(',','.');
form1.ValorDiaNoImpeditivo.value=form1.ValorDiaNoImpeditivo.value.replace(',','.');
form1.ValorDiaHospitalizacion.value=form1.ValorDiaHospitalizacion.value.replace(',','.');
form1.ValorPuntoSecuela.value=form1.ValorPuntoSecuela.value.replace(',','.');
</script>
</body>
</html>
<? 

$Siniestro=null;

?>

