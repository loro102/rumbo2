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
$Tramitadores__MMTramitadores="()";
if (($_SESSION['CTramitadores']!=""))
{

  $Tramitadores__MMTramitadores=$_SESSION['CTramitadores'];
} 

?>
<? 

// $Tramitadores is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Tramitadores  where Id in "+str_replace("'","''",$Tramitadores__MMTramitadores)+" ORDER BY Nombre";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Tramitadores_numRows=0;
?>
<? 

// $Fases is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Fases ORDER BY Id ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Fases_numRows=0;
?>
<? 

// $Profesionales_cmd is of type "ADODB.Command"
$Profesionales_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Profesionales_cmd_CommandText="SELECT Profesionales.ID, TipoProfesional.Texto, Profesionales.Nombre FROM TipoProfesional INNER JOIN (Facturas INNER JOIN Profesionales ON Facturas.Valor = Profesionales.ID) ON TipoProfesional.Id = Profesionales.Tipo GROUP BY Profesionales.ID, TipoProfesional.Texto, Profesionales.Nombre, Profesionales.Tipo, Profesionales.Homologado HAVING (((Profesionales.Homologado)=True) AND ((Max(Facturas.Fecha))>Now()-365)) ORDER BY TipoProfesional.Texto, Profesionales.Nombre; ";
$Profesionales_cmd_Prepared=true;

$Profesionales=$Profesionales_cmd_Execute=$Profesionales_numRows=0;;
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
$Tramitadores_numRows=$Tramitadores_numRows+$Repeat1__numRows;
?>
<html>
<head>
<style>
  .imagenNO {display:none;}
  .imagen {display:block;}
.Estilo1 {font-size: smaller}
.Estilo2 {font-size: small}
</style>
<title>Listado de siniestros</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="25">
<script language="JavaScript" src="menu.js"></script>
<form action="SiniestrosListar2Salida.php" method="post" name="Form1" id="Form1" onSubmit="agrupafases()">
  <table width="100%"  border="0">
  <tr>
    <td colspan="3"><p>Fecha de apertura de expediente entre 
    <input name="FechaAE1" type="text" id="FechaAE1" value="01/01/00" size="14" maxlength="10">
    y 
    <input name="FechaAE2" type="text" id="FechaAE2" size="14" maxlength="10" value="<? echo time()();?>">
    <br>
    Fecha del siniestro entre 
      <input name="Fecha1" type="text" id="Fecha1" value="01/01/00" size="14" maxlength="10">
y
<input name="Fecha2" type="text" id="Fecha2" size="14" maxlength="10" value="<? echo time()();?>">
<br>
    Filtrar cerrados 
    <input type="checkbox" name="cerrados" value="checkbox"> entre 
    <input name="FechaCE1" type="text" id="FechaCE1" value="01/01/00" size="14" maxlength="10">
    y 
    <input name="FechaCE2" type="text" id="FechaCE2" size="14" maxlength="10" value="<? echo time()();?>"><br>
    Filtrar por fecha de alta 
    <input type="checkbox" name="alta" value="checkbox"">
     entre 
      <input name="FechaAlta1" type="text" id="FechaAlta1" value="01/01/00" size="14" maxlength="10">
y
<input name="FechaAlta2" type="text" id="FechaAlta2" size="14" maxlength="10" value="<? echo time()();?>">
<br>Filtrar por fecha de cobro Empresa
  <input name="FechaCobrorumbo" type="checkbox" id="FechaCobrorumbo" onClick="if (Form1.alta.checked) window.alta.className='imagen'; else window.alta.className='imagenNO';" value="checkbox">
entre 
  <input name="FechaCobrorumbo1" type="text" id="FechaCobrorumbo1" value="01/01/00" size="14" maxlength="10"> 
  y 
  <input name="FechaCobrorumbo2" type="text" id="FechaCobrorumbo2" size="14" maxlength="10" value="<? echo time()();?>"><br>
  Filtrar por fecha de archivo
  <input name="FechaArchivo" type="checkbox" id="FechaArchivo" onClick="if (Form1.alta.checked) window.alta.className='imagen'; else window.alta.className='imagenNO';" value="checkbox">
entre 
  <input name="FechaArchivo1" type="text" id="FechaArchivo1" value="01/01/00" size="14" maxlength="10"> 
  y 
  <input name="FechaArchivo2" type="text" id="FechaArchivo2" size="14" maxlength="10" value="<? echo time()();?>">
  <br>
  Asistencia Juridica: 
  <select name="AJ" id="AJ">
    <option value="(true)" selected>Indiferente</option>
    <option value="(Siniestro.AsistenciaJuridica=True)">Si</option>
    <option value="(Siniestro.AsistenciaJuridica=False)">No</option>
  </select>
      <br>
  Lugar: 
  <input name="Lugar" type="text" id="Lugar">
  <br>Compa&ntilde;ia Aseguradora:
  <select name="CompAseguradora" id="CompAseguradora" maxlength="50">
    <option value="">Todas</option>
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
  <!---      Compa&ntilde;ia Contraria:
      <input name="CiaContraria" type="text" id="CiaContraria">--->
          <input name="tramitador" type="hidden" id="tramitador">
    </p></td>
    <td rowspan="4"><p>Fases:<br>
	      <? $nrofases=0;
while((!($Fases==0)))
{

?>
          <input type="checkbox" name="Fase<?   echo $nrofases;?>" value="<?   echo (->$Item["Id"]->$Value);?>" checked>
          <span class="Estilo1"><?   echo (->$Item["Texto"]->$Value);?></span><br>
          <? 
  $Fases=mysql_fetch_array($Fases_query);
  $Fases_BOF=0;

  $nrofases=$nrofases+1;
} 
if ((>0))
{

  
}
  else
{

  
} 

?>
<script language="javascript">
function invierte_fases(){
	for (a=0;a<<? echo $nrofases;?><%;a++)
		eval("document.Form1.Fase"+a+".click();");
}
</script>
          <input name="Fases" type="hidden" id="Fases">
          <input name="invfases" type="button" id="invfases" style="font-size:9px" onClick="javascript:invierte_fases();" value="Invertir selecci&oacute;n">
    </p>
      <p>Datos a mostar:<br>
        <input name="M4" type="checkbox" id="M4" value="1"> 
        <span class="Estilo1">Fecha de cierre
        <br>
        <input name="M1" type="checkbox" id="M1" value="1"> 
        Tramitador
        <br>
        <input name="M2" type="checkbox" id="M2" value="1"> 
        Agente
        <br>
<? if ($_SESSION['CBeneficio']==true)
{
?>
        <input name="M5" type="checkbox" id="M22" value="1">
Pagado al Agente<br>
        <input name="M3" type="checkbox" id="M3" value="1">
Beneficio<br>
<? } ?>
<input name="M6" type="checkbox" id="M6" value="1"> 
Fase<br>
<input name="M7" type="checkbox" id="M7" value="1"> 
Quien lo cerro<br>
<input name="M8" type="checkbox" id="M8" value="1">
Indemnizaci&oacute;n final al cliente</span>      <br>
      <span class="Estilo1">
      <input name="M9" type="checkbox" id="M82" value="1"> 
      Asistencia Jur&iacute;dica</span><br><span class="Estilo1">
      <input name="M10" type="checkbox" id="M10" value="1"> 
      Fecha de cobro Empresa </span><br><span class="Estilo1">
      <input name="M11" type="checkbox" id="M10" value="1">
      Deuda</span><br><span class="Estilo1">
      <input name="M12" type="checkbox" id="M12" value="1">
      Fecha de archivo</span> <br><span class="Estilo1">
      <input name="M13" type="checkbox" id="M13" value="1">
      Fecha de alta</span><br><span class="Estilo1">
      <input name="M15" type="checkbox" id="M15" value="1">
      Fecha de alta medica</span><br><span class="Estilo1">
      <input name="M14" type="checkbox" id="M14" value="1">
      Matricula</span><br>
      <span class="Estilo1">
      <input name="M16" type="checkbox" id="M16" value="1">
      Tramitador Cia</span><br>
      <span class="Estilo1">
      <input name="M17" type="checkbox" id="M17" value="1">
      Cia</span><br>     
      <span class="Estilo1">
      <input name="M23" type="checkbox" id="M23" value="1">
      Fecha Denuncia</span><br>      
      <span class="Estilo1">
      <input name="M24" type="checkbox" id="M24" value="1">
      Fecha Demanda</span><br>      
      <span class="Estilo1">
      <input name="M25" type="checkbox" id="M25" value="1">
      Fecha Oferta Motivada</span><br>      
      <span class="Estilo1">
      <input name="M26" type="checkbox" id="M26" value="1">
      Fecha Respuesta Motivada</span><br> 
	  <span class="Estilo1">
      <input name="M27" type="checkbox" id="M27" value="1">
      Fecha Audiencia Previa</span><br> 
	  <span class="Estilo1">
      <input name="M28" type="checkbox" id="M28" value="1">
      Fecha Juicio</span><br> </td>
  </tr>
  <tr>
    <td colspan="2">Tramitador:
      <? $nrotramitador=0;
while((($Repeat1__numRows!=0) && (!($Tramitadores==0))))
{

?>
      <br>
      <input name="trami<?   echo $nrotramitador;?>" type="checkbox" value="<?   echo (->$Item["Id"]->$Value);?>" checked>
      <span class="Estilo1"><?   echo (->$Item["Nombre"]->$Value);?></span>
      <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $nrotramitador=$nrotramitador+1;
  $Tramitadores=mysql_fetch_array($Tramitadores_query);
  $Tramitadores_BOF=0;

} 
?>
      <br>
<script language="javascript">
function invierte_trami(){
	for (a=0;a<<? echo $nrotramitador;?><%;a++)
		eval("document.Form1.trami"+a+".click();");
}
</script>
      <input type="button" name="invtram" value="Invertir selecci&oacute;n" onClick="javascript:invierte_trami();" style="font-size:9px"></td>
    <td>Con accidentes corporales del conductor:
      <input name="accidentescorporales" type="checkbox" id="accidentescorporales" value="checkbox"></td>
  </tr>
  <tr>
    <td>Ordenado por:
      <select name="orden" id="orden">
        <option value="FechaAperturaExpediente DESC">Fecha de apertura</option>
        <option value="Apellido1">Apellido</option>
        <option value="[Fecha Siniestro] DESC">Fecha de siniestro</option>
        <option value="Fase">Fase</option>
        <option value="AsistenciaJuridica">Asistencia Juridica</option>
      </select>
      <br></td>
    <td valign="top">Caso tipo 1:
      <select name="CT1" id="CT1">
        <option value="(True)" selected>Cualquiera</option>
        <option value="(CasoTipo=1)">1</option>
        <option value="(CasoTipo=2)">2</option>
        <option value="(CasoTipo=3)">3</option>
        <option value="(CasoTipo=4)">4</option>
        <option value="(CasoTipo=5)">5</option>
      </select></td>
    <td valign="top">Caso tipo 2:
      <select name="CT2" id="CT2">
        <option value="(True)" selected>Cualquiera</option>
        <option value="(CasoTipo2=1)">1</option>
        <option value="(CasoTipo2=2)">2</option>
        <option value="(CasoTipo2=3)">3</option>
        <option value="(CasoTipo2=4)">4</option>
        <option value="(CasoTipo2=5)">5</option>
      </select></td>
  </tr>
  <tr><td colspan="3">Profesional 1:
      <select name="Profesional1" id="Profesional1" onChange="document.Form1.Profesional2.disabled=document.Form1.Profesional1.selectedIndex==0;">
        <option value="">Cualquiera</option>
        <? 
while((!$Profesionales->EOF))
{

?>
        <option value=" AND (SiniestroProfesional.Profesional=<?   echo ($Profesionales->Fields->$Item["ID"]->$Value);?>) "><?   echo ($Profesionales->Fields->$Item["Texto"]->$Value);?> - <?   echo ($Profesionales->Fields->$Item["Nombre"]->$Value);?></option>
        <? 
  $Profesionales->MoveNext();
} 
if (($Profesionales->CursorType>0))
{

  $Profesionales->MoveFirst;
}
  else
{

  $Profesionales->Requery;
} 

?>
      </select>
      <!--<input name="Bot&oacute;n" type="button" value="Cargar todos" onClick="document.all.myFrame.src='ProfesionalesListarTodos.asp';"><iframe  id="myFrame"  frameborder="0"  vspace="0"  hspace="0"  marginwidth="0"  marginheight="0" width="1"  scrolling="no"  height="1"> </iframe>-->
      <br>Profesional 2:
      <select name="Profesional2" id="Profesional2" disabled>
        <option value="">Cualquiera</option>
        <? 
while((!$Profesionales->EOF))
{

?>
        <option value=" AND (SiniestroProfesional_1.Profesional=<?   echo ($Profesionales->Fields->$Item["ID"]->$Value);?>) "><?   echo ($Profesionales->Fields->$Item["Texto"]->$Value);?> - <?   echo ($Profesionales->Fields->$Item["Nombre"]->$Value);?></option>
        <? 
  $Profesionales->MoveNext();
} 
if (($Profesionales->CursorType>0))
{

  $Profesionales->MoveFirst;
}
  else
{

  $Profesionales->Requery;
} 

?>
      </select>
</td>
    </tr>
  <tr>
    <td colspan="3"><input type="submit" name="Submit" value="Listar"></td>
    <td>&nbsp;</td>
  </tr>
</table>
<script language="javascript">
function agrupafases() {
	primera=0;
	resultado="";
	for (a=0;a<<? echo $nrofases;?><%;a++)
		eval("if (document.Form1.Fase"+a+".checked) if (primera==0) {primera=1;resultado=document.Form1.Fase"+a+".value;}else resultado=resultado+','+document.Form1.Fase"+a+".value;");
	resultado='('+resultado+')';
	document.Form1.Fases.value=resultado;
	primera=0;
	resultado="";
	for (a=0;a<<? echo $nrotramitador;?><%;a++)
		eval("if (document.Form1.trami"+a+".checked) if (primera==0) {primera=1;resultado=document.Form1.trami"+a+".value;}else resultado=resultado+','+document.Form1.trami"+a+".value;");
	resultado='('+resultado+')';
	document.Form1.tramitador.value=resultado;
	//alert(resultado);
	//alert(document.Form1.tramitador.value);
	return false;
}
</script>
</form>
</body>
</html>
<? 

$Tramitadores=null;

?>
<? 

$Fases=null;

?>
<? 
$Profesionales->Close();
$Profesionales=null;

?>
<? 
$aseguradoras->Close();
$aseguradoras=null;

?>

