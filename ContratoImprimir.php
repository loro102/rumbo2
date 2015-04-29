<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:45 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
<? 
$Cliente__MMColParam="1";
if (($_GET["Id"]!=""))
{

  $Cliente__MMColParam=$_GET["Id"];
} 

?>
<? 

// $Cliente is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT *  FROM Abonados  WHERE Id = "+str_replace("'","''",$Cliente__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Cliente_numRows=0;
?>

<html>
<head>
<title>Impresion de contrato</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_setTextOfTextfield(objName,x,newText) { //v3.0
  var obj = MM_findObj(objName); if (obj) obj.value = newText;
}
//-->
</script>
<script language="JavaScript" type="text/JavaScript">
<!--
function actualiza_campos() {
document.form2.Nombre.value=document.form1.Nombre.value;
}

function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}
//-->
</script>
</head>

<body>
<table width="100%" border="0">
  <tr valign="top">
    <td><form action="ContratoImprimirSalida.php" method="get" name="form1" target="_blank">
        <p align="left"> Nombre: 
          <input name="Nombre" type="text" id="Nombre" onChange="MM_callJS('actualiza_campos()')" value="<? print ->$Item["Nombre"]->$Value+" "+->$Item["Apellido1"]->$Value+" "+->$Item["Apellido2"]->$Value;?>" size="50">
          <br>
          Direccion: 
          <input name="Direccion" type="text" id="Direccion" value="<? echo (->$Item["Direccion"]->$Value);?>" size="50">
          <br>
          Ciudad: 
          <input name="Ciudad" type="text" id="Ciudad" value="<? echo (->$Item["Codigo Postal"]->$Value);?>&nbsp;<? echo (->$Item["Localidad"]->$Value);?> ( <? echo (->$Item["Provincia"]->$Value);?> )" size="50">
          <br>
          NIF: 
          <input name="NIF" type="text" id="NIF" value="<? echo (->$Item["NIF"]->$Value);?>" size="12">
          <br>
          Fecha:
          <input name="dia" type="text" id="dia3" size="2" maxlength="2">
/
<input name="mes" type="text" id="mes3" size="10" maxlength="10">
/
<input name="ano" type="text" id="ano3" size="4" maxlength="4">
<script language="JavaScript" type="text/JavaScript">
document.form1.dia.value=(new Date()).getDate();
meses=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"]
//document.form1.mes.value=1+(new Date()).getMonth();
document.form1.mes.value=meses[(new Date()).getMonth()];
document.form1.ano.value=(new Date()).getYear();
</script>
<!----<br>
Firmante:---->
<input name="firmante" type="hidden" id="firmante3" value="Alejandro Rancho Carracedo" size="60">
        </p>
        <p align="center"> 
          <input type="submit" name="Submit3" value="Generar contrato">
        </p>
        <p>&nbsp; </p>
      </form>
    </td>
  </tr>
</table>
<script language="JavaScript" type="text/JavaScript">
<!--
actualiza_campos();
//-->
</script>
</body>
</html>
<? 

$Cliente=null;

?>

