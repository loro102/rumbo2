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
// *** Insert Record: set variables

if (((${"MM_insert"})=="form1"))
{


  $MM_editConnection=$MM_connrumbo_STRING;
  $MM_editTable="DocClientes";
  $MM_editRedirectUrl="Siniestro.asp";
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

<title>Insertar documentacion del cliente</title>
</head>

<body bgcolor="#EBEBEB" background="Imagenes/fondo.gif" bgproperties="fixed" text="#000000" topmargin="30">
<form method="POST" action="<? echo $MM_editAction;?>" name="form1">
  <p>
    Fecha Documento: 
    <input type="text" name="Fedoc" value="" >
    <br>
    Remitente: 
    <input type="text" name="Remitente" value="" >
    <br>
    Destinatario: 
    <input type="text" name="Destinatario" value="" >
    <br>
    Nombre: 
    <input type="text" name="Texto" value="" >
    <br>
    Fecha de entrada:  
    <input type="text" name="Entrada" value="" >
    Fecha de salida:  
    <input type="text" name="Salida" value="" >
    <br>
    Lugar donde se encuentra:
    <textarea name="Lugar" cols="80" rows="7"></textarea>
  </p>
  <input name="submit" type="submit" value="Insertar registro">
  <input type="hidden" name="SiniestroId" value="<? echo $_GET["Id"];?>" >
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
<script language="JavaScript" src="menu.js"></script>
</body>
</html>

