

	<?php

	if (isset($_POST['sbm'])) {
		$mail = $_POST['email'];
		$pass = $_POST['pass'];
    // $role = $_POST['role'];
		$sql = "SELECT*FROM taikhoan WHERE email = '$mail' and pass = '$pass' ";
		$query = mysqli_query($conn, $sql);
		$num_row = mysqli_num_rows($query);
  
		if ($num_row > 0) {
			$_SESSION['email'] = $mail;
			$_SESSION['pass'] = $pass;
      // $_SESSION['role'] = $role;		
			
			header("location: index.php");
		} else {
			$err = '<div class="alert alert-danger">Tài khoản không hợp lệ !</div>';
			
			// if (isset($_SESSION['time_failed'])) {
			// 	$time = 60 - (time() - $_SESSION['time_failed']);
			// }

			if (isset($_COOKIE['login_failed'])) {
				if ($_COOKIE['login_failed'] < 2) {
					$num_failed = $_COOKIE['login_failed'] + 1;
					setcookie('login_failed', $num_failed, time() + 30);
				} else {
					// $err_lock = "<div class='alert alert-danger'>Tài khoản bị khóa. Vui lòng đăng nhập lại sau <span id='time'></span> giây </div>";
					$err_lock = "<div class='alert alert-danger'>Tài khoản bị khóa. Vui lòng đăng nhập lại sau <span id='time'></span> giây </div>";
				}
			} else {
				setcookie('login_failed', 1, time() + 30);
			}
		}
	}
	?>
<div class="boxcontainer">
<form action="index.php" method="post">
    <div class="imgcontainer">
      <img src="../img/img_avatar2.png" alt="Avatar" class="avatar">
    </div>
  
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="email" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>

      <!-- <label for="psw"><b>Vai trò</b></label>
      <input type="text" placeholder="Enter Password" name="role" required> -->
      
      <?php
							if (isset($err_lock)) {
								echo $err_lock;
							} else {
							?>
								<button type="submit" name="sbm" class="btn btn-primary">Đăng nhập</button>
							<?php } ?>

							<script>
								var a = 10;
								function timelock() {
									a--;
									if (a != 0) {
										document.getElementById('time').innerHTML = a;
										setTimeout("timelock()", 1000);
									} else {
										<?php
										header('refresh:30 ');
										?>
									}
								}
								timelock();
							</script>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  
    <div class="container" style="background-color:#f1f1f1">
      <button type="reset" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
  
</div>
  <style>form {
    border: 3px solid #f1f1f1;
  }
  .boxcontainer{
      width: 50%;
      margin: 0 auto;
  }
  
  /* Full-width inputs */
  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  
  /* Set a style for all buttons */
  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }
  
  /* Add a hover effect for buttons */
  button:hover {
    opacity: 0.8;
  }
  
  /* Extra style for the cancel button (red) */
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }
  
  /* Center the avatar image inside this container */
  .imgcontainer {
    text-align: center;
    margin-left: 31%;
    margin-top: 4%;
    width: 39%;
  }
  
  /* Avatar image */
  img.avatar {
    width: 40%;
    border-radius: 50%;
  }
  
  /* Add padding to containers */
  .container {
    padding: 16px;
  }
  
  /* The "Forgot password" text */
  span.psw {
    float: right;
    padding-top: 16px;
  }
  
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
      display: block;
      float: none;
    }
    .cancelbtn {
      width: 100%;
    }
  }</style>