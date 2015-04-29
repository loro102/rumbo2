<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
$CP__MMColParam="1";
if (($_GET["CP"]!=""))
{

  $CP__MMColParam=$_GET["CP"];
} 

?>
<? 

// $CP is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Localidad, Provincia  FROM Abonados  WHERE \"Codigo Postal\" = "+str_replace("'","''",$CP__MMColParam)+"";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$CP_numRows=0;
?>
<html>
<head>
</head>
<script language="JavaScript" type="text/JavaScript">
function datos() {
<? 
if ((!($CP==0)))
{

  if (!($Item["Localidad"]$Value==""))
  {
    print "window.opener.document."+$_GET["form"]+".Localidad.value='"+->$Item["Localidad"]->$Value+"';";
  } 
  if (!($Item["Provincia"]$Value==""))
  {
    print "window.opener.document."+$_GET["form"]+".Provincia.value='"+->$Item["Provincia"]->$Value+"';";
  } 
} 

?><%
window.close();
}
</script>

<body onLoad="datos();">
</body>
</html>
<? 

$CP=null;

?>

