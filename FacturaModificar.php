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
if (((${"MM_update"})=="form1"))
{

  if ((!$MM_abortEdit))
  {

// execute the update

    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="UPDATE Facturas SET [Nro Factura] = ?, Fecha = ?, Descripcion = ?, Tabla = ?, Valor = ?, FaltaOriginal = ?, [Cuantia rumbo] = ?, [Cuantia Abonado] = ?, ValorReal = ?, ValorIndemnizacion = ?, RestarIVABeneficio = ?, SumarIVABeneficio = ?, EstadoPago = ?, EstadoCobro = ?, FormaPago = ?, NroPagare = ?, FechaPago = ?, FechaCobroComision = ?, Notas = ?, NoLaPagan = ?, Pagado = ?, ReclamadaCompania = ? WHERE Id = ?";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["Nro_Factura"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"        MM_IIF($_POST["Fecha"],$_POST["Fecha"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["Descripcion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"        MM_IIF($_POST["Tabla"],$_POST["Tabla"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"        MM_IIF($_POST["Valor"],$_POST["Valor"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"        MM_IIF($_POST["FaltaOriginal"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"        MM_IIF($_POST["Cuantia_rumbo"],$_POST["Cuantia_rumbo"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"        MM_IIF($_POST["Cuantia_Abonado"],$_POST["Cuantia_Abonado"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"        MM_IIF($_POST["ValorReal"],$_POST["ValorReal"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"        MM_IIF($_POST["CuantiaIndemnizacion"],$_POST["CuantiaIndemnizacion"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param11"        MM_IIF($_POST["RestarIVABeneficio"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param12"        MM_IIF($_POST["SumarIVABeneficio"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param13"        MM_IIF($_POST["EstadoPago"],$_POST["EstadoPago"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param14"        MM_IIF($_POST["EstadoCobro"],$_POST["EstadoCobro"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param15"        MM_IIF($_POST["FormaPago"],$_POST["FormaPago"],null);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param16"    $_POST["NroPagare"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param17"        MM_IIF($_POST["FechaPago"],$_POST["FechaPago"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param18"        MM_IIF($_POST["FechaCobroComision"],$_POST["FechaCobroComision"],null);// adDBTimeStamp
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param19"    $_POST["Notas"]// adLongVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param20"        MM_IIF($_POST["NoLaPagan"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param21"        MM_IIF($_POST["Pagada"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param22"        MM_IIF($_POST["reclamada"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param23"        MM_IIF($_POST["MM_recordId"],$_POST["MM_recordId"],null);// adDouble
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
$Factura__MMColParam="1";
if (($_GET["FacturaId"]!=""))
{

  $Factura__MMColParam=$_GET["FacturaId"];
} 

?>
<? 

// $Factura_cmd is of type "ADODB.Command"
$Factura_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Factura_cmd_CommandText="SELECT * FROM Facturas WHERE Id = ?";
$Factura_cmd_Prepared=true;
$Factura_cmd_Parameters=$Append$Factura_cmd_CreateParameter="param1"$Factura__MMColParam); // adDouble

$Factura=$Factura_cmd_Execute=$Factura_numRows=0;;
?>
<? 

// $Sectores is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM TipoProfesional";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Sectores_numRows=0;
?>
<? 

// $Profesionales is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Profesionales";
if (!($_GET["Sector"]==""))
{

    echo ." WHERE Tipo=".$_GET["Sector"];
}
  else
{

    echo ." WHERE Tipo=".$Factura->Fields->$Item["Tabla"];
} 

echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Profesionales_numRows=0;
?>
<? 

// $FormasPAgo is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM FormasPago";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$FormasPAgo_numRows=0;
?>
<html>
<head>
<title>Modificar Factura</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}


</script>
</head>

<body topmargin="30">
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

  location.replace("FacturaModificar.asp?Id=<? echo $_GET["Id"];?><%&Capa=<? echo $_GET["Capa"];?><%&FacturaId=<? echo $_GET["FacturaId"];?><%&Sector="+form1.Tabla.value);
  }
  
  function puntosacomas() {
	form1.CuantiaIndemnizacion.value=form1.CuantiaIndemnizacion.value.replace(',','.');
	form1.Cuantia_rumbo.value=form1.Cuantia_rumbo.value.replace(',','.');
	form1.Cuantia_Abonado.value=form1.Cuantia_Abonado.value.replace(',','.');
	form1.ValorReal.value=form1.ValorReal.value.replace(',','.');
  	}
//-->
</script>
<form method="POST" action="<? echo $MM_editAction;?>" name="form1" onSubmit="javascript:puntosacomas();MM_validateForm('Cuantia_rumbo','','RisNum','Cuantia_Abonado','','RisNum','ValorReal','','RisNum','CuantiaIndemnizacion','','RisNum');return document.MM_returnValue">
  <table width="100%" border="1" cellspacing="0">
    <tr bgcolor="#00FF00">
      <td><strong>
        <input type="hidden" name="Siniestro" value="<? echo $_GET["Id"];?>" size="32">
      Datos de la factura
      <input name="Cambios" type="hidden" id="Cambios">
      </strong></td>
    </tr>
    <tr>
      <td>Numero de factura:
        <input type="text" name="Nro_Factura" value="<? echo ($Factura->Fields->$Item["Nro Factura"]->$Value);?>" size="32">
Fecha de factura:
<input type="text" name="Fecha" value="<? echo ($Factura->Fields->$Item["Fecha"]->$Value);?>" size="32">
<br>
Descripcion:
<input type="text" name="Descripcion" value="<? echo ($Factura->Fields->$Item["Descripcion"]->$Value);?>" size="32">
<br>
Sector:
<select name="Tabla" id="select2" onChange="ir();">
  <? 
while((!($Sectores==0)))
{

?>
  <option value="<?   echo (->$Item["Id"]->$Value);?>" <? 
  if (!($_GET["Sector"]==""))
  {

    if (((->$Item["Id"]->$Value)==($_GET["Sector"])))
    {
      print "SELECTED";
      print "";
    } 
  }
    else
  {

    if ((!!isset(($Factura->Fields->$Item["Tabla"]->$Value))))
    {
      if (((->$Item["Id"]->$Value)==(($Factura->Fields->$Item["Tabla"]->$Value))))
      {
        print "SELECTED";
        print "";
      } 
    } ?> ><?     echo (->$Item["Texto"]->$Value);?> </option>
  <? 
    $Sectores=mysql_fetch_array($Sectores_query);
    $Sectores_BOF=0;

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
<select name="Valor" id="select3">
  <? 
  while((!($Profesionales==0)))
  {

?>
  <option value="<?     echo (->$Item["ID"]->$Value);?>" <?     if ((!!isset(($Factura->Fields->$Item["Valor"]->$Value))))
    {
      if (((->$Item["ID"]->$Value)==(($Factura->Fields->$Item["Valor"]->$Value))))
      {
        print "SELECTED";
        print "";
      } 
    } ?> ><?     echo (->$Item["Nombre"]->$Value);?></option>
  <? 
    $Profesionales=mysql_fetch_array($Profesionales_query);
    $Profesionales_BOF=0;

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
Falta la factura original
<input <?   if (($Factura->Fields$Item["FaltaOriginal"]$Value==true))
  {
    print "checked";
    print "";
  } ?> name="FaltaOriginal" type="checkbox" id="FaltaOriginal" value="checkbox">
</td>
    </tr>
    <tr bgcolor="#00FF00">
      <td><strong>Cuantias</strong></td>
    </tr>
    <tr>
      <td><p>Cuantia Factura:
          <input type="text" name="Cuantia_rumbo" value="<?   echo ($Factura->Fields->$Item["Cuantia rumbo"]->$Value);?>" size="20">
Cuantia Abonado:
<input type="text" name="Cuantia_Abonado" value="<?   echo ($Factura->Fields->$Item["Cuantia Abonado"]->$Value);?>" size="20">
Cuantia rumbo:
<input type="text" name="ValorReal" value="<?   echo ($Factura->Fields->$Item["ValorReal"]->$Value);?>" size="20">
Cuantia Indemnizacion:
<input name="CuantiaIndemnizacion" type="text" id="CuantiaIndemnizacion" value="<?   echo ($Factura->Fields->$Item["ValorIndemnizacion"]->$Value);?>">
      <br>
      Emitimos factura por la comisi&oacute;n
<input name="RestarIVABeneficio" type="checkbox" id="RestarIVABeneficio" value="checkbox" <?   if (($Factura->Fields$Item["RestarIVABeneficio"]$Value==true))
  {
    print "checked";
    print "";
  } ?>>
No emitimos factura por los honorarios
<input name="SumarIVABeneficio" type="checkbox" id="SumarIVABeneficio" value="checkbox" <?   if (($Factura->Fields$Item["SumarIVABeneficio"]$Value==true))
  {
    print "checked";
    print "";
  } ?>>
      </p>
      </td>
    </tr>
    <tr bgcolor="#00FF00">
      <td><strong>Datos del pago</strong></td>
    </tr>
    <tr>
      <td>Estado del pago:
          
        <select name="EstadoPago" id="EstadoPago">
          <option value="0" selected <?   if ((!!isset(($Factura->Fields->$Item["EstadoPago"]->$Value))))
  {
    if (("0"==(($Factura->Fields->$Item["EstadoPago"]->$Value))))
    {
      print "SELECTED";
      print "";
    } 
  } ?>>Sin 
          pagar</option>
          <option value="1" <?   if ((!!isset(($Factura->Fields->$Item["EstadoPago"]->$Value))))
  {
    if (("1"==(($Factura->Fields->$Item["EstadoPago"]->$Value))))
    {
      print "SELECTED";
      print "";
    } 
  } ?>>Pagada 
          en espera de cobro de la comision</option>
          <option value="2" <?   if ((!!isset(($Factura->Fields->$Item["EstadoPago"]->$Value))))
  {
    if (("2"==(($Factura->Fields->$Item["EstadoPago"]->$Value))))
    {
      print "SELECTED";
      print "";
    } 
  } ?>>Pagada 
          la factura y la comision</option>
        </select>
      Estado de cobro:
        <select name="EstadoCobro" id="EstadoCobro">
          <option value="0" selected <?   if ((!!isset(($Factura->Fields->$Item["EstadoCobro"]->$Value))))
  {
    if (("0"==(($Factura->Fields->$Item["EstadoCobro"]->$Value))))
    {
      print "SELECTED";
      print "";
    } 
  } ?>>Sin 
          cobrar 
          <option value="1" <?   if ((!!isset(($Factura->Fields->$Item["EstadoCobro"]->$Value))))
  {
    if (("1"==(($Factura->Fields->$Item["EstadoCobro"]->$Value))))
    {
      print "SELECTED";
      print "";
    } 
  } ?>>Reclamada 
          a la compa&ntilde;ia 
          <option value="2" <?   if ((!!isset(($Factura->Fields->$Item["EstadoCobro"]->$Value))))
  {
    if (("2"==(($Factura->Fields->$Item["EstadoCobro"]->$Value))))
    {
      print "SELECTED";
      print "";
    } 
  } ?>>Pagada 
          al siniestrado 
          <option value="3" <?   if ((!!isset(($Factura->Fields->$Item["EstadoCobro"]->$Value))))
  {
    if (("3"==(($Factura->Fields->$Item["EstadoCobro"]->$Value))))
    {
      print "SELECTED";
      print "";
    } 
  } ?>>Pagada 
        </select>
      <br>
      Forma de pago:
      <select name="FormaPago" id="select4">
        <? 
  while((!($FormasPAgo==0)))
  {

?>
        <option value="<?     echo (->$Item["Id"]->$Value);?>" <?     if ((!!isset(($Factura->Fields->$Item["FormaPago"]->$Value))))
    {
      if (((->$Item["Id"]->$Value)==(($Factura->Fields->$Item["FormaPago"]->$Value))))
      {
        print "SELECTED";
        print "";
      } 
    } ?> ><?     echo (->$Item["Texto"]->$Value);?></option>
        <? 
    $FormasPAgo=mysql_fetch_array($FormasPAgo_query);
    $FormasPAgo_BOF=0;

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
<input name="NroPagare" type="text" id="NroPagare3" value="<?   echo ($Factura->Fields->$Item["NroPagare"]->$Value);?>" size="50" maxlength="50">
</td>
    </tr>
    <tr bgcolor="#00FF00">
      <td><strong>Fechas de pagos</strong></td>
    </tr>
    <tr>
      <td>Fecha de pago de la factura:
          <input name="FechaPago" type="text" id="FechaPago" value="<?   echo ($Factura->Fields->$Item["FechaPago"]->$Value);?>">
      Fecha de cobro de la comision:
      <input name="FechaCobroComision" type="text" id="FechaCobroComision" value="<?   echo ($Factura->Fields->$Item["FechaCobroComision"]->$Value);?>">
      </td>
    </tr>
    <tr bgcolor="#00FF00">
      <td><strong>Notas</strong></td>
    </tr>
    <tr>
      <td><div align="center">
        <textarea name="Notas" cols="100" rows="10" id="textarea2"><?   echo ($Factura->Fields->$Item["Notas"]->$Value);?></textarea>
</div>
      </td>
    </tr>
  </table>
  <p>
    <input name="NoLaPagan" type="checkbox" id="NoLaPagan" value="checkbox" <?   if (($Factura->Fields$Item["NoLaPagan"]$Value==true))
  {
    print "checked";
    print "";
  } ?>>
    Esta factura no la paga la cia
    <input <?   if (($Factura->Fields$Item["Pagado"]$Value==true))
  {
    print "checked";
    print "";
  } ?> name="Pagada" type="checkbox" id="Pagada" value="checkbox">
Factura pagada por la compa&ntilde;ia
<input name="reclamada" type="checkbox" id="reclamada" value="checkbox" <?   if (($Factura->Fields$Item["ReclamadaCompania"]$Value==true))
  {
    print "checked";
    print "";
  } ?>>
Factura reclamada a la compa&ntilde;ia</p>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<?   echo $Factura->Fields->$Item["Id"]->$Value;?>">
  <input name="submit" type="submit" value="Actualizar registro">
</form>
<script language="JavaScript">
if (consultarGalleta("Nro_Factura")!="") {
  var fecha=new Date (1980, 12, 31);
  document.form1.Nro_Factura.value=consultarGalleta("Nro_Factura");
  mandarGalleta("Nro_Factura","",fecha);
  document.form1.Fecha.value=consultarGalleta("Fecha");
  mandarGalleta("Fecha","",fecha);
  document.form1.Descripcion.value=consultarGalleta("Descripcion");
  mandarGalleta("Descripcion","",fecha);
 // document.form1.Cuantia_rumbo.value=consultarGalleta("Cuantia_rumbo");
 // mandarGalleta("Cuantia_rumbo","",fecha);
 // document.form1.Cuantia_Abonado.value=consultarGalleta("Cuantia_Abonado");
 // mandarGalleta("Cuantia_Abonado","",fecha);
 // document.form1.FormaPago.value=consultarGalleta("FormaPago");
 // mandarGalleta("NroPagare","",fecha);
 // document.form1.NroPagare.value=consultarGalleta("NroPagare");
 // mandarGalleta("NroPagare","",fecha);
 // document.form1.ValorReal.value=consultarGalleta("ValorReal");
 // mandarGalleta("ValorReal","",fecha);
  }
</script>
</body>
</html>
<? 
  $Factura->Close();
  $Factura=null;

?>
<? 
  
  $Sectores=null;

?>
<? 
  
  $Profesionales=null;

?>
<? 
  
  $FormasPAgo=null;

?>
} 
