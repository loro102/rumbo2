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
<? 
if (!($_SESSION['MM_UserAuthorization']=="admin"))
{
  header("Location: "."index.asp");
} ?>
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
    $MM_editCmd_CommandText="UPDATE Claves SET Nombre = ?, Clave = ?, Nivel = ?, beneficio = ?, modsiniestro = ?, facturas = ?, VerFacturas = ?, Indemnizacion = ?, tramitadores = ?,Modaseguradora=? WHERE Id = ?";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["Nombre"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["Clave"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["Nivel"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"        MM_IIF($_POST["beneficio"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"        MM_IIF($_POST["modsiniestro"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"        MM_IIF($_POST["facturas"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"        MM_IIF($_POST["verfacturas"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"        MM_IIF($_POST["Indemnizacion"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"    $_POST["tramitadores"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"        MM_IIF($_POST["modaseguradora"],1,0);// adDouble
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param11"        MM_IIF($_POST["MM_recordId"],$_POST["MM_recordId"],null);// adDouble

    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

// append the query string to the redirect URL
    $MM_editRedirectUrl="";
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
$Usuario__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Usuario__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Usuario_cmd is of type "ADODB.Command"
$Usuario_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Usuario_cmd_CommandText="SELECT * FROM Claves WHERE Id = ?";
$Usuario_cmd_Prepared=true;
$Usuario_cmd_Parameters=$Append$Usuario_cmd_CreateParameter="param1"$Usuario__MMColParam); // adDouble

$Usuario=$Usuario_cmd_Execute=$Usuario_numRows=0;;
?>
<? 

// $tramitadores is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Tramitadores";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$tramitadores_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$tramitadores_numRows=$tramitadores_numRows+$Repeat1__numRows;
?>
<html>
<head>
<title>Modificar usuario</title>
</head>

<body bgcolor="#FFFFFF" text="#000000" topmargin="30" background="Imagenes/fondo.gif" bgproperties="fixed">
<script language="JavaScript" src="menu.js"></script>
<form ACTION="<? echo $MM_editAction;?>" METHOD="POST" name="form1">
  <table width="100%"  border="1">
    <tr>
      <td><p>Nombre:
        <input type="text" name="Nombre" value="<? echo ($Usuario->Fields->$Item["Nombre"]->$Value);?>" size="32">
        <br>
          Clave:
          <input type="password" name="Clave" value="<? echo ($Usuario->Fields->$Item["Clave"]->$Value);?>" size="32">
          <br>
        Nivel:
        <input type="text" name="Nivel" value="<? echo ($Usuario->Fields->$Item["Nivel"]->$Value);?>" size="32">
        <br>
        Beneficio:
        <input <? if (($Usuario->Fields$Item["beneficio"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?> type="checkbox" name="beneficio" value=1 >
        <br>
        Modificar siniestro:
        <input <? if (($Usuario->Fields$Item["modsiniestro"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?> type="checkbox" name="modsiniestro" value=1 >
        <br>
        Editar facturas:
        <input <? if (($Usuario->Fields$Item["facturas"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?> type="checkbox" name="facturas" value=1 >        
        <br>
        Ver facturas:
        <input name="verfacturas" type="checkbox" id="verfacturas" value=1 <? if (($Usuario->Fields$Item["VerFacturas"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?> >
        <br>
        Indemnizaci&oacute;n: 
        <input name="Indemnizacion" type="checkbox" id="Indemnizacion" value=1 <? if (($Usuario->Fields$Item["Indemnizacion"]$Value==true))
{
  print "checked=\"checked\"";
  print "";
} ?>> <br>
        Modificar aseguradora
        <input <? if ((($Usuario->Fields$Item["Modaseguradora"]$Value)))
{
  print "checked=\"checked\"";
  print "";
} ?> type="checkbox" name="modaseguradora" id="modaseguradora">
      </p>
      </td>
      <td><p>Tramitadores:</p>
      
        <? 
while((($Repeat1__numRows!=0) && (!($tramitadores==0))))
{

?>
          <input type="checkbox" name="checkboxt<?   echo $Repeat1__index;?>" value="<?   echo (->$Item["Id"]->$Value);?>">
          <?   echo (->$Item["Nombre"]->$Value);?><br>
      <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $tramitadores=mysql_fetch_array($tramitadores_query);
  $tramitadores_BOF=0;

} 
?></td>
    </tr>
  </table>
  <p>
    <input type="hidden" name="tramitadores" value="<? echo ($Usuario->Fields->$Item["tramitadores"]->$Value);?>" size="32">
  <input name="submit" type="submit" value="Actualizar registro" onClick="javascript:actualizatramit();">
</p>
  <p><a href="usuarioborrar.asp?Id=<? echo ($Usuario->Fields->$Item["Id"]->$Value);?>">borrar</a> </p>

  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo $Usuario->Fields->$Item["Id"]->$Value;?>">
</form>
<script language="javascript">
cad="<? echo ($Usuario->Fields->$Item["tramitadores"]->$Value);?><%"
ja=cad.substring(1,cad.length-1).split(",")
for(i=0;i<ja.length;i++) 
	for (a=0;a<<? echo $Repeat1__index;?><%;a++) {
		eval("c=document.form1.checkboxt"+a+".value");
		//alert(c);
		if (c==ja[i]) 
			eval("document.form1.checkboxt"+a+".click()");
		}
function actualizatramit() {
	cad="";
	for (a=0;a<<? echo $Repeat1__index;?><%;a++) {
		eval("c=document.form1.checkboxt"+a+".checked");
		if (c==true) { 
			if (cad=="")
				eval("cad=cad+document.form1.checkboxt"+a+".value")
			else
				eval('cad=cad+","+document.form1.checkboxt'+a+'.value');
			}
		}
	//alert(cad);
	document.form1.tramitadores.value="("+cad+")";
	//alert(document.form1.tramitadores.value);
	}

</script>
</body>
</html>
<? 
$Usuario->Close();
$Usuario=null;

?>
<? 

$tramitadores=null;

?>

