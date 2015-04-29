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
  $MM_editTable="SiniestroProfesional";
  $MM_editColumn="ID";
  $MM_recordId=""+$_POST["MM_recordId"]+"";
  $MM_editRedirectUrl="Siniestro.asp";
  $MM_fieldsStr="Profesional|value|FComienzo|value|FFinal|value|NVisitas|value";
  $MM_columnsStr="Profesional|none,none,NULL|FechaComienzo|',none,NULL|FechaFin|',none,NULL|NroVisitas|',none,''";

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
$SP__MMColParam="1";
if (($_GET["SPId"]!=""))
{

  $SP__MMColParam=$_GET["SPId"];
} 

?>
<? 

// $SP is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT SiniestroProfesional.*, Profesionales.Tipo  FROM SiniestroProfesional, Profesionales  WHERE SiniestroProfesional.ID = "+str_replace("'","''",$SP__MMColParam)+" and Profesionales.Id=SiniestroProfesional.Profesional";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$SP_numRows=0;

if (($_GET["Tipo"]==""))
{

  $eltipo=->$Item["Tipo"]->$Value;
  $elprofesional=->$Item["Profesional"]->$Value;
}
  else
{

  $eltipo=$_GET["Tipo"];
  $elprofesional=1;
} 

?>
<? 

// $Tipos is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM TipoProfesional";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Tipos_numRows=0;
?>
<? 

// $Profesionales is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Profesionales WHERE Tipo = "+($eltipo);
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Profesionales_numRows=0;
?>
<html>
<head>
<title>Modicar relaccion de profesional con siniestro</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30" onLoad="while (document.form1.NVisitas.value.indexOf('<br>')>0){document.form1.NVisitas.value=document.form1.NVisitas.value.replace('<br>',String.fromCharCode(13,10));}">
<p>
  <script language="JavaScript" src="menu.js"></script>
  <script language="JavaScript" src="funciones.js"></script>
  <script language="JavaScript">
function cambio() {
	mandarGalleta("FComienzo",document.form1.FComienzo.value);
	mandarGalleta("FFinal",document.form1.FFinal.value);
	mandarGalleta("NVisitas",document.form1.NVisitas.value);
	window.location='SiniestroProfesionalModificar.asp?SPId=<? echo $_GET["SPId"];?><%&Capa=<? echo $_GET["Capa"];?><%&Id=<? echo $_GET["id"];?><%&Tipo='+document.form1.Tipo.value;
}
</script>
<form ACTION="<? echo $MM_editAction;?>" name="form1" method="POST" onSubmit="while (document.form1.NVisitas.value.indexOf(String.fromCharCode(13,10))>0){document.form1.NVisitas.value=document.form1.NVisitas.value.replace(String.fromCharCode(13,10),'<br>');}">
  <p> 
    <input name="Id" type="hidden" id="Id" value="<? echo $_GET["SPId"];?>">
    Tipo: 
    <select name="Tipo" onChange="cambio();">
      <? 
while((!($Tipos==0)))
{

?>
      <option value="<?   echo (->$Item["Id"]->$Value);?>" <?   if (($Item["Id"]$Value==$eltipo))
  {
    print "SELECTED";
    print "";
  } ?>><?   echo (->$Item["Texto"]->$Value);?></option>
      <? 
  $Tipos=mysql_fetch_array($Tipos_query);
  $Tipos_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
    </select>
    Profesional: 
    <select name="Profesional">
      <? 
while((!($Profesionales==0)))
{

?>
      <option value="<?   echo (->$Item["Id"]->$Value);?>" <?   if (($Item["Id"]$value==$elprofesional))
  {
    print "SELECTED";
    print "";
  } ?>><?   echo (->$Item["Nombre"]->$Value);?></option>
      <? 
  $Profesionales=mysql_fetch_array($Profesionales_query);
  $Profesionales_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
    </select>
    <br>
    Fecha Comienzo: 
    <input name="FComienzo" type="text" id="FComienzo" value="<? echo (->$Item["FechaComienzo"]->$Value);?>" size="15" maxlength="10">
    Fecha Final: 
    <input name="FFinal" type="text" id="FFinal" value="<? echo (->$Item["FechaFin"]->$Value);?>" size="15" maxlength="10">
    <br>
    Visitas/Viajes/Notas: 
    <textarea name="NVisitas" cols="60" rows="10" id="NVisitas"><? echo ->$Item["NroVisitas"]->$Value;?></textarea>
  </p>
  <p> 
    <input type="submit" name="Submit" value="Actualizar">
  </p>
  <input type="hidden" name="MM_insert" value="form1">
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo ->$Item["ID"]->$Value;?>">
</form>
<? if (!($_GET["Tipo"]==""))
{
?>
<script language="JavaScript">
var fecha=new Date (1980, 12, 31);
  document.form1.FComienzo.value=consultarGalleta("FComienzo");
  mandarGalleta("FComienzo","",fecha);
  document.form1.FFinal.value=consultarGalleta("FFinal");
  mandarGalleta("FFinal","",fecha);
  document.form1.NVisitas.value=consultarGalleta("NVisitas");
  mandarGalleta("NVisitas","",fecha);
  document.form1.NVisitas.value=document.form1.NVisitas.value.replace('<br>','-BR-');
  alert(document.form1.NVisitas.value.replace('<br>','-BR-'));
</script>
<? } ?>
</p>
<p>&nbsp;</p>
</body>
</html>
<? 

$SP=null;

?>
<? 

$Tipos=null;

?>
<? 

$Profesionales=null;

?>

