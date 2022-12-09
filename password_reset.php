<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
  <div class="wrapper">
<div class="login-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
    ?>

    <link rel="stylesheet" href="css/forgot.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

  	<div class="forgot-card">
      <div class="reset-card-header">
        <h1>ENTER NEW PASSWORD</h1>
      </div>

    	<form action="password_new.php?&email=<?php echo $_POST['email']; ?>" method="POST" class="forgot-card-form">
      		<div class="form-item">
            <span class="form-item-icon material-symbols-rounded">lock</span>
        		<input type="password" name="password" placeholder="New password" required>
      		</div>
          <div class="form-item">
            <span class="form-item-icon material-symbols-rounded">lock_reset</span>
            <input type="password" name="repassword" placeholder="Re-type password" required>
          </div>
          			<button type="submit" name="reset"> Reset</button>
    	</form>
  	</div>
</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>