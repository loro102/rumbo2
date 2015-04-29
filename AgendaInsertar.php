<?
  session_start();
  session_register("paginaant_session");
  session_register("MM_Username_session");
  session_register("PAnt_session");
?>
<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
<? 
// *** Edit Operations: declare variables

$MM_editAction=(${"URL"});
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

if (((${"MM_insert"})!=""))
{


  $MM_editConnection=$MM_connrumbo_STRING;
  $MM_editTable="Alertas";
  $MM_editRedirectUrl=$_SESSION['PAnt'];
  $MM_fieldsStr="Fecha|value|Alerta|value";
  $MM_columnsStr="Fecha|',none,NULL|Alerta|',none,''";

// create the MM_fields and MM_columns arrays
  $MM_fields=explode("|",$MM_fieldsStr);
  $MM_columns=explode("|",$MM_columnsStr);

// set the form values
  for ($i=0; $i<=count($MM_fields); $i=$i+2)
  {    $MM_fields[$i+1]=($_POST[$MM_fields[$i]]);

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
  for ($i=0; $i<=count($MM_fields); $i=$i+2)
  {    $FormVal=$MM_fields[$i+1];
    $MM_typeArray=explode(",",$MM_columns[$i+1]);
    $Delim=$MM_typeArray[0];
    if (($Delim=="none"))
    {
      $Delim="";
    } 
    $AltVal=$MM_typeArray[1];
    if (($AltVal=="none"))
    {
      $AltVal="";
    } 
    $EmptyVal=$MM_typeArray[2];
    if (($EmptyVal=="none"))
    {
      $EmptyVal="";
    } 
    if (($FormVal==""))
    {

      $FormVal=$EmptyVal;
    }
      else
    {

      if (($AltVal!=""))
      {

        $FormVal=$AltVal;
      }
        else
      if (($Delim=="'"))
      {
// escape quotes
        $FormVal="'".str_replace("'","''",$FormVal)."'";
      }
        else
      {

        $FormVal=$Delim+$FormVal+$Delim;
      } 

    } 

    if (($i!=0))
    {

      $MM_tableValues=$MM_tableValues.",";
      $MM_dbValues=$MM_dbValues.",";
    } 

    $MM_tableValues=$MM_tableValues.$MM_columns[$i];
    $MM_dbValues=$MM_dbValues.$FormVal;

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
<html>
<head>
<title>Insertar Cita</title>
   <!-Hoja de estilos del calendario -->
  <link rel="stylesheet" type="text/css" media="all" href="jscalendar-1.0/calendar-blue2.css" title="win2k-cold-1" />

  <!-- librería principal del calendario -->
 <script type="text/javascript" src="jscalendar-1.0/calendar.js"></script>

 <!-- librería para cargar el lenguaje deseado -->
  <script type="text/javascript" src="jscalendar-1.0/lang/calendar-es.js"></script>

  <!-- librería que declara la función Calendar.setup, que ayuda a generar un calendario en unas pocas líneas de código -->
  <script type="text/javascript" src="jscalendar-1.0/calendar-setup.js"></script> 
 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>
<body bgcolor="#FFFFFF" text="#000000" topmargin="20">
<? $_SESSION['PAnt']=$_SERVER["HTTP_REFERER"];
?>
<form action="<? echo $MM_editAction;?>" method="post" name="form1" onSubmit="MM_validateForm('Fecha','','R','Alerta','','R');return document.MM_returnValue">
  <script language="JavaScript" src="menu.js"></script>
  <table align="center">
    <tr valign="baseline"> 
      <td nowrap align="right">Fecha:</td>
      <td><input type="text" name="Fecha" id="Fecha" value="<? echo $_GET["Fecha"];?>" size="32"><input type="button" id="lanzador" value="..." /> </td>
<!-- script que define y configura el calendario-->
<script type="text/javascript">
   Calendar.setup({
    inputField     :    "Fecha",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador"     // el id del botón que lanzará el calendario
});
</script> 
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">Alerta:</td>
      <td> 
        <input type="text" name="Alerta" value="<? echo $_GET["Texto"];?>" size="32">      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap align="right">&nbsp;</td>
      <td> 
        <input type="submit" value="Insertar">      </td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="true">
</form>
<p>&nbsp;</p>
</body>
</html>

