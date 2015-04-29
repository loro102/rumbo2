<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:50 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $TipoProfesional is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM TipoProfesional ORDER BY Texto ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$TipoProfesional_numRows=0;
?>
<html>
<head>
<title>Profesional de siniestro</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
var lista=new Array()

<? 
Profesional_Num=0;

// $Profesional is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Profesionales ORDER BY Tipo ASC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();
while((!($Profesional==0)))
{

  $reponse->write("lista[".$Profesional_num."]='".->$Item["Nombre"]->$Value)."';")$;;
} 
?><%
</script>
</head>

<body topmargin="30">

<script language="JavaScript" src="menu.js"></script>
<form name="form1" method="post" action="">
  Tipo: 
<select name="Tipo">
  <? 
while((!($TipoProfesional==0)))
{

?>
  <option value="<?   echo (->$Item["Id"]->$Value);?>"><?   echo (->$Item["Texto"]->$Value);?></option>
  <? 
  $TipoProfesional=mysql_fetch_array($TipoProfesional_query);
  $TipoProfesional_BOF=0;

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
<select name="select">
  </select>
</form>
</body>
</html>
<? 

$TipoProfesional=null;

?>

