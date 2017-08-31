<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">
 
        <title>PHP Customerdb - Dashboard Template for Bootstrap</title>
                <!-- Jquery JS file -->

        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css" />
 
    
        


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
 
    <body>
        <!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>
        <!-- Content Section -->
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>PHP and MySQL CRUD Operations</h2>
<div class="pull-right">
<button class="btn btn-default" data-toggle="modal" data-target="#add_update_record_modal">Modificar Empleado</button>
</div>

<div class="pull-right">
<button class="btn btn-default" data-toggle="modal" data-target="#search_record_modal">Buscar Empleado</button>
</div>
<div class="pull-right">
<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Nuevo Empleado</button>
</div>

</div>
</div>
<div class="row">
<div class="col-md-12">
<h4>Records:</h4>
<div class="records_content"></div>
</div>
</div>
</div>
<!-- /Content Section -->




<!-- Bootstrap Modal - To Add New Record -->
<!-- Modal -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Nuevo Empleado</h4>
</div>
    

    
<div class="modal-body">
    
      <form action="" method="post">
 

<div class="form-group">
<label for="codigoForm">Codigo</label>
<input type="text" name="codigoForm" placeholder="Codigo" class="form-control" />
</div>

<div class="form-group">
<label for="divisionForm">Division</label>
<input type="text" name="divisionForm" placeholder="Division" class="form-control" />
</div>

<div class="form-group">
<label for="A_RecibirForm">A Recibir</label>
<input type="text" name="A_RecibirForm" placeholder="A Recibir" class="form-control" />
</div>
    
    <div class="form-group">
<label for="SBS_Tabla_200_Tipo_de_participeForm">SBS_Tabla_200_Tipo_de_participe</label>
<!--<input type="text" name="SBS_Tabla_200_Tipo_de_participeForm" placeholder="SBS_Tabla_200_Tipo_de_participe" class="form-control" />-->

  <label for="sel1">Select list:</label>
  <select class="form-control" name="SBS_Tabla_200_Tipo_de_participeForm">
    <option>A. ACTIVO</option>
    <option>PASI</option>
    <option>3</option>
    <option>4</option>
  </select>

</div>
    
    
    <div class="form-group">
<label for="EstadoForm">Estado</label>
<input type="text" name="EstadoForm" placeholder="Estado" class="form-control" />
</div>
    
    <div class="form-group">
<label for="SBS_Tabla_40_Tipo_de_deudorForm">SBS_Tabla_40_Tipo_de_deudor</label>
<input type="text" name="SBS_Tabla_40_Tipo_de_deudorForm" placeholder="SBS_Tabla_40_Tipo_de_deudor" class="form-control" />
</div>
    
    <div class="form-group">
<label for="EmpleadoForm">Empleado</label>
<input type="text" name="EmpleadoForm" placeholder="Empleado" class="form-control" />
</div>
         
     
        
          
           <div class="form-group">
<label for="SBS_Tabla_8_GeneroForm">SBS_Tabla_8_Genero</label>
<input type="text" name="SBS_Tabla_8_GeneroForm" placeholder="SBS_Tabla_8_Genero" class="form-control" />
</div>

             <div class="form-group">
<label for="IdentificacionForm">Identificacion</label>
<input type="text" name="IdentificacionForm" placeholder="Identificacion" class="form-control" />
</div>

             <div class="form-group">
<label for="SBS_Tabla_4_Tipo_de_IdentificacionForm">SBS_Tabla_4_Tipo_de_Identificacion</label>
<input type="text" name="SBS_Tabla_4_Tipo_de_IdentificacionForm" placeholder="SBS_Tabla_4_Tipo_de_Identificacion" class="form-control" />
</div>

             <div class="form-group">
<label for="NacimientoForm">Nacimiento</label>
<input type="text" name="NacimientoForm" placeholder="aaaa-mm-dd" class="form-control" />
</div>

          
  
          
             <div class="form-group">
<label for="DireccionForm">Direccion</label>
<input type="text" name="DireccionForm" placeholder="Direccion" class="form-control" />
</div>

             <div class="form-group">
<label for="TelefonoForm">Telefono</label>
<input type="text" name="TelefonoForm" placeholder="Telefono" class="form-control" />
</div>

             <div class="form-group">
<label for="IngresoForm">Ingreso</label>
<input type="text" name="IngresoForm" placeholder="aaaa-mm-dd" class="form-control" />
</div>

             <div class="form-group">
<label for="Tipo_CuentaForm">Tipo_Cuenta</label>
<input type="text" name="Tipo_CuentaForm" placeholder="Tipo_Cuenta" class="form-control" />
</div>

             <div class="form-group">
<label for="BancoForm">Banco</label>
<input type="text" name="BancoForm" placeholder="Banco" class="form-control" />
</div>

             <div class="form-group">
<label for="Numero_CuentaForm">Numero_Cuenta</label>
<input type="text" name="Numero_CuentaForm" placeholder="Numero_Cuenta" class="form-control" />
</div>

             <div class="form-group">
<label for="Interes_GanadoForm">Interes_Ganado</label>
<input type="text" name="Interes_GanadoForm" placeholder="Interes_Ganado" class="form-control" />
</div>

             <div class="form-group">
<label for="Centro_CostoForm">Centro_Costo</label>
<input type="text" name="Centro_CostoForm" placeholder="Centro_Costo" class="form-control" />
</div>

    
          
             <div class="form-group">
<label for="Tipo_ClienteForm">Tipo_Cliente</label>
<input type="text" name="Tipo_ClienteForm" placeholder="Tipo_Cliente" class="form-control" />
</div>

             <div class="form-group">
<label for="SalaForm">Sala</label>
<input type="text" name="SalaForm" placeholder="Sala" class="form-control" />
</div>

             <div class="form-group">
<label for="SBS_Tabla_183_Estado_CivilForm">SBS_Tabla_183_Estado_Civil</label>
<input type="text" name="SBS_Tabla_183_Estado_CivilForm" placeholder="SBS_Tabla_183_Estado_Civil" class="form-control" />
</div>

             <div class="form-group">
<label for="SBS_Tabla_195_Estado_ParticipeForm">SBS_Tabla_195_Estado_Participe</label>
<input type="text" name="SBS_Tabla_195_Estado_ParticipeForm" placeholder="SBS_Tabla_195_Estado_Participe" class="form-control" />
</div>
                      
      
         
          
             <div class="form-group">
<label for="SBS_Tabla_193_Tipo_SistemaForm">SBS_Tabla_193_Tipo_Sistema</label>
<input type="text" name="SBS_Tabla_193_Tipo_SistemaForm" placeholder="SBS_Tabla_193_Tipo_Sistema" class="form-control" />
</div>

             <div class="form-group">
<label for="SBS_Tabla_196_Calculo_AportacionForm">SBS_Tabla_196_Calculo_Aportacion</label>
<input type="text" name="SBS_Tabla_196_Calculo_AportacionForm" placeholder="SBS_Tabla_196_Calculo_Aportacion" class="form-control" />
</div>

             <div class="form-group">
<label for="SBS_Tabla_197_Relacion_LaboralForm">SBS_Tabla_197_Relacion_Laboral</label>
<input type="text" name="SBS_Tabla_197_Relacion_LaboralForm" placeholder="SBS_Tabla_197_Relacion_Laboral" class="form-control" />
</div>

             <div class="form-group">
<label for="SBS_Tabla_11_Estatus_RegistroForm">SBS_Tabla_11_Estatus_Registro</label>
<input type="text" name="SBS_Tabla_11_Estatus_RegistroForm" placeholder="SBS_Tabla_11_Estatus_Registro" class="form-control" />
</div>

             <div class="form-group">
<label for="SBS_Tabla_194_Tpo_PrestacionForm">SBS_Tabla_194_Tpo_Prestacion</label>
<input type="text" name="SBS_Tabla_194_Tpo_PrestacionForm" placeholder="SBS_Tabla_194_Tpo_Prestacion" class="form-control" />
</div>

             <div class="form-group">
<label for="Reserva_IndividualForm">Reserva_Individual</label>
<input type="text" name="Reserva_IndividualForm" placeholder="Reserva_Individual" class="form-control" />
</div>

             <div class="form-group">
<label for="ConyugeForm">Conyuge</label>
<input type="text" name="ConyugeForm" placeholder="Conyuge" class="form-control" />
</div>

            
          
             <div class="form-group">
<label for="Conyuge_IdentificacionForm">Conyuge_Identificacion</label>
<input type="text" name="Conyuge_IdentificacionForm" placeholder="Conyuge_Identificacion" class="form-control" />
</div>

             <div class="form-group">
<label for="SBS_Tabla_8_Genero_ConyugeForm">SBS_Tabla_8_Genero_Conyuge</label>
<input type="text" name="SBS_Tabla_8_Genero_ConyugeForm" placeholder="SBS_Tabla_8_Genero_Conyuge" class="form-control" />
</div>

             <div class="form-group">
<label for="Conyuge_NacimientoForm">Conyuge_Nacimiento</label>
<input type="text" name="Conyuge_NacimientoForm" placeholder="aaaa-mm-dd" class="form-control" />
</div>

         
         
         
         
         

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
<button type="submit" class="btn btn-primary" onclick="addRecord()">Add Record</button>
</form>
</div>
</div>
</div>
</div>


     
                <!-- Bootstrap Modal - To Boton Search -->
<!-- Modal -->
<div class="modal fade" id="search_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Buscar Empleado</h4>
</div>
<div class="modal-body">
    
    
    <form action="" method="request">

<div class="form-group">
<label for="codigoFormU">Codigo</label>
<input type="text" name="codigoFormU" placeholder="Por favor Ingrese el Codigo" class="form-control" />

</div>

      

    
    
  

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
<button type="submit" class="btn btn-primary" onclick="addRecord()">Add Record</button>

          </form>
    
</div>
</div>
</div>
</div>
        
       
        
       


     
                <!-- Bootstrap Modal - To Update Record -->
<!-- Modal -->
<div class="modal fade" id="add_update_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Modificar Empleado</h4>
</div>
<div class="modal-body">
    
      <form action="" method="get">
 



<div class="form-group">
<label for="codigoFormU">Codigo</label>
<input type="text" name="codigoFormU" placeholder="<?php 
       
     if($_REQUEST)
      {//UPDATE `fondoprevisible`.`empleado` SET `A_Recibir`='84.055', `Estado`='Activoo' WHERE `Codigo`='262';

      
      


  if (!$link = mysql_connect('localhost', 'franz', 'Gavilan24$')) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('fondoprevisible', $link)) {
    echo 'Could not select database';
    exit;
}
// "UPDATE `fondoprevisible`.`empleado` SET `Division`='".$_GET['divisionFormU']."' , `A_Recibir`='".$_GET['A_RecibirFormU']."' WHERE `Codigo`='".$_GET['codigoFormU']."';";
$sql    = "SELECT Codigo FROM fondoprevisible.empleado WHERE `Codigo`='".$_REQUEST['codigoFormU']."';";
$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
    echo $row['Codigo'];
}

mysql_free_result($result);
      
      
}



      
      ?>" class="form-control" />

</div>

      

<div class="form-group">
<label for="divisionFormU">Division</label>
<input type="text" name="divisionFormU"  value="<?php 
       
     if($_REQUEST)
      {//UPDATE `fondoprevisible`.`empleado` SET `A_Recibir`='84.055', `Estado`='Activoo' WHERE `Codigo`='262';

      
      


  if (!$link = mysql_connect('localhost', 'franz', 'Gavilan24$')) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('fondoprevisible', $link)) {
    echo 'Could not select database';
    exit;
}
// "UPDATE `fondoprevisible`.`empleado` SET `Division`='".$_GET['divisionFormU']."' , `A_Recibir`='".$_GET['A_RecibirFormU']."' WHERE `Codigo`='".$_GET['codigoFormU']."';";
$sql    = "SELECT Division FROM fondoprevisible.empleado WHERE `Codigo`='".$_REQUEST['codigoFormU']."';";
$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
    echo $row['Division'];
}

mysql_free_result($result);
      
      
}



      
      ?>"  class="form-control" />
</div>

<div class="form-group">
<label for="A_RecibirFormU">A Recibir</label>
<input type="text" name="A_RecibirFormU" value= "<?php 
    
     if($_REQUEST)
      {//UPDATE `fondoprevisible`.`empleado` SET `A_Recibir`='84.055', `Estado`='Activoo' WHERE `Codigo`='262';

      
      


  if (!$link = mysql_connect('localhost', 'franz', 'Gavilan24$')) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('fondoprevisible', $link)) {
    echo 'Could not select database';
    exit;
}
// "UPDATE `fondoprevisible`.`empleado` SET `Division`='".$_GET['divisionFormU']."' , `A_Recibir`='".$_GET['A_RecibirFormU']."' WHERE `Codigo`='".$_GET['codigoFormU']."';";
$sql    = "SELECT A_Recibir FROM fondoprevisible.empleado WHERE `Codigo`='".$_REQUEST['codigoFormU']."';";
$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
    echo $row['A_Recibir'];
}

mysql_free_result($result);
      
      
}


      
      ?>" class="form-control" />
</div>
    
    <div class="form-group">
<label for="SBS_Tabla_200_Tipo_de_participeFormU">SBS_Tabla_200_Tipo_de_participe</label>
<input type="text" name="SBS_Tabla_200_Tipo_de_participeFormU" placeholder="SBS_Tabla_200_Tipo_de_participe" class="form-control" />
</div>
    
    
    <div class="form-group">
<label for="EstadoFormU">Estado</label>
<input type="text" name="EstadoFormU" placeholder="Estado" class="form-control" />
</div>
    
    <div class="form-group">
<label for="SBS_Tabla_40_Tipo_de_deudorFormU">SBS_Tabla_40_Tipo_de_deudor</label>
<input type="text" name="SBS_Tabla_40_Tipo_de_deudorFormU" placeholder="SBS_Tabla_40_Tipo_de_deudor" class="form-control" />
</div>
    
    <div class="form-group">
<label for="EmpleadoFormU">Empleado</label>
<input type="text" name="EmpleadoFormU" placeholder="Empleado" class="form-control" />
</div>
          
           <div class="form-group">
<label for="SBS_Tabla_8_GeneroFormU">SBS_Tabla_8_Genero</label>
<input type="text" name="SBS_Tabla_8_GeneroFormU" placeholder="SBS_Tabla_8_Genero" class="form-control" />
</div>
           <div class="form-group">
<label for="IdentificacionFormU">Identificacion</label>
<input type="text" name="IdentificacionFormU" placeholder="Identificacion" class="form-control" />
</div>
           <div class="form-group">
<label for="SBS_Tabla_4_Tipo_de_IdentificacionFormU">SBS_Tabla_4_Tipo_de_Identificacion</label>
<input type="text" name="SBS_Tabla_4_Tipo_de_IdentificacionFormU" placeholder="SBS_Tabla_4_Tipo_de_Identificacion" class="form-control" />
</div>
           <div class="form-group">
<label for="NacimientoFormU">Nacimiento</label>
<input type="text" name="NacimientoFormU" placeholder="Nacimiento" class="form-control" />
</div>
           <div class="form-group">
<label for="DireccionFormU">Direccion</label>
<input type="text" name="DireccionFormU" placeholder="Direccion" class="form-control" />
</div>
           <div class="form-group">
<label for="TelefonoFormU">Telefono</label>
<input type="text" name="TelefonoFormU" placeholder="Telefono" class="form-control" />
</div>
           <div class="form-group">
<label for="IngresoFormU">Ingreso</label>
<input type="text" name="IngresoFormU" placeholder="Ingreso" class="form-control" />
</div>
           <div class="form-group">
<label for="Tipo_CuentaFormU">Tipo_Cuenta</label>
<input type="text" name="Tipo_CuentaFormU" placeholder="Tipo_Cuenta" class="form-control" />
</div>
           <div class="form-group">
<label for="BancoFormU">Banco</label>
<input type="text" name="BancoFormU" placeholder="Banco" class="form-control" />
</div>
           <div class="form-group">
<label for="Numero_CuentaFormU">Numero_Cuenta</label>
<input type="text" name="Numero_CuentaFormU" placeholder="Numero_Cuenta" class="form-control" />
</div>
           <div class="form-group">
<label for="Interes_GanadoFormU">Interes_Ganado</label>
<input type="text" name="Interes_GanadoFormU" placeholder="Interes_Ganado" class="form-control" />
</div>
           <div class="form-group">
<label for="Centro_CostoFormU">Centro_Costo</label>
<input type="text" name="Centro_CostoFormU" placeholder="Centro_Costo" class="form-control" />
</div>
           <div class="form-group">
<label for="Tipo_ClienteFormU">Tipo_Cliente</label>
<input type="text" name="Tipo_ClienteFormU" placeholder="Tipo_Cliente" class="form-control" />
</div>
           <div class="form-group">
<label for="SalaFormU">Sala</label>
<input type="text" name="SalaFormU" placeholder="Sala" class="form-control" />
</div>
           <div class="form-group">
<label for="SBS_Tabla_183_Estado_CivilFormU">SBS_Tabla_183_Estado_Civil</label>
<input type="text" name="SBS_Tabla_183_Estado_CivilFormU" placeholder="SBS_Tabla_183_Estado_Civil" class="form-control" />
</div>
           <div class="form-group">
<label for="SBS_Tabla_195_Estado_ParticipeFormU">SBS_Tabla_195_Estado_Participe</label>
<input type="text" name="SBS_Tabla_195_Estado_ParticipeFormU" placeholder="SBS_Tabla_195_Estado_Participe" class="form-control" />
</div>
           <div class="form-group">
<label for="SBS_Tabla_193_Tipo_SistemaFormU">SBS_Tabla_193_Tipo_Sistema</label>
<input type="text" name="SBS_Tabla_193_Tipo_SistemaFormU" placeholder="SBS_Tabla_193_Tipo_Sistema" class="form-control" />
</div>
           <div class="form-group">
<label for="SBS_Tabla_196_Calculo_AportacionFormU">SBS_Tabla_196_Calculo_Aportacion</label>
<input type="text" name="SBS_Tabla_196_Calculo_AportacionFormU" placeholder="SBS_Tabla_196_Calculo_Aportacion" class="form-control" />
</div>
           <div class="form-group">
<label for="SBS_Tabla_197_Relacion_LaboralFormU">SBS_Tabla_197_Relacion_Laboral</label>
<input type="text" name="SBS_Tabla_197_Relacion_LaboralFormU" placeholder="SBS_Tabla_197_Relacion_Laboral" class="form-control" />
</div>
           <div class="form-group">
<label for="SBS_Tabla_11_Estatus_RegistroFormU">SBS_Tabla_11_Estatus_Registro</label>
<input type="text" name="SBS_Tabla_11_Estatus_RegistroFormU" placeholder="SBS_Tabla_11_Estatus_Registro" class="form-control" />
</div>
           <div class="form-group">
<label for="SBS_Tabla_194_Tpo_PrestacionFormU">SBS_Tabla_194_Tpo_Prestacion</label>
<input type="text" name="SBS_Tabla_194_Tpo_PrestacionFormU" placeholder="SBS_Tabla_194_Tpo_Prestacion" class="form-control" />
</div>
           <div class="form-group">
<label for="Reserva_IndividualFormU">Reserva_Individual</label>
<input type="text" name="Reserva_IndividualFormU" placeholder="Reserva_Individual" class="form-control" />
</div>
           <div class="form-group">
<label for="ConyugeFormU">Conyuge</label>
<input type="text" name="ConyugeFormU" placeholder="Conyuge" class="form-control" />
</div>
           <div class="form-group">
<label for="Conyuge_IdentificacionFormU">Conyuge_Identificacion</label>
<input type="text" name="Conyuge_IdentificacionFormU" placeholder="Conyuge_Identificacion" class="form-control" />
</div>
           <div class="form-group">
<label for="SBS_Tabla_8_Genero_ConyugeFormU">SBS_Tabla_8_Genero_Conyuge</label>
<input type="text" name="SBS_Tabla_8_Genero_ConyugeFormU" placeholder="SBS_Tabla_8_Genero_Conyuge" class="form-control" />
</div>
           <div class="form-group">
<label for="Conyuge_NacimientoFormU">Conyuge_Nacimiento</label>
<input type="text" name="Conyuge_NacimientoFormU" placeholder="Conyuge_Nacimiento" class="form-control" />
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
<button type="submit" class="btn btn-primary" onclick="addRecord()">Update Record</button>
</form>
          
</div>
</div>
</div>
</div>
        
       
        
        
           



        
  













        
        <?php
 
      // Dirección o IP del servidor MySQL
      $host = "localhost";
 
      // Puerto del servidor MySQL
      $puerto = "3306";
 
      // Nombre de usuario del servidor MySQL
      $usuario = "franz";
 
      // Contraseña del usuario
      $contrasena = "gavilan24";
 
      // Nombre de la base de datos
      $baseDeDatos ="fondoprevisible";
 
      // Nombre de la tabla a camellar
      $tabla = "empleado";
 
      function Conectarse()
      {
         global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
 
         if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) 
         { 
            echo "Error conectando a la base de datos.<br>"; 
            exit(); 
            }
         else
         {
            echo "Listo, estamos conectados.<br>";
         }
         if (!mysqli_select_db($link, $baseDeDatos)) 
         { 
            echo "Error seleccionando la base de datos.<br>"; 
            exit(); 
         }
         else
         {
            echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
         }
      return $link; 
      } 
 
      $link = Conectarse();
 //   $queryInsert = "INSERT INTO $tabla (Nombre, Apellidos) VALUES ('".$_POST['nombreForm']."', '".$_POST['apellidoForm']."');";
      if($_POST)
      {
         $queryInsert = "INSERT INTO $tabla (Codigo, Division, A_Recibir, SBS_Tabla_200_Tipo_de_participe, "
                 . "Estado, SBS_Tabla_40_Tipo_de_deudor, Empleado, SBS_Tabla_8_Genero, "
                 . "Identificacion, SBS_Tabla_4_Tipo_de_Identificacion, Nacimiento, Direccion, "
                 . "Telefono, Ingreso, Tipo_Cuenta, Banco, Numero_Cuenta, Interes_Ganado, Centro_Costo,"
                 . " Tipo_Cliente, Sala, SBS_Tabla_183_Estado_Civil, SBS_Tabla_195_Estado_Participe, "
                 . "SBS_Tabla_193_Tipo_Sistema, SBS_Tabla_196_Calculo_Aportacion,"
                 . " SBS_Tabla_197_Relacion_Laboral, SBS_Tabla_11_Estatus_Registro,"
                 . " SBS_Tabla_194_Tpo_Prestacion, Reserva_Individual, Conyuge, "
                 . "Conyuge_Identificacion, SBS_Tabla_8_Genero_Conyuge, Conyuge_Nacimiento) VALUES ('".$_POST['codigoForm']."', "
                 . "'".$_POST['divisionForm']."', '".$_POST['A_RecibirForm']."', "
                 . "'".$_POST['SBS_Tabla_200_Tipo_de_participeForm']."', '".$_POST['EstadoForm']."',"
                 . "'".$_POST['SBS_Tabla_40_Tipo_de_deudorForm']."', '".$_POST['EmpleadoForm']."', "
                 . "'".$_POST['SBS_Tabla_8_GeneroForm']."', '".$_POST['IdentificacionForm']."', "
                 . "'".$_POST['SBS_Tabla_4_Tipo_de_IdentificacionForm']."', '".$_POST['NacimientoForm']."', "
                 . "'".$_POST['DireccionForm']."', '".$_POST['TelefonoForm']."',"
                 . " '".$_POST['IngresoForm']."',  '".$_POST['Tipo_CuentaForm']."', '".$_POST['BancoForm']."', "
                 . "'".$_POST['Numero_CuentaForm']."', '".$_POST['Interes_GanadoForm']."', "
                 . "'".$_POST['Centro_CostoForm']."', '".$_POST['Tipo_ClienteForm']."',"
                 . " '".$_POST['SalaForm']."', '".$_POST['SBS_Tabla_183_Estado_CivilForm']."', "
                 . "'".$_POST['SBS_Tabla_195_Estado_ParticipeForm']."', '".$_POST['SBS_Tabla_193_Tipo_SistemaForm']."',"
                 . " '".$_POST['SBS_Tabla_196_Calculo_AportacionForm']."', "
                 . "'".$_POST['SBS_Tabla_197_Relacion_LaboralForm']."', "
                 . "'".$_POST['SBS_Tabla_11_Estatus_RegistroForm']."', "
                 . "'".$_POST['SBS_Tabla_194_Tpo_PrestacionForm']."', "
                 . "'".$_POST['Reserva_IndividualForm']."', '".$_POST['ConyugeForm']."', "
                 . "'".$_POST['Conyuge_IdentificacionForm']."', '".$_POST['SBS_Tabla_8_Genero_ConyugeForm']."', '".$_POST['Conyuge_NacimientoForm']."');";
 
         $resultInsert = mysqli_query($link, $queryInsert); 
 
         if($resultInsert)
         {
            echo "<strong>Se ingresaron los registros con exito</strong>. <br>";
         }
         else
         {
            echo "No se ingresaron los registros. <br>";
         }
 
      }
      

 else if($_GET)
      {//UPDATE `fondoprevisible`.`empleado` SET `A_Recibir`='84.055', `Estado`='Activoo' WHERE `Codigo`='262';

         $queryModify = "UPDATE `fondoprevisible`.`empleado` SET `Division`='".$_GET['divisionFormU']."' , `A_Recibir`='".$_GET['A_RecibirFormU']."' WHERE `Codigo`='".$_GET['codigoFormU']."';";
 
         $resultModify = mysqli_query($link, $queryModify); 
 
         if($resultModify)
         {
            echo "<strong>Se modificaron los registros con exito</strong>. <br>";
         }
         else
         {
            echo "No se modificaron los registros. <br>";
         }
 
      }
      
      
        else if($_REQUEST)
      {//UPDATE `fondoprevisible`.`empleado` SET `A_Recibir`='84.055', `Estado`='Activoo' WHERE `Codigo`='262';
//SELECT Division FROM fondoprevisible.empleado WHERE Codigo = 262;
         $queryRequest = "SELECT Division FROM fondoprevisible.empleado WHERE Codigo = '".$_REQUEST['codigoFormU']."';";
 
         $resultRequest= mysqli_query($link, $queryRequest); 
 
         if($resultRequest)
         {
            //echo "<strong>Se cargaron los registros con exito</strong>. <br>";
         }
         else
         {
         //   echo "No se cargaron los registros. <br>";
         }
 
      }
    
       
      
      
 
     // $query = "SELECT Codigo, Division , A Recibir, SBS Tabla 200 Tipo de participe, Estado, SBS Tabla 40 Tipo de deudor, Empleado, SBS Tabla 8 Genero, Identificacion, SBS Tabla 4 Tipo de Identificacion, Nacimiento FROM $tabla;";
 $query = "SELECT Codigo, Division, A_Recibir, "
         . "SBS_Tabla_200_Tipo_de_participe, Estado, SBS_Tabla_40_Tipo_de_deudor, Empleado, "
         . "SBS_Tabla_8_Genero, Identificacion, SBS_Tabla_4_Tipo_de_Identificacion, Nacimiento, "
         . "Direccion, Telefono, Ingreso, Tipo_Cuenta, Banco, Numero_Cuenta, Interes_Ganado, Centro_Costo, "
         . "Tipo_Cliente, Sala, SBS_Tabla_183_Estado_Civil, SBS_Tabla_195_Estado_Participe,"
         . "SBS_Tabla_193_Tipo_Sistema, SBS_Tabla_196_Calculo_Aportacion, SBS_Tabla_197_Relacion_Laboral,"
         . "SBS_Tabla_11_Estatus_Registro, SBS_Tabla_194_Tpo_Prestacion, Reserva_Individual, Conyuge, "
         . "Conyuge_Identificacion, SBS_Tabla_8_Genero_Conyuge, Conyuge_Nacimiento  FROM $tabla;";
      $result = mysqli_query($link, $query); 
 
      ?>
 
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Empleados</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                
                
                </div>
            </div>
        </nav>
 
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                
                    <ul class="nav nav-sidebar">            
                       
                        <li><a href="">Clientes</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">            
                     
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header">Fondo Previsible</h1>
 
                    
                     
                    <h2 class="sub-header">Empleados</h2>                
                     
                    <!--    
                            DESARROLLO PHP YA REALIZADO
                    -->       
                     
                     
                </div>
            </div>
        </div>
        
        



        
 
        
        
        
        
        
        
        
        
        
        
        <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Division</th>
                                    <th>A Recibir</th>
                                    <th>SBS_Tabla_200_Tipo_de_participe</th>
                                    <th>Estado</th>
                                    <th>SBS_Tabla_40_Tipo_de_deudor</th>
                                    <th>Empleado </th>
                                    <th>SBS_Tabla_8_Genero</th>
                                    <th>Identificacion</th>
                                    <th>SBS_Tabla_4_Tipo_de_Identificacion</th>
                                    <th>Nacimiento</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Ingreso</th>
                                    <th>Tipo_Cuenta</th>
                                    <th>Banco</th>
                                    <th>Numero_Cuenta</th>
                                    <th>Interes_Ganado</th>
                                    <th>Centro_Costo</th>
                                    <th>Tipo_Cliente</th>
                                    <th>Sala</th>
                                    <th>SBS_Tabla_183_Estado_Civil</th>
                                    <th>SBS_Tabla_195_Estado_Participe</th>
                                    <th>SBS_Tabla_193_Tipo_Sistema</th>
                                    <th>SBS_Tabla_196_Calculo_Aportacion</th>
                                    <th>SBS_Tabla_197_Relacion_Laboral</th>
                                    <th>SBS_Tabla_11_Estatus_Registro</th>
                                    <th>SBS_Tabla_194_Tpo_Prestacion</th>
                                    <th>Reserva_Individual</th>
                                    <th>Conyuge</th>
                                    <th>Conyuge_Identificacion</th>
                                    <th>SBS_Tabla_8_Genero_Conyuge</th>
                                    <th>Conyuge_Nacimiento</th>
                                     <th>Accion</th>
                                </tr>
                            </thead>
                                         
                            
                            
                            
                            
                            
                            
                                <?php
 
      while($row = mysqli_fetch_array($result))
      { 
         echo "<tr>";
         echo "<td>";
         echo $row["Codigo"];
         echo "</td>";
         echo "<td>";
         echo $row["Division"];
         echo "</td>"; 
         echo "<td>";
         echo $row["A_Recibir"];
         echo "</td>";   
            echo "<td>";
         echo $row["SBS_Tabla_200_Tipo_de_participe"];
         echo "</td>"; 
                  echo "<td>";
         echo $row["Estado"];
         echo "</td>";
                  echo "<td>";
         echo $row["SBS_Tabla_40_Tipo_de_deudor"];
         echo "</td>";
                    echo "<td>";
         echo $row["Empleado"];
         echo "</td>";
           echo "<td>";
         echo $row["SBS_Tabla_8_Genero"];
         echo "</td>";
            echo "<td>";
         echo $row["Identificacion"];
         echo "</td>";
                     echo "<td>";
         echo $row["SBS_Tabla_4_Tipo_de_Identificacion"];
         echo "</td>";
         

         
         
                  echo "<td>";
         echo $row["Nacimiento"];
         echo "</td>";
                     echo "<td>";
         echo $row["Direccion"];
         echo "</td>";
                  echo "<td>";
         echo $row["Telefono"];
         echo "</td>";
                  echo "<td>";
         echo $row["Ingreso"];
         echo "</td>";
                  echo "<td>";
         echo $row["Tipo_Cuenta"];
         echo "</td>";
                  echo "<td>";
         echo $row["Banco"];
         echo "</td>";
                  echo "<td>";
         echo $row["Numero_Cuenta"];
         echo "</td>";
                  echo "<td>";
         echo $row["Interes_Ganado"];
         echo "</td>";
                  echo "<td>";
         echo $row["Centro_Costo"];
         echo "</td>";
                  echo "<td>";
         echo $row["Tipo_Cliente"];
         echo "</td>";
                  echo "<td>";
         echo $row["Sala"];
         echo "</td>";
         
   
                  echo "<td>";
         echo $row["SBS_Tabla_183_Estado_Civil"];
         echo "</td>";
                  echo "<td>";
         echo $row["SBS_Tabla_195_Estado_Participe"];
         echo "</td>";
                  echo "<td>";
         echo $row["SBS_Tabla_193_Tipo_Sistema"];
         echo "</td>";
                  echo "<td>";
         echo $row["SBS_Tabla_196_Calculo_Aportacion"];
         echo "</td>";
                  echo "<td>";
         echo $row["SBS_Tabla_197_Relacion_Laboral"];
         echo "</td>";
                  echo "<td>";
         echo $row["SBS_Tabla_11_Estatus_Registro"];
         echo "</td>";
                  echo "<td>";
         echo $row["SBS_Tabla_194_Tpo_Prestacion"];
         echo "</td>";
                  echo "<td>";
         echo $row["Reserva_Individual"];
         echo "</td>";
                  echo "<td>";
         echo $row["Conyuge"];
         echo "</td>";
                  echo "<td>";
         echo $row["Conyuge_Identificacion"];
         echo "</td>";
                  echo "<td>";
         echo $row["SBS_Tabla_8_Genero_Conyuge"];
         echo "</td>";
                  echo "<td>";
         echo $row["Conyuge_Nacimiento"];
         echo "</td>";
         
         
         
         
          echo '<td width=250>';
                            
                                echo ' ';
                                echo '<a class="btn btn-success" data-toggle="modal" data-target="#add_update_record_modal">Modificar</a>';
                                echo ' ';
                                //echo '<a class="btn btn-danger" href="delete.php?id='.$row['Division'].'">Eliminar</a>';
                                echo '</td>';
         
   
             
         
         
         
         echo "</tr>";
         
 
      }
      
      
      
      
      
      
      
      
 
      mysqli_free_result($result); 
 
      mysqli_close($link); 
 
      ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
 
                        </table>                    
                    </div>
   




        
        
        
        
 

         
    </body>
</html>

