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
?>
<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 ?> 
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
  $MM_editTable="ClinicaRehabilitacion";
  $MM_editRedirectUrl=$_SESSION['paginaant'];
  $MM_fieldsStr="Nombre|value|Direccion|value|CP|value|Ciudad|value|Provincia|value|Telefono1|value|Telefono2|value|Telefono3|value|Fax|value|Email|value";
  $MM_columnsStr="Nombre|',none,''|Direccion|',none,''|CP|',none,''|Ciudad|',none,''|Provincia|',none,''|Telefono1|',none,''|Telefono2|',none,''|Telefono3|',none,''|Fax|',none,''|Email|',none,''";

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
<html>
<head>
<title>Insertar Clinica de rehabilitaci&oacute;n</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
</head>

<body>
<form method="post" action="<? echo $MM_editAction;?>" name="form1">
  <table align="center">
    <tr valign="baseline"> 
      <td nowrap align="right">Nombre:</td>
      <td> <input type="text" name="Nombre" value="" size="32"> </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Direccion:</td>
      <td> <input type="text" name="Direccion" value="" size="32"> </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">CP:</td>
      <td> <input type="text" name="CP" value="" size="32"> </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Ciudad:</td>
      <td> <input type="text" name="Ciudad" value="" size="32"> </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Provincia:</td>
      <td> <input type="text" name="Provincia" value="" size="32"> </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Telefono1:</td>
      <td> <input type="text" name="Telefono1" value="" size="32"> </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Telefono2:</td>
      <td> <input type="text" name="Telefono2" value="" size="32"> </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Telefono3:</td>
      <td> <input type="text" name="Telefono3" value="" size="32"> </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Fax:</td>
      <td> <input type="text" name="Fax" value="" size="32"> </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Email:</td>
      <td> <input type="text" name="Email" value="" size="32"> </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">&nbsp;</td>
      <td> <input type="submit" value="Insertar registro"> </td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<? $_SESSION['paginaant']=$_SERVER["HTTP_REFERER"];
?>
</body>
</html>

