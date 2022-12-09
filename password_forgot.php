<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body>
<div class="wrapper">
<div class="forgot-container">
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
    <link rel="stylesheet" href="css/forgot.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

  	<div class="forgot-card">
      <div class="forgot-card-header">
        <h1>Enter email associated with account</h1>
      </div>

    	<form action="password_reset.php" method="POST" class="forgot-card-form">
      		<div class="form-item">
            <span class="form-item-icon material-symbols-rounded">mail</span>
        		<input type="email" name="email" placeholder="Email" required>
      		</div>
          			<button type="submit" name="reset"> Send</button>

    	</form>
      <br>
      <div class="forgot-footer">
      <a href="login.php">I rememberd my password</a><br>
      <a href="index.php"><i class="fa fa-home"></i> Home</a>
      </div>
  	</div>
  </div>
    </div>
<?php include 'includes/scripts.php' ?>
</body>
</html>