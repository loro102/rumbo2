<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
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
  $MM_editTable="Siniestro";
  $MM_editColumn="Id";
  $MM_recordId=""+$_POST["MM_recordId"]+"";
  $MM_editRedirectUrl="Siniestro.asp";
  $MM_fieldsStr="Notas|value";
  $MM_columnsStr="Notas|',none,''";

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
$Notas__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Notas__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Notas is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Id, Notas FROM Siniestro WHERE Id = "+str_replace("'","''",$Notas__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Notas_numRows=0;
?>
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form method="POST" action="<? echo $MM_editAction;?>" name="form1">
  <table align="center">
    <tr valign="baseline"> 
      <td nowrap align="right">Notas:</td>
      <td> <textarea name="Notas" cols="32"><? echo (->$Item["Notas"]->$Value);?></textarea> 
      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">&nbsp;</td>
      <td> <input type="submit" value="Actualizar registro"> </td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo ->$Item["Id"]->$Value;?>">
</form>
<p>&nbsp;</p>
</body>
</html>
<? 

$Notas=null;

?>

