<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:46 2015
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
if (((${"MM_insert"})=="form1"))
{

  if ((!$MM_abortEdit))
  {

// execute the insert

    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="INSERT INTO Facturas (Siniestro, [Nro Factura], Fecha, Descripcion, Tabla, Valor, FaltaOriginal, [Cuantia rumbo], [Cuantia Abonado], ValorReal, ValorIndemnizacion, RestarIVABeneficio, SumarIVABeneficio, EstadoPago, EstadoCobro, FormaPago, NroPagare, FechaPago, FechaCobroComision, Notas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"        MM_IIF($_POST["Siniestro"],$_POST["Siniestro"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["Nro_Factura"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"        MM_IIF($_POST["Fecha"],$_POST["Fecha"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"    $_POST["Descripcion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"        MM_IIF($_POST["sector"],$_POST["sector"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"        MM_IIF($_POST["Profesional"],$_POST["Profesional"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"        MM_IIF($_POST["FaltaOriginal"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"        MM_IIF($_POST["Cuantia_rumbo"],$_POST["Cuantia_rumbo"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"        MM_IIF($_POST["Cuantia_Abonado"],$_POST["Cuantia_Abonado"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"        MM_IIF($_POST["ValorReal"],$_POST["ValorReal"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param11"        MM_IIF($_POST["CuantiaIndemnizacion"],$_POST["CuantiaIndemnizacion"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param12"        MM_IIF($_POST["RestarIVABeneficio"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param13"        MM_IIF($_POST["SumarIVABeneficio"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param14"        MM_IIF($_POST["EstadoPago"],$_POST["EstadoPago"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param15"        MM_IIF($_POST["EstadoCobro"],$_POST["EstadoCobro"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param16"        MM_IIF($_POST["FormaPago"],$_POST["FormaPago"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param17"    $_POST["NroPagare"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param18"        MM_IIF($_POST["FechaPago"],$_POST["FechaPago"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param19"        MM_IIF($_POST["FechaCobroComision"],$_POST["FechaCobroComision"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param20"    $_POST["Notas"]// adLongVarWChar
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

// $Tablas is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM TipoProfesional";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Tablas_numRows=0;
?>
<? 
$Tablas2__MMColParam="1";
if (($_GET["Tipo"]!=""))
{

  $Tablas2__MMColParam=$_GET["Tipo"];
} 

?>
<? 

// $Tablas2 is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Profesionales WHERE Tipo = "+str_replace("'","''",$Tablas2__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Tablas2_numRows=0;
?>
<? 

// $FormasPago is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM FormasPago";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$FormasPago_numRows=0;
?>
<html>
<head>
<title>Insertar Factura</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}


//-->
</script>
</head>

<body topmargin="25">
<script language="JavaScript" src="menu.js"></script>
<script language="JavaScript" src="funciones.js"></script>
<script language="JavaScript">
<!--
function ir() {
  mandarGalleta("Nro_Factura",document.form1.Nro_Factura.value);
  mandarGalleta("Fecha",document.form1.Fecha.value);
  mandarGalleta("Descripcion",document.form1.Descripcion.value);
  //mandarGalleta("Cuantia_rumbo",document.form1.Cuantia_rumbo.value);
  //mandarGalleta("Cuantia_Abonado",document.form1.Cuantia_Abonado.value);
  //mandarGalleta("FormaPago",document.form1.FormaPago.value);
  //mandarGalleta("NroPagare",document.form1.NroPagare.value);
  //mandarGalleta("ValorReal",document.form1.ValorReal.value);

  location.replace("FacturaInsertar.asp?Id=<? echo $_GET["Id"];?><%&Capa=<? echo $_GET["Capa"];?><%&Tipo="+form1.sector.value);
  }

  function puntosacomas() {
	form1.CuantiaIndemnizacion.value=form1.CuantiaIndemnizacion.value.replace(',','.');
	form1.Cuantia_rumbo.value=form1.Cuantia_rumbo.value.replace(',','.');
	form1.Cuantia_Abonado.value=form1.Cuantia_Abonado.value.replace(',','.');
	form1.ValorReal.value=form1.ValorReal.value.replace(',','.');
  	}
//-->
</script>
<form ACTION="<? echo $MM_editAction;?>" METHOD="POST" name="form1"  onSubmit="javascript:puntosacomas();MM_validateForm('Cuantia_rumbo','','RisNum','Cuantia_Abonado','','RisNum','ValorReal2','','RisNum','CuantiaIndemnizacion','','RisNum');return document.MM_returnValue">
  <table width="100%" border="1" cellspacing="0">
    <tr bgcolor="#00FF00">
      <td><strong>
        <input type="hidden" name="Siniestro" value="<? echo $_GET["Id"];?>" size="32">
      Datos de la factura</strong></td>
    </tr>
    <tr>
      <td>Sector:
<select name="sector" id="select2" onChange="MM_callJS('ir()')">
  <? 
while((!($Tablas==0)))
{

?>
  <option value="<?   echo (->$Item["Id"]->$Value);?>" <?   if ((!!isset($_GET["Tipo"])))
  {
    if (((->$Item["Id"]->$Value)==($_GET["Tipo"])))
    {
      print "SELECTED";
      print "";
    } 
  } ?> ><?   echo (->$Item["Texto"]->$Value);?></option>
  <? 
  $Tablas=mysql_fetch_array($Tablas_query);
  $Tablas_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
</select>
Profesional:
<select name="Profesional" id="select3">
  <? 
while((!($Tablas2==0)))
{

?>
  <option value="<?   echo (->$Item["ID"]->$Value);?>" <?   if ((!!isset($_GET["Profesional"])))
  {
    if (((->$Item["Nombre"]->$Value)==($_GET["Profesional"])))
    {
      print "SELECTED";
      print "";
    } 
  } ?> ><?   echo (->$Item["Nombre"]->$Value);?></option>
  <? 
  $Tablas2=mysql_fetch_array($Tablas2_query);
  $Tablas2_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
</select>
<br>
      Numero de factura:
        <input type="text" name="Nro_Factura" value="" size="32">
Fecha de factura:
<input name="Fecha" type="text" id="Fecha" size="10">
<br>
Descripcion:
<input type="text" name="Descripcion" value="" size="70">
<br>

Falta la factura original 
<input name="FaltaOriginal" type="checkbox" id="FaltaOriginal" value="checkbox"></td>
    </tr>
    <tr bgcolor="#00FF00">
      <td><strong>Cuantias</strong></td>
    </tr>
    <tr>
      <td>Cuantia Factura:
        <input type="text" name="Cuantia_rumbo" value="0" size="20" onChange="document.form1.ValorReal.value=document.form1.Cuantia_rumbo.value;document.form1.CuantiaIndemnizacion.value=document.form1.Cuantia_rumbo.value;">
Cuantia Abonado:
<input type="text" name="Cuantia_Abonado" value="0" size="20">
Cuantia Empresa:
<input name="ValorReal" type="text" id="ValorReal2" value="0">
Cuantia indemnizacion:
<input name="CuantiaIndemnizacion" type="text" id="CuantiaIndemnizacion" value="0">
<br>
Emitimos factura por la comisi&oacute;n
<input name="RestarIVABeneficio" type="checkbox" id="RestarIVABeneficio" value="checkbox"> 
No emitimos factura por los honorarios
<input name="SumarIVABeneficio" type="checkbox" id="SumarIVABeneficio" value="checkbox"></td>
    </tr>
    <tr bgcolor="#00FF00">
      <td><strong>Datos del pago</strong></td>
    </tr>
    <tr>
      <td>Estado del pago: <select name="EstadoPago" id="EstadoPago">
        <option value="0" selected>Sin pagar</option>
        <option value="1">Pagada en espera de cobro de la comision</option>
        <option value="2">Pagada la factura y la comision</option>
      </select>
Estado de cobro:
<select name="EstadoCobro" id="EstadoCobro">
          <option value="0" selected>Sin cobrar
          <option value="1">Reclamada a la compa&ntilde;ia
          <option value="2">Pagada al siniestrado
          <option value="3">Pagada          
        </select>        <br>
        Forma de pago:
        <select name="FormaPago" id="select">
          <? while((!($FormasPago==0)))
{

?>
          <option value="<?   echo (->$Item["Id"]->$Value);?>" <?   if ((!!isset("1")))
  {
    if (((->$Item["Id"]->$Value)==("1")))
    {
      print "SELECTED";
      print "";
    } 
  } ?> ><?   echo (->$Item["Texto"]->$Value);?></option>
          <? 
  $FormasPago=mysql_fetch_array($FormasPago_query);
  $FormasPago_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
        </select>
N&uacute;mero de pagare / nota de pago:
<input name="NroPagare" type="text" id="NroPagare2" size="50" maxlength="50">
</td>
    </tr>
    <tr bgcolor="#00FF00">
      <td><strong>Fechas de pagos</strong></td>
    </tr>
    <tr>
      <td>Fecha de pago de la factura:
      <input name="FechaPago" type="text" id="FechaPago">
      Fecha de cobro de la comision:
      <input name="FechaCobroComision" type="text" id="FechaCobroComision"></td>
    </tr>
    <tr bgcolor="#00FF00">
      <td><strong>Notas</strong></td>
    </tr>
    <tr>
      <td><div align="center">
        <textarea name="Notas" cols="100" rows="10" id="textarea"></textarea>
      </div></td>
    </tr>
  </table>

  <input name="submit" type="submit" value="Insertar factura">
  <input type="hidden" name="MM_insert" value="form1">
</form>
<script language="JavaScript">
var fecha=new Date (1980, 12, 31);
if (consultarGalleta("Nro_Factura")!="") {
  document.form1.Nro_Factura.value=consultarGalleta("Nro_Factura");
  mandarGalleta("Nro_Factura","",fecha);
  document.form1.Fecha.value=consultarGalleta("Fecha");
  mandarGalleta("Fecha","",fecha);
  document.form1.Descripcion.value=consultarGalleta("Descripcion");
  mandarGalleta("Descripcion","",fecha);
  //document.form1.Cuantia_rumbo.value=consultarGalleta("Cuantia_rumbo");
  //mandarGalleta("Cuantia_rumbo","",fecha);
  //document.form1.Cuantia_Abonado.value=consultarGalleta("Cuantia_Abonado");
  //mandarGalleta("Cuantia_Abonado","",fecha);
  //document.form1.FormaPago.value=consultarGalleta("FormaPago");
  //mandarGalleta("NroPagare","",fecha);
  //document.form1.NroPagare.value=consultarGalleta("NroPagare");
  //mandarGalleta("NroPagare","",fecha);
  //document.form1.ValorReal.value=consultarGalleta("ValorReal");
  //mandarGalleta("ValorReal","",fecha);
  }
</script>
</body>
</html>
<? 

$Tablas=null;

?>
<? 

$Tablas2=null;

?>
<? 

$FormasPago=null;

?>

