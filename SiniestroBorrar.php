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
// *** Delete Record: declare variables

if (((${"MM_delete"})=="form1" && (${"MM_recordId"})!=""))
{


  $MM_editConnection=$MM_connrumbo_STRING;
  $MM_editTable="Siniestro";
  $MM_editColumn="Id";
  $MM_recordId=""+$_POST["MM_recordId"]+"";
  $MM_editRedirectUrl="Principal.asp";

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
// *** Delete Record: construct a sql delete statement and execute it

if (((${"MM_delete"})!="" && (${"MM_recordId"})!=""))
{


// create the sql delete statement
  $MM_editQuery="delete from ".$MM_editTable." where ".$MM_editColumn." = ".$MM_recordId;

  if ((!$MM_abortEdit))
  {

// execute the delete
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
$Siniestro__MMColParam="1";
if (($_GET["SiniestroId"]!=""))
{

  $Siniestro__MMColParam=$_GET["SiniestroId"];
} 

?>
<? 

// $Siniestro is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Siniestro WHERE Id = "+str_replace("'","''",$Siniestro__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Siniestro_numRows=0;
?>
<html>
<head>
<title>Siniestro Borrar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<p>Eliminar el siniestro ocurrido el <? echo (->$Item["Fecha Siniestro"]->$Value);?> en <? echo (->$Item["Lugar"]->$Value);?>.</p>
<form name="form1" method="POST" action="<? echo $MM_editAction;?>">
  <table width="100%" border="0">
    <tr align="center"> 
      <td> <input type="submit" name="Submit" value="Borrar"></td>
      <td> <input type="button" value="Cancelar" onClick="window.history.go('Siniestro.asp?Id=<? echo $_GET["SiniestroId"];?>');"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_delete" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo ->$Item["Id"]->$Value;?>">
</form>
</body>
</html>
<? 

$Siniestro=null;

?>

