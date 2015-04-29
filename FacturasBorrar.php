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
?>
<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:46 2015
 $CODEPAGE="1252";?>
<? $ocultar=$not[$_SERVER["REMOTE_ADDR"]=="192.168.1.2"];?>
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
  $MM_editTable="Facturas";
  $MM_editColumn="Id";
  $MM_recordId=""+$_POST["MM_recordId"]+"";
  $MM_editRedirectUrl="Siniestro.asp?Id=".$_SESSION['Siniestro'];

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
$Factura__MMColParam="1";
if (($_GET["FacturaId"]!=""))
{

  $Factura__MMColParam=$_GET["FacturaId"];
} 

?>
<? 

// $Factura is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Facturas  WHERE Id = "+str_replace("'","''",$Factura__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Factura_numRows=0;
?>
<html>
<head>
<title>Borrar Factura</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="30">
<p><strong><em> 
  <script language="JavaScript" src="menu.js"></script>
  Borrar</em></strong><strong><em> Factura:</em></strong></p>
<p>Nro de Fatura:<? echo (->$Item["Nro Factura"]->$Value);?> Fecha: <? echo (->$Item["Fecha"]->$Value);?><br>
  Descripcion:<? echo (->$Item["Descripcion"]->$Value);?><br>
  Valor de la Factura: <? echo (->$Item["Cuantia rumbo"]->$Value);?>&euro; Pagado Abonado: <? echo (->$Item["Cuantia Abonado"]->$Value);?>&euro; <? if ($ocultar)
{
?>Pagado rumbo: <?   echo (->$Item["ValorReal"]->$Value);?>&euro;<? } ?></p>
<form name="form1" method="POST" action="<? echo $MM_editAction;?>">
  
  <table width="100%" border="0">
    <tr align="center"> 
      <td> 
        <input type="submit" name="Submit" value="Borrar">
      </td>
      <td> 
        <input type="button" value="Cancelar" onClick="javascript:history.go(-1);"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_delete" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo ->$Item["Id"]->$Value;?>">
</form>
</body>
</html>
<? 

$Factura=null;

?>

