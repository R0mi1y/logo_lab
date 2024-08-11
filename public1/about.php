  
  <?php 
  $pg = "index";
  include 'navBar.php';
  ?>
      <main>
        <div class="container-fluid">
            <!-- slider -->
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/banner1.jpg" class="d-block w-100" alt="Projetos de e-commerce">
                        <div class="carousel-caption d-md-block">
                            <h2>Criou algo e precisa de uma logo?</h2>
                            <p>Nós te ajudamos a organizar e gerenciar uma disputa entre <br> artistas para decidir
                                qual a melhor logo para você.</p>
                            <a href="#" class="main-btn">Ver portfólio</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner2.jpg" class="d-block w-100" alt="Engenharia de software">
                        <div class="carousel-caption d-md-block">
                            <h2>Quer criar uma cara para sua empresa?</h2>
                            <p>Conte conosco dar detalhes e aproveitar ao <br> máximo da criatividade dos artistas.
                            </p>
                            <a href="#" class="main-btn">Entre em contato</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner3.jpg" class="d-block w-100" alt="Manutenção em software">
                        <div class="carousel-caption d-md-block">
                            <h2>Inscreva-se e faça uma requisição</h2>
                            <p>Receba várias versões de logos que possam se <br> encaixar com sua empresa e decida
                                entre elas.</p>
                            <a href="#" class="main-btn">Entre em contato</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Sobre a empresa -->
            <div id="about-area">
                <div class="container-fluid">
                <br>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Sobre a LogoLab</h3>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="images/agencia.jpg" alt="Agência LogoLab">
                        </div>
                        <div class="d-sm-none col-1"></div>
                        <div class="col-md-6 col-10">
                        <br>
                            <h3 class="about-title">Uma ajudinha para decidir a cara do seu negócio</h3>
                            <p>Oferecemos a oportunidade de empresas obterem logos personalizadas 
                              criadas por artistas talentosos.</p>
                              <p>
                              Com base nas descrições fornecidas pela empresa, vários artistas competem entre si 
                              para criar a melhor logo.</p>
                              <p>
                              LogoLab é a solução ideal para empresas que desejam uma 
                              logo que reflita sua identidade visual e que seja única.</p>
                            <p>E nossos designers trabalharão na sua interface/layout para impulsionar o negócio.
                            </p>
                            <p>Veja outros diferenciais:</p>
                            <ul id="about-list">
                                <li><i class="fas fa-check"></i> Plataforma online fácil de usar</li>
                                <li><i class="fas fa-check"></i> Vários artistas talentosos em todo o mundo criam as logos</li>
                                <li><i class="fas fa-check"></i> Possui um sistema de votação para selecionar a logo vencedora e fornecer feedback valioso</li>
                                <li><i class="fas fa-check"></i> Solução acessível para empresas que desejam uma logo personalizada de alta qualidade</li>
                                <li><i class="fas fa-check"></i> Tenha a possibilidade de receber uma logo que reflita sua identidade visual exclusiva.</li>
                            </ul>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <!-- Sobre a empresa -->
            <br>
            <div id="services-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Características</h3>
                        </div>
                        <div class="col-md-4 service-box blue">
                            <i class="fas fa-mobile-alt"></i>
                            <h4>Serviço Completo</h4>
                            <p>Criação de logos para pequenos e grandes negócios</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-shopping-cart"></i>
                            <h4>Acessível</h4>
                            <p>Você que decidirá o quanto estará disposto a oferecer por uma boa logo</p>
                            </div>
                            <div class="col-md-4 service-box">
                                <i class="fas fa-paint-brush"></i>
                                <h4>Artistas pelo mundo</h4>
                                <p>Artistas ao redor do mundo poderão ver e atender à sua requisição da logo, de artistas iniciantes à super talentosos
                                </p>
                            </div>
                            <div class="col-md-4 service-box">
                                <i class="fab fa-google"></i>
                                <h4>Votação</h4>
                                <p>Na duvida entre duas ou mais?, disponibilize para votação e deixe que outros clientes te dê uma luz</p>
                                </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-hands-helping"></i>
                            <h4>Suporte 24/7</h4>
                            <p>Você sempre terá um bot disponível para suporte
                                </p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-server"></i>
                            <h4>Armazenamento em nuvem</h4>
                            <p>Todas as requizições e logos serão armazenada em um banco de dados em nuvem
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Time -->
            <br>
            <div id="team-area" class="bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Nosso time</h3>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="images/profileEdiel.jpg" class="card-img-top" alt="Imagesm de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">Ediel Romily</h5>
                                    <p class="card-text">Software Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="images/profile2.jpg" class="card-img-top" alt="Imagesm de Perfil 2">
                                <div class="card-body">
                                    <h5 class="card-title">Vanubya de santos</h5>
                                    <p class="card-text">Artista digital e designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="images/profileArtists.png" class="card-img-top" alt="Imagesm de Perfil 4">
                                <div class="card-body">
                                    <h5 class="card-title">Artistas Digitais pelo mundo todo</h5>
                                    <p class="card-text">Artista Digital</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Trabalhe conosco -->
            <div id="apply-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 apply-box d-none d-md-block" id="company-img"></div>
                        <div class="col-md-6 apply-box" id="pattern-img">
                            <h4>É um artista?</h4>
                            <p>
                              A LogoLab oferece uma plataforma online que conecta artistas com empresas em busca de logos personalizadas.
                            </p>
                            <p>
                              Aqui você poderá expandir seu portfólio e exibir sua arte para um público mais amplo.
                            </p>
                            <p>
                                Além disso, você terá a chance de competir com outros artistas talentosos em busca de um prêmio em dinheiro oferecido pela empresa solicitante.
                            </p>
                            <p>
                              Clique no botão abaixo e Inscreva-se como um artista digital na LogoLab e venha fazer parte dessa comunidade.
                            </p>
                            
                            <a href="#" class="main-btn" id="apply-btn">Inscreva-se</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfólio -->
            <div id="news-area">
                <div class="container">
                    <div class="col-md-12">
                        <h3 class="main-title">Junte-se à comunidade</h3>
                    </div>
                    <p>
                    Não perca a oportunidade de mostrar seu talento e se juntar a uma comunidade criativa e inovadora. Inscreva-se na LogoLab hoje e comece a criar logos incríveis para empresas em todo o mundo!"
                    </p>
                </div>
            </div>
            <!-- Call to Action -->
        </div>
    </main>
    <!-- Rodapé -->
    <footer>
        <div id="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-title">Entre em contato conosco</h3>
                    </div>
                    <div class="col-md-6 contact-box">
                        <i class="fas fa-phone"></i>
                        <p><span class="contact-tile">Ligue para:</span> (77) 99108-3244</p>
                        <p><span class="contact-tile">Horários:</span> 8:00 - 12:00</p>
                    </div>
                    <div class="col-md-6 contact-box">
                        <i class="fas fa-envelope"></i>
                        <p><span class="contact-tile">Envie um email:</span> edielromily7@gmail.com</p>
                    </div>
                    <div class="col-md-6" id="msg-box">
                        <p>Ou nos deixe uma mensagem:</p>
                    </div>
                    <div class="col-md-6" id="contact-form">
                        <form action="">
                            <input type="text" class="form-control" placeholder="E-mail" name="email">
                            <input type="text" class="form-control" placeholder="Assunto" name="subject">
                            <textarea class="form-control" rows="3" placeholder="Sua mensagem..."
                                name="message"></textarea>
                            <input type="submit" class="main-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="copy-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Desenvolvido por <a href="https://github.com/R0mi1y" target="_blank">Ediel Romily</a>
                            &copy; 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts do projeto -->
    <style>
        *::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script src="js/scriptsNav.js"></script>
</body>

</html>