<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:45 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
// *** Edit Operations: declare variables




$MM_editAction=($_SERVER["SCRIPT_NAME"]);
if (($_GET!=""))
{

  $MM_editAction=$MM_editAction."?".htmlspecialchars($_GET);
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
  $MM_editTable="Correspondecia";
  $MM_editColumn="Id";
  $MM_recordId=""+$_POST["MM_recordId"]+"";
  $MM_editRedirectUrl="Siniestro.asp?Id="+($Correspondencia->Fields->$Item["Referencia"]->$Value)+"";
  $MM_fieldsStr="RecibidoEnviado|value|Origen|value|Destino|value|Contenido|value|Referencia|value";
  $MM_columnsStr="RecibidoEnviado|none,none,NULL|Origen|',none,''|Destino|',none,''|Contenido|',none,''|Referencia|none,none,NULL";

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
$Correspondencia__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Correspondencia__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Correspondencia is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Correspondecia WHERE Id = "+str_replace("'","''",$Correspondencia__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Correspondencia_numRows=0;
?>
<html>
<head>
<title>Correspondencia Modificar</title>
</head>

<body>
<form method="POST" action="<? echo $MM_editAction;?>" name="form1">
  Referencia: <? echo (->$Item["Id"]->$Value);?> Recibido o enviado:
    <select name="RecibidoEnviado">
      <option value="0"  <? if ((!!isset(->$Item["RecibidoEnviado"]->$Value)))
{
  if (("0"==(->$Item["RecibidoEnviado"]->$Value)))
  {
    print "SELECTED";
    print "";
  } 
} ?>>Recibido</option>
      <option value="1"  <? if ((!!isset(->$Item["RecibidoEnviado"]->$Value)))
{
  if (("1"==(->$Item["RecibidoEnviado"]->$Value)))
  {
    print "SELECTED";
    print "";
  } 
} ?>>Enviado</option>
    </select> 
    <br> 
  Origen:
  <input name="Origen" type="text" value="<? echo (->$Item["Origen"]->$Value);?>" size="50" maxlength="100">
  Destino: 
  <input name="Destino" type="text" value="<? echo (->$Item["Destino"]->$Value);?>" size="50" maxlength="100">
  Contenido:
  <input name="Contenido" type="text" value="<? echo (->$Item["Contenido"]->$Value);?>" size="100" maxlength="200">
  <br>
  Siniestro de referencia:
  <input type="text" name="Referencia" value="<? echo (->$Item["Referencia"]->$Value);?>" size="32">
  <br>  
  <input type="submit" value="Actualizar registro">
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo ->$Item["Id"]->$Value;?>">
</form>
</body>
</html>
<? 

$Correspondencia=null;

?>

