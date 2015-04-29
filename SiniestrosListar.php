<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 ?>
 
<? require("Connections/connrumbo.php"); ?>
<? 

// $Tablas is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM TipoProfesional";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Tablas_numRows=0;
?>
<? 
$Profesional__MMColParam="1";
if (($_GET["Sector"]!=""))
{

  $Profesional__MMColParam=$_GET["Sector"];
} 

?>
<? 

// $Profesional is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Profesionales  WHERE Tipo = "+str_replace("'","''",$Profesional__MMColParam)+"  ORDER BY Nombre ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Profesional_numRows=0;
?>
<? 

// $Fases is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Fases  ORDER BY Id ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Fases_numRows=0;
?>
<html>
<head>
<title>Listado de Siniestros por Profesional</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}
//-->
</script>
<style type="text/css">
<!--
.Estilo1 {font-size: smaller}
-->
</style>
</head>

<body topmargin="25">
<script language="JavaScript">
<!--
function ir() {
  location.replace("SiniestrosListar.asp?Sector="+Form1.sector.value);
  }
//-->
</script>
<script language="JavaScript" src="menu.js"></script>
<form action="SiniestrosListarSalida.php" name="Form1" onSubmit="agrupafases()">
  <table width="100%"  border="0" cellspacing="0">
    <tr valign="top">
      <td>Sector:
        <select name="sector" id="sector" onChange="MM_callJS('ir()')">
          <? 
while((!($Tablas==0)))
{

?>
          <option value="<?   echo (->$Item["Id"]->$Value);?>" <?   if (((->$Item["Id"]->$Value)==($_GET["Sector"])))
  {
    print "SELECTED";
    print "";
  } ?> ><?   echo (->$Item["Texto"]->$Value);?></option>
          <? 
  $Tablas=mysql_fetch_array($Tablas_query);
  $Tablas_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
        </select>
Profesional:
<select name="Profesional" id="Profesional">
  <? 
while((!($Profesional==0)))
{

?>
  <option value="<?   echo (->$Item["ID"]->$Value);?>"><?   echo (->$Item["Nombre"]->$Value);?></option>
  <? 
  $Profesional=mysql_fetch_array($Profesional_query);
  $Profesional_BOF=0;

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
</select>
<br>
Fecha de apertura de expediente entre 
    <input name="FechaAE1" type="text" id="FechaAE1" value="01/01/00" size="14" maxlength="10">
y
<input name="FechaAE2" type="text" id="FechaAE2" size="14" maxlength="10" value="<? echo time()();?>">
</td>
      <td><span class="Estilo1">Fases:<br>
	    <? $nrofases=0;
while((!($Fases==0)))
{

?>
        <input type="checkbox" name="Fase<?   echo $nrofases;?>" value="<?   echo (->$Item["Id"]->$Value);?>" checked>
        <?   echo (->$Item["Texto"]->$Value);?><br>
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

?></span>
    <input name="Fases" type="hidden" id="Fases"></td>    </tr>
  </table>
  <script language="javascript">
function agrupafases() {
	primera=0;
	resultado="";
	for (a=0;a<<? echo $nrofases;?><%;a++)
		eval("if (document.Form1.Fase"+a+".checked) if (primera==0) {primera=1;resultado=document.Form1.Fase"+a+".value;}else resultado=resultado+','+document.Form1.Fase"+a+".value;");
	resultado='('+resultado+')';
	document.Form1.Fases.value=resultado;
	//alert(document.Form1.Fases.value);
	return true;
}
</script>
  <p>
    <input name="submit" type="submit" value="Mostrar Siniestros">
  </p>
</form>
</body>
</html>
<? 

$Tablas=null;

?>
<? 

$Profesional=null;

?>
<? 

$Fases=null;

?>

