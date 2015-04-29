<? // asp2php (vbscript) converted
$CODEPAGE="1252"; ?>
<!--#include file="../Connections/Avata_seguros.php" -->
<? 
// *** Edit Operations: declare variables





$MM_editAction=$_SERVER["SCRIPT_NAME"];
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


if ((${"MM_update"}=="form1" && ${"MM_recordId"}!=""))
{


  $MM_editConnection=$MM_Avata_seguros_STRING;
  $MM_editTable="Asegurado";
  $MM_editColumn="Id";
  $MM_recordId=""+$_POST["MM_recordId"]+"";
  $MM_editRedirectUrl="Asegurado.asp";
  $MM_fieldsStr="Nombre|value|Datos|value|FechaBusqueda|value|TipoSeguro|value";
  $MM_columnsStr="Nombre|',none,''|Datos|',none,''|FechaBusqueda|',none,NULL|TipoSeguro|',none,''";

// create the MM_fields and MM_columns arrays

  $MM_fields=$Split[$MM_fieldsStr]["|"];
  $MM_columns=$Split[$MM_columnsStr]["|"];

// set the form values

  for ($MM_i=0; $MM_i<=count($MM_fields); $MM_i=$MM_i+2)
  {
    $MM_fields[$MM_i+1]=$_POST[$MM_fields[$MM_i]];

  } 


// append the query string to the redirect URL

  if (($MM_editRedirectUrl!="" && $_GET!=""))
  {

    if (((strpos(1,$MM_editRedirectUrl,"?",$vbTextCompare) ? strpos(1,$MM_editRedirectUrl,"?",$vbTextCompare)+1 : 0)==0 && $_GET!=""))
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


if ((${"MM_update"}!="" && ${"MM_recordId"}!=""))
{


// create the sql update statement

  $MM_editQuery="update ".$MM_editTable." set ";
  for ($MM_i=0; $MM_i<=count($MM_fields); $MM_i=$MM_i+2)
  {
    $MM_formVal=$MM_fields[$MM_i+1];
    $MM_typeArray=$Split[$MM_columns[$MM_i+1]][","];
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
        $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;
;
        if (($MM_editRedirectUrl!=""))
    {

      header("Location: ".$MM_editRedirectUrl);
    } 

  } 


} 

?>
<? 
$Asegurado__MMColParam="1";
if (($_GET["IdAsegurado"]!=""))
{

  $Asegurado__MMColParam=$_GET["IdAsegurado"];
} 

?>
<? 

// $Asegurado is of type "ADODB.Recordset"

echo $MM_Avata_seguros_STRING;
echo "SELECT * FROM Asegurado WHERE Id = "+str_replace("'","''",$Asegurado__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Asegurado_numRows=0;
?>
<? 
$Propuestas__MMColParam="1";
if (($_GET["IdAsegurado"]!=""))
{

  $Propuestas__MMColParam=$_GET["IdAsegurado"];
} 

?>
<? 

// $Propuestas is of type "ADODB.Recordset"

echo $MM_Avata_seguros_STRING;
echo "SELECT * FROM Seguros WHERE Referencia = "+str_replace("'","''",$Propuestas__MMColParam)+" ORDER BY Precio ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Propuestas_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Propuestas_numRows=$Propuestas_numRows+$Repeat1__numRows;
?>
<html>
<head>
<title>Opciones de seguro</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body background="Imagenes/fondo.gif" bgproperties="fixed" onLoad="while (document.form1.Datos.value.indexOf('<br>')>0){document.form1.Datos.value=document.form1.Datos.value.replace('<br>',String.fromCharCode(13,10));}">
<form method="post" action="<? echo $MM_editAction; ?>" name="form1" onSubmit="while (document.form1.Datos.value.indexOf(String.fromCharCode(13,10))>0){document.form1.Datos.value=document.form1.Datos.value.replace(String.fromCharCode(13,10),'<br>');}">
  <p>Nombre:
    <input name="Nombre" type="text" value="<? echo (.$Item["Nombre"].$Value); ?>" size="100" maxlength="254">
    <br>
  Fecha Busqueda: 
  <input type="text" name="FechaBusqueda" value="<? echo (.$Item["FechaBusqueda"].$Value); ?>" size="32"> 
  Tipo de seguro:
  <input type="text" name="TipoSeguro" value="<? echo (.$Item["TipoSeguro"].$Value); ?>" size="32"> 
  <br>
  Datos: 
  <textarea name="Datos" cols="80" rows="20"><? echo (.$Item["Datos"].$Value); ?></textarea>
  </p>
  <p>
    <input name="submit" type="submit" value="Actualizar registro">
    <input type="hidden" name="MM_update" value="form1">
    <input type="hidden" name="MM_recordId" value="<? echo .$Item["Id"].$Value; ?>">
  </p>
</form>
<hr width="100%" size="1">
<table width="100%" border="0">
  <tr>
    <td>Propuestas:</td>
    <td align="right"><a href="PropuestaInsertar.asp?IdAsegurado=<? echo (.$Item["Id"].$Value); ?>">Insertar Propuesta</a></td>
  </tr>
</table>
<table width="100%" border="1" cellspacing="0">

    <? 
while((($Repeat1__numRows!=0) && (!($Propuestas==0))))
{

?>
  <tr>    <td <?   if (($Item["Aceptado"]$Value==true))
  {
    print "bgcolor=\"#00FFFF\"";  } ?>><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Corredor:<?   echo (.$Item["Corredor"].$Value); ?> Compa&ntilde;ia:<?   echo (.$Item["Compania"].$Value); ?></td>
    <td><?   if (($Item["Aceptado"]$Value==true))
  {
?>Fecha en que se hizo efectivo: <?     echo (.$Item["FechaEfectivo"].$Value); ?><?   } ?></td>
    <td align="right"><a href="PropuestaModificar.asp?IdPropuesta=<?   echo (.$Item["Id"].$Value); ?>&IdAsegurado=<?   echo (.$Item["Id"].$Value); ?>">Editar</a></td>
  </tr>
  <tr>
    <td colspan="3">Precio: <?   echo (.$Item["Precio"].$Value); ?>&euro;</td>
    </tr>
  <tr>
    <td colspan="3">Datos:<br>
      <?   echo (.$Item["Datos"].$Value); ?></td>
    </tr>
</table>
      </td>
</tr>    <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Propuestas=mysql_fetch_array($Propuestas_query);

} 
?>
</table>
<h5 align="center"><a href="principal.php">Pagina principal</a> - <a href="AseguradoInsertar.php">Insertar asegurado</a></h5>
</body>
</html>
<? 

$Asegurado=null;

?>
<? 

$Propuestas=null;

?>

