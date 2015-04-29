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
<? $ocultar=$not[$_SERVER["REMOTE_ADDR"]=="192.168.1.4"];?>
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
// $Siniestro is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Siniestro WHERE Id = "+str_replace("'","''",$Siniestro__MMColParam)+"";
echo 0;
echo 2;
echo 3;
$rs=mysql_query();
$Siniestro_numRows=0;
?>
<? if ((!$Item["Tipo"]$Value=="1"))
{

  $cad="SiniestroOtros.asp?Id=".->$Item["Id"]->$Value;
  
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
echo "SELECT * FROM Contrarios WHERE Siniestro = "+str_replace("'","''",$Contrarios__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Contrarios_numRows=0;
?>
<? 
$Abonado__MMColParam="1";
if ((($Item["Abonado"]$Value)!=""))
{

  $Abonado__MMColParam=(->$Item["Abonado"]->$Value);
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
if ((($Item["Tramitador"]$Value)!=""))
{

  $Tramitador__MMColParam=(->$Item["Tramitador"]->$Value);
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
echo "SELECT SiniestroProfesional.*, Profesionales.Nombre, TipoProfesional.Texto, TipoProfesional.AutorizacionCompromiso,Profesionales.Ext1,Profesionales.Tipo  FROM SiniestroProfesional, Profesionales, TipoProfesional  WHERE SiniestroProfesional.Siniestro="+str_replace("'","''",$Profesionales__DSiniestro)+" and SiniestroProfesional.Profesional=Profesionales.Id and Profesionales.Tipo=TipoProfesional.Id  ORDER BY TipoProfesional.Texto";
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
<body bgcolor="#FFFFFF" text="#000000" topmargin="30" <? if (($Item["Expediente Cerrado"]$Value==true))
{
  print "background=\"Imagenes/ExpCerrado.gif\"";
}
  else
{
  print " background=\"Imagenes/fondo.gif\" bgproperties=\"fixed\"";
} ?>>
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
<!-- #BeginBehavior showTooltip1 -->
<div id="dHTMLToolTip" style="position: absolute; visibility: hidden; width:10; height: 10; z-index: 1000; left: 0; top: 0"></div>
<!-- #EndBehavior showTooltip1 -->
  <script language="JavaScript" src="menu.js"></script>
  <script language="JavaScript">
function menucelda(color,celda) {
eval('document.all.menucelda'+celda+'.bgColor=color');
}  
  </script>
<table width="100%" border="1" align="center" cellspacing="0" bordercolor="#000000" bgcolor="#FF6600" style="cursor:hand">
  <tr> 
    <td onClick="muestra(1);" id="menucelda1" onMouseOver="menucelda('#CC9900',1);" onMouseOut="menucelda('#FF6600',1);"><div align="center">Datos del siniestro</div></td>
    <td onClick="muestra(2);" id="menucelda2" onMouseOver="menucelda('#CC9900',2);" onMouseOut="menucelda('#FF6600',2);"><div align="center">Profesionales</div></td>
    <td onClick="muestra(3);" id="menucelda3" onMouseOver="menucelda('#CC9900',3);" onMouseOut="menucelda('#FF6600',3);"><div align="center">Facturas</div></td>
    <td onClick="muestra(4);" id="menucelda4" onMouseOver="menucelda('#CC9900',4);" onMouseOut="menucelda('#FF6600',4);"><div align="center">Indemnizacion Final</div></td>
    <td onClick="muestra(5);" id="menucelda5" onMouseOver="menucelda('#CC9900',5);" onMouseOut="menucelda('#FF6600',5);"><div align="center">Notas</div></td>
  </tr>
</table>

<p><strong><em> 
  <? $_SESSION['Siniestro']=.$Item["Id"].$Value;
?>
  </em></strong></p>
<table width="100%" border="0" id="opcion1" class="imagen">
  <tr>
    <td><p><strong><em>Datos del abonado:</em></strong></p>
      <table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
        <tr> 
          <td colspan="3"><strong>Nombre: <a href="Cliente.asp?NoSalto=1&<? echo $MM_keepNone.MM_joinChar($MM_keepNone)."Id=".->$Item["Abonado"]->$Value;?>"><? echo (->$Item["Nombre"]->$Value);?>&nbsp;<? echo (->$Item["Apellido1"]->$Value);?>&nbsp;<? echo (->$Item["Apellido2"]->$Value);?></a></strong></td>
          <td>NIF: <? echo (->$Item["NIF"]->$Value);?></td>
          <td>F.Nacimiento:<? echo (->$Item["FechaNacimiento"]->$Value);?></td>
          <td><a href="ClienteActualizar.asp?Id=<? echo (->$Item["Abonado"]->$Value);?>"><img src="Imagenes/pencil.gif" alt="Modificar datos" width="22" height="22" border="0" align="middle"></a><a href="etiqueta.asp?Id=<? echo (->$Item["Id"]->$Value);?>" target="_blank"><img src="Imagenes/etiqueta.jpg" alt="Etiqueta" width="22" height="22" border="0" align="middle"></a></td>
        </tr>
        <tr> 
          <td colspan="6"><p>Direccion:<br>
              &nbsp;&nbsp;&nbsp;<? echo (->$Item["Direccion"]->$Value);?><br>
              &nbsp;&nbsp;&nbsp;&nbsp;<? echo (->$Item["Codigo Postal"]->$Value);?>&nbsp;<? echo (->$Item["Localidad"]->$Value);?>&nbsp;(&nbsp;<? echo (->$Item["Provincia"]->$Value);?>&nbsp;)</p></td>
        </tr>
        <tr> 
          <td>Telefono 1: <? echo (->$Item["Telefono 1"]->$Value);?></td>
          <td>Telefono 2: <? echo (->$Item["Telefono 2"]->$Value);?></td>
          <td>Telefono 3: <? echo (->$Item["Telefono 3"]->$Value);?></td>
          <td colspan="3">Email: <? echo (->$Item["Email"]->$Value);?></td>
        </tr>
        <tr> 
          <td colspan="2">Agente:<? echo (->$Item["ANombre"]->$Value);?></td>
          <td colspan="4">Colectivo:<? echo (->$Item["Colectivo"]->$Value);?></td>
        </tr>
      </table>
      <table width="100%" border="0">
        <tr> 
          <td><? if (($Item["ModeloContrato"]$Value>3))
{
?><a href="ContratoImprimirSalida.asp?Id=<?   echo (->$Item["Abonado"]->$Value);?>" target="_blank">Imprimir contrato de abonado</a><? } ?>&nbsp;</td>
          <td><a href="ContratoAbonadoPrestacionDeServicios2.asp?Nombre=<? echo (->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value);?>&FechaSiniestro=<? echo (->$Item["Fecha Siniestro"]->$Value);?>&Direccion=<? echo (->$Item["Direccion"]->$Value);?>&Localidad=<? echo (->$Item["Localidad"]->$Value);?>&NIF=<? echo (->$Item["NIF"]->$Value);?>&FechaApertura=<? echo (->$Item["FechaAperturaExpediente"]->$Value);?>" target="_blank">Imprimir 
            contrato de prestacion de servicios para abonado</a></td>
          <td><a href="ContratoPrestacionDeServicios.asp?Nombre=<? echo (->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value);?>&FechaSiniestro=<? echo (->$Item["Fecha Siniestro"]->$Value);?>&Direccion=<? echo (->$Item["Direccion"]->$Value);?>&Localidad=<? echo (->$Item["Localidad"]->$Value);?>&NIF=<? echo (->$Item["NIF"]->$Value);?>&FechaApertura=<? echo (->$Item["FechaAperturaExpediente"]->$Value);?>" target="_blank">Imprimir 
            contrato de prestacion de servicios</a></td>
        </tr>
      </table>
      Notas:<br> <? echo ->$Item["Notas"]->$Value;?> 
      <? //if not isnull(Abonado.Fields.Item("Notas").Value) then response.Write("Notas:<br>"&replace(Abonado.Fields.Item("Notas").Value,VBcrlf,"<br>")) ?>
      <p><strong><em>Datos del siniestro:</em></strong></p>
      <? if (($Item["Representado"]$Value==true))
{
?>
      <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr> 
          <td><strong>Datos del siniestrado:</strong><br>
            Nombre: <?   echo (->$Item["Nombre"]->$Value);?><br>
            DNI: <?   echo (->$Item["DNIRepresentado"]->$Value);?><br>
            Fecha de nacimiento: <?   echo (->$Item["FechaNacRepresentado"]->$Value);?></td>
        </tr>
      </table>
      <br> 
      <? } ?>
      <table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
        <tr> 
          <td colspan="3"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td>Tramitador: <? echo (->$Item["Nombre"]->$Value);?></td>
                <td align="right">
                  <? if (($Item["Laboral"]$Value==true))
{
?>
                  Ac.Laboral 
                  <? } ?>
                </td>
                <td align="right"><a href="SiniestroActualizar.asp?Id=<? echo (->$Item["Id"]->$Value);?>"><img src="Imagenes/pencil.gif" alt="Modificar datos" width="22" height="22" border="0" align="middle"></a><a href="SiniestroBorrar.asp?SiniestroId=<? echo ->$Item["Id"]->$Value;?>"><img src="Imagenes/borrar.gif" alt="Borrar contrario" width="22" height="22" border="0" align="middle"></a></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td colspan="2">Fecha de apertura del expediente:<strong><? echo (->$Item["FechaAperturaExpediente"]->$Value);?></strong></td>
          <td>Fecha del cierre del expediente:<strong><? echo (->$Item["FechaCierreExpediente"]->$Value);?></strong></td>
        </tr>
        <tr> 
          <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td>Fecha Siniestro: <strong><? echo (->$Item["Fecha Siniestro"]->$Value);?></strong></td>
                <td>
                  <? if (($dateadd["M"][5][(->$Item["Fecha Siniestro"]->$Value)]>strftime("%m/%d/%y %H:%M:%S %p")))
{
?>
                  <div align="right"><a href="AgendaInsertar.asp?Fecha=<?   echo $dateadd["M"][5][(->$Item["Fecha Siniestro"]->$Value)];?>&Texto=Fin de procedimiento civil de <?   echo (->$Item["Nombre"]->$Value)+" "+(->$Item["Apellido1"]->$Value)+" "+(->$Item["Apellido2"]->$Value);?>"><img src="Imagenes/bell.gif" alt="A&ntilde;adir alerta para fecha del fin de procedimiento civil" width="18" height="19" border="0"></a></div>
                  <? } ?>
                </td>
              </tr>
            </table>
            Hora Siniestro: <? echo (->$Item["Hora Siniestro"]->$Value);?></td>
          <td>Fecha Baja Medica:<? echo (->$Item["Fecha Baja"]->$Value);?><br>
            Fecha Alta Medica:<? echo (->$Item["Fecha Alta"]->$Value);?></td>
        </tr>
        <tr> 
          <td colspan="3">Desarrollo del accidente: <? echo (->$Item["Desarrollo accidente"]->$Value);?><br> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td valign="top">Lugar: <? echo (->$Item["Lugar"]->$Value);?><br>
                  Localidad: <? echo (->$Item["Localidad"]->$Value);?></td>
                <td valign="top">Circustancias: <? echo (->$Item["Circunstacias"]->$Value);?></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td colspan="2">Da&ntilde;os del vehiculo:<? echo (->$Item["Daños Vehiculo"]->$Value);?></td>
          <td>Condici&oacute;n:<? echo (->$Item["Condicion"]->$Value);?></td>
        </tr>
        <tr> 
          <td colspan="3">Da&ntilde;os Personales:<? echo (->$Item["Daños Personales"]->$Value);?></td>
        </tr>
        <tr> 
          <td>N&uacute;mero de procedimiento:<? echo (->$Item["NroProcedimiento"]->$Value);?><br>
            Dirigencas previas:<? echo (->$Item["DiligenciasPrevias"]->$Value);?></td>
          <td>Asistencia Juridica: 
            <? if (($Item["AsistenciaJuridica"]$Value==true))
{
  print "Si";
}
  else
{
  print "No";
} ?>
          </td>
          <td>Cuantia:<? echo (->$Item["CuantiaAsistenciaJuridica"]->$Value);?></td>
        </tr>
        <tr> 
          <td colspan="3">Firma carta abogado: 
            <? if (($Item["Firma carta abogado procurador"]$Value==true))
{
  print "Si";
} ?>
          </td>
        </tr>
        <tr> 
          <td colspan="3">Presentada Denuncia: 
            <? if (($Item["PresentadaDenuncia"]$Value==true))
{
  print "Si";
}
  else
{
  print "No";
} ?>
          </td>
        </tr>
      </table>
      <a href="SiniestroActualizar.asp?Id=<? echo (->$Item["Id"]->$Value);?>">Modificar 
      datos</a><br> <p><strong><em>Datos del vehiculo:</em></strong></p>
      <table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
        <tr> 
          <td>Vehiculo:<? echo (->$Item["Vehiculo"]->$Value);?></td>
          <td>Matricula:<? echo (->$Item["Matricula"]->$Value);?></td>
        </tr>
        <tr> 
          <td colspan="2">Conductor:<? echo (->$Item["Conductor"]->$Value);?></td>
        </tr>
        <tr> 
          <td colspan="2">Tomador:<? echo (->$Item["Tomador"]->$Value);?></td>
        </tr>
        <tr> 
          <td>Nro Poliza.<? echo (->$Item["Nro Poliza"]->$Value);?></td>
          <td>Ref Expediante.<? echo (->$Item["RefExpediente"]->$Value);?></td>
        </tr>
        <tr> 
          <td colspan="2">Compa&ntilde;ia:<? echo (->$Item["Compañia"]->$Value);?></td>
        </tr>
        <tr> 
          <td>Fecha Poliza:<? echo (->$Item["Fecha poliza"]->$Value);?></td>
          <td>Fin Poliza:<? echo (->$Item["Fin poliza"]->$Value);?></td>
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
                      <td><strong>Nombre: <a href="ContrarioModificar.asp?IdContrario=<?   echo ->$Item["Id"]->$Value;?>&Id=<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido1"]->$Value);?>&nbsp;<?   echo (->$Item["Apellido2"]->$Value);?></a></strong></td>
                      <td> <div align="right"><a href="ContrarioBorrar.asp?Id=<?   echo ->$Item["Id"]->$Value;?>"><img src="Imagenes/borrar.gif" alt="Borrar contrario" width="22" height="22" border="0" align="middle"></a></div></td>
                    </tr>
                  </table></td>
              </tr>
              <tr> 
                <td colspan="4">Direccion:<br> &nbsp;&nbsp;&nbsp;&nbsp; <?   echo (->$Item["Direccion"]->$Value);?><br> 
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
            </table>
            </td>
        </tr>
        <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Contrarios=mysql_fetch_array($Contrarios_query);
  $Contrarios_BOF=0;

} 
?>
      </table>
      <p><a href="ContrarioInsertar.asp?Id=<? echo (->$Item["Id"]->$Value);?>">Insertar 
        contrario</a></p>
</td>
  </tr>
</table>
<table width="100%" border="0" id="opcion2" class="imagenNO">
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
          <td width="100"><a href="SiniestroProfesionalModificar.asp?Id=<?   echo (->$Item["Id"]->$Value);?>&SPId=<?   echo (->$Item["ID"]->$Value);?>"><img src="Imagenes/pencil.gif" width="22" height="22" border="0"></a><a href="SiniestroProfesionalBorrar.asp?Id=<?   echo (->$Item["Id"]->$Value);?>&SPId=<?   echo (->$Item["ID"]->$Value);?>"><img src="Imagenes/Borrar.gif" width="22" height="22" border="0"></a> 
            <?   if (!($Item["AutorizacionCompromiso"]$Value==""))
  {
?>
            <a href="AutorizacionCompromisoDePago.asp?Doc=<?     echo ->$Item["AutorizacionCompromiso"]->$Value;?>&Nombre=<?     echo ->$Item["Nombre"]->$Value;?>%A0<?     echo ->$Item["Apellido1"]->$Value;?>%A0<?     echo ->$Item["Apellido2"]->$Value;?>&FechaSiniestro=<?     echo ->$Item["Fecha Siniestro"]->$Value;?>&Nif=<?     echo ->$Item["NIF"]->$Value;?>&Clinica=<?     echo (->$Item["Nombre"]->$Value);?>" target="_blank"><img src="Imagenes/AutComp.jpg" alt="Autorizacion y Compromiso de pago" width="22" height="22" border="0"></a> 
            <?   } ?>
            <?   if ((($Item["Tipo"]$Value=="6") && (!$Item["Ext1"]$Value=="")))
  {
?>
            <a href="AutorizacionCompromisoDePago.asp?Doc=<?     echo ->$Item["Ext1"]->$Value;?>&Nombre=<?     echo ->$Item["Nombre"]->$Value;?>%A0<?     echo ->$Item["Apellido1"]->$Value;?>%A0<?     echo ->$Item["Apellido2"]->$Value;?>&FechaSiniestro=<?     echo ->$Item["Fecha Siniestro"]->$Value;?>&Nif=<?     echo ->$Item["NIF"]->$Value;?>&Clinica=<?     echo (->$Item["Nombre"]->$Value);?>" target="_blank"><img src="Imagenes/AutComp.jpg" alt="Autorizacion y Compromiso de pago" width="22" height="22" border="0"></a> 
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
            <a href="SolicitudAbogadoProcurador.asp?AbonadoId=<?     echo (->$Item["Abonado"]->$Value);?>&SiniestroId=<?     echo (->$Item["Id"]->$Value);?>" target="_blank"><img src="Imagenes/AutComp.jpg" alt="Solicitud abogado y procurador" width="22" height="22" border="0"></a> 
            <?   } ?>
            <a href="FacturaInsertar.asp?Id=<?   echo (->$Item["Id"]->$Value);?>&Tipo=<?   echo (->$Item["Tipo"]->$Value);?>&Profesional=<?   echo (->$Item["Nombre"]->$Value);?>"><img src="Imagenes/facturas.jpg" alt="Insertar factura" width="22" height="22" border="0"></a></td>
        </tr>
        <? 
  $Repeat3__index=$Repeat3__index+1;
  $Repeat3__numRows=$Repeat3__numRows-1;
  $Profesionales=mysql_fetch_array($Profesionales_query);
  $Profesionales_BOF=0;

} 
?>
      </table>
      <br> <a href="SiniestroProfesionalInsertar.asp?Id=<? echo (->$Item["Id"]->$Value);?>&Tipo=1">Insertar 
      profesional</a></td>
  </tr>
</table>
<table width="100%" border="0" id="opcion3" class="imagenNO">
  <tr>
    <td>      <p><strong><em>Facturas</em></strong>:</p>
      <table width="100%" border="1" cellspacing="0" bordercolor="#000000">
        <tr bgcolor="#CCCCCC"> 
          <td>Profesional</td>
          <td>Descripcion</td>
          <td>Cuantia Facura</td>
          <td>Cuantia Abonado</td>
          <? if ($ocultar)
{
?>
          <td>Cuantia rumbo</td>
          <? } ?>
          <td> </td>
        </tr>
        <? 
$total1=0;
$total2=0;
$total3=0;
while((($Repeat2__numRows!=0) && (!($Facturas==0))))
{

?>
        <tr onMouseOver="showTooltip('dHTMLToolTip',event, 'Nro%20de%20Factura:<?   echo (->$Item["Nro Factura"]->$Value);?>%3Cbr%3EFecha:<?   echo (->$Item["Fecha"]->$Value);?>%3Cbr%3EForma de pago:<?   echo (->$Item["FormaDePago"]->$Value);?>%3Cbr%3ENotas de pago:<?   echo (->$Item["NroPagare"]->$Value);?>%3Cbr%3ENotas:<?   echo (->$Item["Notas"]->$Value);?>', '#ffff99','#000000','#000000','6000')" onMouseOut="hideTooltip('dHTMLToolTip')"  <?   if (($Item["FormaPago"]==1))
  {
    print "bgcolor=\"#FF0000\"";
  } ?>> 
          <td><?   echo (->$Item["Nombre"]->$Value);?>(<?   echo (->$Item["Texto"]->$Value);?>)</td>
          <td><?   echo (->$Item["Descripcion"]->$Value);?>&nbsp;</td>
          <td <?   if (($Item["ReclamadaCompania"]==true))
  {
    print "bgcolor=\"#FFCC00\"";
  }
    else
  {
    if (($Item["Pagado"]==true))
    {
      print "bgcolor=\"#00FF00\"";
    } 
  } ?>><?   echo (->$Item["Cuantia rumbo"]->$Value);?>&euro;</td>
          <td <?   if (($Item["ReclamadaCompania"]==true))
  {
    print "bgcolor=\"#FFCC00\"";
  }
    else
  {
    if (($Item["Pagado"]==true))
    {
      print "bgcolor=\"#00FF00\"";
    } 
  } ?>><?   echo (->$Item["Cuantia Abonado"]->$Value);?>&euro;</td>
          <?   if ($ocultar)
  {
?>
          <td <?     if (($Item["ReclamadaCompania"]==true))
    {
      print "bgcolor=\"#FFCC00\"";
    }
      else
    {
      if (($Item["Pagado"]==true))
      {
        print "bgcolor=\"#E00FF00\"";
      } 
    } ?>><?     echo (->$Item["ValorReal"]->$Value);?>&euro;</td>
          <?   } ?>
          <td><a href="FacturaModificar.asp?FacturaId=<?   echo ->$Item["Id"]->$Value;?>&Id=<?   echo (->$Item["Id"]->$Value);?>"><img src="Imagenes/pencil.gif" alt="Modificar datos" width="22" height="22" border="0" align="middle"></a><a href="FacturasBorrar.asp?FacturaId=<?   echo ->$Item["Id"]->$Value;?>"><img src="Imagenes/Borrar.gif" alt="Borrar factura" width="22" height="22" border="0" align="middle"></a></td>
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
  } 
  $Repeat2__index=$Repeat2__index+1;
  $Repeat2__numRows=$Repeat2__numRows-1;
  $Facturas=mysql_fetch_array($Facturas_query);
  $Facturas_BOF=0;

} 
?>
        <tr> 
          <td colspan="2" bgcolor="#CCCCCC"><div align="right">Total:</div></td>
          <td bgcolor="#CCCCCC"><? echo $total1;?>&euro;</td>
          <td bgcolor="#CCCCCC"><? echo $total2;?>&euro;</td>
          <? if ($ocultar)
{
?>
          <td bgcolor="#CCCCCC"><?   echo $total3;?>&euro;</td>
          <? } ?>
        </tr>
        <? 
while((($Repeat4__numRows!=0) && (!($AbogyProc==0))))
{

?>
        <tr  onMouseOver="showTooltip('dHTMLToolTip',event, 'Nro%20de%20Factura:<?   echo (->$Item["Nro Factura"]->$Value);?>%3Cbr%3EFecha:<?   echo (->$Item["Fecha"]->$Value);?>%3Cbr%3EForma de pago:<?   echo (->$Item["FormaDePago"]->$Value);?>%3Cbr%3ENotas de pago:<?   echo (->$Item["NroPagare"]->$Value);?>%3Cbr%3ENotas:<?   echo (->$Item["Notas"]->$Value);?>', '#ffff99','#000000','#000000','6000')" onMouseOut="hideTooltip('dHTMLToolTip')" <?   if (($Item["FormaPago"]==1))
  {
    print "bgcolor=\"#FF0000\"";
  } ?>> 
          <td><?   echo (->$Item["Nombre"]->$Value);?>(<?   echo (->$Item["Texto"]->$Value);?>)</td>
          <td><?   echo (->$Item["Descripcion"]->$Value);?>&nbsp;<?   if (($Item["FaltaOriginal"]$Value==true))
  {
?>
              <img src="Imagenes/alerta.gif" alt="Falta la factura original" width="19" height="19">
              <?   } ?></td>
          <td><?   echo (->$Item["Cuantia rumbo"]->$Value);?>&euro;</td>
          <td><?   echo (->$Item["Cuantia Abonado"]->$Value);?>&euro;</td>
          <?   if ($ocultar)
  {
?>
          <td><?     echo (->$Item["ValorReal"]->$Value);?>&euro;</td>
          <?   } ?>
          <td bgcolor="#FFFFFF"><a href="FacturaModificar.asp?FacturaId=<?   echo ->$Item["Id"]->$Value;?>&Id=<?   echo (->$Item["Id"]->$Value);?>"><img src="Imagenes/pencil.gif" alt="Modificar datos" width="22" height="22" border="0" align="middle"></a><a href="FacturasBorrar.asp?FacturaId=<?   echo ->$Item["Id"]->$Value;?>"><img src="Imagenes/Borrar.gif" alt="Borrar factura" width="22" height="22" border="0" align="middle"></a></td>
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
  } 
  $Repeat4__index=$Repeat4__index+1;
  $Repeat4__numRows=$Repeat4__numRows-1;
  $AbogyProc=mysql_fetch_array($AbogyProc_query);
  $AbogyProc_BOF=0;

} 
?>
        <? if (($Repeat4__index>0))
{
?>
        <tr> 
          <td colspan="2" bgcolor="#CCCCCC"><div align="right">Total:</div></td>
          <td bgcolor="#CCCCCC"><?   echo $total1;?>&euro;</td>
          <td bgcolor="#CCCCCC"><?   echo $total2;?>&euro;</td>
          <?   if ($ocultar)
  {
?>
          <td bgcolor="#CCCCCC"><?     echo $total3;?>&euro;</td>
          <?   } ?>
        </tr>
        <? } ?>
        <tr> 
          <td colspan="2"><div align="right">Total Suplidos:</div></td>
          <td colspan="2"><? echo round($total1-$total2,2);?>&euro;</td>
          <? if (($total1-$total2>3000))
{
?>
          <script language="JavaScript">alert("Hay un exceso de suplidos");</script>
          <? } ?>
        </tr>
        <tr> 
          <td colspan="2"><div align="right">Beneficio:</div></td>
          <? if ($ocultar)
{
?>
          <td colspan="2"><?   echo round($total1-$total2-$total3,2);?>&euro;</td>
          <? } ?>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><a href="FacturaInsertar.asp?Id=<? echo (->$Item["Id"]->$Value);?>&Tipo=6&Profesional=Otros" name="link3" id="link1">Insertar 
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
      <p> 
        <? if ($ocultar)
{
?>
        <a href="LibroSuplidos.asp?Id=<?   echo (->$Item["Id"]->$Value);?>" target="_blank">Libro 
        de suplidos</a><a href="LibroSuplidos.asp?Id=<?   echo (->$Item["Id"]->$Value);?>&Excel=1" target="_blank"><img src="Imagenes/excel.gif" alt="Version para Excel" width="15" height="15" border="0"></a> 
        - 
        <? } ?>
        <a href="LibroSuplidos2.asp?Id=<? echo (->$Item["Id"]->$Value);?>" target="_blank">Libro 
        de suplidos para el cliente</a><a href="LibroSuplidos2.asp?Id=<? echo (->$Item["Id"]->$Value);?>&Excel=1" target="_blank"><img src="Imagenes/excel.gif" alt="Version para Excel" width="15" height="15" border="0"></a> 
        - <a href="IndemnizacionFinal.asp?Id=<? echo (->$Item["Id"]->$Value);?>" target="_blank">IndemnizacionFinal</a><a href="IndemnizacionFinal.asp?Id=<? echo (->$Item["Id"]->$Value);?>&Excel=1" target="_blank"><img src="Imagenes/excel.gif" alt="Version para Excel" width="15" height="15" border="0"></a></p>
      <p>Indeminzacion final al cliente: <strong><? echo (->$Item["Indemnizacion"]->$Value);?>&euro;</strong> 
        - Estimacion: <? echo (->$Item["EstimacionIndemnizacion"]->$Value);?>&euro;<br>
        A pagar por el cliente: <strong><? echo (->$Item["CobroCliente"]->$Value);?>&euro;</strong><br>
        <? if ($ocultar)
{
?>
        Beneficio rumbo: <strong><?   echo (->$Item["Percivido"]->$Value);?>&euro;</strong><br>
        <? } ?>
        Indemnizacion sin facturas: <strong><? echo (->$Item["IndemnizacionReal"]->$Value);?>&euro;</strong><br>
        Pago al agente: <strong><? echo (->$Item["PagoAgente"]->$Value);?>&euro;</strong></p>
</td>
  </tr>
</table>
<table width="100%" border="0" id="opcion4" class="imagenNO">
  <tr>
    <td><strong><em>Indemnizacion final:</em></strong>
<script language="JavaScript">
function actualiza_indemnizacion() {
form1.FactorCorrector.value=form1.FactorCorrector.value.replace(',','.');
return true;
}
</script>
<form name="form1" method="POST" action="SiniestroIndemnizacionActualizar.php" onSubmit="actualiza_indemnizacion();" onKeyPress="actualiza_datos();">  
  <table width="100%" border="1" cellspacing="0" bordercolor="#000000">
    <tr> 
      <td width="46%">Dias Impeditivos:<br> 
        <input name="DiasImpeditivos" type="text" id="DiasImpeditivos" value="<? echo (->$Item["DiasImpeditivos"]->$Value);?>" onChange="actualiza_datos();">
      <? if (!(($Item["Fecha Baja"]$Value==null) || ($Item["Fecha Alta"]$Value==null)))
{
?>
	  <img src="Imagenes/calculadora2.gif" width="15" height="21" border="0" onClick="form1.DiasImpeditivos.value=<?   echo $DateDiff["d"][->$Item["Fecha Baja"]->$Value][->$Item["Fecha Alta"]->$Value];?>;"><? } ?></td>
      <td width="54%">Valor del dia impeditivo:<br>        <input name="ValorDiaImpeditivo" type="text" id="ValorDiaImpeditivo2" value="<? echo (->$Item["DiasImpeditivosValor"]->$Value);?>" onChange="actualiza_datos();"></td>
	  <td>Total:
      <br>        <input type="text" id="total1" onChange="actualiza_datos();"></td>
    </tr>
    <tr> 
      <td>Dias No Impeditivos: <br>        <input name="DiasNoImpeditivos" type="text" id="DiasNoImpeditivos" value="<? echo (->$Item["DiasNoImpeditivos"]->$Value);?>" onChange="actualiza_datos();"></td>
      <td>Valor del dia no impeditivo:<br>        <input name="ValorDiaNoImpeditivo" type="text" id="ValorDiaNoImpeditivo" value="<? echo (->$Item["DiasNoImpeditivosValor"]->$Value);?>" onChange="actualiza_datos();"></td>
	  <td>Total:<br>
      <input type="text" id="total2"></td>
    </tr>
    <tr> 
      <td>Dias de hospitalizacion: <br>        <input name="DiasHospitalizacion" type="text" id="DiasHospitalizacion" value="<? echo (->$Item["DiasHospitalizados"]->$Value);?>" onChange="actualiza_datos();"></td>
      <td>Valor del dia de hospitalizacion:<br>        <input name="ValorDiaHospitalizacion" type="text" id="ValorDiaHospitalizacion" value="<? echo (->$Item["DiasHospitalizadosValor"]->$Value);?>" onChange="actualiza_datos();"></td>
	  <td>Total:<br>
      <input type="text" id="total3"></td>
    </tr>
    <tr> 
      <td>Puntos de Secuela:<br>        <input name="PuntosSecuela" type="text" id="PuntosSecuela" value="<? echo (->$Item["PuntosSecuelas"]->$Value);?>" onChange="actualiza_datos();"></td>
      <td>Valor del punto de secuela:<br>        <input name="ValorPuntoSecuela" type="text" id="ValorPuntoSecuela" value="<? echo (->$Item["PuntosSecuelasValor"]->$Value);?>" onChange="actualiza_datos();"></td>
	  <td>Total:<br>
      <input type="text" id="total4"></td>
    </tr>
    <tr> 
      <td colspan="2">Factor Corrector:<br>        <input name="FactorCorrector" type="text" id="FactorCorrector2" value="<? echo (->$Item["FactorCorrector"]->$Value);?>" onChange="actualiza_datos();"></td>
      <td>Total:<br>
      <input type="text" id="total5"></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>Total:<br>
      <input type="text" id="total6"></td>
    </tr>
  </table>

  <div align="center">
    <input type="submit" name="Submit" value="Actualizar">
  </div>

  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="MM_recordId" value="<? echo ->$Item["Id"]->$Value;?>">
</form>
<script language="JavaScript" src="ValorPunto.js"></script>
<script language="JavaScript">
function actualiza_datos() {
form1.ValorDiaImpeditivo.value=form1.ValorDiaImpeditivo.value.replace(',','.');
form1.ValorDiaNoImpeditivo.value=form1.ValorDiaNoImpeditivo.value.replace(',','.');
form1.ValorDiaHospitalizacion.value=form1.ValorDiaHospitalizacion.value.replace(',','.');
form1.ValorPuntoSecuela.value=form1.ValorPuntoSecuela.value.replace(',','.');
form1.total1.value=form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value;
form1.total2.value=form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value;
form1.total3.value=form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value;
form1.total4.value=form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value;
form1.total5.value=form1.FactorCorrector.value*(form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value+form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value+form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value+form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value)/100;
form1.total6.value=Math.round(100*(form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value+form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value+form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value+form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value+form1.FactorCorrector.value*(form1.DiasImpeditivos.value*form1.ValorDiaImpeditivo.value+form1.DiasNoImpeditivos.value*form1.ValorDiaNoImpeditivo.value+form1.DiasHospitalizacion.value*form1.ValorDiaHospitalizacion.value+form1.PuntosSecuela.value*form1.ValorPuntoSecuela.value)/100))/100;
form1.ValorPuntoSecuela.value=valorpunto(<? echo $datediff["YYYY"][->$Item["FechaNacimiento"]->$Value][->$Item["Fecha Siniestro"]->$Value];?><%,form1.PuntosSecuela.value);
}
actualiza_datos();
form1.ValorDiaImpeditivo.value=form1.ValorDiaImpeditivo.value.replace(',','.');
form1.ValorDiaNoImpeditivo.value=form1.ValorDiaNoImpeditivo.value.replace(',','.');
form1.ValorDiaHospitalizacion.value=form1.ValorDiaHospitalizacion.value.replace(',','.');
form1.ValorPuntoSecuela.value=form1.ValorPuntoSecuela.value.replace(',','.');
</script>
 </td>
  </tr>
</table>
<table width="100%" border="0" id="opcion5" class="imagenNO">
  <tr>
    <td>      <p><em><strong>Notas:</strong></em><br>
        <? echo str_replace("\r\n","<br>",->$Item["Notas"]->$Value);?></p>
      <p> 
        <? if (($Item["ModeloContrato"]$Value==2))
{
?>
        <script language="JavaScript">
if (!confirm("Este cliente tiene el abono caducado, ¿quieres continuar?"))
	window.navigate("Principal.asp");
  </script>
        <? } ?>
        <? 
// $fs is of type "Scripting.FileSystemObject"
$cadena="\\\\Pc1\\c\\WINDOWS\\Escritorio\\rumbo\\clientes\\".(->$Item["Nombre"]->$Value)." ".(->$Item["Apellido1"]->$Value)." ".(->$Item["Apellido2"]->$Value);
if (file_exists($cadena)==true)
{

?>
        <strong>Documentos: </strong></p>
      <p> 
      <table border="0">
        <? 
  $carpeta=$cadena;
  foreach (glob($carpeta); as $x)
  {
//Print the name of all files in the test folder
?>
        <tr> 
          <td><a href="abrirArchivo.asp?IdSiniestro=<?     echo (->$Item["Id"]->$Value);?>&Archivo=<?     echo $x->Name;?>"><?     echo $x->Name;?></a></td>
          <td><?     echo $x->DateLastModified;?></td>
        </tr>
        <?   }
  $x=null;

?>
      </table></td>
  </tr>
</table>

<? 
} 

$fs=null;

?>
</body>
</html>
<? 

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

