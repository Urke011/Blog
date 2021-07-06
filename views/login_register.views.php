<?php require_once('partials/top.html'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Blogger</a>
  <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Back to Blog</a>
      </li>
</nav>
<div class="container-fluid text-center bg-light.bg-gradient mt-5">
<h1>Login/Register</h1>
</div>
<div class="container mt-5">
  <div class="row">
  <div class="col">
    <h3>Login</h3>
    <form action="login_register.php" method="POST">
      <input type="text" name="login_email" class="form-control" placeholder="Email" required><br>
      <input type="password" name="login_password" class="form-control" placeholder="Password"required><br>
      <button name="submit" class="btn btn-primary">Login</button>
    </form>
    <?php if($user->loggedUser): ?>
      <div class="alert alert-success" role="alert">
      A simple success!<a href="index.php" class="nav-link active">Go to Blog!</a>

      </div>
    <?php elseif(isset($_POST['submit'])): ?>
    <div class="alert alert-danger" role="alert">
      A simple danger alert—check it out!
      </div>
  <?php endif; ?>


  </div>
  <div class="col" >
    <h3>Register</h3>
    <form action="login_register.php" method="POST">
      <?php echo $user->getError(Constants::$firstNameCharacters); ?>
      <input type="text" name="register_name"placeholder="Name" class="form-control"required>
      <br>
      <?php echo $user->getError(Constants::$emailCharacters); ?>
      <input type="email" name="register_email"class="form-control" placeholder="Email" required>
      <br>
      <?php echo $user->getError(Constants::$passwordCharacters); ?>
      <input type="password" class="form-control" name="register_password" placeholder="Password" required>
      <br>
      <button  name="register" class="btn btn-warning" >Register</button>
   </form>
   <?php if($user->register_results): ?>
     <div class="alert alert-primary" role="alert">
  Uspesna registracija!
</div>
   <?php endif; ?>
</div>
</div>
</div>
<?php require_once('partials/bottom.html'); ?>
