<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3df637a2f2.js" crossorigin="anonymous"></script>
    <title>Restaurante West</title>
</head>
<body>
    <header>
            <div class="content">
                <div class="logo">
                    <img src="./img/logochef.png" alt="Cupcake">
                    <h3>FoodWest</h3>
                </div>
                <ul class="list-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#sobrenos">Sobre nós</a></li>
                    <li><a href="#cardapio">Cardápio</a></li>
                    <li><a href="#contatos">Contatos</a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
                    
                <div class="menu-toggle">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                    <div class="d-flex"><a href="sair.php" class="btn btn-danger me-5">Sair</a></div>
                </div>
            </div>
        
    </header>

    <section class="first-section" id="home">
        
        <div class="conteudo-principal">
            <h1>Deixe seu dia mais saboroso!!!</h1>
            <h2>A comida mais deliciosa da região</h2>
            <div class="botoes">
                <button class="reservar">Reserve a sua vaga!</button>
                <button class="montar">Monte a seu prato!</button>
            </div>
        </div>    
    </section>    

    <section class="sobre-nos" id="sobrenos"> 
        <div class="main">
            <div class="contentsobre">
                <h2>Sobre nós</h2>
                <p>Nossa cozinha é liderada por chefs talentosos e experientes que utilizam ingredientes frescos e de alta qualidade para preparar pratos deliciosos que agradam a todos os paladares. Temos um cardápio diversificado que inclui pratos vegetarianos, sem glúten e opções para crianças.</p>
                <p>Nosso espaço é moderno e confortável, com um ambiente descontraído e amigável. Acreditamos que a experiência do cliente é tão importante quanto a comida que servimos, e é por isso que nossa equipe está sempre pronta para recebê-lo com um sorriso e atendê-lo com o melhor serviço possível.</p>
            </div>     
            <div class="img-cozinha">
                <video width="520" height="440" controls>
                    <source src="videocozinha.mp4" type="video/mp4"
                </video>
            </div>
        </div>    
    </section>

    <section class="cardapio" id="cardapio">
        <h2>Cardápio</h2>

            <div class="itens-cardapio">
                <div class="fritas">
                    <img src="./img/Batatasfritas.png" alt="fritas">
                    <div class="info">
                        <h3>Arroz e bife com fritas</h3>
                        <h4>1 Pratos <span>R$25,00</span></h4>
                        <h4>2 Pratos <span>R$45,00</span></h4>
                        <h4>4 Pratos <span>R$85,00</span></h4>
                        <button class="pedir">pedir agora</button>
                    </div>   
                </div>
                <div class="cafe">
                    <img src="./img/cafedatarde.png" alt="cafe">
                    <div class="info">
                        <h3>Café da Manhã</h3>
                        <h4>1 Pratos <span>R$15,00</span></h4>
                        <h4>2 Pratos <span>R$32,00</span></h4>
                        <h4>4 Pratos <span>R$65,00</span></h4>
                        <button class="pedir">pedir agora</button>
                    </div> 
                
                </div>
                <div class="batatas">
                    <img src="./img/porcaodebatata2.png" alt="batatas">
                    <div class="info">
                        <h3>Porção de batatas</h3>
                        <h4>porção pequena <span>R$12,00</span></h4>
                        <h4>porção média <span>R$25,00</span></h4>
                        <h4>porção grande <span>R$34,00</span></h4>
                        <button class="pedir">pedir agora</button>
                    </div> 
                
                </div>
                <div class="strogonoff">
                    <img src="./img/estrogonofe.png" alt="strogonoff">
                    <div class="info">
                        <h3>Strogonoff</h3>
                        <h4>1 Pratos <span>R$25,00</span></h4>
                        <h4>2 Pratos <span>R$45,00</span></h4>
                        <h4>4 Pratos <span>R$85,00</span></h4>
                        <button class="pedir">pedir agora</button>
                    </div> 
                
                </div>
                <div class="Chocolate">
                    <img src="./img/bolinho.png" alt="Chocolate">
                    <div class="info">
                        <h3>Bolo de Chocolate</h3>
                        <h4>1 fatia <span>R$10,00</span></h4>
                        <h4>2 fatias <span>R$25,00</span></h4>
                        <h4>3 fatias <span>R35,00</span></h4>
                        <button class="pedir">pedir agora</button>
                    </div> 
                
                </div>
                <div class="morango">
                    <img src="./img/bolomorango.png" alt="morango">
                    <div class="info">
                        <h3>Bolo de morango</h3>
                        <h4>1 fatia <span>R$10,00</span></h4>
                        <h4>2 fatias <span>R$25,00</span></h4>
                        <h4>3 fatias <span>R35,00</span></h4>
                        <button class="pedir">pedir agora</button>
                    </div> 
                
                </div>
                <div class="sorvete">
                    <img src="./img/sorvetes.png" alt="sorvete">
                    <div class="info">
                        <h3>Sunday</h3>
                        <h4>Copo 300Ml <span>R$9,00</span></h4>
                        <h4>Copo 400Ml <span>R$11,00</span></h4>
                        <h4>Copo 500Ml <span>R$14,00</span></h4>
                        <button class="pedir">pedir agora</button>
                    </div> 
                
                </div>
                <div class="sucos">
                    <img src="./img/sucos.png" alt="sucos">
                    <div class="info">
                        <h3>Sucos</h3>
                        <h4>Copo 300Ml <span>R$9,00</span></h4>
                        <h4>Copo 400Ml <span>R$11,00</span></h4>
                        <h4>Copo 500Ml <span>R$14,00</span></h4>
                        <button class="pedir">pedir agora</button>
                    </div> 
                
                </div>
                
            </div>

    </section>

    <section class="contatos" id="contatos">
        <h3>Contatos</h3>
        <div class="contatos-secao">
            <div>
                <i class="fas fa-phone"></i>
                <span>(21) 97085-5789</span>
            </div>
            <div>
                <i class="fab fa-instagram"></i>
                <span>@idk.davi</span>
            </div>
            <div>
                <i class="fab fa-facebook-f"></i>
                <span>Davi Sousa</span>
            </div>
        </div>
    </section>
    <footer>
        <h4>Desenvolvido por -> Davi Sousa</h4>
    </footer>

    <script src="./script.js"></script>
</body>
</html>