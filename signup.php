<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }

  if(isset($_SESSION['captcha'])){
    $now = time();
    if($now >= $_SESSION['captcha']){
      unset($_SESSION['captcha']);
    }
  }

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition register-page">
<div class="register-container">
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

    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

  	<div class="register-card">
    <div class="register-card-header">
      <h1>REGISTER</h1>
    </div>

    	<form action="register.php" method="POST" class="register-card-form">
          <div class="form-item">
            <span class="form-item-icon material-symbols-rounded">badge</span>
            <input type="text" name="firstname" placeholder="Firstname" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
          </div>
          <div class="form-item">
            <span class="form-item-icon material-symbols-rounded">badge</span>
            <input type="text" name="lastname" placeholder="Lastname" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>"  required>
          </div>
      		<div class="form-item">
            <span class="form-item-icon material-symbols-rounded">mail</span>
        		<input type="email" name="email" placeholder="Email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
      		</div>
          <div class="form-item">
            <span class="form-item-icon material-symbols-rounded">lock</span>
            <input type="password"  name="password" placeholder="Password" required>
          </div>
          <div class="form-item">
            <span class="form-item-icon material-symbols-rounded">lock</span>
            <input type="password" name="repassword" placeholder="Retype password" required>
          </div>
          <hr>
          			<button type="submit" name="signup"> Sign Up</button>
    	</form>
      <br>
      <div class="register-footer">
      <a href="login.php">I already have a membership</a><br>
      <a href="index.php"><i class="fa fa-home"></i> Home</a>
      </div>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>