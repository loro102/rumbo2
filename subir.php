<?
  session_start();
  session_register("paginaant_session");
  session_register("MM_Username_session");
  session_register("PAnt_session");
  session_register("MM_UserAuthorization_session");
  session_register("CuentaVerExpedientes_session");
  session_register("Modaseguradora_session");
  session_register("CTramitadores_session");
  session_register("CFacturas_session");
  session_register("Siniestro_session");
  session_register("CBeneficio_session");
  session_register("CModsiniestros_session");
  session_register("CIndemnizacion_session");
  session_register("CVerFacturas_session");
  session_register("CControlFases_session");
?>
<? include('global.php'); ?>
<? 
if (!($_SESSION['MM_Username']=="joe"))
{

  header("Location: "."index.asp");
} 

?>
<? 
//option explicit
header("Expires: " . gmdate("D, d M Y H:i:s", time() + (-1*60)) . " GMT"); set_time_limit(600);
?>
<? require("freeaspupload.php"); ?>
<? 
// ****************************************************
// Cambiar el valor de la siguiente variable
// para indicar el directorio de destino.
// El directorio indicado debe tener permisos de escritura
// de caso contrario el script fallará mostrando un error.
$uploadsDirVar="C:\\Inetpub\\wwwroot\\rumbo\\";
//uploadsDirVar = request.Form("carpeta")
// ****************************************************

function SaveFiles()
{
  extract($GLOBALS);

  $Upload=new FreeASPUpload();;
  $Upload->Save($uploadsDirVar);
// If something fails inside the script, but the exception is handled
  if (($Upload ? 0 : 1)!=0)
  {
    return $function_ret;

  } 
  $function_ret="";
  $ks=$Upload->UploadedFiles->$keys;
  if ((count($ks)!=-1))
  {

    $resumen="<B>Archivos subidos:</B> ";
    foreach ($Upload->UploadedFiles as $fileKey)
    {      $keys;
      $resumen=$resumen.$Upload->UploadedFiles($fileKey)->$FileName." (".$Upload->UploadedFiles($fileKey)->$Length."B) ";
    }
  }
    else
  {

    $resumen="El nombre del archivo especificado en el formulario no es valido en el sistema.";
  } 

//comentar la siguiente linea si no se desea mostrar el resumen
//	SaveFiles = resumen
  return $function_ret;
} 
?>

<HTML>
<HEAD>
<TITLE>Test Free ASP Upload</TITLE>
</HEAD>
<BODY>
<br>
<div style="border-bottom: #A91905 2px solid;font-size:16">Subir archivos</div>
<div style='margin-left:150'>

<form name="frmSend" method="POST" enctype="multipart/form-data" action="pruebaupload.php">
Carpeta:
<input name="carpeta" type="text" id="carpeta" value="C:\Inetpub\wwwroot\rumbo\" size="100">
<br>
Archivo 1: 
<input name="attach1" type="file" size="35"><br>
Archivo 2: <input name="attach2" type="file" size="35"><br>
Archivo 3: <input name="attach3" type="file" size="35"><br>
Archivo 4: <input name="attach4" type="file" size="35"><br>
<br> 
<input type=submit value="Upload">
</form>

<BR></div>
<? 
//solo llamo al UPLOAD si hay envio de formulario
if ($_SERVER["REQUEST_METHOD"]=="POST")
{

//Hace el upload de los archivos enviados y muestra el resumen	
  print SaveFiles();
} 

?>
</BODY>
</HTML>

