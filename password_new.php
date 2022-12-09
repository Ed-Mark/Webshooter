<?php
	include 'includes/session.php';


	if(isset($_POST['reset'])){
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

		if($password != $repassword){
			$_SESSION['error'] = 'Passwords did not match';
			header('location: password_forgot.php');
		}
		else{
			$conn = $pdo->open();

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
			$stmt->execute(['email'=>$_GET['email']]);
			$row = $stmt->fetch();

			if($row['numrows'] > 0){
				$password = password_hash($password, PASSWORD_DEFAULT);

				try{
					$stmt = $conn->prepare("UPDATE users SET password=:password WHERE id=:id");
					$stmt->execute(['password'=>$password, 'id'=>$row['id']]);

					$_SESSION['success'] = 'Password successfully reset';
					header('location: login.php');
				}
				catch(PDOException $e){
					$_SESSION['error'] = $e->getMessage();
					header('location: password_forgot.php');
				}
			}
			else{
				$_SESSION['error'] = 'No user found';
				header('location: password_forgot.php');
			}

			$pdo->close();
		}

	}
	else{
		$_SESSION['error'] = 'Input new password first';
		header('location: password_forgot.php');
	}

?>