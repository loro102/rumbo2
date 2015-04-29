<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 ?>
<? require("Connections/connrumbo.php"); ?>
<? 

// $Agentes is of type "ADODB.Recordset"
echo $MM_connrumbo_STRING;
echo "SELECT Id, Nombre FROM Agentes";
echo 0;
echo 2;
echo 1;
$rs=mysql_query();

$Agentes_numRows=0;
?>
<? 

// $Contratos_cmd is of type "ADODB.Command"
$Contratos_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Contratos_cmd_CommandText="SELECT * FROM ModelosContrato ORDER BY Id ASC";
$Contratos_cmd_Prepared=true;

$Contratos=$Contratos_cmd_Execute=$Contratos_numRows=0;;
?>
<? //Session.lcid=1034  ?>
<html>
<head>
<title>Listado de abonados</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="25">
<script language="JavaScript" src="menu.js"></script>
<form action="AbonadosListarSalida.php" method="post" name="Form1" id="Form1">
  <p>Fecha de alta entre 
    <input name="Fecha1" type="text" id="Fecha1" value="01/01/00" size="14" maxlength="10">
    y 
    <input name="Fecha2" type="text" id="Fecha2" size="14" maxlength="10" value="<? echo time()();?>">
    <br>
    Localidad: 
    <input name="Localidad" type="text" id="Localidad">
    Provincia: 
    <input name="Provincia" type="text" id="Provincia">
    <br>
    Agente: 
    <select name="Agente" id="Agente">
      <option value="Todos" SELECTED>Todos</option>
      <? 
while((!($Agentes==0)))
{

?>
      <option value="<?   echo (->$Item["Id"]->$Value);?>" <?   if ((!!isset("Todos")))
  {
    if (((->$Item["Id"]->$Value)==("Todos")))
    {
      print "SELECTED";
      print "";
    } 
  } ?> ><?   echo (->$Item["Nombre"]->$Value);?></option>
      <? 
  $Agentes=mysql_fetch_array($Agentes_query);

} 
if ((>0))
{

  
}
  else
{

  
} 

?>
    </select>
    Colectivo: 
    <input name="Colectivo" type="text" id="Colectivo" maxlength="50">
    <br>
    Precio del abono entre 
    <input name="pabonobajo" type="text" id="pabonobajo" value="0" size="5" maxlength="3">
    y 
    <input name="pabonoalto" type="text" id="pabonoalto" value="100" size="5" maxlength="3">
    &euro; <br>
    Modelo de contrato: 
    <select name="Contrato" id="Contrato">
      <? 
while((!$Contratos->EOF))
{

?>
      <option value="<?   echo ($Contratos->Fields->$Item["Id"]->$Value);?>"><?   echo ($Contratos->Fields->$Item["Nombre"]->$Value);?></option>
      <? 
  $Contratos->MoveNext();
} 
if (($Contratos->CursorType>0))
{

  $Contratos->MoveFirst;
}
  else
{

  $Contratos->Requery;
} 

?>
    </select>
    <br>
    <input type="submit" name="Submit" value="Listar">
  </p>
</form>
</body>
</html>
<? 

$Agentes=null;

?>
<? 
$Contratos->Close();
$Contratos=null;

?>

