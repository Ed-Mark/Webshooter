<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
<?php include 'includes/header.php'; ?>
<body>
<div class="login-container">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    
  	<div class="login-card">
    	<div class="login-card-header">
        <h1>LOGIN</h1>
      </div>

    	<form action="verify.php" method="POST" class="login-card-form">
      		<div class="form-item">
            <span class="form-item-icon material-symbols-rounded">mail</span>
        		<input type="email" name="email" placeholder="Email" required>
      		</div>
          <div class="form-item">
            <span class="form-item-icon material-symbols-rounded">lock</span>
            <input type="password" name="password" placeholder="Password" required>
          </div>
          	<button type="submit" name="login"> Sign In</button>
    	</form>
      <br>
      <div class="login-footer">
      <a href="password_forgot.php">I forgot my password</a><br>
      <a href="signup.php">Register a new membership</a><br>
      <a href="index.php"><i class="fa fa-home"></i> Home</a>
      </div>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>