
<?php 
require 'function.php';


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $cekdatabase = mysqli_query($login, "SELECT * FROM login where username='$username' and password='$password'");
    $hitung = mysqli_num_rows($cekdatabase);
    if ($hitung>0) {
        $_SESSION['log'] = 'True';
        header('location:main.php?module=dashboard');
    } else {
        header('location:login.php');
    };
};

if (!isset($_SESSION['log'])) {
    // Pengguna belum login, tetap di halaman login
    
} else {
    header('location:main.php?module=dashboard'); // Pengguna sudah login, arahkan ke home
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/img/logo-perhutani-01.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/_login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/_login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form method="post" action="login.php">
                <span class="login100-form-title p-b-48">
                    <!-- <i class="zmdi zmdi-font"></i> -->
                    <img src="assets/img/user/logo-perhutani-01.png" width="180">
                </span>
                <span class="login100-form-title p-b-20">
                    SISTEM PENGELOLAAN DATA PEGAWAI PERHUTANI
                </span>

                <!-- Username field -->
                <div class="wrap-input100 validate-input">
                    <label class="small mb-1" for="username"></label>
                   <input 
                        class="input100 form-control py-4" 
                        type="text" 
                        name="username" 
                        placeholder="username" 
                        required 
                        style="background-color: rgba(60,179,113,0.1); border-bottom: 2px solid #3cb371; color: #3cb371;" />

                    <span class="focus-input100" ></span>
                </div>

                <!-- Password field -->
                <div class="wrap-input100 validate-input" data-validate="password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    
                  <input 
                        class="input100" 
                        type="password" 
                        name="password" 
                        placeholder="password" 
                        required 
                        style="background-color: rgba(60,179,113,0.1); border-bottom: 2px solid #3cb371; color: #3cb371;" />

                    <span class="focus-input100" ></span>
                </div>

                <!-- Login button -->
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn" name="login" style="background-color:#3cb371; color:white; border:none;">
    Login
</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

					<!-- <div class="form-group">
                                                <label class="small mb-1" for="username">Username</label>
                                                <input class="form-control py-4" type="text" name="username" placeholder="username" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Password</label>
                                                <input class="form-control py-4" type="password" name="password" placeholder="password" required />
                                            </div>
                                           
                                            <div class="form-group d-flex align-items-center justify-content-center mt-4 mb-0">
                                            <a >
                <button type="submit"  class="btn btn-primary" name="login">Login</button>
            </a> -->
                
				
				</form>

			</div>
		</div>
	</div>
	


<!--===============================================================================================-->
	<script src="assets/_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/_login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

	<!-- Sweet Alert -->
	<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
	<script src="assets/_login/js/main.js"></script>

<body class="hold-transition login-page" style="background:url(../bg/gradien2.png)
no-repeat center center fixed; background-size: cover;
 -webkit-background-size: cover; 
 -moz-background-size: cover; -o-background-size: cover;">
</body>
</html>