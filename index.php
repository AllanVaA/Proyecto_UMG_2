<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?> 

<div class="container">
<?php include_once('layouts/header.php'); ?>
<div class="login-page">
    <div class="text-center">
       <h1>Bienvenido</h1>
       <p>Iniciar sesión </p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
          <!--Componer la parte de la correcion de palabras y se agregaron iconos-->
          
              <label for="username" class="control-label"><i class="fa-solid fa-user"></i>  Usuario</label>
              <input type="name" class="form-control" name="username" placeholder="Usuario">
        </div>
        <div class="form-group">
        
            <label for="Password" class="control-label"><i class="fa-solid fa-lock"></i>  Contraseña</label>
            <input type="password" name= "password" class="form-control" placeholder="Contraseña">
        </div>
        <!-- se centro el boton en el login page -->
        <div class="form-group">
                <center><button type="submit" class="btn btn-info  ">Entrar</button></center>
        </div>
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>
</div>