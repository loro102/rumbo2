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
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
// *** Edit Operations: declare variables




$MM_editAction=($_SERVER["SCRIPT_NAME"]);
if (($_GET!=""))
{

  $MM_editAction=$MM_editAction."?".$_GET;
} 


// boolean to abort record edit
$MM_abortEdit=false;

// query string to execute
$MM_editQuery="";
?>
<? 
// *** Insert Record: set variables

if (((${"MM_insert"})=="form1"))
{


  $MM_editConnection=$MM_connrumbo_STRING;
  $MM_editTable="Profesionales";
  $MM_editRedirectUrl="Principal.asp";
  $MM_fieldsStr="Profesional|value|Nombre|value|NIFCIF|value|Especialidad|value|Direccion|value|CP|value|Ciudad|value|Provincia|value|Telefono1|value|Telefono2|value|Telefono3|value|Email|value|Fax|value|Notas|value|AcuerdoPago|value|SumaInd|value|Homologado|value";
  $MM_columnsStr="Tipo|none,none,NULL|Nombre|',none,''|NIFCIF|',none,''|Especialidad|',none,''|Direccion|',none,''|CP|',none,''|Ciudad|',none,''|Provincia|',none,''|Telefono1|',none,''|Telefono2|',none,''|Telefono3|',none,''|Email|',none,''|Fax|',none,''|Notas|',none,''|AcuerdoPago|none,none,NULL|SumaIndemnizacion|none,1,0|Homologado|none,1,0";

// create the MM_fields and MM_columns arrays
  $MM_fields=explode("|",$MM_fieldsStr);
  $MM_columns=explode("|",$MM_columnsStr);

// set the form values
  for ($MM_i=0; $MM_i<=count($MM_fields); $MM_i=$MM_i+2)
  {    $MM_fields[$MM_i+1]=($_POST[$MM_fields[$MM_i]]);

  }


// append the query string to the redirect URL
  if (($MM_editRedirectUrl!="" && $_GET!=""))
  {

    if (((strpos($MM_editRedirectUrl,"?",1) ? strpos($MM_editRedirectUrl,"?",1)+1 : 0)==0 && $_GET!=""))
    {

      $MM_editRedirectUrl=$MM_editRedirectUrl."?".$_GET;
    }
      else
    {

      $MM_editRedirectUrl=$MM_editRedirectUrl."&".$_GET;
    } 

  } 


} 

?>
<? 
// *** Insert Record: construct a sql insert statement and execute it


if (((${"MM_insert"})!=""))
{


// create the sql insert statement
  $MM_tableValues="";
  $MM_dbValues="";
  for ($MM_i=0; $MM_i<=count($MM_fields); $MM_i=$MM_i+2)
  {    $MM_formVal=$MM_fields[$MM_i+1];
    $MM_typeArray=explode(",",$MM_columns[$MM_i+1]);
    $MM_delim=$MM_typeArray[0];
    if (($MM_delim=="none"))
    {
      $MM_delim="";
    } 
    $MM_altVal=$MM_typeArray[1];
    if (($MM_altVal=="none"))
    {
      $MM_altVal="";
    } 
    $MM_emptyVal=$MM_typeArray[2];
    if (($MM_emptyVal=="none"))
    {
      $MM_emptyVal="";
    } 
    if (($MM_formVal==""))
    {

      $MM_formVal=$MM_emptyVal;
    }
      else
    {

      if (($MM_altVal!=""))
      {

        $MM_formVal=$MM_altVal;
      }
        else
      if (($MM_delim=="'"))
      {
// escape quotes
        $MM_formVal="'".str_replace("'","''",$MM_formVal)."'";
      }
        else
      {

        $MM_formVal=$MM_delim+$MM_formVal+$MM_delim;
      } 

    } 

    if (($MM_i!=0))
    {

      $MM_tableValues=$MM_tableValues.",";
      $MM_dbValues=$MM_dbValues.",";
    } 

    $MM_tableValues=$MM_tableValues.$MM_columns[$MM_i];
    $MM_dbValues=$MM_dbValues.$MM_formVal;

  }

  $MM_editQuery="insert into ".$MM_editTable." (".$MM_tableValues.") values (".$MM_dbValues.")";

  if ((!$MM_abortEdit))
  {

// execute the insert
    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_editConnection;    
    $MM_editCmd_CommandText=$MM_editQuery;    
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

    if (($MM_editRedirectUrl!=""))
    {

      header("Location: ".$MM_editRedirectUrl);
    } 

  } 


} 

?>
<? 

// $Profesionales is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM TipoProfesional  ORDER BY Texto ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Profesionales_numRows=0;
?>
<html>
<head>
<title>Insertar Profesional</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30">
<p>
  <script language="JavaScript" src="menu.js"></script>
  <em><strong>Insertar Nuevo Profesional: </strong></em></p>
<p>&nbsp; </p>

  
<form ACTION="<? echo $MM_editAction;?>" METHOD="POST" name="form1">
  <p>Grupo Profesional: 
    <select name="Profesional" id="Profesional">
      <? 
while((!($Profesionales==0)))
{

?>
      <option value="<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["Texto"]->$Value);?></option>
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
    Nombre: 
    <input name="Nombre" type="text" value="" size="50" maxlength="50">
NIF/CIF:
<input name="NIFCIF" type="text" id="NIFCIF" maxlength="50">
Especialidad:
<label>
    <input name="Especialidad" type="text" id="Especialidad" maxlength="50">
    </label>
    <br>
    Direccion: 
    <input name="Direccion" type="text" value="" size="100" maxlength="100">
    <br>
    CP: 
    <input name="CP" type="text" value="" size="10" maxlength="50">
    Ciudad: 
    <input name="Ciudad" type="text" value="" size="50" maxlength="50">
    Provincia: 
    <input name="Provincia" type="text" value="" size="50" maxlength="50">
    <br>
    Telefono1: 
    <input name="Telefono1" type="text" value="" size="15" maxlength="50">
    Telefono2: 
    <input name="Telefono2" type="text" value="" size="15" maxlength="50">
    Telefono3: 
    <input name="Telefono3" type="text" value="" size="15" maxlength="50">
    Email: 
    <input name="Email" type="text" value="" size="20" maxlength="50">
    Fax: 
    <input name="Fax" type="text" value="" size="15" maxlength="50">
    <br>
    Notas:
    <textarea name="Notas" cols="100" rows="15" id="Notas"></textarea>
    <br>
    Acuerdo de pago:
    <select name="AcuerdoPago" id="AcuerdoPago">
      <option value="0" selected>A la emision de factura</option>
      <option value="1">A 30 d&iacute;as</option>
      <option value="2">A 60 d&iacute;as</option>
      <option value="3">A 90 d&iacute;as</option>
      <option value="4">Al alta</option>
      <option value="5">Al cobro</option>
      <option value="-1">No determinado</option>
    </select> 
    <br>
    Sus facturas cuentan para la indemnizaci&oacute;n
<input name="SumaInd" type="checkbox" id="SumaInd" value="checkbox" checked>
  <input name="Homologado" type="hidden" id="Homologado" value="1">
  </p>
  <input name="submit" type="submit" value="Insertar registro">
<input type="hidden" name="MM_insert" value="form1">
</form>
  <? $_SESSION['paginaant']=$_SERVER["HTTP_REFERER"];
?>
<script language="JavaScript" type="text/JavaScript">
form1.Profesional.focus()
</script>
</body>
</html>
<? 

$Profesionales=null;

?>

