<? // asp2php (vbscript) converted
$CODEPAGE="1252"; ?>
<!--#include file="../Connections/Avata_seguros.php" -->
<? 
// *** Edit Operations: declare variables





$MM_editAction=$_SERVER["SCRIPT_NAME"];
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


if ((${"MM_insert"}=="form1"))
{


  $MM_editConnection=$MM_Avata_seguros_STRING;
  $MM_editTable="Asegurado";
  $MM_editRedirectUrl="principal.asp";
  $MM_fieldsStr="Nombre|value|FechaBusqueda|value|TipoSeguro|value|Datos|value";
  $MM_columnsStr="Nombre|',none,''|FechaBusqueda|',none,NULL|TipoSeguro|',none,''|Datos|',none,''";

// create the MM_fields and MM_columns arrays

  $MM_fields=$Split[$MM_fieldsStr]["|"];
  $MM_columns=$Split[$MM_columnsStr]["|"];

// set the form values

  for ($MM_i=0; $MM_i<=count($MM_fields); $MM_i=$MM_i+2)
  {
    $MM_fields[$MM_i+1]=$_POST[$MM_fields[$MM_i]];

  } 


// append the query string to the redirect URL

  if (($MM_editRedirectUrl!="" && $_GET!=""))
  {

    if (((strpos(1,$MM_editRedirectUrl,"?",$vbTextCompare) ? strpos(1,$MM_editRedirectUrl,"?",$vbTextCompare)+1 : 0)==0 && $_GET!=""))
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



if ((${"MM_insert"}!=""))
{


// create the sql insert statement

  $MM_tableValues="";
  $MM_dbValues="";
  for ($MM_i=0; $MM_i<=count($MM_fields); $MM_i=$MM_i+2)
  {
    $MM_formVal=$MM_fields[$MM_i+1];
    $MM_typeArray=$Split[$MM_columns[$MM_i+1]][","];
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
        $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;
;
        if (($MM_editRedirectUrl!=""))
    {

      header("Location: ".$MM_editRedirectUrl);
    } 

  } 


} 

?>
<html>
<head>
<title>Insertar asegurado</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body background="Imagenes/fondo.gif" bgproperties="fixed">
<form method="POST" action="<? echo $MM_editAction; ?>" name="form1" onSubmit="while (document.form1.Datos.value.indexOf(String.fromCharCode(13,10))>0){document.form1.Datos.value=document.form1.Datos.value.replace(String.fromCharCode(13,10),'<br>');}">
  <p>Nombre:
    <input name="Nombre" type="text" value="" size="100" maxlength="254">  
    <br>
  Fecha de busqueda:
  <input name="FechaBusqueda" type="text" value="" size="12" maxlength="10"> 
  Tipo de seguro:
  <input name="TipoSeguro" type="text" value="" size="50" maxlength="50"> 
  <br>
  Datos: 
  <textarea name="Datos" cols="80" rows="20"></textarea>
  </p>
  <p>
    <input name="submit" type="submit" value="Insertar registro">
    <input type="hidden" name="MM_insert" value="form1">
    </p>
</form>
<p>&nbsp;</p>
</body>
</html>

