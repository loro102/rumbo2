<?
  session_start();
  session_register("paginaant_session");
?>
<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
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
// *** Insert Record: set variables

if (((${"MM_insert"})=="form1"))
{


  $MM_editConnection=$MM_connAvata_STRING;
  $MM_editTable="Abogados";
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
if (((${"MM_insert"})=="form1"))
{

  if ((!$MM_abortEdit))
  {

// execute the insert

    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="INSERT INTO Tramitadores (Nombre, Direccion, CP, Ciudad, Provincia, Telefono1, Telefono2, Telefono3, Fax, Email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["Nombre"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["Direccion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["CP"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"    $_POST["Ciudad"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["Provincia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"    $_POST["Telefono1"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"    $_POST["Telefono2"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"    $_POST["Telefono3"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"    $_POST["Fax"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"    $_POST["Email"]// adVarWChar
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

// append the query string to the redirect URL
    $MM_editRedirectUrl="listadoUsuarios.asp";
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
// *** Insert Record: set variables

if (((${"MM_insert"})=="form1"))
{


  $MM_editConnection=$MM_connAvata_STRING;
  $MM_editTable="Abogados";
  $MM_editRedirectUrl=$_SESSION['paginaant'];
  $MM_fieldsStr="Nombre|value";
  $MM_columnsStr="Nombre|',none,''";

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
<html>
<head>
<title>Insertar Abogado</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
</head>

<body>
<p>&nbsp;</p>
<? $_SESSION['paginaant']=$_SERVER["HTTP_REFERER"];
?>
<form method="POST" action="<? echo $MM_editAction;?>" name="form1">
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
<p>&nbsp;</p>
</body>
</html>

