<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
<div style="position:relative;"><span>
 <img style="width:100%;" src="../img/1.png">
</span>
</div>

<div class="container login-box mt-5">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
  <div class="card " >
    <div class="card-body login-card-body">
      <h2 style="color:skyblue;" class="login-box-msg"><b><i>LOGIN PAGE</i></b></h2>
      <div class="text-center">
        <img src="" style="width:80%; padding-left:20px; position:relatives;">
      </div>

      <form action="function.php" method="post" >
        <div class="input-group mb-3">
          <input type="email" class="form-control user" placeholder="Email" name="user" id="user" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control user" placeholder="Password" name="password" id="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-eye" id="togglePassword"></span>
            </div>
          </div>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col align-self-center">
            <button  type="submit" class="btn btn-primary btn-block signin">Sign In</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<?php
if(isset($_SESSION['login']) && $_SESSION['login'] != '')
{
  ?>
  <script>
    toastr.options = {
      "closeButton": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
    };
    toastr.<?php echo $_SESSION['login_code']; ?>("<?php echo $_SESSION['login']; ?>");
  </script>

<?php
  unset($_SESSION['login']);
}
?>
<script>
  function togglePassword() {
    var passwordInput = document.getElementById('password');
    var eyeIcon = document.getElementById('togglePassword');

    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      eyeIcon.classList.remove('fa-eye');
      eyeIcon.classList.add('fa-eye-slash');
    } else {
      passwordInput.type = 'password';
      eyeIcon.classList.remove('fa-eye-slash');
      eyeIcon.classList.add('fa-eye');
    }
  }


  document.getElementById('togglePassword').addEventListener('click', function () {
    togglePassword();
  });
</script>
</body>
</html>
