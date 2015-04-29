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
// *** Update Record: set variables

if (((${"MM_update"})=="form1" && (${"MM_recordId"})!=""))
{


  $MM_editConnection=$MM_connrumbo_STRING;
  $MM_editTable=$_GET["Grupo"];
  $MM_editColumn="Id";
  $MM_recordId=""+$_POST["MM_recordId"]+"";
  $MM_editRedirectUrl=$_SESSION['paginaant'];
  $MM_fieldsStr="Nombre|value|Direccion|value|CP|value|Ciudad|value|Provincia|value|Telefono1|value|Telefono2|value|Telefono3|value|Email|value|Fax|value";
  $MM_columnsStr="Nombre|',none,''|Direccion|',none,''|CP|',none,''|Ciudad|',none,''|Provincia|',none,''|Telefono1|',none,''|Telefono2|',none,''|Telefono3|',none,''|Email|',none,''|Fax|',none,''";

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
// *** Update Record: construct a sql update statement and execute it

if (((${"MM_update"})!="" && (${"MM_recordId"})!=""))
{


// create the sql update statement
  $MM_editQuery="update ".$MM_editTable." set ";
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

      $MM_editQuery=$MM_editQuery.",";
    } 

    $MM_editQuery=$MM_editQuery.$MM_columns[$MM_i]." = ".$MM_formVal;

  }

  $MM_editQuery=$MM_editQuery." where ".$MM_editColumn." = ".$MM_recordId;

  if ((!$MM_abortEdit))
  {

// execute the update
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
$Profesional__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Profesional__MMColParam=$_GET["Id"];
} 

?>
<? 
$Profesional__MMgrupo="Otros";
if (($_GET["Grupo"]!=""))
{

  $Profesional__MMgrupo=$_GET["Grupo"];
} 

?>
<? 

// $Profesional is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM "+str_replace("'","''",$Profesional__MMgrupo)+"  WHERE Id = "+str_replace("'","''",$Profesional__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Profesional_numRows=0;
?>
<html>
<head>
<title>Modificar Profesional</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30">
<? $_SESSION['paginaant']=$_SERVER["HTTP_REFERER"];
?>
<p>
  <script language="JavaScript" src="menu.js"></script>
  Datos del profesional:</p>
<p>&nbsp; </p>

  
<form method="post" action="<? echo $MM_editAction;?>" name="form1">
  <table align="center">
    <tr valign="baseline"> 
      <td nowrap align="right">Nombre:</td>
      <td> <input type="text" name="Nombre" value="<? echo (->$Item["Nombre"]->$Value);?>" size="32"> 
      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Direccion:</td>
      <td> <input type="text" name="Direccion" value="<? echo (->$Item["Direccion"]->$Value);?>" size="32"> 
      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">CP:</td>
      <td> <input type="text" name="CP" value="<? echo (->$Item["CP"]->$Value);?>" size="32"> 
      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Ciudad:</td>
      <td> <input type="text" name="Ciudad" value="<? echo (->$Item["Ciudad"]->$Value);?>" size="32"> 
      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Provincia:</td>
      <td> <input type="text" name="Provincia" value="<? echo (->$Item["Provincia"]->$Value);?>" size="32"> 
      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Telefono1:</td>
      <td> <input type="text" name="Telefono1" value="<? echo (->$Item["Telefono1"]->$Value);?>" size="32"> 
      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Telefono2:</td>
      <td> <input type="text" name="Telefono2" value="<? echo (->$Item["Telefono2"]->$Value);?>" size="32"> 
      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Telefono3:</td>
      <td> <input type="text" name="Telefono3" value="<? echo (->$Item["Telefono3"]->$Value);?>" size="32"> 
      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Email:</td>
      <td> <input type="text" name="Email" value="<? echo (->$Item["Email"]->$Value);?>" size="32"> 
      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Fax:</td>
      <td> <input type="text" name="Fax" value="<? echo (->$Item["Fax"]->$Value);?>" size="32"> 
      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">&nbsp;</td>
      <td> <input type="submit" value="Actualizar registro"> </td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo ->$Item["Id"]->$Value;?>">
  <input name="Grupo" type="hidden" id="Grupo" value="<? echo $_GET["Grupo"];?>">
</form>
<p>&nbsp;</p>
</body>
</html>
<? 

$Profesional=null;

?>

