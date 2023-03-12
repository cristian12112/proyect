<?php 

$url = 'date.php';
//include('conexion.php');
//$con = conec();

echo date("Y/m/d");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js" 
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    
</head>
<body>
<header>
    <h1 class="header-h1">the footer hack</h1>
    <nav>
      <ul>
        <a href=""><li>El Hack</li></a>
        <a href=""><li>Qué es un Footer?</li></a>
        <a href=""><li>FAQ sobre Footers</li></a>
        <a href=""><li>Suscribirse a Developeando</li></a>
      </ul>
    </nav>
  </header>
  <div>
    
  </div>
  <form method="POST" id="frm">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nombre</label>
        <input type="text" class="form-control" id="filter_nombre" name="filter_nombre" placeholder="Nombre" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Apellido</label>
        <input type="text" class="form-control" id="filter_apellido" name="filter_apellido" placeholder="Password" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Tipo de mascota</label>
      <input type="" class="form-control" id="filter_tipo_mas" name="filter_tipo_mas" placeholder="1234 Main St" required>
    </div>
    <div class="form-group">
      <label for="inputAddress">Correo</label>
      <input type="email" class="form-control" id="filter_email" name="filter_email" placeholder="1234 Main St" required>
    </div>
    <div class="form-group">
      <label for="inputAddress2">Nombre de la mascota</label>
      <input type="text" class="form-control" id="filter_nom_mascota" name="filter_nom_mascota" placeholder="Apartment, studio, or floor" required>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Fecha</label>
        <input type="date"  class="form-control" id="filter_fecha_cita" name="filter_fecha_cita" value="<?php echo date('Y/m/d'); ?>" required> 
      </div>  
      <div class="form-group col-md-6">
        <label for="inputState">Dni</label>
        <input type="text" class="form-control" id="filter_dni" name="filter_dni" placeholder="Dni" maxlength="8" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
      </div>
      
    </div>
    
    <button type="submit" id="enviar" class="btn btn-primary">Sign in</button>
    <button type="submit" class="btn btn-primary" onclick="grid();" style="background: rgb(27, 27, 26);">redirigir</button>
  </form>
  <div id="mensaje"></div>
  
  <footer>
    <p>Developeando 2021 | Footer Hack</p>
  </footer>
  
</body>
<script>
  var nom     = $('#filter_nombre').val().length;
  var ape     = $('#filter_apellido').val().length;
  var tipo    = $('#filter_tipo_mas').val().length;
  var email   = $('#filter_email').val().length;
  var nom_mas = $('#filter_nom_mascota').val().length;
  var fecha   = $('#filter_fecha_cita').val().length;
  var dni     = $('#filter_dni').val().length;

  $(document).on("ready", function(){
    enviardatos();
  });

  
  // falta agregar la validacion de por pardte del de js o ponerle un rolback  se vera despues
  function enviardatos(){
    $('#frm').on("submit", function(e){
      e.preventDefault();
      var ft = $(this).serialize();
      if(false ){
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Debe de completar los campos',
      })
      }else{
        $.ajax({
          "method":"POST",
          "url": "insert_citas.php",
          "data":ft
        }).done(function( info ){
            $('#mensaje').addClass("mostrar");
            $('#mensaje').html(info)
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'Generando cita',
              showConfirmButton: false,
              timer: 1500
            })
        });
      }
      
    });
  }
</script>
</html>