<?
  session_start();
  session_register("paginaant_session");
?>
<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 ?> 
<? require("Connections/connrumbo.php"); ?>
<? 
$MM_editAction=($_SERVER["SCRIPT_NAME"]);
if (($_GET!=""))
{

  $MM_editAction=$MM_editAction."?".htmlspecialchars($_GET);
} 


// boolean to abort record edit
$MM_abortEdit=false;
?>
<? 
// *** Insert Record: set variables

if (((${"MM_insert"})=="form1"))
{


  $MM_editConnection=$MM_connAvata_STRING;
  $MM_editTable="Abogados";
  $MM_editRedirectUrl=$_SESSION['paginaant'];
  $MM_fieldsStr="Nombre|value|Direccion|value|CP|value|Ciudad|value|Provincia|value|Telefono1|value|Telefono2|value|Telefono3|value|Fax|value|Email|value";
  $MM_columnsStr="Nombre|',none,''|Direccion|',none,''|CP|',none,''|Ciudad|',none,''|Provincia|',none,''|Telefono1|',none,''|Telefono2|',none,''|Telefono3|',none,''|Fax|',none,''|Email|',none,''";

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
if (((${"MM_insert"})=="form1"))
{

  if ((!$MM_abortEdit))
  {

// execute the insert

    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="INSERT INTO Tramitadores (Nombre, Direccion, CP, Ciudad, Provincia, Telefono1, Telefono2, Telefono3, Fax, Email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["Nombre"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["Direccion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["CP"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"    $_POST["Ciudad"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["Provincia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"    $_POST["Telefono1"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"    $_POST["Telefono2"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"    $_POST["Telefono3"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param9"    $_POST["Fax"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param10"    $_POST["Email"]// adVarWChar
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

// append the query string to the redirect URL
    $MM_editRedirectUrl="listadoUsuarios.asp";
    if (($_GET!=""))
    {

      if (((strpos($MM_editRedirectUrl,"?",1) ? strpos($MM_editRedirectUrl,"?",1)+1 : 0)==0))
      {

        $MM_editRedirectUrl=$MM_editRedirectUrl."?".$_GET;
      }
        else
      {

        $MM_editRedirectUrl=$MM_editRedirectUrl."&".$_GET;
      } 

    } 

    header("Location: ".$MM_editRedirectUrl);
  } 

} 

?>
<? 

// $abogado_cmd is of type "ADODB.Command"
$abogado_cmd_ActiveConnection=$MM_connrumbo_STRING;
$abogado_cmd_CommandText="SELECT * FROM Tramitadores";
$abogado_cmd_Prepared=true;

$abogado=$abogado_cmd_Execute=$abogado_numRows=0;;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$abogado_numRows=$abogado_numRows+$Repeat1__numRows;
?>
<? 
// *** Insert Record: set variables

if (((${"MM_insert"})=="form1"))
{


  $MM_editConnection=$MM_connAvata_STRING;
  $MM_editTable="Abogados";
  $MM_editRedirectUrl=$_SESSION['paginaant'];
  $MM_fieldsStr="Nombre|value";
  $MM_columnsStr="Nombre|',none,''";

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
<html>
<head>
<title>Insertar Abogado</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="200" border="1">
  <tr>
    <td>Abogado</td>
    <td>Activo</td>
    <td>Opciones</td>
  </tr>
  <? 
while((($Repeat1__numRows!=0) && (!$abogado->EOF)))
{

?>
  <tr>
    <td><?   echo ($abogado->Fields->$Item["Nombre"]->$Value);?></td>
    <td><?   echo ($abogado->Fields->$Item["Activo"]->$Value);?></td>
    <td><a href="Abogadoeditar.asp?id=<?   echo ($abogado->Fields->$Item["Id"]->$Value);?>">editar</a></td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $abogado->MoveNext();
} 
?>
</table>
<p>&nbsp;</p>
</body>
</html>
<? 
$abogado->Close();
$abogado=null;

?>

