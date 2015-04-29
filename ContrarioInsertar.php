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
// *** Insert Record: set variables

if (((${"MM_insert"})=="form1"))
{


  $MM_editConnection=$MM_connrumbo_STRING;
  $MM_editTable="Contrarios";
  $MM_editRedirectUrl="Siniestro.asp";
  $MM_fieldsStr="Siniestro|value|Culpable|value|Nombre|value|Apellido1|value|Apellido2|value|Direccion|value|Codigo_Postal|value|Localidad|value|Provincia|value|NIF|value|Fecha_Nacimiento|value|Email|value|Telefono_1|value|Telefono_2|value|Telefono_3|value|Vehiculo|value|Matricula|value|Conductor|value|Nro_poliza|value|Ref_expediente|value|Compaia|value|Propietario|value|Tomador|value";
  $MM_columnsStr="Siniestro|none,none,NULL|Culpable|none,1,0|Nombre|',none,''|Apellido1|',none,''|Apellido2|',none,''|Direccion|',none,''|[Codigo Postal]|none,none,NULL|Localidad|',none,''|Provincia|',none,''|NIF|',none,''|FechaNacimiento|',none,NULL|Email|',none,''|[Telefono 1]|',none,''|[Telefono 2]|',none,''|[Telefono 3]|',none,''|Vehiculo|',none,''|Matricula|',none,''|Conductor|',none,''|[Nro poliza]|',none,''|[Ref expediente]|',none,''|Compañia|',none,''|Propietario|',none,''|Tomador|',none,''";

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

// $aseguradoras_cmd is of type "ADODB.Command"
$aseguradoras_cmd_ActiveConnection=$MM_connrumbo_STRING;
$aseguradoras_cmd_CommandText="SELECT * FROM Aseguradoras ORDER BY aseguradora ASC";
$aseguradoras_cmd_Prepared=true;

$aseguradoras=$aseguradoras_cmd_Execute=$aseguradoras_numRows=0;;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Insertar Contrario</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30">
<form method="POST" action="<? echo $MM_editAction;?>" name="form1">
  <p>
    <input type="hidden" name="Siniestro" value="<? echo $_GET["Id"];?>" size="32">
    <script language="JavaScript" src="menu.js"></script>
Responsable del siniestro:
<input name="Culpable" type="checkbox" id="Culpable" value="checkbox">
  </p>
  <table width="100%" border="1" cellspacing="0" bordercolor="#000000">
    <tr>
      <td>Nombre: 
        <input type="text" name="Nombre" value="" size="32">
</td>
      <td>Apellido1: 
        <input type="text" name="Apellido1" value="" size="32">
</td>
      <td>Apellido2: 
        <input type="text" name="Apellido2" value="" size="32">
</td>
    </tr>
    <tr>
      <td colspan="3">Direccion: 
        <input type="text" name="Direccion" value="" size="32">
</td>
    </tr>
    <tr>
      <td>Codigo Postal: 
        <input type="text" name="Codigo_Postal" value="" size="32"  onChange="window.open('buscacp.asp?CP='+document.form1.Codigo_Postal.value+'&form=form1','CP','dependent,height=1,width=1,left=0,top=0');window.focus();">
</td>
      <td>Localidad: 
        <input type="text" name="Localidad" value="" size="32">
</td>
      <td>Provincia: 
        <input type="text" name="Provincia" value="" size="32">
</td>
    </tr>
    <tr>
      <td>Nif: 
        <input type="text" name="NIF" value="" size="32">
</td>
      <td>Fecha Nacimiento: 
        <input type="text" name="Fecha_Nacimiento" value="" size="32">
</td>
      <td>Email: 
        <input type="text" name="Email" value="" size="32">
</td>
    </tr>
    <tr>
      <td>Telefono1: 
        <input type="text" name="Telefono_1" value="" size="32">
</td>
      <td>Telefono2: 
        <input type="text" name="Telefono_2" value="" size="32">
</td>
      <td>Telefono3: 
        <input type="text" name="Telefono_3" value="" size="32">
</td>
    </tr>
  </table>
  <br>
  <table width="100%" border="1" cellspacing="0" bordercolor="#000000">
    <tr>
      <td>Vehiculo: 
        <input type="text" name="Vehiculo" value="" size="32">
</td>
      <td>Matricula: 
        <input type="text" name="Matricula" value="" size="32">
</td>
      <td>Conductor: 
        <input type="text" name="Conductor" value="" size="32">
</td>
    </tr>
    <tr>
      <td>Nro Poliza: 
        <input type="text" name="Nro_poliza" value="" size="32">
</td>
      <td>Ref expediente: 
        <input type="text" name="Ref_expediente" value="" size="32">
</td>
      <td>Compa&ntilde;ia: 
        
        <select name="Compaia" id="Compaia">
          <option value="0">Ninguno</option>
          <? 
while((!$aseguradoras->EOF))
{

?>
          <option value="<?   echo ($aseguradoras->Fields->$Item["aseguradora"]->$Value);?>"><?   echo ($aseguradoras->Fields->$Item["aseguradora"]->$Value);?></option>
          <? 
  $aseguradoras->MoveNext();
} 
if (($aseguradoras->CursorType>0))
{

  $aseguradoras->MoveFirst;
}
  else
{

  $aseguradoras->Requery;
} 

?>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="3">Propietario: 
        <input type="text" name="Propietario" value="" size="32">
</td>
    </tr>
    <tr>
      <td colspan="3">Tomador: 
        <input type="text" name="Tomador" value="" size="32">
</td>
    </tr>
  </table>
  <div align="center">
    <input type="hidden" name="MM_insert" value="form1">
<input name="submit" type="submit" value="Insertar registro">
  </div>
</form>
<p>&nbsp;</p>
</body>
</html>
<? 
$aseguradoras->Close();
$aseguradoras=null;

?>

