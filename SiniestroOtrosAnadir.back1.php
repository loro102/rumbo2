<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 ?>
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
if (((${"MM_insert"})=="form1"))
{

  if ((!$MM_abortEdit))
  {

// execute the insert

    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="INSERT INTO Siniestro (Tipo, CasoTipo, CasoTipo2, TipoTexto, FechaAperturaExpediente, RefExpediente, OtrosDescripcion, OtrosContrario, Abonado,Tramitador,fechadenuncia,fechademanda,presentadademanda) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?),?)";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"        MM_IIF($_POST["Tipo"],$_POST["Tipo"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"        MM_IIF($_POST["CasoTipo"],$_POST["CasoTipo"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"        MM_IIF($_POST["CasoTipo2"],$_POST["CasoTipo2"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"    $_POST["TipoTexto"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"        MM_IIF($_POST["FechaApertura"],$_POST["FechaApertura"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"    $_POST["RefExpediente"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"    $_POST["OtrosDescripcion"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"    $_POST["OtrosContrario"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"        MM_IIF($_POST["Abonado"],$_POST["Abonado"],null);// adDouble
//Interponer demanda
    $MM$editCmd->Parameters->$Append$MM; 
    $editCmdCreateParameter["param10"][135][1][-1][$MM_IFF[$_POST["presentadademanda"]]]; //integer
    $MM$editCmd->Parameters->$Append$MM; 
    $editCmdCreateParameter["param11"][135][1][-1][$MM_IFF[$_POST["fechadenuncia"]]]; //adDBtimeStamp
    $MM$editCmd->Parameters->$Append$MM; 
    $editCmdCreateParameter["param12"][135][1][-1][$MM_IFF[$_POST["fechademanda"]][$_POST["fechademanda"]][null]]//adDBtimeStamp
//Fin de Interponer demanda
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

// append the query string to the redirect URL
    $MM_editRedirectUrl="Cliente.asp";
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
<html>
<head>
<style>
  .imagenNO {display:none;}
  .imagen {display:block;}
</style>
<title>A&ntilde;adir Siniestro</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}
//-->
</script>
</head>
<body bgcolor="#FFFFFF" text="#000000" topmargin="25">
<script language="JavaScript" src="menu.js"></script>
<form method="POST" action="<? echo $MM_editAction;?>" name="form1">
  <p>Tipo:
<script language="javascript">
function oculta() {
if (form1.Tipo.value==2)
	window.desc.className='imagenNO';
	else
	window.desc.className='imagen';
if (form1.Tipo.value!=6)
	window.multas.className='imagenNO';
	else
	window.multas.className='imagen';

}
</script>
    <select name="Tipo" id="Tipo" onChange="oculta();">
      <option value="2" selected>Consulta de abogado
      <option value="3">Otros
      <option value="4">Cliente remitido a otra oficina</option>
        <option value="5">Servicios a cliente de otra oficina</option>
        <option value="6">Recurso de multa</option>
    </select>
  Caso Tipo:
<select name="CasoTipo" id="CasoTipo">
          <option value="1" selected>1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
      </select>
  Caso Tipo Cont:<select name="CasoTipo2" id="CasoTipo2">
          <option value="1" selected>1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
      </select>
  <div class="imagenNO" id="desc">Descripcion:<input name="TipoTexto" type="text" id="TipoTexto" size="50" maxlength="50"></div>
    <p><br>
      Fecha de apertura:
        <input name="FechaApertura" type="text" id="FechaApertura">
        <br>
        <div class="imagenNO" id="multas">N&uacute;mero de expediente: 
        <label>
<!-- Interponer demanda -->
        <label> fecha de denuncia </label>
        <input name=fechadenuncia type =text id "fechadenuncia> Fecha de la denuncia</input>
        <label> Presentada demanda</label>
        <option name = " presentadademanda" type="text" id ="presentadademanda"> fecha de presentacion de la demanda</option>
        <label> Fecha de demanda </label>
        <input type="text" name ="fechademanda" id="fechademanda"> fecha de la demanda</input>
<!--Fin Interponer demanda -->

        <input type="text" name="RefExpediente" id="RefExpediente">
        </label>
        <br></div>
      Descripción:
        <textarea name="OtrosDescripcion" cols="100%" rows="10"></textarea>
      <br>
      Contrario:
      <textarea name="OtrosContrario" cols="100%" rows="10"></textarea>
          <br>
      <br>
      <input name="submit" type="submit" value="Insertar registro">
        </div>
        </p>
      <input type="hidden" name="MM_insert" value="form1">
      <input type="hidden" name="Abonado" value="<? echo ${"Id"};?>">
  </p>
</form><script language="javascript">oculta();</script>
</body>
</html>

