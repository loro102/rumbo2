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
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
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
<!--seleccionar Tramitador -->
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
<!--fin seleccionar tramitador -->
<? 

// $Tramitador is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Tramitadores ORDER BY Id ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Tramitador_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$Fases_numRows=$Fases_numRows+$Repeat1__numRows;
?>
<? 

$Repeat2__numRows=-1;
$Repeat2__index=0;
$Tramitador_numRows=$Tramitador_numRows+$Repeat2__numRows;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Siniestro otros</title>
</head>

<body bgcolor="#FFFFFF" background="Imagenes/fondo.gif" bgproperties="fixed" text="#000000" topmargin="30">
<script language="JavaScript" src="menu.js"></script>
<form name="form1" method="post" action="SiniestrosOtrosListarSalida.php"  onSubmit="agrupa()">
  <p>Fecha de apertura entre
    <input name="FApInicio" type="text" id="FApInicio" value="01/01/2002" size="14" maxlength="10"> 
  y 
  <input name="FApFin" type="text" id="FApFin" value="<? echo time()();?>" size="14" maxlength="10">
  <br>
  Fecha de cierre entre 
  
    <input name="FCieInicio" type="text" id="FCieInicio" value="01/01/2002" size="14" maxlength="10">
y
<input name="FCieFin" type="text" id="FCieFin" value="<? echo time()();?>" size="14" maxlength="10">
<input name="FiltroCierre" type="checkbox" id="FiltroCierre" value="checkbox">
  Filtrar por fecha de cierre </p>
  <table border="0">
    <tr valign="top">
      <td>Fase:
<font size="-2">        <? 
while((($Repeat1__numRows!=0) && (!($Fases==0))))
{

?>
        <br>
        <input name="Fas<?   echo $Repeat1__index;?>" type="checkbox" value="<?   echo (->$Item["Id"]->$Value);?>" checked><?   echo (->$Item["Texto"]->$Value);?>
        <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $Fases=mysql_fetch_array($Fases_query);
  $Fases_BOF=0;

} 
?></font></td>
      <td>Tramitador:
        <font size="-2"><? 
while((($Repeat2__numRows!=0) && (!($Tramitadores==0))))
{

?>
        <br>
      <input name="Tram<?   echo $Repeat2__index;?>" type="checkbox" value="<?   echo (->$Item["Id"]->$Value);?>" checked><?   echo (->$Item["Nombre"]->$Value);?>        <? 
  $Repeat2__index=$Repeat2__index+1;
  $Repeat2__numRows=$Repeat2__numRows-1;
  $Tramitadores=mysql_fetch_array($Tramitadores_query);
  $Tramitadores_BOF=0;

} 
?></font></td>
    </tr>
  </table>
  <input type="hidden" name="Fases">  
  <input type="hidden" name="Tramitadores">
Ordenar por: 
<select name="Orden" id="Orden">
  <option value="Siniestro.FechaAperturaExpediente DESC" selected>Fecha de apertura</option>
  <option value="Siniestro.Tramitador">Tramitador</option>
</select>
<p>
    <input type="submit" name="Submit" value="Enviar">
</p>
<script language="javascript">
function agrupa() {
	primera=0;
	resultado="";
	for (a=0;a<<? echo $Repeat1__index;?><%;a++)
		eval("if (document.form1.Fas"+a+".checked) if (primera==0) {primera=1;resultado=document.form1.Fas"+a+".value;}else resultado=resultado+','+document.form1.Fas"+a+".value;");
	resultado='('+resultado+')';
	document.form1.Fases.value=resultado;
	primera=0;
	resultado="";
	for (a=0;a<<? echo $Repeat2__index;?><%;a++)
		eval("if (document.form1.Tram"+a+".checked) if (primera==0) {primera=1;resultado=document.form1.Tram"+a+".value;}else resultado=resultado+','+document.form1.Tram"+a+".value;");
	resultado='('+resultado+')';
	document.form1.Tramitadores.value=resultado;
	return false;
}
</script>
</form>
</body>
</html>
<? 

$Fases=null;

?>
<? 

$Tramitador=null;

?>
<? 

$Tramitadores=null;

?>
