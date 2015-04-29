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
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 ?>
<? if (($_SESSION['MM_Username']==""))
{
  header("Location: "."index.asp");
} ?>
<? require("Connections/connrumbo.php"); ?>
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
$hayabogado=0;
$hayprocurador=0;
?>
<? 
$Siniestro__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Siniestro__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Siniestro_cmd is of type "ADODB.Command"
$Siniestro_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Siniestro_cmd_CommandText="SELECT * FROM Siniestro WHERE Id = ?";
$Siniestro_cmd_Prepared=true;
$Siniestro_cmd_Parameters=$Append$Siniestro_cmd_CreateParameter="param1"$Siniestro__MMColParam); // adDouble

$Siniestro=$Siniestro_cmd_Execute=$Siniestro_numRows=0;;
?>
<? if ((!$Siniestro->Fields$Item["Tipo"]$Value=="1"))
{

  $cad="SiniestroOtros.asp?Id=".$Siniestro->Fields->$Item["Id"]->$Value;
  $Siniestro->Close();
  header("Location: ".$cad);
} ?>
<? 
$Contrarios__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Contrarios__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Contrarios is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Contrarios WHERE Siniestro = "+str_replace("'","''",$Contrarios__MMColParam)+" ORDER BY Culpable ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Contrarios_numRows=0;
?>
<? 
$Abonado__MMColParam="1";
if ((($Siniestro->Fields$Item["Abonado"]$Value)!=""))
{

  $Abonado__MMColParam=($Siniestro->Fields->$Item["Abonado"]->$Value);
} 

?>
<? 

// $Abonado is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.*, Agentes.Nombre as ANombre  FROM Abonados, Agentes  WHERE Abonados.Id = "+str_replace("'","''",$Abonado__MMColParam)+" and Abonados.Agente= Agentes.Id";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Abonado_numRows=0;
?>
<? 
$Facturas__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Facturas__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Facturas is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Facturas.*, Profesionales.Nombre, TipoProfesional.Texto, FormasPago.Texto as FormaDePago  FROM Facturas, Profesionales, TipoProfesional, FormasPago  WHERE (Facturas.Siniestro = "+str_replace("'","''",$Facturas__MMColParam)+") and (Facturas.Valor=Profesionales.ID) and (Profesionales.Tipo=TipoProfesional.Id) and (not Facturas.Tabla=1) and (not Facturas.Tabla=7) and (not Facturas.Tabla=9) and FormasPago.Id=Facturas.FormaPago  ORDER BY Facturas.Fecha";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Facturas_numRows=0;
?>
<? 
$Tramitador__MMColParam="1";
if ((($Siniestro->Fields$Item["Tramitador"]$Value)!=""))
{

  $Tramitador__MMColParam=($Siniestro->Fields->$Item["Tramitador"]->$Value);
} 

?>
<? 

// $Tramitador is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Tramitadores  WHERE Id = "+str_replace("'","''",$Tramitador__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Tramitador_numRows=0;
?>
<? 
$Profesionales__DSiniestro="0";
if (($_GET["Id"]!=""))
{

  $Profesionales__DSiniestro=$_GET["Id"];
} 

?>
<? 

// $Profesionales is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT SiniestroProfesional.*, Profesionales.Nombre, TipoProfesional.Texto, TipoProfesional.AutorizacionCompromiso,Profesionales.Ext1,Profesionales.Tipo, Profesionales.ID as ProfesinalesId  FROM SiniestroProfesional, Profesionales, TipoProfesional  WHERE SiniestroProfesional.Siniestro="+str_replace("'","''",$Profesionales__DSiniestro)+" and SiniestroProfesional.Profesional=Profesionales.Id and Profesionales.Tipo=TipoProfesional.Id  ORDER BY TipoProfesional.Texto";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Profesionales_numRows=0;
?>
<? 
$AbogyProc__NroSiniestro="0";
if (($_GET["Id"]!=""))
{

  $AbogyProc__NroSiniestro=$_GET["Id"];
} 

?>
<? 

// $AbogyProc is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Facturas.*, Profesionales.Nombre, TipoProfesional.Texto, FormasPago.Texto as FormaDePago  FROM Facturas, Profesionales, TipoProfesional, FormasPago  WHERE (Facturas.Siniestro = "+str_replace("'","''",$AbogyProc__NroSiniestro)+") and (Facturas.Valor=Profesionales.ID) and (Profesionales.Tipo=TipoProfesional.Id) AND (Facturas.Tabla=1 or Facturas.Tabla=7 or Facturas.Tabla=9) and FormasPago.Id=Facturas.FormaPago  ORDER BY TipoProfesional.Id";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$AbogyProc_numRows=0;
?>
<? 
$Facturas2__MMColParam="-1";
if (($_GET["Id"]!=""))
{

  $Facturas2__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Facturas2 is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Facturas.*, Profesionales.Nombre, TipoProfesional.Texto, FormasPago.Texto as FormaDePago  FROM Facturas, Profesionales, TipoProfesional, FormasPago  WHERE (Facturas.Siniestro = "+str_replace("'","''",$Facturas2__MMColParam)+") and (Facturas.Valor=Profesionales.ID) and (Profesionales.Tipo=TipoProfesional.Id) and (not Facturas.Tabla=1) and (not Facturas.Tabla=7) and (not Facturas.Tabla=9) and FormasPago.Id=Facturas.FormaPago AND (Facturas.[Cuantia rumbo]<>0) and (Profesionales.SumaIndemnizacion=true) and (Facturas.NoLaPagan=false)  ORDER BY Facturas.Fecha";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Facturas2_numRows=0;
?>
<? 
$Fase__MMColParam="1";
if ((($Siniestro->Fields$Item["Fase"]$Value)!=""))
{

  $Fase__MMColParam=($Siniestro->Fields->$Item["Fase"]->$Value);
} 

?>
<? 

// $Fase is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Fases  WHERE Id = "+str_replace("'","''",$Fase__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Fase_numRows=0;
?>
<? 
$Otros__LaFechaSiniestro="1/1/1980";
if (($Siniestro->Fields$Item["Fecha Siniestro"]$Value!=""))
{

  $Otros__LaFechaSiniestro=$Siniestro->Fields->$Item["Fecha Siniestro"]->$Value;
} 

?>
<? 
$Otros__ElId="0";
if (($Siniestro->Fields$Item["Id"]$Value!=""))
{

  $Otros__ElId=$Siniestro->Fields->$Item["Id"]->$Value;
} 

?>
<? 
$Otros__ElLugar="asd";
if (($Siniestro->Fields$Item["Lugar"]$Value!=""))
{

  $Otros__ElLugar=$Siniestro->Fields->$Item["Lugar"]->$Value;
} 

?>
<? 

// $Otros is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Abonados.Nombre, Abonados.Apellido1, Abonados.Apellido2, Siniestro.Id, Siniestro.Representado, Siniestro.Nombre as RepreNombre  FROM Abonados, Siniestro  WHERE Abonados.Id=Siniestro.Abonado and Siniestro.[Fecha Siniestro]= format('"+str_replace("'","''",$Otros__LaFechaSiniestro)+"','dd/mm/yyyy') and not Siniestro.Id="+str_replace("'","''",$Otros__ElId)+" and Siniestro.Lugar='"+str_replace("'","''",$Otros__ElLugar)+"'";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Otros_numRows=0;
?>
<? 
$Cartas__MMColParam=($Siniestro->Fields->$Item["Id"]->$Value);
if ((${"MM_EmptyValue"}!=""))
{

  $Cartas__MMColParam=${"MM_EmptyValue"};
} 

?>
<? 

// $Cartas is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Correspondecia  WHERE Referencia = ".($Siniestro->Fields->$Item["Id"]->$Value)." ORDER BY Fecha DESC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Cartas_numRows=0;
?>
<? 
$DocCliente__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $DocCliente__MMColParam=$_GET["Id"];
} 

?>
<? 

// $DocCliente is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM DocClientes WHERE SiniestroId = "+str_replace("'","''",$DocCliente__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$DocCliente_numRows=0;
?>
<? 
$Aseguradora__MMColParam="1";
if ((($Siniestro->Fields$Item["Compañia"]$Value)!=""))
{

  $Aseguradora__MMColParam=($Siniestro->Fields->$Item["Compañia"]->$Value);
} 

?>
<? 

// $Aseguradora_cmd is of type "ADODB.Command"
$Aseguradora_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Aseguradora_cmd_CommandText="SELECT * FROM Aseguradoras WHERE id = ?";
$Aseguradora_cmd_Prepared=true;
//Aseguradora_cmd.Parameters.Append Aseguradora_cmd.CreateParameter("param1", 5, 1, -1, Aseguradora__MMColParam) ' adDouble

//'Set Aseguradora = Aseguradora_cmd.Execute
$Aseguradora_numRows=0;
?>
<? 
$Cerrado__MMColParam=($Siniestro->Fields->$Item["FechaCierreExpediente"]->$Value);
if ((${"MM_EmptyValue"}!=""))
{

  $Cerrado__MMColParam=${"MM_EmptyValue"};
} 

?>
<? 

$Repeat4__numRows=-1;
$Repeat4__index=0;
$AbogyProc_numRows=$AbogyProc_numRows+$Repeat4__numRows;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Contrarios_numRows=$Contrarios_numRows+$Repeat1__numRows;
?>
<? 

$Repeat2__numRows=-1;
$Repeat2__index=0;
$Facturas_numRows=$Facturas_numRows+$Repeat2__numRows;
?>
<? 

$Repeat8__numRows=-1;
$Repeat8__index=0;
$Notas_numRows=$Notas_numRows+$Repeat8__numRows;
?>
<? 

$Repeat7__numRows=-1;
$Repeat7__index=0;
$DocCliente_numRows=$DocCliente_numRows+$Repeat7__numRows;
?>
<? 

$Repeat6__numRows=-1;
$Repeat6__index=0;
$Cartas_numRows=$Cartas_numRows+$Repeat6__numRows;
?>
<? 

$Repeat5__numRows=-1;
$Repeat5__index=0;
$Facturas2_numRows=$Facturas2_numRows+$Repeat5__numRows;
?>
<? 

$Repeat3__numRows=-1;
$Repeat3__index=0;
$Profesionales_numRows=$Profesionales_numRows+$Repeat3__numRows;
?>

<? 
$Repeat3__numRows=-1;
$Repeat3__index=0;
$Facturas_numRows=$Facturas_numRows+$Repeat3__numRows;
?>
<? 
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
// $MM_editCmd is of type "ADODB.Command"
$MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;
$MM_editCmd_CommandText="INSERT INTO Log(Texto, Usuario,Identificativo,IP) VALUES ('Consulta siniestro','".$_SESSION['MM_Username']."','".($Siniestro->Fields->$Item["Id"]->$Value)."','".$_SERVER["REMOTE_ADDR"]."') ";
$MM_editCmd_Execute=;
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
<title>Datos del siniestro</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
//Begin dHTML Toolltip Timer
var tipTimer;
//End dHTML Toolltip Timer



function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function locateObject(n, d) { //v3.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=locateObject(n,d.layers[i].document); return x;
}

function hideTooltip(object)
{
if (document.all)
{
	locateObject(object).style.visibility="hidden"
	locateObject(object).style.left = 1;
	locateObject(object).style.top = 1;
return false
}
else if (document.layers)
{
	locateObject(object).visibility="hide"
	locateObject(object).left = 1;
	locateObject(object).top = 1;
	return false
}
else
	return true
}

function showTooltip(object,e, tipContent, backcolor, bordercolor, textcolor, displaytime)
{
	window.clearTimeout(tipTimer)
	
	if (document.all)
		{
			locateObject(object).style.top=document.body.scrollTop+event.clientY+20
			
			locateObject(object).innerHTML='<table style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; border: '+bordercolor+'; border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: '+backcolor+'" width="10" border="0" cellspacing="1" cellpadding="1"><tr><td nowrap><font style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; color: '+textcolor+'">'+unescape(tipContent)+'</font></td></tr></table> '

			if ((e.x + locateObject(object).clientWidth) > (document.body.clientWidth + document.body.scrollLeft))
				{	
					locateObject(object).style.left = (document.body.clientWidth + document.body.scrollLeft) - locateObject(object).clientWidth-10;
				}
			else
			{
			locateObject(object).style.left=document.body.scrollLeft+event.clientX
			}
		locateObject(object).style.visibility="visible"
		tipTimer=window.setTimeout("hideTooltip('"+object+"')", displaytime);
		return true;
		}
	else if (document.layers)
		{
		locateObject(object).document.write('<table width="10" border="0" cellspacing="1" cellpadding="1"><tr bgcolor="'+bordercolor+'"><td><table width="10" border="0" cellspacing="0" cellpadding="2"><tr bgcolor="'+backcolor+'"><td nowrap><font style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; color: '+textcolor+'">'+unescape(tipContent)+'</font></td></tr></table></td></tr></table>')
		locateObject(object).document.close()
		locateObject(object).top=e.y+20

		if ((e.x + locateObject(object).clip.width) > (window.pageXOffset + window.innerWidth))
			{
				locateObject(object).left = window.innerWidth - locateObject(object).clip.width-10;
			}
		else
			{
			locateObject(object).left=e.x;
			}
		locateObject(object).visibility="show"
		tipTimer=window.setTimeout("hideTooltip('"+object+"')", displaytime);
		return true;
	}
	else
	{
		return true;
	}
}

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
        if (!/^-*([0-9,])*$/.test(val)) errors+='- '+nm+' debe contener un numero.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es obligatorio.\n'; }
  } if (errors) alert('Han ocurrido los siguientes errores:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<style>
  .imagenNO {display:none;}
  .imagen {display:block;}
.Estilo2 {font-size: smaller}
</style>
<meta http-equiv="pragma" content="no-cache">
</head>
<? if (($Siniestro->Fields$Item["Representado"]$Value==true))
{

  $nombre=($Siniestro->Fields->$Item["Nombre"]->$Value);
  $dni=($Siniestro->Fields->$Item["DNIRepresentado"]->$Value);
}
  else
{

  $nombre=->$Item["Nombre"]->$Value+"%A0"+->$Item["Apellido1"]->$Value+"%A0"+->$Item["Apellido2"]->$Value;
  $dni=(->$Item["NIF"]->$Value);
} ?>
<body bgcolor="#FFFFFF" text="#000000" topmargin="30" <? if (($Siniestro->Fields$Item["Fase"]$Value==70))
{
  print "background=\"Imagenes/ExpCerrado.gif\"";
}
  else
{
  print " background=\"Imagenes/fondo.gif\" bgproperties=\"fixed\"";
} ?>>
<script language="JavaScript" src="menu.js"></script>
<script language="JavaScript" src="valorpunto.js"></script>
<script language="JavaScript">
function muestra(clase){
for (i=1;i<8;i++){
	if (clase == i)
		eval("window.document.all.opcion"+i+".className='imagen'");
	else
		eval("window.document.all.opcion"+i+".className='imagenNO'");
	}
}
</script>
<!-- #BeginBehavior showTooltip1 -->
<div id="dHTMLToolTip" style="position: absolute; visibility: hidden; width:10; height: 10; z-index: 1000; left: 0; top: 0"></div>
<!-- #EndBehavior showTooltip1 -->
  

<script language="JavaScript" src="funciones.js"></script>
<script language="JavaScript">
function menucelda(color,celda) {
eval('document.all.menucelda'+celda+'.bgColor=color');
}</script>
<table width="100%" border="1" align="center" cellspacing="0" bordercolor="#000000" bgcolor="#00cc0" style="cursor:hand" class="imagenNO" id="elmenu">
  <tr> 
    <td onClick="muestra(1);" id="menucelda1" onMouseOver="menucelda('#3399ff',1);" onMouseOut="menucelda('#00cc00',1);"><div align="center">Datos del siniestro</div></td>
    <td onClick="muestra(2);" id="menucelda2" onMouseOver="menucelda('#3399ff',2);" onMouseOut="menucelda('#00cc00',2);"><div align="center">Profesionales</div></td>
    <td onClick="muestra(3);" id="menucelda3" onMouseOver="menucelda('#3399ff',3);" onMouseOut="menucelda('#00cc00',3);"><div align="center">Facturas</div></td>
    <td onClick="muestra(4);" id="menucelda4" onMouseOver="menucelda('#3399ff',4);" onMouseOut="menucelda('#00cc00',4);"><div align="center">Indemnizacion Final</div></td>
    <td onClick="muestra(7);" id="menucelda7" onMouseOver="menucelda('#3399ff',7);" onMouseOut="menucelda('#00cc00',7);"><div align="center">Documentaci&oacute;n del cliente</div></td>
    <td onClick="muestra(6);" id="menucelda6" onMouseOver="menucelda('#3399ff',6);" onMouseOut="menucelda('#00cc00',6);"><div align="center">Correspondencia</div></td>
    <td onClick="muestra(5);" id="menucelda5" onMouseOver="menucelda('#3399ff',5);" onMouseOut="menucelda('#00cc00',5);"><div align="center">Notas</div></td>
  </tr>
</table>
  
<table width="100%" border="0">
  <tr>
    <td width="45">&nbsp;</td>
    <td><h3 align="center"> 
  <? $_SESSION['Siniestro']=$Siniestro->Fields.$Item["Id"].$Value;
?>
  Fase: <? echo (->$Item["Texto"]->$Value);?></h3></td>
    <td width="45" align="right">
</td>
  </tr>
</table>

<table width="100%" border="0" id="opcion1" class="imagen">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>Tramitador: <? echo (->$Item["Nombre"]->$Value);?></td>
          <td align="right">Caso tipo: </td>
          <td><? echo ($Siniestro->Fields->$Item["CasoTipo"]->$Value);?></td>
          <td align="right">Caso tipo cont: </td>
          <td><? echo ($Siniestro->Fields->$Item["CasoTipo2"]->$Value);?></td>
          <td align="right">
            <h1>
              <? if (($Siniestro->Fields$Item["Laboral"]$Value==true))
{
?>
            Ac.Laboral
            <? } ?>          
            </h1></td>
          <td align="right"><a href="ListadoDeDocumentos.asp?Siniestro=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Abonado=<? echo (->$Item["Id"]->$Value);?>" target="_blank"><img src="Imagenes/listadoc.JPG" alt="Modificar datos" width="22" height="22" border="0" align="middle"></a><a href="SiniestroActualizar.asp?Id=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>"><img src="Imagenes/pencil.gif" alt="Modificar datos" width="22" height="22" border="0" align="middle"></a>
              <? if ((($Facturas==0) && ($Profesionales==0) && ($AbogyProc==0) && ($Contrarios==0)))
{
?>
              <a href="SiniestroBorrar.asp?SiniestroId=<?   echo $Siniestro->Fields->$Item["Id"]->$Value;?>"><img src="Imagenes/borrar.gif" alt="Borrar contrario" width="22" height="22" border="0" align="middle"></a>
              <? } ?>
          <a href="etiqueta.asp?Id=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>" target="_blank"><img src="Imagenes/etiqueta.jpg" alt="Etiqueta" width="22" height="22" border="0" align="middle"></a> </td>
        </tr>
      </table>
        <table width="100%" border="0" cellspacing="0">
          <tr>
            <td><strong><em>Datos del abonado:</em></strong></td>
            <td><h1><? if (($Siniestro->Fields$Item["FirmadoAnexo"]$Value==true))
{
?>
                <strong>Firmado Anexo al contrato</strong>
                <? } ?></h1></td>
            <td><div align="right"><? if (($Siniestro->Fields$Item["AbonadoMomentoSiniestro"]$Value==true))
{
?>
                <strong>Abonado en el momento del siniestro</strong>
                <? } ?></div></td>
          </tr>
        </table>

        <table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
          <tr>
            <td colspan="3"><strong>Nombre: <a href="Cliente.asp?NoSalto=1&<? echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".$Siniestro->Fields->$Item["Abonado"]->$Value;?>"><? echo (->$Item["Nombre"]->$Value);?>&nbsp;<? echo (->$Item["Apellido1"]->$Value);?>&nbsp;<? echo (->$Item["Apellido2"]->$Value);?></a></strong></td>
            <td>NIF: <? echo (->$Item["NIF"]->$Value);?></td>
            <td>F.Nacimiento:<? echo (->$Item["FechaNacimiento"]->$Value);?></td>
          </tr>
          <tr>
            <td colspan="5"><p>Direccion:<br>
              &nbsp;&nbsp;&nbsp;<? echo (->$Item["Direccion"]->$Value);?><br>
              &nbsp;&nbsp;&nbsp;&nbsp;<? echo (->$Item["Codigo Postal"]->$Value);?>&nbsp;<? echo (->$Item["Localidad"]->$Value);?>&nbsp;(&nbsp;<? echo (->$Item["Provincia"]->$Value);?>&nbsp;)</p></td>
          </tr>
          <tr>
            <td>Telefono 1: <? echo (->$Item["Telefono 1"]->$Value);?></td>
            <td>Telefono 2: <? echo (->$Item["Telefono 2"]->$Value);?></td>
            <td>Telefono 3: <? echo (->$Item["Telefono 3"]->$Value);?></td>
            <td colspan="2">Email: <? echo (->$Item["Email"]->$Value);?></td>
          </tr>
          <tr>
            <td colspan="2">Agente:<? echo (->$Item["ANombre"]->$Value);?></td>
            <td colspan="3">Colectivo:<? echo (->$Item["Colectivo"]->$Value);?></td>
          </tr>
        </table>
        <table width="100%" border="0">
          <tr>
            <td><? if (($Item["ModeloContrato"]$Value>3))
{
?><a href="ContratoImprimirSalida.asp?Id=<?   echo ($Siniestro->Fields->$Item["Abonado"]->$Value);?>" target="_blank">Imprimir contrato de abonado</a><? } ?>&nbsp;</td>
            <td>&nbsp;<!-----<a href="ContratoPrestacionDeServicios.asp?Siniestro=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Abonado=<? echo (->$Item["Id"]->$Value);?>&Contrato=Contrato%20prestacion%20servicios%20abonado" target="_blank">Imprimir contrato de prestacion de servicios para abonado</a>----></td>
            <td><a href="ContratoPrestacionDeServicios.asp?Siniestro=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Abonado=<? echo (->$Item["Id"]->$Value);?>&Contrato=Contrato%20prestacion%20servicios" target="_blank">Imprimir contrato de prestacion de servicios</a></td>
          </tr>
        </table>
        Notas:<br>
        <? echo ->$Item["Notas"]->$Value;?>
        <? //if not isnull(Abonado.Fields.Item("Notas").Value) then response.Write("Notas:<br>"&replace(Abonado.Fields.Item("Notas").Value,VBcrlf,"<br>")) ?>
        <p><strong><em>Datos del siniestro:</em></strong></p>
        <? if (($Siniestro->Fields$Item["Representado"]$Value==true))
{
?>
        <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td><strong>Datos del siniestrado:</strong><br>
            Nombre: <?   echo ($Siniestro->Fields->$Item["Nombre"]->$Value);?><br>
            DNI: <?   echo ($Siniestro->Fields->$Item["DNIRepresentado"]->$Value);?><br>
            Fecha de nacimiento: <?   echo ($Siniestro->Fields->$Item["FechaNacRepresentado"]->$Value);?></td>
          </tr>
        </table>
        <br>
        <? } ?>
        <table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
          <tr>
            <td colspan="2">Fecha de apertura del expediente:<strong><? echo ($Siniestro->Fields->$Item["FechaAperturaExpediente"]->$Value);?></strong></td>
            <td>Fecha de cierre del expediente:<strong><? echo ($Siniestro->Fields->$Item["FechaCierreExpediente"]->$Value);?><br>
            </strong>Fecha de cobro por rumbo: <? echo ($Siniestro->Fields->$Item["FechaCobrorumbo"]->$Value);?><br>
            Fecha de cobro por el cliente: <? echo ($Siniestro->Fields->$Item["FechaCobroCliente"]->$Value);?><br>
            Fecha de archivo: <? echo ($Siniestro->Fields->$Item["FechaArchivo"]->$Value);?></td>
          </tr>
          <tr>
            <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>Fecha Siniestro: <strong><? echo ($Siniestro->Fields->$Item["Fecha Siniestro"]->$Value);?></strong></td>
                  <td>
                    <? if (($dateadd["M"][5][($Siniestro->Fields->$Item["Fecha Siniestro"]->$Value)]>strftime("%m/%d/%y %H:%M:%S %p")))
{
?>
                    <div align="right"><a href="AgendaInsertar.asp?Fecha=<?   echo $dateadd["M"][5][($Siniestro->Fields->$Item["Fecha Siniestro"]->$Value)];?>&Texto=Fin de procedimiento civil de <?   echo (->$Item["Nombre"]->$Value)+" "+(->$Item["Apellido1"]->$Value)+" "+(->$Item["Apellido2"]->$Value);?>"><img src="Imagenes/bell.gif" alt="A&ntilde;adir alerta para fecha del fin de procedimiento civil" width="18" height="19" border="0"></a></div>
                    <? } ?>                  </td>
                </tr>
              </table>
              Hora Siniestro: <? echo ($Siniestro->Fields->$Item["Hora Siniestro"]->$Value);?></td>
            <td>Fecha Baja Laboral:<? echo ($Siniestro->Fields->$Item["Fecha Baja"]->$Value);?><br>
              Fecha Alta Laboral:<? echo ($Siniestro->Fields->$Item["Fecha Alta"]->$Value);?><br>
Fecha Alta Direccion M&eacute;dica:<? echo ($Siniestro->Fields->$Item["Fecha Direccion"]->$Value);?><br>
              Fecha Ingreso Hospitalario:<? echo ($Siniestro->Fields->$Item["Fecha Ingreso"]->$Value);?><br>
              Fecha Alta Hospitalaria:<? echo ($Siniestro->Fields->$Item["Fecha AltaHosp"]->$Value);?><br>
              
            Fecha del alta forense: <? echo ($Siniestro->Fields->$Item["FechaAltaForense"]->$Value);?></td>
          </tr>
          <tr>
            <td colspan="3">Desarrollo del accidente: <? echo ($Siniestro->Fields->$Item["Desarrollo accidente"]->$Value);?><br>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td valign="top">Lugar: <? echo ($Siniestro->Fields->$Item["Lugar"]->$Value);?><br>
                  Localidad: <? echo ($Siniestro->Fields->$Item["Localidad"]->$Value);?></td>
                    <td valign="top">Descripci&oacute;n del expediente: <? echo ($Siniestro->Fields->$Item["Circunstacias"]->$Value);?></td>
                  </tr>
              </table></td>
          </tr>
          <tr>
            <td colspan="2">Da&ntilde;os del vehiculo:<? echo ($Siniestro->Fields->$Item["Daños Vehiculo"]->$Value);?></td>
            <td>Condici&oacute;n:<? echo ($Siniestro->Fields->$Item["Condicion"]->$Value);?></td>
          </tr>
          <tr>
            <td colspan="2">Da&ntilde;os Personales:<? echo ($Siniestro->Fields->$Item["Daños Personales"]->$Value);?></td>
            <td>Cuantia de asistencia sanitaria:<? echo ($Siniestro->Fields->$Item["AsistenciaSanitaria"]->$Value);?></td>
          </tr>
          <tr>
            <td rowspan="1" <? if (($Siniestro->Fields$Item["AsistenciaJuridica"]$Value==false))
{
  print " colspan=\"3\"";
} ?>>N&uacute;mero de procedimiento:<? echo ($Siniestro->Fields->$Item["NroProcedimiento"]->$Value);?><br>
            Dirigencas previas:<? echo ($Siniestro->Fields->$Item["DiligenciasPrevias"]->$Value);?></td>
            <? if (($Siniestro->Fields$Item["AsistenciaJuridica"]$Value==true))
{
?>
            <td rowspan="1">Asistencia Juridica: Si</td>
            <td>
              <?   if (($Siniestro->Fields$Item["Firma carta abogado procurador"]$Value==true))
  {
?>Firma carta abogado: Si<?   } ?><br>Cuantia:<?   echo ($Siniestro->Fields->$Item["CuantiaAsistenciaJuridica"]->$Value);?><br>
              Fecha de entrega de la AJ: <?   echo ($Siniestro->Fields->$Item["FechaEntregaAJ"]->$Value);?><br>
              <?   if (($Siniestro->Fields$Item["AJCobrada"]$Value==true))
  {
?>Asistencia Jur&iacute;dica Cobrada<?   } ?>
            Fecha de Designaci&oacute;n Jur&iacute;dica:<?   echo ($Siniestro->Fields->$Item["Fecha Designacion"]->$Value);?></td>
            <? } ?>
          </tr>
          
          <? if (($Siniestro->Fields$Item["PresentadaDenuncia"]$Value==true))
{
?>
          <tr>
            <td colspan="3">Presentada Denuncia: Si</td>
          </tr><? } ?>
          <? if (($Siniestro->Fields$Item["AccidentesCorporales"]$Value==true))
{
?>
                   <tr>
            <td colspan="3">Cobertura de accidentes corporales del conductor: Si<br>
              Cuantia: <?   echo $Siniestro->Fields->$Item["CuantiaAccidentesCorporales"];?></td>
          </tr><? } ?>
        </table>
        <a href="SiniestroActualizar.asp?Id=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>">Modificar datos</a><br>
            <p><strong><em>Datos del vehiculo:</em></strong></p>
            <table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
              <tr>
                <td>Vehiculo:<? echo ($Siniestro->Fields->$Item["Vehiculo"]->$Value);?></td>
                <td>Matricula:<? echo ($Siniestro->Fields->$Item["Matricula"]->$Value);?></td>
              </tr>
              <tr>
                <td colspan="2">Conductor:<? echo ($Siniestro->Fields->$Item["Conductor"]->$Value);?></td>
              </tr>
              <tr>
                <td colspan="2">Tomador:<? echo ($Siniestro->Fields->$Item["Tomador"]->$Value);?></td>
              </tr>
              <tr>
                <td>Nro Poliza.<? echo ($Siniestro->Fields->$Item["Nro Poliza"]->$Value);?></td>
                <td>Ref Expediante.<? echo ($Siniestro->Fields->$Item["RefExpediente"]->$Value);?></td>
              </tr>
              <tr>
                <td colspan="2">Compa&ntilde;ia:<? //=(Aseguradoras.Fields.Item("aseguradora").Value) ?></td>
              </tr>
              <tr>
                <td>Fecha Poliza:<? echo ($Siniestro->Fields->$Item["Fecha poliza"]->$Value);?></td>
                <td>Fin Poliza:<? echo ($Siniestro->Fields->$Item["Fin poliza"]->$Value);?></td>
              </tr>
            </table>
            <p><strong><em>Contrarios:</em></strong></p>
            <table width="100%" border="0" cellspacing="0" bordercolor="#000000">
              <? 
while((($Repeat1__numRows!=0) && (!($Contrarios==0))))
{

?>
              <tr>
                <td><table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
                    <tr>
                      <td colspan="4"><table width="100%" border="0">
                          <tr>
                            <td><strong>Nombre: <a href="ContrarioModificar.asp?IdContrario=<?   echo ->$Item["Id"]->$Value;?>&Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?></a>
                                  <?   if (($Item["Culpable"]$Value==true))
  {
?>
                                  (posible culpable)
                                  <?   } ?>
                            </strong></td>
                            <td>
                              <div align="right"><a href="ContrarioBorrar.asp?Id=<?   echo ->$Item["Id"]->$Value;?>"><img src="Imagenes/borrar.gif" alt="Borrar contrario" width="22" height="22" border="0" align="middle"></a></div></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td colspan="4">Direccion:<br>
&nbsp;&nbsp;&nbsp;&nbsp; <?   echo (->$Item["Direccion"]->$Value);?><br>
&nbsp;&nbsp;&nbsp;&nbsp; <?   echo (->$Item["Codigo Postal"]->$Value);?>&nbsp;<?   echo (->$Item["Localidad"]->$Value);?>&nbsp;(&nbsp;<?   echo (->$Item["Provincia"]->$Value);?>&nbsp;)</td>
                    </tr>
                    <tr>
                      <td>Telefono1:<?   echo (->$Item["Telefono 1"]->$Value);?></td>
                      <td>Telefono2:<?   echo (->$Item["Telefono 2"]->$Value);?></td>
                      <td>Telefono3:<?   echo (->$Item["Telefono 3"]->$Value);?></td>
                      <td>Email: <?   echo (->$Item["Email"]->$Value);?></td>
                    </tr>
                    <tr>
                      <td colspan="2">Fecha de nacimiento: <?   echo (->$Item["FechaNacimiento"]->$Value);?></td>
                      <td colspan="2">NIF: <?   echo (->$Item["NIF"]->$Value);?></td>
                    </tr>
                    <tr>
                      <td colspan="2">Vehiculo:<?   echo (->$Item["Vehiculo"]->$Value);?></td>
                      <td colspan="2">Conductor: <?   echo (->$Item["Conductor"]->$Value);?></td>
                    </tr>
                    <tr>
                      <td colspan="2">Nro Poliza:<?   echo (->$Item["Nro poliza"]->$Value);?></td>
                      <td colspan="2">Ref Expediente:<?   echo (->$Item["Ref expediente"]->$Value);?></td>
                    </tr>
                    <tr>
                      <td colspan="2">Matricula:<?   echo (->$Item["Matricula"]->$Value);?></td>
                      <td colspan="2">Compa&ntilde;ia:<?   echo (->$Item["Compañia"]->$Value);?></td>
                    </tr>
                    <tr>
                      <td colspan="2">Propietario:<?   echo (->$Item["Propietario"]->$Value);?></td>
                      <td colspan="2">Tomador:<?   echo (->$Item["Tomador"]->$Value);?></td>
                    </tr>
                  </table></td></tr>
              <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Contrarios=mysql_fetch_array($Contrarios_query);
  $Contrarios_BOF=0;

} 
?>
            </table>
            <p><a href="ContrarioInsertar.asp?Id=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>">Insertar contrario</a></p>
<? if ((!($Otros==0)))
{
?><p><em><strong>Otros siniestrados:</strong>
  </em>
  <? } ?>
<? while((!($Otros==0)))
{
?>
              <br><?   if (($Item["Representado"]$Value))
  {
?>
              <a href="Siniestro.asp?Id=<?     echo (->$Item["Id"]->$Value);?>" target="_blank"><?     echo (->$Item["RepreNombre"]->$Value);?></a> 
<?   }
    else
  {
?>
              <a href="Siniestro.asp?Id=<?     echo (->$Item["Id"]->$Value);?>" target="_blank"><?     echo (->$Item["Nombre"]->$Value);?>&nbsp;<?     echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?     echo (->$Item["Apellido2"]->$Value);?></a> 
			  <?   } ?>
<? 
  $Otros=mysql_fetch_array($Otros_query);
  $Otros_BOF=0;

} ?>			  
            </p>    </td>
  </tr>
</table>
<table width="100%" border="0" id="opcion2" class="imagen">
  <tr>
    <td>      <p><strong>Profesionales:</strong></p>
      <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr bgcolor="#CCCCCC"> 
          <td>Tipo</td>
          <td>Nombre</td>
        </tr>
        <? 
while((($Repeat3__numRows!=0) && (!($Profesionales==0))))
{

?>
        <tr onMouseOver="showTooltip('dHTMLToolTip',event, 'Fecha%20de%20comienzo:<?   echo (->$Item["FechaComienzo"]->$Value);?>%3Cbr%3EFecha%20final:<?   echo (->$Item["FechaFin"]->$Value);?>%3Cbr%3ECitas/Anotaciones:%3Cbr%3E<?   echo (->$Item["NroVisitas"]->$Value);?>', '#ffff99','#000000','#000000','6000')" onMouseOut="hideTooltip('dHTMLToolTip')"> 
          <td><?   echo (->$Item["Texto"]->$Value);?></td>
          <td><a href="ProfesionalModificar.asp?<?   echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".->$Item["Profesional"]->$Value;?>"><?   echo (->$Item["Nombre"]->$Value);?></a></td>
          <td width="100"><a href="SiniestroProfesionalModificar.asp?Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&SPId=<?   echo (->$Item["ID"]->$Value);?>&Capa=2"><img src="Imagenes/pencil.gif" width="22" height="22" border="0"></a><a href="SiniestroProfesionalBorrar.asp?Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&SPId=<?   echo (->$Item["ID"]->$Value);?>"><img src="Imagenes/Borrar.gif" width="22" height="22" border="0"></a> 
            <?   if (!($Item["AutorizacionCompromiso"]$Value==""))
  {
?>
            <a href="AutorizacionCompromisoDePago.asp?Siniestro=<?     echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Abonado=<?     echo (->$Item["Id"]->$Value);?>&Profesional=<?     echo (->$Item["ProfesinalesId"]->$Value);?>&Doc=<?     echo (->$Item["AutorizacionCompromiso"]->$Value);?>" target="_blank"><img src="Imagenes/AutComp.jpg" alt="Autorizacion y Compromiso de pago" width="22" height="22" border="0"></a> 
            <?   } ?>
            <?   if ((($Item["Tipo"]$Value=="6") && (!$Item["Ext1"]$Value=="")))
  {
?>
            <a href="AutorizacionCompromisoDePago.asp?Doc=<?     echo ->$Item["Ext1"]->$Value;?>&Abonado=<?     echo (->$Item["Id"]->$Value);?>&Siniestro=<?     echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Profesional=<?     echo (->$Item["ProfesinalesId"]->$Value);?>" target="_blank"><img src="Imagenes/AutComp.jpg" alt="Autorizacion y Compromiso de pago" width="22" height="22" border="0"></a> 
            <?   } ?>
            <? 
  if ((($Item["Texto"]$Value)=="Abogado"))
  {
    $hayabogado=1;
  } 
  if ((($Item["Texto"]$Value)=="Procuradores") && ($hayabogado==1) && ($hayprocurador==0))
  {

    $hayprocurador=1;
?>
            <a href="SolicitudAbogadoProcurador.asp?AbonadoId=<?     echo ($Siniestro->Fields->$Item["Abonado"]->$Value);?>&SiniestroId=<?     echo ($Siniestro->Fields->$Item["Id"]->$Value);?>" target="_blank"><img src="Imagenes/AutComp.jpg" alt="Solicitud abogado y procurador" width="22" height="22" border="0"></a> 
            <?   } ?>
            <a href="FacturaInsertar.asp?Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Tipo=<?   echo (->$Item["Tipo"]->$Value);?>&Profesional=<?   echo (->$Item["Nombre"]->$Value);?>&Capa=3"><img src="Imagenes/facturas.jpg" alt="Insertar factura" width="22" height="22" border="0"></a></td>
        </tr>
        <? 
  $Repeat3__index=$Repeat3__index+1;
  $Repeat3__numRows=$Repeat3__numRows-1;
  $Profesionales=mysql_fetch_array($Profesionales_query);
  $Profesionales_BOF=0;

} 
?>
      </table>
      <br>
      <a href="SiniestroProfesionalInsertar.asp?Id=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Tipo=1&Capa=2">Insertar 
      profesional</a></td>
  </tr>
</table>
<table width="100%" border="0" id="opcion3" class="imagen">
  <? if ($_SESSION['CVerFacturas']==true)
{
?>
  <tr>
    <td>      <p><strong><em>Facturas</em></strong>:</p>
      <table width="100%" border="1" cellspacing="0" bordercolor="#000000">
        <tr bgcolor="#EBEBEB">
          <td>Profesional</td>
          <td>Descripcion</td>
          <td>Cuantia Factura</td>
          <td>Cuantia Abonado</td>
          <?   if ($_SESSION['CBeneficio']==true)
  {
?>
          <td>Cuantia Empresa</td>
          <?   } ?>
          <td></td>
        </tr>
        <? 
  $total1=0;
  $total2=0;
  $total3=0;
  while((($Repeat2__numRows!=0) && (!($Facturas==0))))
  {

?>
        <tr onMouseOver="showTooltip('dHTMLToolTip',event, 'Nro%20de%20Factura:<?     echo (->$Item["Nro Factura"]->$Value);?>%3Cbr%3EFecha:<?     echo (->$Item["Fecha"]->$Value);?>%3Cbr%3EForma de pago:<?     echo (->$Item["FormaDePago"]->$Value);?>%3Cbr%3ENotas de pago:<?     echo (->$Item["NroPagare"]->$Value);?>%3Cbr%3ENotas:<?     echo (->$Item["Notas"]->$Value);?>', '#ffff99','#000000','#000000','6000')" onMouseOut="hideTooltip('dHTMLToolTip')"  <?     if (($Item["FormaPago"]==1))
    {
      print "bgcolor=\"#FF0000\"";
    } ?>>
          <td><?     echo (->$Item["Nombre"]->$Value);?>(<?     echo (->$Item["Texto"]->$Value);?>)</td>
          <td><?     echo (->$Item["Descripcion"]->$Value);?>&nbsp;
              <?     if (($Item["FaltaOriginal"]$Value==true))
    {
?>
              <img src="Imagenes/alerta.gif" alt="Falta la factura original" width="19" height="19">
              <?     } ?></td>
          <td <?     if (($Item["ReclamadaCompania"]==true))
    {
      print "bgcolor=\"#FFCC00\"";
    }
      else
    {
      if (($Item["Pagado"]==true))
      {
        print "bgcolor=\"#00FF00\"";
      } 
    } ?>><?     echo (->$Item["Cuantia rumbo"]->$Value);?>&euro;</td>
          <td <?     if (($Item["ReclamadaCompania"]==true))
    {
      print "bgcolor=\"#FFCC00\"";
    }
      else
    {
      if (($Item["Pagado"]==true))
      {
        print "bgcolor=\"#00FF00\"";
      } 
    } ?>><?     echo (->$Item["Cuantia Abonado"]->$Value);?>&euro;</td>
          <?     if ($_SESSION['CBeneficio']==true)
    {
?>
          <td <?       if (($Item["ReclamadaCompania"]==true))
      {
        print "bgcolor=\"#FFCC00\"";
      }
        else
      {
        if (($Item["Pagado"]==true))
        {
          print "bgcolor=\"#00FF00\"";
        } 
      } ?>><?       echo (->$Item["ValorReal"]->$Value);?>&euro;</td>
          <?     } ?>
          <td><?     if ($_SESSION['CFacturas']==true)
    {
?>
              <a href="FacturaModificar.asp?FacturaId=<?       echo ->$Item["Id"]->$Value;?>&Id=<?       echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Capa=3"><img src="Imagenes/pencil.gif" alt="Modificar datos" width="22" height="22" border="0" align="middle"></a><a href="FacturasBorrar.asp?FacturaId=<?       echo ->$Item["Id"]->$Value;?>&Capa=3"><img src="Imagenes/Borrar.gif" alt="Borrar factura" width="22" height="22" border="0" align="middle"></a>
              <?     } ?></td>
        </tr>
        <!--- <?     echo ->$Item["RestarIVABeneficio"];?> --->
        <? 
    if (!($Item["Cuantia rumbo"]$Value==""))
    {
      $total1=$total1+->$Item["Cuantia rumbo"]->$Value;
    } 
    if (!($total2+$Item["Cuantia Abonado"]$Value==""))
    {
      $total2=$total2+->$Item["Cuantia Abonado"]->$Value;
    } 
    if (!($total3+$Item["ValorReal"]$Value==""))
    {

      $total3=$total3+->$Item["ValorReal"]->$Value;
      if (($Item["SumarIVABeneficio"]==true))
      {
        $total3=$total3-((->$Item["Cuantia rumbo"]->$Value-->$Item["ValorReal"]->$Value)*0.16);
      } 
      if (($Item["RestarIVABeneficio"]==true))
      {
        $total3=$total3+((->$Item["Cuantia rumbo"]->$Value-->$Item["ValorReal"]->$Value)*16/116);
      } 
    } 

    $Repeat2__index=$Repeat2__index+1;
    $Repeat2__numRows=$Repeat2__numRows-1;
    $Facturas=mysql_fetch_array($Facturas_query);
    $Facturas_BOF=0;

  } 
?>
        <tr>
          <td colspan="2" bgcolor="#EBEBEB"><div align="right">Total:</div></td>
          <td bgcolor="#EBEBEB"><?   echo $total1;?>&euro;</td>
          <td bgcolor="#EBEBEB"><?   echo $total2;?>&euro;</td>
          <?   if ($_SESSION['CBeneficio']==true)
  {
?>
          <td bgcolor="#EBEBEB"><?     echo round($total3,2);?>&euro;</td>
          <?   } ?>
        </tr>
        <? 
  while((($Repeat4__numRows!=0) && (!($AbogyProc==0))))
  {

?>
        <tr  onMouseOver="showTooltip('dHTMLToolTip',event, 'Nro%20de%20Factura:<?     echo (->$Item["Nro Factura"]->$Value);?>%3Cbr%3EFecha:<?     echo (->$Item["Fecha"]->$Value);?>%3Cbr%3EForma de pago:<?     echo (->$Item["FormaDePago"]->$Value);?>%3Cbr%3ENotas de pago:<?     echo (->$Item["NroPagare"]->$Value);?>%3Cbr%3ENotas:<?     echo (->$Item["Notas"]->$Value);?>', '#ffff99','#000000','#000000','6000')" onMouseOut="hideTooltip('dHTMLToolTip')" <?     if (($Item["FormaPago"]==1))
    {
      print "bgcolor=\"#FF0000\"";
    } ?>>
          <td><?     echo (->$Item["Nombre"]->$Value);?>(<?     echo (->$Item["Texto"]->$Value);?>)</td>
          <td><?     echo (->$Item["Descripcion"]->$Value);?>&nbsp;<?     if (($Item["FaltaOriginal"]$Value==true))
    {
?>
              <img src="Imagenes/alerta.gif" alt="Falta la factura original" width="19" height="19">
              <?     } ?></td>
          <td><?     echo (->$Item["Cuantia rumbo"]->$Value);?>&euro;</td>
          <td><?     echo (->$Item["Cuantia Abonado"]->$Value);?>&euro;</td>
          <?     if ($_SESSION['CBeneficio']==true)
    {
?>
          <td><?       echo (->$Item["ValorReal"]->$Value);?>&euro;</td>
          <?     } ?>
          <td bgcolor="#FFFFFF"><?     if ($_SESSION['CFacturas']==true)
    {
?>
              <a href="FacturaModificar.asp?FacturaId=<?       echo ->$Item["Id"]->$Value;?>&Id=<?       echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Capa=3"><img src="Imagenes/pencil.gif" alt="Modificar datos" width="22" height="22" border="0" align="middle"></a><a href="FacturasBorrar.asp?FacturaId=<?       echo ->$Item["Id"]->$Value;?>&Capa=3"><img src="Imagenes/Borrar.gif" alt="Borrar factura" width="22" height="22" border="0" align="middle"></a>
              <?     } ?></td>
        </tr>
        <? 
    if (!($Item["Cuantia rumbo"]$Value==""))
    {
      $total1=$total1+->$Item["Cuantia rumbo"]->$Value;
    } 
    if (!($total2+$Item["Cuantia Abonado"]$Value==""))
    {
      $total2=$total2+->$Item["Cuantia Abonado"]->$Value;
    } 
    if (!($total3+$Item["ValorReal"]$Value==""))
    {

      $total3=$total3+->$Item["ValorReal"]->$Value;
      if (($Item["SumarIVABeneficio"]==true))
      {
        $total3=$total3-((->$Item["Cuantia rumbo"]->$Value-->$Item["ValorReal"]->$Value)*0.16);
      } 
      if (($Item["RestarIVABeneficio"]==true))
      {
        $total3=$total3+((->$Item["Cuantia rumbo"]->$Value-->$Item["ValorReal"]->$Value)*16/116);
      } 
    } 

    $Repeat4__index=$Repeat4__index+1;
    $Repeat4__numRows=$Repeat4__numRows-1;
    $AbogyProc=mysql_fetch_array($AbogyProc_query);
    $AbogyProc_BOF=0;

  } 
?>
        <?   if (($Repeat4__index>0))
  {
?>
        <tr>
          <td colspan="2" bgcolor="#CCCCCC"><div align="right">Total:</div></td>
          <td bgcolor="#CCCCCC"><?     echo $total1;?>&euro;</td>
          <td bgcolor="#CCCCCC"><?     echo $total2;?>&euro;</td>
          <?     if ($_SESSION['CBeneficio']==true)
    {
?>
          <td bgcolor="#CCCCCC"><?       echo round($total3,2);?>&euro;</td>
          <?     } ?>
        </tr>
        <?   } ?>
        <tr>
          <td colspan="2"><div align="right">Total Suplidos:</div></td>
          <td colspan="2"><?   echo round($total1-$total2,2);?>&euro;</td>
          <?   if (($total1-$total2>3000))
  {
?>
          <script language="JavaScsript">alert("Hay un exceso de suplidos");</script>
          <?   } ?>
        </tr>
        <?   if ($_SESSION['CBeneficio']==true)
  {
?>
        <tr>
          <td colspan="2"><div align="right">Beneficio:</div></td>
          <td colspan="2"><?     echo round($total1-$total2-$total3,2);?>&euro;</td>
        </tr>
        <?   } ?>
      </table>
      <table width="500" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><?   if ($_SESSION['CFacturas']==true)
  {
?><a href="FacturaInsertar.asp?Id=<?     echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Tipo=6&Profesional=Otros&Capa=3" name="link3" id="link1">Insertar 
            factura</a><?   } ?></td>
          <td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr align="right" valign="top"> 
                <td><div align="right"> 
                    <h6>Leyenda:</h6>
                  </div></td>
                <td><table width="10" height="10" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#00FF00">
                    <tr> 
                      <td></td>
                    </tr>
                  </table></td>
                <td align="left"><h6>Pagada por la compa&ntilde;ia</h6></td>
                <td><table width="10" height="10" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FF0000">
                    <tr> 
                      <td></td>
                    </tr>
                  </table></td>
                <td align="left"><h6>Sin Pagar</h6></td>
                <td><table width="10" height="10" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFCC00">
                    <tr> 
                      <td></td>
                    </tr>
                  </table></td>
                <td align="left"><h6>Reclamada</h6></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <p> <a href="LibroSuplidos.asp?Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>" target="_blank">Libro 
        de suplidos</a><a href="LibroSuplidos.asp?Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Excel=1" target="_blank"><img src="Imagenes/excel.gif" alt="Version para Excel" width="15" height="15" border="0"></a> 
        - 
        <a href="LibroSuplidos2.asp?Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>" target="_blank">Libro 
        de suplidos para el cliente</a><a href="LibroSuplidos2.asp?Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Excel=1" target="_blank"><img src="Imagenes/excel.gif" alt="Version para Excel" width="15" height="15" border="0"></a></p>
      <p>Indeminzacion final al cliente: <strong><?   echo ($Siniestro->Fields->$Item["Indemnizacion"]->$Value);?>&euro;</strong><br>
        A pagar por el cliente: <strong><?   echo ($Siniestro->Fields->$Item["CobroCliente"]->$Value);?>&euro;</strong><br>
<?   if ($_SESSION['CBeneficio']==true)
  {
?>Beneficio Empresa: <strong><?     echo ($Siniestro->Fields->$Item["Percivido"]->$Value);?>&euro;</strong><br><?   } ?>
        Indemnizacion sin facturas: <strong><?   echo ($Siniestro->Fields->$Item["IndemnizacionReal"]->$Value);?>&euro;</strong><br>
        Pago al agente: <strong><?   echo ($Siniestro->Fields->$Item["PagoAgente"]->$Value);?>&euro;</strong><br>
		Deuda: <strong><?   echo ($Siniestro->Fields->$Item["Deuda"]->$Value);?>&euro;</strong></p>
</td>
  </tr><? } ?>
</table>
<table width="500" border="0" id="opcion4" class="imagen">
  <? if ($_SESSION['CIndemnizacion']==true)
{
?>
  <tr>
    <td><p><strong><em>Indemnizacion final:</em></strong> 
        <script language="JavaScript">
function actualiza_indemnizacion() {
form1.FactorCorrector.value=form1.FactorCorrector.value.replace('.',',');
form1.ValorDiaImpeditivo.value=form1.ValorDiaImpeditivo.value.replace('.',',');
form1.ValorDiaNoImpeditivo.value=form1.ValorDiaNoImpeditivo.value.replace('.',',');
form1.ValorDiaHospitalizacion.value=form1.ValorDiaHospitalizacion.value.replace('.',',');
form1.ValorPuntoSecuela.value=form1.ValorPuntoSecuela.value.replace('.',',');
form1.FactorCorrectorValor.value=form1.FactorCorrectorValor.value.replace('.',',');
form1.FactorCorrector.value=form1.FactorCorrector.value.replace('.',',');
form1.PuntosSecuela.value=form1.PuntosSecuela.value.replace('.',',');
form1.ValorPuntoSecuelaEstetica.value=form1.ValorPuntoSecuelaEstetica.value.replace('.',',');
form1.Incapacidad.value=form1.Incapacidad.value.replace('.',',');

return true;
}
</script>
      </p>
      <table width="500" border="0">
        <tr> 
          <td valign="top"> <form name="form1" method="POST" action="SiniestroIndemnizacionActualizar.asp?Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Capa=4" onSubmit="actualiza_indemnizacion();MM_validateForm('DiasImpeditivos','','RisNum','ValorDiaImpeditivo2','','RisNum','DiasNoImpeditivos','','RisNum','ValorDiaNoImpeditivo','','RisNum','DiasHospitalizacion','','RisNum','ValorDiaHospitalizacion','','RisNum','PuntosSecuela','','RisNum','ValorPuntoSecuela','','RisNum','PuntosSecuelaEstetica','','RisNum','ValorPuntoSecuelaEstetica','','RisNum','FactorCorrector2','','RisNum','Incapacidad','','RisNum');return document.MM_returnValue">
              <table width="100%" border="1" cellspacing="0" bordercolor="#000000">
                <tr> 
                  <td width="46%">Dias Impeditivos:<br>
                    <input name="DiasImpeditivos" type="text" id="DiasImpeditivos" value="<?   echo ($Siniestro->Fields->$Item["DiasImpeditivos"]->$Value);?>" onChange="actualiza_datos();"><?   if (!(($Siniestro->Fields$Item["Fecha Baja"]$Value==null) || ($Siniestro->Fields$Item["Fecha Alta"]$Value==null)))
  {
?> 
                    <img src="Imagenes/calculadora2.gif" width="15" height="21" border="0" onClick="form1.DiasImpeditivos.value=<?     echo $DateDiff["d"][$Siniestro->Fields->$Item["Fecha Baja"]->$Value][$Siniestro->Fields->$Item["Fecha Alta"]->$Value];?>;"> 
                    <?   } ?></td>
                  <td width="54%">Valor del dia impeditivo:<br> <input name="ValorDiaImpeditivo" type="text" id="ValorDiaImpeditivo2" value="<?   echo ($Siniestro->Fields->$Item["DiasImpeditivosValor"]->$Value);?>" onChange="actualiza_datos();"></td>
                  <td>Total: <br> <input type="text" id="total1" onChange="actualiza_datos();"></td>
                </tr>
                <tr> 
                  <td>Dias No Impeditivos: <br> <input name="DiasNoImpeditivos" type="text" id="DiasNoImpeditivos" value="<?   echo ($Siniestro->Fields->$Item["DiasNoImpeditivos"]->$Value);?>" onChange="actualiza_datos();"></td>
                  <td>Valor del dia no impeditivo:<br> <input name="ValorDiaNoImpeditivo" type="text" id="ValorDiaNoImpeditivo" value="<?   echo ($Siniestro->Fields->$Item["DiasNoImpeditivosValor"]->$Value);?>" onChange="actualiza_datos();"></td>
                  <td>Total:<br> <input type="text" id="total2"></td>
                </tr>
                <tr> 
                  <td>Dias de hospitalizacion: <br> <input name="DiasHospitalizacion" type="text" id="DiasHospitalizacion" value="<?   echo ($Siniestro->Fields->$Item["DiasHospitalizados"]->$Value);?>" onChange="actualiza_datos();"></td>
                  <td>Valor del dia de hospitalizacion:<br> <input name="ValorDiaHospitalizacion" type="text" id="ValorDiaHospitalizacion" value="<?   echo ($Siniestro->Fields->$Item["DiasHospitalizadosValor"]->$Value);?>" onChange="actualiza_datos();"></td>
                  <td>Total:<br> <input type="text" id="total3"></td>
                </tr>
                <tr> 
                  <td>Puntos de Secuela:<br> <input name="PuntosSecuela" type="text" id="PuntosSecuela" value="<?   echo ($Siniestro->Fields->$Item["PuntosSecuelas"]->$Value);?>" onChange="actualiza_datos();"></td>
                  <td>Valor del punto de secuela:<br> <input name="ValorPuntoSecuela" type="text" id="ValorPuntoSecuela" value="<?   echo ($Siniestro->Fields->$Item["PuntosSecuelasValor"]->$Value);?>" onChange="actualiza_datos();"></td>
                  <td>Total:<br> <input type="text" id="total4"></td>
                </tr>
                <tr> 
                <tr> 
                  <td>Puntos de Secuela Estetica:<br> <input name="PuntosSecuelaEstetica" type="text" id="PuntosSecuelaEstetica" value="<?   echo ($Siniestro->Fields->$Item["PtosPerjuicioEstetico"]->$Value);?>" onChange="actualiza_datos();"></td>
                  <td>Valor del punto de secuela estetica:<br> <input name="ValorPuntoSecuelaEstetica" type="text" id="ValorPuntoSecuelaEstetica" value="<?   echo ($Siniestro->Fields->$Item["ValorPuntoPerjuicioEstetico"]->$Value);?>" onChange="actualiza_datos();"></td>
                  <td>Total:<br> <input name="TotalEstetica" type="text" id="TotalEstetica"></td>
                </tr>
                <tr> 
                  <td colspan="2">
                    <table width="100%" border="0">
                      <tr>
                        <td rowspan="3">Factor Corrector:<br> <input name="FactorCorrector" type="text" id="FactorCorrector2" value="<?   echo ($Siniestro->Fields->$Item["FactorCorrector"]->$Value);?>" onChange="actualiza_datos();"></td>
                        <td><input name="OFC" type="radio" value="1" <?   if ((($Siniestro->Fields$Item["OpcionFactorCorrector"]$Value)==1))
  {
?>checked <?   } ?>onChange="actualiza_datos();" onClick="actualiza_datos();">
                          <span class="Estilo2">Sobre indemnizaci&oacute;n </span></td>
                      </tr>
                      <tr>
                        <td><input name="OFC" type="radio" value="2"<?   if ((($Siniestro->Fields$Item["OpcionFactorCorrector"]$Value)==2))
  {
?>checked <?   } ?> onChange="actualiza_datos();" onClick="actualiza_datos();">
                          <span class="Estilo2">Sobre secuelas</span></td>
                      </tr>
                      <tr>
                        <td><input name="OFC" type="radio" value="3"<?   if ((($Siniestro->Fields$Item["OpcionFactorCorrector"]$Value)==3))
  {
?>checked <?   } ?> onChange="actualiza_datos();" onClick="actualiza_datos();">
                          <span class="Estilo2">Sobre d&iacute;as </span></td>
                      </tr>
                    </table>                  </td>
                  <td>Total:<br> <input name="FactorCorrectorValor" type="text" id="total5" value="<?   echo ($Siniestro->Fields->$Item["FactorCorrectorValor"]->$Value);?>" onChange="actualiza_datos();"></td>
                </tr>				<tr>
				  <td colspan="2">Incapacidad</td>
				  <td>Total:<br>
                    <input name="Incapacidad" type="text" id="Incapacidad" value="<?   echo ($Siniestro->Fields->$Item["Incapacidad"]->$Value);?>" onChange="actualiza_datos();"></td></tr>
                <tr> 
                  <td colspan="2">&nbsp;</td>
                  <td>Total:<br> <input type="text" id="total6"></td>
                </tr>
              </table>
              <div align="center"> 
                <input type="submit" name="Submit" value="Actualizar">
              </div>
              <input type="hidden" name="MM_update" value="form1">
              <input type="hidden" name="MM_recordId" value="<?   echo $Siniestro->Fields->$Item["Id"]->$Value;?>">
            </form></td>
          <td valign="top"> <table width="700" border="1" cellspacing="0" bordercolor="#000000">
              <tr> 
                <td bgcolor="#EBEBEB"><font size="-2">Profesional</font></td>
                <td bgcolor="#EBEBEB"><font size="-2">Descripcion</font></td>
                <td bgcolor="#EBEBEB"><font size="-2">Cuantia Factura</font></td>
              </tr>
              <? 
  $suma_facturas_indem=0;
?>
              <? 
  while((($Repeat5__numRows!=0) && (!($Facturas2==0))))
  {

?>
              <tr> 
                <td><font size="-2"><?     echo (->$Item["Nombre"]->$Value);?>(<?     echo (->$Item["Texto"]->$Value);?>)</font></td>
                <td><font size="-2"><?     echo (->$Item["Descripcion"]->$Value);?>&nbsp;</font></td>
                <td><font size="-2"><?     echo (->$Item["ValorIndemnizacion"]->$Value);?>&euro;</font></td>
              </tr>
              <? 
    $suma_facturas_indem=$suma_facturas_indem+->$Item["ValorIndemnizacion"]->$Value;
    $Repeat5__index=$Repeat5__index+1;
    $Repeat5__numRows=$Repeat5__numRows-1;
    $Facturas2=mysql_fetch_array($Facturas2_query);
    $Facturas2_BOF=0;

  } 
?>
              <tr> 
                <td colspan="2" align="right" bgcolor="#EBEBEB"><font size="-2">Total:</font></td>
                <td bgcolor="#EBEBEB"><font size="-2"><?   echo $suma_facturas_indem;?>&euro;</font></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td colspan="2" valign="top">
            <form name="formsumatotal" method="post" action="">
              <div align="center">Suma total:
                <input name="SumaTotal" type="text" id="SumaTotal">
              </div>
            </form></td>
        </tr>
      </table>
      <script language="JavaScript" src="ValorPunto.js"></script>
      <script language="JavaScript">
function actualiza_datos() {
form1.ValorDiaImpeditivo.value=form1.ValorDiaImpeditivo.value.replace(',','.');
form1.ValorDiaNoImpeditivo.value=form1.ValorDiaNoImpeditivo.value.replace(',','.');
form1.ValorDiaHospitalizacion.value=form1.ValorDiaHospitalizacion.value.replace(',','.');
form1.ValorPuntoSecuela.value=form1.ValorPuntoSecuela.value.replace(',','.');
form1.ValorPuntoSecuelaEstetica.value=form1.ValorPuntoSecuelaEstetica.value.replace(',','.');
form1.Incapacidad.value=form1.Incapacidad.value.replace(',','.');
form1.total1.value=form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value;
form1.total2.value=form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value;
form1.total3.value=form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value;
form1.total4.value=form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value;
form1.TotalEstetica.value=form1.PuntosSecuelaEstetica.value*form1.ValorPuntoSecuelaEstetica.value;
//form1.total5.value=form1.FactorCorrector.value*(form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value+form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value+form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value+form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value)/100;
//form1.total6.value=Math.round(form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value+form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value+form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value+form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value+form1.FactorCorrectorValor.value);
if (form1.OFC[1].checked)
	form1.total5.value=form1.FactorCorrector.value*(form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value+form1.PuntosSecuelaEstetica.value*form1.ValorPuntoSecuelaEstetica.value)/100;
else if (form1.OFC[2].checked)
	form1.total5.value=form1.FactorCorrector.value*(form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value+form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value+form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value)/100;
else
	form1.total5.value=form1.FactorCorrector.value*(form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value+form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value+form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value+form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value+form1.PuntosSecuelaEstetica.value*form1.ValorPuntoSecuelaEstetica.value)/100;
//form1.total6.value=Math.round((form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value+form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value+form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value+form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value+form1.FactorCorrectorValor.value*1+form1.PuntosSecuelaEstetica.value*form1.ValorPuntoSecuelaEstetica.value)*100)/100;
form1.total6.value=Math.round(form1.total5.value*100)/100+form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value+form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value+form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value+form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value+form1.PuntosSecuelaEstetica.value*form1.ValorPuntoSecuelaEstetica.value+form1.Incapacidad.value*1;
formsumatotal.SumaTotal.value=Math.round(form1.total6.value*100+<?   echo $suma_facturas_indem*100;?>)/100;
}
form1.ValorDiaImpeditivo.value=form1.ValorDiaImpeditivo.value.replace(',','.');
form1.ValorDiaNoImpeditivo.value=form1.ValorDiaNoImpeditivo.value.replace(',','.');
form1.ValorDiaHospitalizacion.value=form1.ValorDiaHospitalizacion.value.replace(',','.');
form1.ValorPuntoSecuela.value=form1.ValorPuntoSecuela.value.replace(',','.');
form1.FactorCorrectorValor.value=form1.FactorCorrectorValor.value.replace(',','.');
form1.FactorCorrector.value=form1.FactorCorrector.value.replace(',','.');
form1.PuntosSecuela.value=form1.PuntosSecuela.value.replace(',','.');
actualiza_datos();
form1.total5.value=<?   if ((!($Siniestro->Fields$Item["FactorCorrectorValor"]$Value=="")))
  {
    print $Siniestro->Fields->$Item["FactorCorrectorValor"]->$Value;
  }
    else
  {
    print "0";
  } ?>;
      </script>
    Documentos: <a href="IndemnizacionFinal.asp?Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>" target="_blank">IndemnizacionFinal</a><a href="IndemnizacionFinal.asp?Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Excel=1" target="_blank"><img src="Imagenes/excel.gif" alt="Version para Excel" width="15" height="15" border="0"></a></td>
  </tr><? } ?>
</table>
<table width="100%" border="0" id="opcion5" class="imagen">
  <tr><td><iframe id="Notas" name="Notas" src="SiniestroNotas.asp?SiniestroId=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>" style="width:100%;height:500px" AllowTransparency frameborder="0" marginwidth="0"></iframe></td></tr>
</table>
<table border="0" id="opcion6" class="imagen"><tr><td>Correspondencia:</td></tr>
<tr><td><? if ((!($Cartas==0)))
{
?><table border="1" cellspacing="0">
  <tr bordercolor="#000000" bgcolor="#CCCCCC">
    <td>Fecha</td>
    <td>Origen</td>
    <td>Destino</td>
    <td>Contenido</td>
    <td>&nbsp;</td>
  </tr>
  <? 
  while((($Repeat6__numRows!=0) && (!($Cartas==0))))
  {

?>
  <tr bordercolor="#000000">
      <td><?     echo (->$Item["Fecha"]->$Value);?></td>
      <td><?     echo (->$Item["Origen"]->$Value);?></td>
      <td><?     echo (->$Item["Destino"]->$Value);?></td>
      <td><?     echo (->$Item["Contenido"]->$Value);?></td>
      <td><a href="CorrespondenciaModificar.asp?IdCarta=<?     echo (->$Item["Id"]->$Value);?>&Id=<?     echo ($Siniestro->Fields->$Item["Id"]->$Value);?>"><img src="Imagenes/pencil.gif" width="22" height="22" border="0"></a><a href="CorrespondenciaBorrar.asp?ID=<?     echo (->$Item["Id"]->$Value);?>"><img src="Imagenes/Borrar.gif" width="22" height="22" border="0"></a></td>
  </tr>
  <? 
    $Repeat6__index=$Repeat6__index+1;
    $Repeat6__numRows=$Repeat6__numRows-1;
    $Cartas=mysql_fetch_array($Cartas_query);
    $Cartas_BOF=0;

  } 
?>

</table>
<? } ?>
    <a href="CorrespondenciaInsertar.asp?ref=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>">Insertar carta</a></td>
</tr></table><table border="0" id="opcion7" class="imagen"><tr><td>Documentacion del cliente:</td></tr>
<tr><td><? if ((!($DocCliente==0)))
{
?><table width="100%" border="1" cellspacing="0">
  <tr bordercolor="#000000" bgcolor="#CCCCCC">
    <td>Nombre</td>
    <td>Fecha Entrada </td>
    <td>Fecha Salida </td>
    <td>Lugar</td>
    <td>&nbsp;</td>
  </tr>
  <? 
  while((($Repeat7__numRows!=0) && (!($DocCliente==0))))
  {

?>
    <tr bordercolor="#000000">
        <td><?     echo (->$Item["Texto"]->$Value);?></td>
      <td><?     echo (->$Item["Entrada"]->$Value);?></td>
      <td><?     echo (->$Item["Salida"]->$Value);?></td>
      <td><?     echo (->$Item["Lugar"]->$Value);?></td>
      <td><a href="DocClienteModificar.asp?Id=<?     echo (->$Item["Id"]->$Value);?>"><img src="Imagenes/pencil.gif" width="22" height="22" border="0"></a><a href="DocClienteBorrar.asp?Id=<?     echo (->$Item["Id"]->$Value);?>"><img src="Imagenes/Borrar.gif" width="22" height="22" border="0"></a></td>
    </tr>
    <? 
    $Repeat7__index=$Repeat7__index+1;
    $Repeat7__numRows=$Repeat7__numRows-1;
    $DocCliente=mysql_fetch_array($DocCliente_query);
    $DocCliente_BOF=0;

  } 
?>
</table>
<? } ?>
<a href="DocClienteInsertar.asp?Id=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>">Insertar documento</a></td>
</tr></table>
<script language="JavaScript">
window.document.all.elmenu.className="imagen";
muestra(1);
</script>
<? if (!($_GET["Capa"]==""))
{
?>
<script language="JavaScript">
muestra("<?   echo $_GET["Capa"];?>")
</script>
<? } ?>
<? $fs=null;
?>
</body>
</html>
<? 
$Siniestro->Close();
?>
<? 

$Contrarios=null;

?>
<? 

$Abonado=null;

?>
<? 

$Facturas=null;

?>
<? 

$Tramitador=null;

?>
<? 

$Profesionales=null;

?>
<? 

$AbogyProc=null;

?>
<? 

$Facturas2=null;

?>
<? 

$Fase=null;

?>
<? 

$Otros=null;

?>
<? 

$Cartas=null;

?>
<? 
//DocCliente.Close()
$DocCliente=null;

?>
<? 
//Aseguradora.Close()
$Aseguradora=null;

?>

