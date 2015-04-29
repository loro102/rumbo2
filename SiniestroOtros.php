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
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
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
echo "SELECT Facturas.*, Profesionales.Nombre, TipoProfesional.Texto  FROM Facturas, Profesionales, TipoProfesional  WHERE (Facturas.Siniestro = "+str_replace("'","''",$Facturas__MMColParam)+") and (Facturas.Valor=Profesionales.ID) and (Profesionales.Tipo=TipoProfesional.Id) and (not Facturas.Tabla=1) and (not Facturas.Tabla=7) and (not Facturas.Tabla=9)  ORDER BY Facturas.Fecha";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Facturas_numRows=0;
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
echo "SELECT Facturas.*, Profesionales.Nombre, TipoProfesional.Texto  FROM Facturas, Profesionales, TipoProfesional  WHERE (Facturas.Siniestro = "+str_replace("'","''",$AbogyProc__NroSiniestro)+") and (Facturas.Valor=Profesionales.ID) and (Profesionales.Tipo=TipoProfesional.Id) AND (Facturas.Tabla=1 or Facturas.Tabla=7 or Facturas.Tabla=9)  ORDER BY TipoProfesional.Id";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$AbogyProc_numRows=0;
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
$DocCliente__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $DocCliente__MMColParam=$_GET["Id"];
} 

?>
<? 

// $DocCliente_cmd is of type "ADODB.Command"
$DocCliente_cmd_ActiveConnection=$MM_connrumbo_STRING;
$DocCliente_cmd_CommandText="SELECT * FROM DocClientes WHERE SiniestroId = ? ORDER BY Fedoc ASC";
$DocCliente_cmd_Prepared=true;
$DocCliente_cmd_Parameters=$Append$DocCliente_cmd_CreateParameter="param1"$DocCliente__MMColParam); // adDouble

$DocCliente=$DocCliente_cmd_Execute=$DocCliente_numRows=0;;
?>
<? 
$Notas__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Notas__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Notas_cmd is of type "ADODB.Command"
$Notas_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Notas_cmd_CommandText="SELECT * FROM NotasSiniestro WHERE SiniestroId = ? ORDER BY fecha ASC";
$Notas_cmd_Prepared=true;
$Notas_cmd_Parameters=$Append$Notas_cmd_CreateParameter="param1"$Notas__MMColParam); // adDouble

$Notas=$Notas_cmd_Execute=$Notas_numRows=0;;
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

$Repeat6__numRows=-1;
$Repeat6__index=0;
$Notas_numRows=$Notas_numRows+$Repeat6__numRows;
?>
<? 

$Repeat5__numRows=-1;
$Repeat5__index=0;
$DocCliente_numRows=$DocCliente_numRows+$Repeat5__numRows;
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
//-->
</script>
<style>
  .imagenNO {display:none;}
  .imagen {display:block;}
</style>
</head>
<body bgcolor="#FFFFFF" text="#000000" topmargin="30" <? if (($Siniestro->Fields$Item["Expediente Cerrado"]$Value==true))
{
  print "background=\"Imagenes/ExpCerrado.gif\"";
}
  else
{
  print " background=\"Imagenes/fondo.gif\" bgproperties=\"fixed\"";
} ?>>
<!-- #BeginBehavior showTooltip1 -->
<div id="dHTMLToolTip" style="position: absolute; visibility: hidden; width:10; height: 10; z-index: 1000; left: 0; top: 0"></div>
<!-- #EndBehavior showTooltip1 -->
<script language="JavaScript">
function muestra(clase){
for (i=1;i<6;i++){
	if (clase == i)
		eval("window.document.all.opcion"+i+".className='imagen'");
	else
		eval("window.document.all.opcion"+i+".className='imagenNO'");
	}
}
</script>
<script language="JavaScript" src="funciones.js"></script>
<script language="JavaScript">
function menucelda(color,celda) {
eval('document.all.menucelda'+celda+'.bgColor=color');
}  
  </script>
<p><strong><em>
<? $_SESSION['Siniestro']=$Siniestro->Fields.$Item["Id"].$Value;
?>
<h3 align="left"> 
  <script language="JavaScript" src="menu.js"></script>
<table width="100%" border="1" align="center" cellspacing="0" bordercolor="#000000" bgcolor="#00cc00" style="cursor:hand" class="imagenNO" id="elmenu">
  <tr> 
    <td onClick="muestra(1);" id="menucelda1" onMouseOver="menucelda('#3399ff',1);" onMouseOut="menucelda('#00cc00',1);"><div align="center">Datos del siniestro</div></td>
<? if (!($Siniestro->Fields$Item["Tipo"]$Value==4))
{
?>    <td onClick="muestra(2);" id="menucelda2" onMouseOver="menucelda('#3399ff',2);" onMouseOut="menucelda('#00cc00',2);"><div align="center">Profesionales</div></td><? } ?>
    <td onClick="muestra(3);" id="menucelda3" onMouseOver="menucelda('#3399ff',3);" onMouseOut="menucelda('#00cc00',3);"><div align="center">Facturas</div></td>
    <td onClick="muestra(5);" id="menucelda5" onMouseOver="menucelda('#3399ff',5);" onMouseOut="menucelda('#00cc00',5);"><div align="center">Documentaci&oacute;n del cliente</div></td>
    <td onClick="muestra(4);" id="menucelda4" onMouseOver="menucelda('#3399ff',4);" onMouseOut="menucelda('#00cc00',4);"><div align="center">Notas</div></td>
  </tr>
</table>  
Fase: <? echo (->$Item["Texto"]->$Value);?></h3>

  <table width="100%" border="0" id="opcion1" class="imagen">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>Tramitador: <? echo (->$Item["Nombre"]->$Value);?></td>
          <td>Caso tipo: <? echo ($Siniestro->Fields->$Item["CasoTipo"]->$Value);?> Caso tipo cont: <? echo ($Siniestro->Fields->$Item["CasoTipo2"]->$Value);?></td>
          <td align="right">
            <? if (($Siniestro->Fields$Item["Laboral"]$Value==true))
{
?>
            Ac.Laboral
            <? } ?>          </td>
          <td align="right"><a href="ListadoDeDocumentos.asp?Siniestro=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Abonado=<? echo (->$Item["Id"]->$Value);?>" target="_blank"><img src="Imagenes/listadoc.JPG" alt="Modificar datos" width="22" height="22" border="0" align="middle"></a><a href="SiniestroOtrosActualizar.asp?Id=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>"><img src="Imagenes/pencil.gif" alt="Modificar datos" width="22" height="22" border="0" align="middle"></a>
              <? if ((($Facturas==0) && ($Profesionales==0) && ($AbogyProc==0)))
{
?>
              <a href="SiniestroBorrar.asp?SiniestroId=<?   echo $Siniestro->Fields->$Item["Id"]->$Value;?>"><img src="Imagenes/borrar.gif" alt="Borrar contrario" width="22" height="22" border="0" align="middle"></a>
              <? } ?>
          <a href="etiqueta.asp?Id=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>" target="_blank"><img src="Imagenes/etiqueta.jpg" alt="Etiqueta" width="22" height="22" border="0" align="middle"></a> </td>
        </tr>
      </table>
        <p><strong><em>Datos del abonado:</em></strong></p>
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
            <td><? if (($Siniestro->Fields$Item["Tipo"]$Value==6))
{
?>
              <a href="ContratoMulta.asp?Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&AbonadoId=<?   echo (->$Item["Id"]->$Value);?>" target="_blank">Contrato de recurso de multa</a>
            <? } ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        Notas:<br>
        <? echo ->$Item["Notas"]->$Value;?>
    <? //if not isnull(Abonado.Fields.Item("Notas").Value) then response.Write("Notas:<br>"&replace(Abonado.Fields.Item("Notas").Value,VBcrlf,"<br>")) ?>
        <h1>Datos:<? if (($Siniestro->Fields$Item["Tipo"]$Value==2))
{
?>
  <em>Consulta de abogado</em>
<? }
  else
if (($Siniestro->Fields$Item["Tipo"]$Value==4))
{
?>
<em>Remitido a otra oficina:<?   echo ($Siniestro->Fields->$Item["TipoTexto"]->$Value);?></em>
<? }
  else
if (($Siniestro->Fields$Item["Tipo"]$Value==5))
{
?>
<em>Servicios a cliente de otra oficina:<?   echo ($Siniestro->Fields->$Item["TipoTexto"]->$Value);?></em>
<? }
  else
if (($Siniestro->Fields$Item["Tipo"]$Value==6))
{
?>
<em>Recurso de multa:<?   echo ($Siniestro->Fields->$Item["TipoTexto"]->$Value);?></em>
<? }
  else
{
?>
<em><?   echo ($Siniestro->Fields->$Item["TipoTexto"]->$Value);?></em>
<? } ?></h1>
        
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Fecha de apertura:<? echo ($Siniestro->Fields->$Item["FechaAperturaExpediente"]->$Value);?></td>
    <td>Fecha de cierre:<? echo ($Siniestro->Fields->$Item["FechaCierreExpediente"]->$Value);?></td>
  </tr>
<? if (!($Siniestro->Fields$Item["Tipo"]$Value==4))
{
?>  <tr>
    <td colspan="2">Asistencia Jurídica: <?   if (($Siniestro->Fields$Item["AsistenciaJuridica"]$Value==true))
  {
?>Si - Fecha de presentaci&oacute;n: <?     echo ($Siniestro->Fields->$Item["FechaEntregaAJ"]->$Value);?><?   }
    else
  {
?>No<?   } ?></td>
  </tr>
  <tr>
    <td colspan="2"><p><strong>Descripcion:</strong><br>
          <?   echo ($Siniestro->Fields->$Item["OtrosDescripcion"]->$Value);?></p>
        <p><strong>Contrario:</strong><br>
        <?   echo ($Siniestro->Fields->$Item["OtrosContrario"]->$Value);?></p></td>
    </tr><? } ?>
</table>    </td>
  </tr>
</table>
</em></strong>
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
            <a href="AutorizacionCompromisoDePago2.asp?Siniestro=<?     echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Abonado=<?     echo (->$Item["Id"]->$Value);?>&Profesional=<?     echo (->$Item["ProfesinalesId"]->$Value);?>&Doc=<?     echo (->$Item["AutorizacionCompromiso"]->$Value);?>" target="_blank"><img src="Imagenes/AutComp.jpg" alt="Autorizacion y Compromiso de pago" width="22" height="22" border="0"></a> 
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
        <tr bgcolor="#CCCCCC"> 
          <td>Profesional</td>
          <td>Descripcion</td>
          <td>Cuantia Factura</td>
          <td>Cuantia Abonado</td>
          <td>Cuantia rumbo</td>
          <td> </td>
        </tr>
        <? 
  $total1=0;
  $total2=0;
  $total3=0;
  while((($Repeat2__numRows!=0) && (!($Facturas==0))))
  {

?>
        <tr onMouseOver="showTooltip('dHTMLToolTip',event, 'Nro%20de%20Factura:<?     echo (->$Item["Nro Factura"]->$Value);?>%3Cbr%3EFecha:<?     echo (->$Item["Fecha"]->$Value);?>%3Cbr%3ENotas de pago:<?     echo (->$Item["NroPagare"]->$Value);?>%3Cbr%3ENotas:<?     echo (->$Item["Notas"]->$Value);?>', '#ffff99','#000000','#000000','6000')" onMouseOut="hideTooltip('dHTMLToolTip')"  <?     if (($Item["FormaPago"]==1))
    {
      print "bgcolor=\"#FF0000\"";
    } ?>> 
          <td><?     echo (->$Item["Nombre"]->$Value);?>(<?     echo (->$Item["Texto"]->$Value);?>)</td>
          <td><?     echo (->$Item["Descripcion"]->$Value);?>
            <?     if (($Item["FaltaOriginal"]$Value==true))
    {
?>
            <img src="Imagenes/alerta.gif" alt="Falta la factura original" width="19" height="19">
          <?     } ?>            &nbsp;</td>
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
    } ?>><?     echo (->$Item["ValorReal"]->$Value);?>&euro;</td>
          <td><a href="FacturaModificar.asp?FacturaId=<?     echo ->$Item["Id"]->$Value;?>&Id=<?     echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Capa=3"><img src="Imagenes/pencil.gif" alt="Modificar datos" width="22" height="22" border="0" align="middle"></a><a href="FacturasBorrar.asp?FacturaId=<?     echo ->$Item["Id"]->$Value;?>&Capa=3"><img src="Imagenes/Borrar.gif" alt="Borrar factura" width="22" height="22" border="0" align="middle"></a></td>
        </tr>
        <? 
    if (!($Item["Cuantia rumbo"]$Value==""))
    {
      $total1=$total1+->$Item["Cuantia rumbo"]->$Value;
    } 
    if (!($total2==$total2+$Item["Cuantia Abonado"]$Value==""))
    {
      $total2=$total2+->$Item["Cuantia Abonado"]->$Value;
    } 
    if (!($total3==$total3+$Item["ValorReal"]$Value==""))
    {

      $total3=$total3+->$Item["ValorReal"]->$Value;
      if (($Item["SumarIVABeneficio"]==true))
      {
        $total3=$total3-((->$Item["Cuantia rumbo"]->$Value-->$Item["ValorReal"]->$Value)*0.21);
      } 
      if (($Item["RestarIVABeneficio"]==true))
      {
        $total3=$total3+((->$Item["Cuantia rumbo"]->$Value-->$Item["ValorReal"]->$Value)*21/121);
      } 
    } 

    $Repeat2__index=$Repeat2__index+1;
    $Repeat2__numRows=$Repeat2__numRows-1;
    $Facturas=mysql_fetch_array($Facturas_query);
    $Facturas_BOF=0;

  } 
?>
        <tr> 
          <td colspan="2" bgcolor="#CCCCCC"><div align="right">Total:</div></td>
          <td bgcolor="#CCCCCC"><?   echo $total1;?>&euro;</td>
          <td bgcolor="#CCCCCC"><?   echo $total2;?>&euro;</td>
          <td bgcolor="#CCCCCC"><?   echo $total3;?>&euro;</td>
        </tr>
        <? 
  while((($Repeat4__numRows!=0) && (!($AbogyProc==0))))
  {

?>
        <tr  onMouseOver="showTooltip('dHTMLToolTip',event, 'Nro%20de%20Factura:<?     echo (->$Item["Nro Factura"]->$Value);?>%3Cbr%3EFecha:<?     echo (->$Item["Fecha"]->$Value);?>%3Cbr%3EForma de pago:<?     echo (->$Item["FormaPago"]->$Value);?>%3Cbr%3ENotas de pago:<?     echo (->$Item["NroPagare"]->$Value);?>%3Cbr%3ENotas:<?     echo (->$Item["Notas"]->$Value);?>', '#ffff99','#000000','#000000','6000')" onMouseOut="hideTooltip('dHTMLToolTip')" <?     if (($Item["FormaPago"]==1))
    {
      print "bgcolor=\"#FF0000\"";
    } ?>> 
          <td><?     echo (->$Item["Nombre"]->$Value);?>(<?     echo (->$Item["Texto"]->$Value);?>)</td>
          <td><?     echo (->$Item["Descripcion"]->$Value);?>&nbsp;</td>
          <td><?     echo (->$Item["Cuantia rumbo"]->$Value);?>&euro;</td>
          <td><?     echo (->$Item["Cuantia Abonado"]->$Value);?>&euro;</td>
          <td><?     echo (->$Item["ValorReal"]->$Value);?>&euro;</td>
          <td bgcolor="#FFFFFF"><a href="FacturaModificar.asp?FacturaId=<?     echo ->$Item["Id"]->$Value;?>&Id=<?     echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Capa=3"><img src="Imagenes/pencil.gif" alt="Modificar datos" width="22" height="22" border="0" align="middle"></a><a href="FacturasBorrar.asp?FacturaId=<?     echo ->$Item["Id"]->$Value;?>&Capa=3"><img src="Imagenes/Borrar.gif" alt="Borrar factura" width="22" height="22" border="0" align="middle"></a></td>
        </tr>
        <? 
    if (!($Item["Cuantia rumbo"]$Value==""))
    {
      $total1=$total1+->$Item["Cuantia rumbo"]->$Value;
    } 
    if (!($total2==$total2+$Item["Cuantia Abonado"]$Value==""))
    {
      $total2=$total2+->$Item["Cuantia Abonado"]->$Value;
    } 
    if (!($total3==$total3+$Item["ValorReal"]$Value==""))
    {

      $total3=$total3+->$Item["ValorReal"]->$Value;
      if (($Item["SumarIVABeneficio"]==true))
      {
        $total3=$total3-((->$Item["Cuantia rumbo"]->$Value-->$Item["ValorReal"]->$Value)*0.21);
      } 
      if (($Item["RestarIVABeneficio"]==true))
      {
        $total3=$total3+((->$Item["Cuantia rumbo"]->$Value-->$Item["ValorReal"]->$Value)*21/121);
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
          <td bgcolor="#CCCCCC"><?     echo $total3;?>&euro;</td>
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
        <tr> 
          <td colspan="2"><div align="right">Beneficio:</div></td>
          <td colspan="2"><?   echo round($total1-$total2-$total3,2);?>&euro;</td>
        </tr>

      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><a href="FacturaInsertar.asp?Id=<?   echo ($Siniestro->Fields->$Item["Id"]->$Value);?>&Tipo=6&Profesional=Otros&Capa=3" name="link3" id="link1">Insertar 
            factura</a></td>
          <td width="300"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
        Beneficio rumbo: <strong><?   echo ($Siniestro->Fields->$Item["Percivido"]->$Value);?>&euro;</strong><br>
        <!----Indemnizacion sin facturas: <strong><?   echo ($Siniestro->Fields->$Item["IndemnizacionReal"]->$Value);?>&euro;</strong><br>---->
        Pago al agente: <strong><?   echo ($Siniestro->Fields->$Item["PagoAgente"]->$Value);?>&euro;</strong><br>
        Deuda: <strong><?   echo ($Siniestro->Fields->$Item["Deuda"]->$Value);?>&euro;</strong></p>
    </td>
  </tr><? } ?>
</table>
<table width="100%" border="0" id="opcion4" class="imagen">
<tr><td><iframe id="Notas" name="Notas" src="SiniestroNotas.asp?SiniestroId=<? echo ($Siniestro->Fields->$Item["Id"]->$Value);?>" style="width:1000px;height:500px" AllowTransparency frameborder="0" marginwidth="0"></iframe></td></tr>
</table><table border="0" id="opcion5" class="imagen"><tr><td>Documentacion del cliente:</td></tr>
<tr><td><? if ((!$DocCliente->EOF))
{
?><table width="100%" border="1" cellspacing="0">
  <tr bordercolor="#000000" bgcolor="#CCCCCC">
    <td>Fecha Documento</td>
    <td>Nombre</td>
    <td>Remitente</td>
    <td>Destinatario</td>
    <td>Fecha Entrada </td>
    <td>Fecha Salida </td>
    <td>Lugar</td>
    <td>&nbsp;</td>
  </tr>
  <? 
  while((($Repeat5__numRows!=0) && (!$DocCliente->EOF)))
  {

?>
    <tr bordercolor="#000000">
      <td><?     echo ($DocCliente->Fields->$Item["Fedoc"]->$Value);?></td>
      <td><?     echo ($DocCliente->Fields->$Item["Texto"]->$Value);?></td>
      <td><?     echo ($DocCliente->Fields->$Item["Remitente"]->$Value);?></td>
      <td><?     echo ($DocCliente->Fields->$Item["Destinatario"]->$Value);?></td>
      <td><?     echo ($DocCliente->Fields->$Item["Entrada"]->$Value);?></td>
      <td><?     echo ($DocCliente->Fields->$Item["Salida"]->$Value);?></td>
      <td><?     echo ($DocCliente->Fields->$Item["Lugar"]->$Value);?></td>
      <td><a href="DocClienteModificar.asp?Id=<?     echo ($DocCliente->Fields->$Item["Id"]->$Value);?>"><img src="Imagenes/pencil.gif" width="22" height="22" border="0"></a><a href="DocClienteBorrar.asp?Id=<?     echo ($DocCliente->Fields->$Item["Id"]->$Value);?>"><img src="Imagenes/Borrar.gif" width="22" height="22" border="0"></a></td>
    </tr>
    <? 
    $Repeat5__index=$Repeat5__index+1;
    $Repeat5__numRows=$Repeat5__numRows-1;
    $DocCliente->MoveNext();
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
<? } ?></body>
</html>
<? 
$Siniestro->Close();
?>
<? 

$Abonado=null;

?>
<? 

$Facturas=null;

?>
<? 

$Profesionales=null;

?>
<? 

$AbogyProc=null;

?>
<? 

$Fase=null;

?>
<? 

$Tramitador=null;

?>
<? 
$DocCliente->Close();
$DocCliente=null;

?>
<? 
$Notas->Close();
$Notas=null;

?>

