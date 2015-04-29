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
// *** Update Record: set variables


if ((${"MM_update"}=="form1" && ${"MM_recordId"}!=""))
{


  $MM_editConnection=$MM_Avata_seguros_STRING;
  $MM_editTable="Seguros";
  $MM_editColumn="Id";
  $MM_recordId=""+$_POST["MM_recordId"]+"";
  $MM_editRedirectUrl="Asegurado.asp";
  $MM_fieldsStr="Corredor|value|Compania|value|Precio|value|Datos|value|Aceptado|value|FechaEfectivo|value";
  $MM_columnsStr="Corredor|',none,''|Compania|',none,''|Precio|none,none,NULL|Datos|',none,''|Aceptado|none,1,0|FechaEfectivo|',none,NULL";

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
// *** Update Record: construct a sql update statement and execute it


if ((${"MM_update"}!="" && ${"MM_recordId"}!=""))
{


// create the sql update statement

  $MM_editQuery="update ".$MM_editTable." set ";
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
        $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;
;
        if (($MM_editRedirectUrl!=""))
    {

      header("Location: ".$MM_editRedirectUrl);
    } 

  } 


} 

?>
<? 
$Propuesta__MMColParam="1";
if (($_GET["IdPropuesta"]!=""))
{

  $Propuesta__MMColParam=$_GET["IdPropuesta"];
} 

?>
<? 

// $Propuesta is of type "ADODB.Recordset"

echo $MM_Avata_seguros_STRING;
echo "SELECT * FROM Seguros WHERE Id = "+str_replace("'","''",$Propuesta__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Propuesta_numRows=0;
?>
<html>
<head>
<title>Modificar propuesta</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body background="Imagenes/fondo.gif" bgproperties="fixed">
<form ACTION="<? echo $MM_editAction; ?>" METHOD="POST" name="form1" onSubmit="form1.Precio.value=form1.Precio.value.replace(',','.');while (document.form1.Datos.value.indexOf(String.fromCharCode(13,10))>0){document.form1.Datos.value=document.form1.Datos.value.replace(String.fromCharCode(13,10),'<br>');}">
  <p>Corredor: 
    <input name="Corredor" type="text" value="<? echo (.$Item["Corredor"].$Value); ?>" size="50" maxlength="50">
    Compa&ntilde;ia:
    <input name="Compania" type="text" value="<? echo (.$Item["Compania"].$Value); ?>" size="50" maxlength="50">
    <br>
    Precio:
    <input name="Precio" type="text" value="<? echo (.$Item["Precio"].$Value); ?>" size="15" maxlength="10">
    <br>
    Datos:
    <textarea name="Datos" cols="100" rows="10"><? echo (.$Item["Datos"].$Value); ?></textarea>
    <br>
    Aceptado:
    <input type="checkbox" name="Aceptado" value=1  <? if (($Item["Aceptado"]$Value==true))
{
  print "checked";} 
print "";?>>
Fecha en que se hizo efectivo:
<input name="FechaEfectivo" type="text" id="FechaEfectivo" value="<? echo (.$Item["FechaEfectivo"].$Value); ?>" size="15" maxlength="10">
</p>
  <input name="submit" type="submit" value="Actualizar registro">
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo .$Item["Id"].$Value; ?>">
</form>
</body>
</html>
<? 

$Propuesta=null;

?>

