<?
  session_start();
  session_register("paginaant_session");
  session_register("MM_Username_session");
  session_register("PAnt_session");
  session_register("MM_UserAuthorization_session");
  session_register("CuentaVerExpedientes_session");
  session_register("Modaseguradora_session");
?>
<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 ?>
<? if (($_SESSION['MM_Username']==""))
{
  header("Location: "."index.asp");
} ?>
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
if (((${"MM_insert"})=="form2"))
{

  if ((!$MM_abortEdit))
  {

// execute the insert

    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="INSERT INTO Aseguradoras (aseguradora, telefono, fax, email, direccion, cp, localidad, provincia,Notas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";    
    $MM_editCmd_Prepared=true;    
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param1"    $_POST["aseguradora"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param2"    $_POST["telefono"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param3"    $_POST["fax"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param4"    $_POST["email"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param5"    $_POST["direccion"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param6"    $_POST["cp"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param7"    $_POST["localidad"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"    $_POST["provincia"]// adVarWChar
    $MM_editCmd_Parameters=$Append    $MM_editCmd_CreateParameter="param8"    $_POST["notas"]// adVarWChar
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    
  } 

} 

?>
<? 
// *** Restrict Access To Page: Grant or deny access to this page
$MM_authorizedUsers="admin";
$MM_authFailedURL="index.asp";
$MM_grantAccess=false;
if ($_SESSION['MM_Username']!="")
{

  if ((true || ($_SESSION['MM_UserAuthorization'])=="") || 
     ((strpos($MM_authorizedUsers,$_SESSION['MM_UserAuthorization'],1) ? strpos($MM_authorizedUsers,$_SESSION['MM_UserAuthorization'],1)+1 : 0))
  {

    $MM_grantAccess=true;
  } 

} 

if (!$MM_grantAccess)
{

  $MM_qsChar="?";
  if (((strpos($MM_authFailedURL,"?",1) ? strpos($MM_authFailedURL,"?",1)+1 : 0))
  {
    $MM_qsChar="&";
  } 
  $MM_referrer=$_SERVER["PHP_SELF"];
  if ((strlen($_GET[])>0))
  {
    $MM_referrer=$MM_referrer."?".$_GET[];
  } 
  $MM_authFailedURL=$MM_authFailedURL.$MM_qsChar."accessdenied=".rawurlencode($MM_referrer);
  header("Location: ".$MM_authFailedURL);
} 

?>
<? 

// $aseguradoras_cmd is of type "ADODB.Command"
$aseguradoras_cmd_ActiveConnection=$MM_connrumbo_STRING;
$aseguradoras_cmd_CommandText="SELECT * FROM Aseguradoras ORDER BY aseguradora ASC";
$aseguradoras_cmd_Prepared=true;

$aseguradoras=$aseguradoras_cmd_Execute=$aseguradoras_numRows=0;;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$aseguradoras_numRows=$aseguradoras_numRows+$Repeat1__numRows;
?>
<? 

// *** Go To Record and Move To Record: create strings for maintaining URL and Form parameters

// create the list of parameters which should not be maintained
$MM_removeList="&index=";
if (($MM_paramName!=""))
{
  $MM_removeList=$MM_removeList."&".$MM_paramName."=";
} 
$MM_keepURL=""; 
$MM_keepForm=""; 
$MM_keepBoth=""; 
$MM_keepNone="";

// add the URL parameters to the MM_keepURL string
foreach ($_GET as $ObjItem)
{
  $NextItem="&".$ObjItem."=";
  if (((strpos($MM_removeList,$NextItem,1) ? strpos($MM_removeList,$NextItem,1)+1 : 0)==0))
  {

    $MM_keepURL=$MM_keepURL.$NextItem.rawurlencode($_GET[$ObjItem]);
  } 

}

// add the Form variables to the MM_keepForm string
foreach ($_POST as $ObjItem)
{
  $NextItem="&".$ObjItem."=";
  if (((strpos($MM_removeList,$NextItem,1) ? strpos($MM_removeList,$NextItem,1)+1 : 0)==0))
  {

    $MM_keepForm=$MM_keepForm.$NextItem.rawurlencode($_POST[$ObjItem]);
  } 

}

// create the Form + URL string and remove the intial '&' from each of the strings
$MM_keepBoth=$MM_keepURL.$MM_keepForm;
if (($MM_keepBoth!=""))
{
  $MM_keepBoth=substr($MM_keepBoth,strlen($MM_keepBoth)-(strlen($MM_keepBoth)-1));
} 
if (($MM_keepURL!=""))
{
  $MM_keepURL=substr($MM_keepURL,strlen($MM_keepURL)-(strlen($MM_keepURL)-1));
} 
if (($MM_keepForm!=""))
{
  $MM_keepForm=substr($MM_keepForm,strlen($MM_keepForm)-(strlen($MM_keepForm)-1));
} 

// a utility function used for adding additional parameters to these strings
function MM_joinChar($firstItem)
{
  extract($GLOBALS);

  if (($firstItem!=""))
  {

    $function_ret="&";
  }
    else
  {

    $function_ret="";
  } 

  return $function_ret;
} 
?>
<? 
if ($_SESSION['CuentaVerExpedientes']==true)
{

  $MM_editCmd_ActiveConnection=$Close;  
  // $MM_editCmd is of type "ADODB.Command"
  $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;  
  $MM_editCmd_CommandText="UPDATE Siniestro SET UltimaVision=now() where Id=".($Siniestro->Fields->$Item["Id"]->$Value);  
  $MM_editCmd_Execute=  $MM_editCmd_ActiveConnection=$Close;;  
} 

?>
<html>
<head>
<!--Ventana flotante que muestra las notas -->

<!--Fin Ventana flotante que muestra notas -->
<title>Aseguradoras</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="pragma" content="no-cache">
<script language="JavaScript" src="menu.js"></script>
<!--Codigo para oculta el div de nueva aseguradora -->
<script>

function muestra_oculta(id){
if (document.getElementById){ //se obtiene el id
var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
}
}
window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
muestra_oculta('aseguradora');/* "contenido_a_mostrar" es el nombre de la etiqueta DIV que deseamos mostrar */
}
</script>
<!--Codigo para ocultar el div de detalles -->
<script>

function muestra_oculta(id){
if (document.getElementById){ //se obtiene el id
var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
}
}
window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
muestra_oculta('detalles');/* "contenido_a_mostrar" es el nombre de la etiqueta DIV que deseamos mostrar */
}
</script>
<style type="text/css">
<!--
.Estilo1 {font-size: smaller}
.Estilo2 {font-size: x-small}
-->
</style>

</head>
<body topmargin="25">
<h1>Aseguradoras</h1>
<p><a style='cursor: pointer; color: #060;' onClick="muestra_oculta('aseguradora')">Pulse aqui para Introducir una nueva aseguradora</a>
</p>
<div id='aseguradora'>
  <form name="form1">
    <p></p>
</form>
  <form method="post" action="<? echo $MM_editAction;?>" name="form2">
    <table align="center">
      <tr valign="baseline">
        <td nowrap align="right">Aseguradora:</td>
        <td><input type="text" name="aseguradora" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Telefono:</td>
        <td><input type="text" name="telefono" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Fax:</td>
        <td><input type="text" name="fax" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Email:</td>
        <td><input type="email" name="email" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Dirección:</td>
        <td><input type="text" name="direccion" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Código Postal:</td>
        <td><input type="text" name="cp" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Localidad:</td>
        <td><input type="text" name="localidad" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Provincia:</td>
        <td><input type="text" name="provincia" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td height="175" align="right" nowrap>Notas:</td>
        <td><textarea name="notas" cols="100" rows="10"></textarea></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">&nbsp;</td>
        <td><input type="submit" value="Insertar registro"></td>
      </tr>
    </table>
    <input type="hidden" name="MM_insert" value="form2">
  </form>
  <p>&nbsp;</p>
</div>
  <table width="100%" border="1" cellspacing="0" bordercolor="#000000">
    <tr bgcolor="#00FF00">
      <th>Aseguradora</th>
      <th>Telefono</th>
      <th>......Fax......</th>
      <th>Email</th>
      <p><a style='cursor: pointer; color: #060;' onClick="muestra_oculta('detalles')">Pulse aqui para Introducir una nueva aseguradora</a>
</p>
<div id='detalles'>
      <th>Direcci&oacute;n</th>
      <th>Localidad</th>
      <th>Provincia</th>
      <th>C&oacute;digo Postal</th>
      <th>Notas</th>
      </div>
      
      <? if ($_SESSION['Modaseguradora']==true)
{
?><th>Opciones</th><? } ?>

      


    </tr>
          <? 
while((($Repeat1__numRows!=0) && (!$aseguradoras->EOF)))
{

?>
    <tr>
      <td><a href="Tramitador Cia.asp?id=<?   echo ($aseguradoras->Fields->$Item["id"]->$Value);?>&ide=<?   echo ($aseguradoras->Fields->$Item["aseguradora"]->$Value);?>" target="Tracia"><?   echo ($aseguradoras->Fields->$Item["aseguradora"]->$Value);?></a></td>
      <td><?   echo ($aseguradoras->Fields->$Item["telefono"]->$Value);?></td>
      <td><?   echo ($aseguradoras->Fields->$Item["fax"]->$Value);?></td>
      <td><?   echo ($aseguradoras->Fields->$Item["email"]->$Value);?></td>
      
<div id='detalles'>
      <td><?   echo ($aseguradoras->Fields->$Item["direccion"]->$Value);?></td>
      <td><?   echo ($aseguradoras->Fields->$Item["localidad"]->$Value);?></td>
      <td><?   echo ($aseguradoras->Fields->$Item["provincia"]->$Value);?></td>
      <td><?   echo ($aseguradoras->Fields->$Item["cp"]->$Value);?></td>
	  <td><?   echo ($aseguradoras->Fields->$Item["Notas"]->$Value);?><!--Ventana de notas -->
      
      <!--Fin ventana notas --></td>
	  </div>
	  <?   if ($_SESSION['Modaseguradora']==true)
  {
?>
      <td><a href="Aseguradoraeditar.asp?id=<?     echo ($aseguradoras->Fields->$Item["Id"]->$Value);?>"><img src="Imagenes/pencil.gif" width="32" height="30" alt="editar"></a><a href="Aseguradoraborrar.asp?id=<?     echo ($aseguradoras->Fields->$Item["Id"]->$Value);?>"><img src="Imagenes/Borrar.gif" width="30" height="31" alt="Borrar"></a></td>
      <?   } ?>
    </tr>
    <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $aseguradoras->MoveNext();
} 
?>
</table>
<iframe id="Tracia" name="Tracia" src="" style="width:100%;height:100%" AllowTransparency frameborder="0" marginwidth="0"></iframe>
</body>
</html>
<? 
$aseguradoras->Close();
$aseguradoras=null;

?>

