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
// *** Update Record: set variables

if (((${"MM_update"})=="form1" && (${"MM_recordId"})!=""))
{


  $MM_editConnection=$MM_connrumbo_STRING;
  $MM_editTable="Alertas";
  $MM_editColumn="Id";
  $MM_recordId=""+$_POST["MM_recordId"]+"";
  $MM_editRedirectUrl="AgendaListar.asp";
  $MM_fieldsStr="fecha|value|texto|value";
  $MM_columnsStr="Fecha|',none,NULL|Alerta|',none,''";

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
$Agenda__MMColParam="1/1/1980";
if (($_GET["FInicio"]!=""))
{

  $Agenda__MMColParam=$_GET["FInicio"];
} 

?>
<? 
$Agenda__MMFFin="1/1/2050";
if (($_GET["FFinal"]!=""))
{

  $Agenda__MMFFin=$_GET["FFinal"];
} 

?>
<? 

// $Agenda is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Alertas  WHERE Fecha between format('"+str_replace("'","''",$Agenda__MMColParam)+"','dd/mm/yyyy') and format('"+str_replace("'","''",$Agenda__MMFFin)+"','dd/mm/yyyy')  ORDER BY Fecha desc";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Agenda_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Agenda_numRows=$Agenda_numRows+$Repeat1__numRows;
?>
<html>
<head>
<title>Agenda</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="20">
<script language="JavaScript" src="menu.js"></script>
<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CCCCCC"> 
    <td>Cita</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!($Agenda==0))))
{

?>
  <tr> 
    <td>
          <form name="form1" method="POST" action="<?   echo $MM_editAction;?>">
            <input name="fecha" type="text" id="fecha" value="<?   echo (->$Item["Fecha"]->$Value);?>">
            <input name="texto" type="text" id="texto" value="<?   echo (->$Item["Alerta"]->$Value);?>" size="80">
            <input type="submit" name="Submit" value="Modificar">
            <input type="hidden" name="MM_update" value="form1">
            <input type="hidden" name="MM_recordId" value="<?   echo ->$Item["Id"]->$Value;?>">
          <a href="AgendaBorrar.asp?Id=<?   echo (->$Item["Id"]->$Value);?>"><img src="Imagenes/Borrar.gif" alt="Borrar" width="22" border="0"></a></form>    </td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Agenda=mysql_fetch_array($Agenda_query);

} 
?>
</table>
</body>
</html>
<? 

$Agenda=null;

?>

