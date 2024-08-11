<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LogoLab</title>
        <link rel="icon" href="images/logo1.png">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <!-- Estilos -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
            <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
            <!-- Progress Bar -->
            <!-- Parallax -->
        <link rel="stylesheet" href="http://192.168.0.111/logolab/css/navBar.css">
        <style>
            
        </style>
    </head>
    
    <body>
        <header>
            <div class="container" id="nav-container">
            <nav class="navbar <?php if(@$pg == "index") echo("navbar-expand-lg"); ?> fixed-top" id="navNav">
                <a href="index.php" class="navbar-brand">
                    <img id="logo" src="images/logo.png" alt="Artistic Arena Agency">
                    &nbsp;&nbsp;LogoLab
                </a>
                <?php if (@$pg == "index") { ?>
                    <button style="color:white; outline: none;" class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false"
                        aria-label="Toggle navigation" id="expandBar">
                        Expandir
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbar-links">
                        <a class="nav-item nav-link" id="home-menu" href="#mainSlider">Home</a>
                        <a class="nav-item nav-link" id="about-menu" href="#about-area">Sobre</a>
                        <a class="nav-item nav-link" id="services-menu" href="#services-area">características</a>
                        <a class="nav-item nav-link" id="team-menu" href="#team-area">time</a>
                        <a class="nav-item nav-link" id="portifolio-menu" href="#apply-area">Artista</a>
                        <a class="nav-item nav-link" id="contact-menu" href="#contact-area">contato</a>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                        <a class="nav-item nav-link" href="login.php">Login</a>
                        <a class="nav-item nav-link" href="register.php">Cadastre-se</a>
                    </div>
                <?php } else if (@$pg == "register") {?>
                    <div class="justify-content-end text-right" id="navbar-links">
                        <a>
                            <button class="button">Artista?</button>
                        </a>
                    </div>
                <?php }?>
            </nav>
        </div>
    </header>