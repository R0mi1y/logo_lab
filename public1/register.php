<?php 
    $pg = "register";
    $msm = "";
    include "navBar.php";
    include "Classes/controller.php";

?>

<link rel="stylesheet" href="css/register.css">

<div class="container-register">
    <div class="container">
        <img src="images/artist.png" class="img hidden d-none d-sm-block" alt="">
        <img src="images/user.png"  class="img d-none d-sm-block" alt="">

        <div class="container-left priority text-center">
            <div class="col-12 text-center">
                
                <form class="text-center" method="post">
                    <h1 class="top">CADASTRO<br>DO<br>REQUISITOR</h1>
                    <div class="input-single">
                        <input name="name" type="text" id="nome" class="input" required>
                        <label for="nome">Nome completo</label>
                    </div>
                    <div class="input-single">
                        <input name="phone" type="text" id="phone" class="input" required>
                        <label for="phone" >phone</label>
                    </div>
                    <div class="input-single">
                        <input name="cpf" type="text" id="cpf" class="input" required>
                        <label for="cpf" >Cpf</label>
                    </div>
                    <div class="input-single">
                        <input name="email" type="text" id="email" class="input" required>
                        <label for="email" >Email</label>
                    </div>
                    <div class="input-single">
                        <input name="password" type="password" id="password" class="input" required>
                        <label for="password">Senha</label>
                    </div>
                    <div class="input-single">
                        <input name="password_confirmation" type="password" id="password_confirmation" class="input" required>
                        <label for="password_confirmation">Confirme a Senha</label>
                    </div>
                    <div class="input-single-date">
                        <input name="birth_date" type="date" id="birth_date" class="input" required>
                        <label for="birth_date" value="">Date de nascimento</label>
                    </div>
                    <div class="input-single">
                        <input name="img" type="file" id="img" class="input" value="Imagem de perfil" required>
                    </div>

                    <p style="color:red;"><?php echo $msm; ?></p>

                    <button type="submit" name="register" style="margin: 40px 0px 20px 0px;">
                        →
                    </button>
                </form>
            </div>
        </div>
        <div class="container-right hide-container">
            <div class="col-12">
                <form action="">
                    <h1 class="top">CADASTRO<br>DO<br>ARTISTA</h1>
                    <div class="input-single">
                        <input name="name" type="text" id="name" class="input" required>
                        <label for="name">Nome completo</label>
                    </div>
                    <div class="input-single">
                        <input name="phone" type="text" id="phone" class="input" required>
                        <label for="phone" >phone</label>
                    </div>
                    <div class="input-single">
                        <input name="cpf" type="text" id="cpf" class="input" required>
                        <label for="cpf" >Cpf</label>
                    </div>
                    <div class="input-single">
                        <input name="email" type="text" id="email" class="input" required>
                        <label for="email" >Email</label>
                    </div>
                    <div class="input-single">
                        <input name="pass" type="password" id="pass" class="input" required>
                        <label for="pass">Senha</label>
                    </div>
                    <div class="input-single">
                        <input name="pass" type="password" id="pass" class="input" required>
                        <label for="pass">Confirme a Senha</label>
                    </div>
                    <button type="submit" name="register" style="margin: 40px 0px 20px 0px;">
                        →
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script src="js/register.js"></script>
</html>

<?php
    clearstatcache();
    sleep(1);
    //header("Refresh: 0");
?>

