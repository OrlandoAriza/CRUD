<?php
session_start();
include("templates/header.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
     <div  class="row align-items-start">
         <div class="col"></div>
         <div class="col">
            <br><br> <br>
              <h2  align="center">Registrar un nuevo usuario</h2>
              <br>
                 <form action="registrar.php" method="POST">
                    <div class="mb-3">
                      <input type="text" class="form-control"  name="nombre"placeholder=" Nombre" required autofocus>
                     </div>
                     <div class="mb-3">
                      <input type="number" class="form-control" name="telefono" placeholder=" Teléfono" required>
                     </div>
                     <div class="mb-3">
                      <input type="e-mail" class="form-control" name="correo" placeholder=" E-mail"required>
                     </div>
                     <div class="mb-3">
                      <input type="text" class="form-control" name="direccion" placeholder=" Dirección de Residencia"required>
                     </div>
                     <div class="mb-3">
                      <input type="text" class="form-control" name="pais" placeholder=" Pais de Origen"required>
                     </div>
                     <div class="mb-3">
                      <input type="text" class="form-control" name="edad" placeholder=" Edad del paciente"required>
                     </div>
                     <div class="mb-3">
                      <input type="text" class="form-control" name="acudiente" placeholder=" Acudiente"required>
                     </div>
                     <div class="mb-3">
                      <input type="text" class="form-control" name="especialista" placeholder=" Nombre del especialista"required>
                     </div>
                     <div class="mb-3">
                      <input type="text" class="form-control" name="motivo" placeholder=" Motivo"required>
                     </div>
                     <div class="mb-3" align="center">
                      <button type="submit" class="btn btn-success">Enviar</button>
                      <a type="button" href="mostrar.php" class="btn btn-danger">volver</a>
                     </div>
                 </form>
         </div>

         <div class="col"></div>

     </div>
     <center><h1 style="font-size:14px">Desarrollado por: ANA LILIA CARVAJAL MAYA -- ORLANDO ARIZA VESGA  --   MARIA ISABEL MERIÑO GARCIA</h1></center>
<?php include("templates/footer.php"); ?>
  
