<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Form Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>

      <form name="frmlogin"  method="post" action="login.php">
        <p> </p>
        <p><b> Login Form </b></p>
        <p> ชื่อผู้ใช้ :
          <input type="text"   id="Username" required name="Username" placeholder="Username">
        </p>
        <p>รหัสผ่าน :
          <input type="password"   id="Password"required name="Password" placeholder="Password">
        </p>
        <p>
          <button type="submit">Login</button>
          &nbsp;&nbsp;
          <button type="reset">Reset</button>
          <br>
        </p>
      </form>
</body>
</html>
<form name="frmlogin"  method="post" action="login.php">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="Username" class="form-control" />
    <label class="form-label" for="form2Example1">Username</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="Password" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
    <p>or sign up with:</p>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>