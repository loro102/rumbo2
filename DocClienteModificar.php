<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:45 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Documento__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Documento__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Documento is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM DocClientes WHERE Id = "+str_replace("'","''",$Documento__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Documento_numRows=0;
?>

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
  $MM_editTable="DocClientes";
  $MM_editColumn="Id";
  $MM_recordId=""+$_POST["MM_recordId"]+"";
  $MM_editRedirectUrl="Siniestro.asp?Id="+$_POST["SiniestroId"]+"";
  $MM_fieldsStr="Fedoc|value|Remitente|value|Destinatario|value|Texto|value|Entrada|value|Salida|value|Lugar|value|SiniestroId|value";
  $MM_columnsStr="Fedoc|',none,NULL|Remitente|',none,''|Destinatario|',none,''|Texto|',none,''|Entrada|',none,NULL|Salida|',none,NULL|Lugar|',none,''|SiniestroId|none,none,NULL";

// create the MM_fields and MM_columns arrays
  $MM_fields=explode("|",$MM_fieldsStr);
  $MM_columns=explode("|",$MM_columnsStr);

// set the form values
  for ($MM_i=0; $MM_i<=count($MM_fields); $MM_i=$MM_i+2)
  {    $MM_fields[$MM_i+1]=($_POST[$MM_fields[$MM_i]]);

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
// *** Insert Record: set variables

if (((${"MM_insert"})=="form1"))
{


  $MM_editConnection=$MM_connrumbo_STRING;
  $MM_editTable="DocClientes";
  $MM_editRedirectUrl="Siniestro.asp?Id="+$_GET["Id"];
  $MM_fieldsStr="Fedoc|value|Remitente|value|Destinatario|value|Texto|value|Entrada|value|Salida|value|Lugar|value|SiniestroId|value";
  $MM_columnsStr="Fedoc|',none,NULL|Remitente|',none,''|Destinatario|',none,''|Texto|',none,''|Entrada|',none,NULL|Salida|',none,NULL|Lugar|',none,''|SiniestroId|none,none,NULL";

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

<head>

<title>Actualizar documentacion del cliente</title>
</head>

<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" bgproperties="fixed" text="#000000" topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<p>&nbsp;</p>
<form method="POST" action="<? echo $MM_editAction;?>" name="form1">
  <p>
    Fecha Documento: 
    <input type="text" name="Fedoc" value="<? echo (->$Item["Fedoc"]->$Value);?>">
    <br>
    Remitente: 
    <input type="text" name="Remitente" value="<? echo (->$Item["Remitente"]->$Value);?>">
    <br>
    Destinatario: 
    <input type="text" name="Destinatario" value="<? echo (->$Item["Destinatario"]->$Value);?>">
    <br>
    Nombre: 
    <input type="text" name="Texto" value="<? echo (->$Item["Texto"]->$Value);?>">
    <br>
    Fecha de entrada:  
    <input type="text" name="Entrada" value="<? echo (->$Item["Entrada"]->$Value);?>">
    Fecha de salida:  
    <input type="text" name="Salida" value="<? echo (->$Item["Salida"]->$Value);?>">
    <br>
    Lugar donde se encuentra:
    <textarea name="Lugar" cols="80" rows="7"><? echo (->$Item["Lugar"]->$Value);?></textarea>
  </p>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo ->$Item["Id"]->$Value;?>">
  <input name="submit" type="submit" value="Actualizar registro">
  <input name="SiniestroId" type="hidden" id="SiniestroId" value="<? echo (->$Item["SiniestroId"]->$Value);?>">
</form>


</body>
</html><? 

$Documento=null;

?>

