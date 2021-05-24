<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Netflix Peru</title>
     <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../login/style.css">
</head>
<body>
	 
<div class="main">
  <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="register.php" class="signup-image-link">Crear cuenta</a>
                        <a href="../index.html" class="signup-image-link">Volver a la pagina principal</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
						<form method="post" action="login.php">
						<?php include('errors.php'); ?>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Tu nombre"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Contraseña"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Recordarme</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="login_user" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Entrar con</span>
                            <ul class="socials">
                                <li><a target="__blank" href="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.Vc0PGL6MBEgbQFed-R0XfQHaEK%26pid%3DApi&f=1"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a target="__blank" href="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.Vc0PGL6MBEgbQFed-R0XfQHaEK%26pid%3DApi&f=1"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a target="__blank" href="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.Vc0PGL6MBEgbQFed-R0XfQHaEK%26pid%3DApi&f=1"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	</div>
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="./jslogin/main.js"></script>
</body>
</html>