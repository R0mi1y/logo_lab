<?php 
    $pg = "login";

    include "config.php";

    $msm = "";

    @session_destroy();
    
    if (isset($_POST["login"])){
        $email = $_POST["email"];
        $pass = $_POST["pass"];

        $user = new model\user();

        $user->setEmail($email);
        $user->setPassword($pass);

        //echo $user->validPass();        
        if($user->validPass()) {
            session_start();

            $_SESSION['user'] = $user->getUsername();
            $_SESSION['pass'] = $pass;
            $_SESSION['login'] = true;

            header("Location: home/home.php");
        } else {
            $msm = "Senha ou Email não encontrado";
        }
    }
    include "navBar.php";
?>

<link rel="stylesheet" href="css/login.css">
<link rel="icon" href="images/logo1.png">		

    <div class="container1 offset-1 col-10 offset-sm-2 col-sm-8 offset-xl-4 col-xl-4 offset-md-3 col-md-6 login-reg-panel">
        <div class="white-panel offset-2 col-2 offset-sm-0">
            <form style="width: auto;" method="post">
                <h1 class="login" style="margin-bottom: 50px; letter-spacing: 6px;">
                    LOGIN
                </h1>
                
                <div class="input-single">
                    <input class="input col-12" type="text" name="email" id="email-login" value="<?php if(isset($_GET['email'])) echo $_GET['email'];?>" required>
                    <label for="email-login">Email</label>
                </div>
                <div class="input-single">
                    <input class="input col-12" type="password" name="pass" id="pass-login" value="<?php if(isset($_GET['password'])) echo $_GET['password'];?>" required>
                    <label for="pass-login">Senha</label>
                </div>
                <p style="color:red;"><?php echo $msm; ?></p>
                <br>
                <button class="login-btn" name="login" type="submit" style="margin: 20px 0px 50px 0px; box-shadow: 6px 6px 12px #362318;">
                    →
                </button>
                <div>
                    <a href="" class="forgotPass">Esqueci a senha</a>
                </div>
            </form>
        </div>
        <div class="register-info-box col-5 col-md-5">
            <h2>Não tem uma conta?</h2>
            <p style="color: #ccc;" class="d-sm-block d-none">Cadastre-se agora como artista ou como um requisitor e peça agora sua logo.</p>
            <a href="register.php" name="active-log-panel" id="register-btn">Cadastre-se</a>
        </div>
</div>
</body>
</html>