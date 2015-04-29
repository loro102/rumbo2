<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:49 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $ElLog is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT * FROM Log ORDER BY Fecha DESC";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$ElLog_numRows=0;
?>
<? 

$Repeat1__numRows=-1;
$Repeat1__index=0;
$ElLog_numRows=$ElLog_numRows+$Repeat1__numRows;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Log</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="100%"  border="1" cellspacing="0">
  <? 
while((($Repeat1__numRows!=0) && (!($ElLog==0))))
{

?>
  <tr>
    <td><?   echo (->$Item["Fecha"]->$Value);?></td>
    <td><?   echo (->$Item["Usuario"]->$Value);?></td>
    <td><?   echo (->$Item["Texto"]->$Value);?></td>
    <td><?   echo (->$Item["Identificativo"]->$Value);?></td>
    <td><?   echo (->$Item["IP"]->$Value);?></td>
  </tr>
  <? 
  $Repeat1__index=$Repeat1__index+1;
  $Repeat1__numRows=$Repeat1__numRows-1;
  $ElLog=mysql_fetch_array($ElLog_query);
  $ElLog_BOF=0;

} 
?>
</table>
</body>
</html>
<? 

$ElLog=null;

?>

