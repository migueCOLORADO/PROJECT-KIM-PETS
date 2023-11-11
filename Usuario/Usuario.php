<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>USUARIO</title>
    <link rel="shorcut icon" href="../../IMG/Kim_pets.jpg">
  </head>

  <body>
    <nav class="menu">
        <div class="logo-box">
          <h1><a href="../../index.php"><</a></h1>
        </div>
    </nav>

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Iniciar Sesión</h2>
            
            <div class="input-cont w50">
              <input type="text" required>
              <span>Documento</span>
            </div>

            <div class="input-cont w50">
                <input type="password" required>
                <span>Contraseña</span>
            </div>

            <div class="input-cont w100">
              <input type="submit" value="ENVIAR">
            </div>
          
            <hr>
            <p class="social-text">O Hazlo Con</p>

            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>

              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>

              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          
          <form class="sign-up-form" action="php/registro_be.php" method="post">
            <h2 class="title">Crea Una Cuenta</h2>
            
            <div class="input-cont w50">
              <input type="text" required name="documento">
              <span>Documento</span>
            </div>

            <div class="input-cont w50">
                <input type="text" required name="nombre">
                <span>Nombre de Usuario</span>
            </div>

            <div class="input-cont w50">
              <input type="email" required name="correo">
              <span>Correo Electronico</span>
            </div>

            <div class="input-cont w50">
                <input type="password" required name="clave">
                <span>Contraseña</span>
            </div>

            <div class="input-cont w100">
              <input type="submit" value="ENVIAR">
            </div>

            <hr>
            
            <p class="social-text">O Hazlo Con</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¡Bienvenido Nuevamente!</h3>
            <p>
              ¿No Tienes un Peludito Perfil? Crea una Cuenta de KIM PETS
            </p>
            <button class="btn" id="sign-up-btn">
              Registrarse
            </button>
          </div>
          <img src="../../IMG/wapg_uwc1_230509.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¡Bienvenido!</h3>
            <p>
              ¿Tienes un Peludito Perfil? Inicia Sesion en tu Cuenta de KIM PETS
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Iniciar Sesión
            </button>
          </div>
          <img src="../../IMG/23yw_le5h_230331.svg" class="image" alt="" id="img-2"/>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
