<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cambio de clave</title>
</head>
<? 
if ($_GET!="")
{

  // $MM_rsUser is of type "ADODB.Recordset"
    echo $MM_connrumbo_STRING;
    echo "SELECT Nombre, Clave FROM Claves WHERE Nombre='".str_replace("'","''",$_POST["nombre"])."' AND Clave='".str_replace("'","''",$_POST["antigua"])."'";
    echo 0;
    echo 2;
    echo 3;
  $rs=mysql_query();
  if (!($MM_rsUser==0) || !($MM_rsUser_BOF==1))
  {

    // $MM_editCmd is of type "ADODB.Command"
    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="UPDATE Claves SET Clave='".str_replace("'","''",$_POST["nueva"])."' WHERE Nombre='".str_replace("'","''",$_POST["nombre"])."'";    
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

    $MM_editCmd_ActiveConnection=$MM_connrumbo_STRING;    
    $MM_editCmd_CommandText="INSERT INTO Log(Texto, Usuario,IP) VALUES ('CambiaClave','".str_replace("'","''",$_POST["nombre"])."','".$_SERVER["REMOTE_ADDR"]."') ";    
    $MM_editCmd_Execute=    $MM_editCmd_ActiveConnection=$Close;;    

    header("Location: "."index.asp");
  } 

} ?>
<body>
<script language="javascript">
function comprueba() {

if (document.form1.nueva.value!=document.form1.nueva2.value)
	{
		alert('No coinciden las claves.');
		return false
	}
if (len(document.form1.nueva.value)==0)
	{
		alert('Clave demasiado corta.');
		return false
	}
}
</script>
<form id="form1" name="form1" method="post" action="cambiaclave.php?cambio" onsubmit="javascript:return comprueba()">
  <p>Nombre de usuario: 
    <input name="nombre" type="text" id="nombre" />
    <br />
    Antigua contrase&ntilde;a: 
    <input name="antigua" type="password" id="antigua" />
    <br />
    Nueva contrase&ntilde;a:
    <input name="nueva" type="password" id="nueva" />
    <br />
  Repeticion de nueva contrase&ntilde;a:
  <input name="nueva2" type="password" id="nueva2" />
  </p>
  <p>
    <input type="submit" name="Submit" value="Enviar" />
</p>
</form>
</body>

</html>

