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
$Notas__MMColParam="1";
if (($_GET["SiniestroId"]!=""))
{

  $Notas__MMColParam=$_GET["SiniestroId"];
} 

?>
<? 

// $Notas_cmd is of type "ADODB.Command"
$Notas_cmd_ActiveConnection=$MM_connrumbo_STRING;
$Notas_cmd_CommandText="SELECT * FROM NotasSiniestro WHERE SiniestroId = ? ORDER BY fecha ASC";
$Notas_cmd_Prepared=true;
$Notas_cmd_Parameters=$Append$Notas_cmd_CreateParameter="param1"$Notas__MMColParam); // adDouble

$Notas=$Notas_cmd_Execute=$Notas_numRows=0;;
?>
<body style="background-color: transparent;" onLoad="document.getElementById('Notas').scrollTop = document.getElementById('Notas').scrollHeight"> 
<p><em><strong>Notas:</strong></em></p>
      <form name="form2" method="post" action="SiniestroNotasActualizar3.php?Id=Notas__MMColParam%>">
        <div align="center">

            <textarea name="Notas" cols="120" rows="18" id="Notas" readonly style="font-family: Comic Sans MS; font-size: 14px; text-align: justify; text-indent: 5; margin-left: 0">
<? while((!$Notas->EOF))
{
?>
<?   if ((($notas->Fields$Item["usuario"]$Value)=="anterior"))
  {
?>
<?     echo str_replace("<br>","\r\n",($Notas->Fields->$Item["Notas"]->$Value));?>
<?   }
    else
  {
?>
<?     echo "\r\n";?><?     echo ($notas->Fields->$Item["fecha"]->$Value);?> (<?     echo ($notas->Fields->$Item["usuario"]->$Value);?>) - <?     echo str_replace("<br>","\r\n",($Notas->Fields->$Item["Notas"]->$Value));?>
<?   } ?>
<? 
  $Notas->MoveNext();
} 
?>
</textarea>

  <textarea name="Notas2" cols="120" rows="2" id="Notas2"  style="font-family: Comic Sans MS; font-size: 14px; text-align: justify; text-indent: 5; margin-left: 0">
</textarea>
          <br>
          <input type="submit" value="A&ntilde;adir nota">
          <input type="hidden" name="sid" value="<? echo $Notas__MMColParam;?>">
		  <input type="hidden" name="usuario" value="<? echo $_SESSION['MM_Username'];?>">
        </div>
      </form>
</body>
</html>
<? 
$Notas->Close();
$Notas=null;

?>

