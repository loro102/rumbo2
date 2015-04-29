<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
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
  $MM_editTable="Abonados";
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
$Cliente__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Cliente__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Cliente is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Abonados WHERE Id = "+str_replace("'","''",$Cliente__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Cliente_numRows=0;
?>
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30">
<p>
  <script language="JavaScript" src="menu.js"></script>
  Borrar cliente:</p>
<p>Nombre: <? echo (->$Item["Nombre"]->$Value);?>&nbsp;<? echo (->$Item["Apellido1"]->$Value);?>&nbsp;<? echo (->$Item["Apellido2"]->$Value);?><br>
  Direccion: <? echo (->$Item["Direccion"]->$Value);?><br>
  Localidad: <? echo (->$Item["Codigo Postal"]->$Value);?> <? echo (->$Item["Localidad"]->$Value);?> (<? echo (->$Item["Provincia"]->$Value);?>)</p>
<form name="form1" method="POST" action="<? echo $MM_editAction;?>">
  
  <table width="100%" border="0">
    
    <tr align="center"> 
      <td> 
        <input type="submit" name="Submit" value="Eliminar"></td>
      <td> 
        <input type="button" name="Submit2" value="Cancelar" onClick="javascript:history.back(-1);"></td>
    </tr>
  </table>

  <input type="hidden" name="MM_delete" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo ->$Item["Id"]->$Value;?>">
</form>
<p>&nbsp;</p>
</body>
</html>
<? 

$Cliente=null;

?>

