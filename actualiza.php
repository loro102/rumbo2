<? include('global.php'); ?>
<? // asp2php (vbscript) converted on Sat Apr 25 20:59:44 2015
 $CODEPAGE="1252";?>
<? require("Connections/connrumbo.php"); ?>
<? 
//set base = Server.CreateObject("ADODB.Recordset")
//base.ActiveConnection = MM_connrumbo_STRING
//base.Source = "ALTER TABLE Siniestro ADD COLUMN FechaTalon DATETIME"
//base.CursorType = 0
//base.CursorLocation = 2
//base.LockType = 3
//base.Open()

// $base is of type "ADODB.Connection"
$a2p_connstr=$MM_connrumbo_STRING;
$a2p_uid=strstr($a2p_connstr,'uid');
$a2p_uid=substr($d,strpos($d,'=')+1,strpos($d,';')-strpos($d,'=')-1);
$a2p_pwd=strstr($a2p_connstr,'pwd');
$a2p_pwd=substr($d,strpos($d,'=')+1,strpos($d,';')-strpos($d,'=')-1);
$a2p_database=strstr($a2p_connstr,'dsn');
$a2p_database=substr($d,strpos($d,'=')+1,strpos($d,';')-strpos($d,'=')-1);
$base=mysql_connect("localhost",$a2p_uid,$a2p_pwd);
mysql_select_db($a2p_database,$base);
//cadena = "CREATE TABLE Correspondecia(Id INT PRIMARY KEY,RecibidoEnviado INT NOT NULL DEFAULT 0,Origen CHAR(100),Destino CHAR(100),Contenido CHAR(200),Referencia INT NOT NULL DEFAULT 0)"
//cadena = "CREATE TABLE Correspondecia(Id AUTOINCREMENT PRIMARY KEY,RecibidoEnviado INT NOT NULL,Origen CHAR(100),Destino CHAR(100),Contenido CHAR(200),Referencia INT NOT NULL, Fecha DATETIME)"
//cadena="ALTER TABLE Siniestro ALTER COLUMN DiasImpeditivosValor DEFAULT(2)"
//cadena="ALTER TABLE Siniestro ADD COLUMN FechaCobroCliente Date"
//base.execute cadena
//cadena="ALTER TABLE Agentes ADD COLUMN Pegatina BIT"
//base.execute cadena
//cadena="ALTER TABLE Agentes ADD COLUMN Portatriptico BIT"
//base.execute cadena
//cadena="ALTER TABLE Siniestro ADD COLUMN AsistenciaSanitaria FLOAT"
//base.execute cadena
//cadena="ALTER TABLE Siniestro ALTER COLUMN CuantiaAsistenciaJuridica TEXT"
//base.execute cadena
//cadena="ALTER TABLE Siniestro ADD COLUMN ContratoAbonado BIT"
//base.execute cadena
//cadena="ALTER TABLE Facturas ADD COLUMN ValorIndemnizacion FLOAT"
//base.execute cadena
//base.execute "UPDATE Facturas SET Facturas.ValorIndemnizacion = [Facturas]![Cuantia rumbo]"
//base.execute "ALTER TABLE Profesionales ADD COLUMN AcuerdoPago INT"
//base.execute "UPDATE Profesionales SET Profesionales.AcuerdoPago = 0"
//base.execute "ALTER TABLE Profesionales ADD COLUMN Especialidad TEXT"
//base.execute "UPDATE Profesionales SET Especialidad = ''"
//base.execute "ALTER TABLE Profesionales ADD COLUMN Homologado BIT"
//base.execute "UPDATE Profesionales SET Homologado = True"

//base.execute "CREATE TABLE DocClientes(Id AUTOINCREMENT PRIMARY KEY,Texto CHAR(100), Entrada DATETIME,Salida DATETIME,Lugar MEMO,SiniestroId INT)"

//base.execute "ALTER TABLE Siniestro ADD COLUMN UltimaVision DATE"

//base.execute "ALTER TABLE Abonados ADD COLUMN NoMailing BIT"

//base.execute "ALTER TABLE Facturas ADD COLUMN RestarIVABeneficio BIT"
//base.execute "ALTER TABLE Facturas ADD COLUMN SumarIVABeneficio BIT"

//base.execute "ALTER TABLE Siniestro ADD COLUMN Incapacidad FLOAT"
//base.execute "UPDATE Siniestro SET Incapacidad=0"

//base.execute "ALTER TABLE Agentes ADD COLUMN Homologado BIT"
//base.execute "UPDATE Agentes SET Homologado = True"

//base.execute "ALTER TABLE Siniestro ADD COLUMN CasoTipo INT"
//base.execute "UPDATE Siniestro SET CasoTipo = 1"

//base.execute "ALTER TABLE Siniestro ADD COLUMN CasoTipo2 INT"
//base.execute "UPDATE Siniestro SET CasoTipo2 = 1"

//base.execute "ALTER TABLE Tramitadores ADD COLUMN Activo BIT"
//base.execute "UPDATE Tramitadores SET Activo = True"

//base.execute "ALTER TABLE Profesionales ADD COLUMN Notas2 MEMO"

//base.execute "ALTER TABLE Siniestro ADD COLUMN VehiculoCulpable BIT"

//base.execute "CREATE TABLE VisitasAgentes(Id AUTOINCREMENT PRIMARY KEY,Fecha DATETIME,Comercial CHAR(100),Comentario MEMO,AgenteId INT)"

//base.execute "ALTER TABLE Siniestro ADD COLUMN AbonadoMomentoSiniestro BIT"

//base.execute "INSERT INTO Tramitadores (Nombre) VALUES ('Ana Hidalgo')"

//base.execute "INSERT INTO Tramitadores ( Id, Nombre ) VALUES (1,'rumbo')"

//base.execute "INSERT INTO TipoProfesional ( Id, Texto ) VALUES (10,'Peritos')"
//base.execute "INSERT INTO TipoProfesional ( Id, Texto ) VALUES (14,'Perito Médico')"
//base.execute "INSERT INTO TipoProfesional ( Id, Texto ) VALUES (15,'Proveedores')"

//base.execute "ALTER TABLE Claves ADD COLUMN Indemnizacion BIT"
//base.execute "ALTER TABLE Claves ADD COLUMN VerFacturas BIT"
//base.execute "INSERT INTO Tramitadores ( Nombre ) VALUES ('Sira y Laura')"
//base.execute "ALTER TABLE Agentes ADD COLUMN Homologado BIT"
//base.execute "UPDATE Agentes SET Homologado = True"

//base.execute "ALTER TABLE Siniestro ADD COLUMN AccidentesCorporales BIT"
//base.execute "UPDATE Siniestro SET AccidentesCorporales = False"
//base.execute "ALTER TABLE Siniestro ADD COLUMN CuantiaAccidentesCorporales TEXT"
//base.execute "UPDATE Siniestro SET CuantiaAccidentesCorporales = ''"

//base.execute " DELETE FROM Tramitadores WHERE (Tramitadores.Id=1181027419)"

//base.execute "INSERT INTO Tramitadores ( Nombre ) VALUES ('Luis Gallego')" 

//base.execute "INSERT INTO Tramitadores ( Nombre ) VALUES ('Alberto')"
//base.execute "INSERT INTO Tramitadores ( Nombre ) VALUES ('Oscar')"

//base.execute "INSERT INTO Claves ( Nombre, Clave, Nivel, tramitadores ) VALUES ('joe','x','administrador','()')"

//base.execute "INSERT INTO Fases ( Id, Texto ) VALUES (38,'Pendiente de apelación')"
//base.execute "INSERT INTO Fases ( Id, Texto ) VALUES (39,'Pendiente de talón')"
//base.execute "INSERT INTO Fases ( Id, Texto ) VALUES (55,'Pendiente de hacer pagos a profesionales')"
//base.execute "INSERT INTO Fases ( Id, Texto ) VALUES (65,'Asistencia Juridica Demandada')"
//base.execute "INSERT INTO Fases ( Id, Texto ) VALUES (40000,'Monitorio')"

//base.execute "ALTER TABLE Siniestro ADD COLUMN OtrosContrario MEMO"
//base.execute "ALTER TABLE Siniestro ADD COLUMN OtrosDescripcion MEMO"

//---------------------------------------------------------------
// 20/02/2008
// Nombre fiscal en profesionales
// Cambia: ProfesionalMailing.asp, ProfesionalModificar.asp
//base.execute "ALTER TABLE Profesionales ADD COLUMN NombreFiscal CHAR(200)"

//---------------------------------------------------------------
// 21/02/2008
// Notas del siniestro por separado
// Cambia: SiniestroNotasActualizar.asp, SiniestroOtrosActualizar.asp, Siniestro.asp, SiniestroAnadir.asp, SiniestroOtrosAnadir.asp, SiniestroOtros.asp
//base.execute "CREATE TABLE NotasSiniestro (Id AUTOINCREMENT PRIMARY KEY,SiniestroId INT,Notas MEMO)"
//base.execute "INSERT INTO NotasSiniestro ( SiniestroId, Notas ) SELECT Siniestro.Id AS SiniestroId, Siniestro.Notas FROM Siniestro"
//base.execute "ALTER TABLE Siniestro DROP COLUMN Notas"

//---------------------------------------------------------------
// 31/03/2008
// Notas del siniestro por separado
// Cambia: SiniestroNotasActualizar2.asp, Siniestro.asp, SiniestroOtros.asp
//base.execute "ALTER TABLE NotasSiniestro ADD COLUMN usuario TEXT"
//base.execute "ALTER TABLE NotasSiniestro ADD COLUMN fecha DATE"
//base.execute "UPDATE NotasSiniestro SET usuario='anterior'"
//base.execute "UPDATE NotasSiniestro SET fecha=#1/1/2000#"


//---------------------------------------------------------------
// 31/03/2008
// Fecha del cobro por rumbo y que esa la base para los 2 meses de la AJ
// Cambia: Siniestro.asp, SiniestrActualizar.asp, Principal.asp
//base.execute "ALTER TABLE Siniestro ADD COLUMN FechaCobrorumbo DATE"

//---------------------------------------------------------------
// 30/04/2008
// Contrato en agentes
// Cambia: AgenteModificar.asp, AgenteLista.asp, AgenteListarSalida.asp
mysql_query("ALTER TABLE Agentes ADD COLUMN Contrato BIT",$base);
//---------------------------------------------------------------
// 31/03/2008
// AJ cobrada
// Cambia: Siniestro.asp, SiniestrActualizar.asp, Principal.asp
//base.execute "ALTER TABLE Siniestro ADD COLUMN AJCobrada BIT"

mysql_close($base);
header("Location: "."Principal.asp");
?>

