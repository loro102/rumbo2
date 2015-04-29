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
// *** Insert Record: set variables

if (((${"MM_insert"})=="form1"))
{


  $MM_editConnection=$MM_connrumbo_STRING;
  $MM_editTable="SiniestroProfesional";
  $MM_editRedirectUrl="Siniestro.asp";
  $MM_fieldsStr="Siniestro|value|Profesional|value|FComienzo|value|FFinal|value|NVisitas|value";
  $MM_columnsStr="Siniestro|none,none,NULL|Profesional|none,none,NULL|FechaComienzo|',none,NULL|FechaFin|',none,NULL|NroVisitas|',none,''";

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
<? 

// $TipoProfesional is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM TipoProfesional ORDER BY Texto ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$TipoProfesional_numRows=0;
?>
<? 
$Profesionales__MMColParam="1";
if (($_GET["Tipo"]!=""))
{

  $Profesionales__MMColParam=$_GET["Tipo"];
} 

?>
<? 

// $Profesionales is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Profesionales  WHERE Tipo = "+str_replace("'","''",$Profesionales__MMColParam)+" and Homologado=True  ORDER BY Nombre ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Profesionales_numRows=0;
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
echo "SELECT Abonados.*  FROM Abonados, Siniestro  WHERE Abonados.Id=Siniestro.Abonado and Siniestro.Id = "+str_replace("'","''",$Cliente__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Cliente_numRows=0;
?>
<html>
<head>
<title>Profesional de siniestro</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head> <body topmargin="30"> 
<script language="JavaScript" src="menu.js"></script>
<script language="JavaScript" src="funciones.js"></script>
<script language="JavaScript">
function cambio() {
	mandarGalleta("FComienzo",document.form1.FComienzo.value);
	mandarGalleta("FFinal",document.form1.FFinal.value);
	mandarGalleta("NVisitas",document.form1.NVisitas.value);
	window.location='SiniestroProfesionalInsertar.asp?Id=<? echo $_GET["id"];?><%&Capa=<? echo $_GET["Capa"];?><%&Tipo='+document.form1.Tipo.value;
}
// Añadir alerta al mes de autorizar el taxi o ambulancia
function alertas() {
if ((document.form1.Tipo.value==8)||(document.form1.Tipo.value==2))
	window.open("AgendaInsertarRapida.asp?Fecha=<? echo $DateAdd["D"][0][$DateAdd["M"][1][time()()]];?><%&Cita=<? echo (->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value);?><% lleva un mes utilizando transporte.");
if (document.form1.Tipo.value==3)
	window.open("AgendaInsertarRapida.asp?Fecha=<? echo $DateAdd["D"][0][$DateAdd["M"][1][strftime("%m/%d/%y %H:%M:%S %p")()]];?><%&Cita=<? echo (->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value);?><% lleva un mes en rehabilitación, mandar fax para autorizar si no esta mandado.");
}
</script>
<form name="form1" method="POST" action="<? echo $MM_editAction;?>" onSubmit="alertas();while (document.form1.NVisitas.value.indexOf(String.fromCharCode(13,10))>0){document.form1.NVisitas.value=document.form1.NVisitas.value.replace(String.fromCharCode(13,10),'<br>');}">
  <p> 
    <input name="Siniestro" type="hidden" id="Siniestro" value="<? echo $_GET["Id"];?>">
    Tipo: 
    <select name="Tipo" onChange="cambio()">
      <? 
while((!($TipoProfesional==0)))
{

?>
      <option value="<?   echo (->$Item["Id"]->$Value);?>" <?   if (((->$Item["Id"]->$value)==$_GET["Tipo"]))
  {
    print "SELECTED";
    print "";
  } ?> ><?   echo (->$Item["Texto"]->$Value);?></option>
      <? 
  $TipoProfesional=mysql_fetch_array($TipoProfesional_query);
  $TipoProfesional_BOF=0;

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
      <option value="<?   echo (->$Item["ID"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?></option>
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
    <input name="FComienzo" type="text" id="FComienzo" size="15" maxlength="10" value="<? //=date() ?>">
    Fecha Final: 
    <input name="FFinal" type="text" id="FFinal" size="15" maxlength="10">
    <br>
    Visitas/Viajes: 
    <textarea name="NVisitas" cols="60" rows="10" id="NVisitas"></textarea>
  </p>
  <p> 
    <input type="submit" name="Submit" value="A&ntilde;adir">
  </p>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<script language="JavaScript">
var fecha=new Date (1980, 12, 31);
  if (consultarGalleta("FComienzo")!="") document.form1.FComienzo.value=consultarGalleta("FComienzo");
  mandarGalleta("FComienzo","",fecha);
  document.form1.FFinal.value=consultarGalleta("FFinal");
  mandarGalleta("FFinal","",fecha);
  document.form1.NVisitas.value=consultarGalleta("NVisitas");
  mandarGalleta("NVisitas","",fecha);
  document.form1.NVisitas.value=document.form1.NVisitas.value.replace("<br>","-BR-");
</script>
</body>
</html>
<? 

$TipoProfesional=null;

?>
<? 

$Profesionales=null;

?>
<? 

$Cliente=null;

?>

