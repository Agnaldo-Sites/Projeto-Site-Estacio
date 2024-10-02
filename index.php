<?php 
    session_start();
    //var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavio Transportes</title>
    <link rel="stylesheet" href="Styles.css">
    <link rel="icon" href="image.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="MenuMobile.js" defer></script>

</head>
<body>
<!-- Cabeçalho-->
<header>
    <div class="Interface">
        <div class="Logo">
            <h1 class="h1"> <i class="bi bi-building-fill-gear"></i>   Logistica e Transportes</span></h1>
        </div>

        <div class="meuu-desptop">
            <nav class="Menu-Desk">
                <ul>
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#Conhecimentos">A Empresa</a></li>
                    <li><a href="#MeioDoSite">serviços</a></li>
                    <li><a href="#Formulario">Contato</a></li>
                </ul>
            </nav>
        </div>

        <div class="Buttons-Login_Logout">
            <?php if(isset($_SESSION['Email'])){
                echo "<p style='margin-left: 0px; Font-Size:14px; font-weight: 600; display: none; color: Blue ;'> Olá ".$_SESSION['NomeClinte']." !!</p>";
            }else{
            echo "<a href='Logar.php'><button>Logar</button></a>";
            }
            ?>
        </div>

        <div class="btn-AbriMenu" id="btn-abir-menu">
            <i class="bi bi-list"></i>
        </div>

        <div class="Sair-btn">
                    <?php if(isset($_SESSION['Email'])){
                        echo "<button onclick='SairTelaJava()' style = 'padding: 10px 40px; color: black;
                        font-size: 15px;
                        margin-right: 70px ;
                        font-weight: 600;
                        background-color: transparent;
                        border: 2px solid black;
                        border-radius: 30px;
                        cursor: pointer;
                        '>Sair</button>";
                    }
                    ?>

                </div>

        <div class="Menu-Mobile" id="Menu-Mobile">
            <div class="btn-fechar">
                <i class="bi bi-x-lg"></i>
            </div>

            <nav>
                <ul>
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#Conhecimentos">A Empresa</a></li>
                    <li><a href="#MeioDoSite">serviços</a></li>
                    <li><a href="#Formulario">Contato</a></li>
                    <?php 
                        if(isset($_SESSION['Email'])){
                            echo "<li><a href=''>Olá ".$_SESSION['NomeClinte']."</a></li>";  
                        }
                        if(isset($_SESSION['Email'])){
                            echo "<li><a href='Sair.php'>Sair</a></li>";
                        }else{
                          echo "<li><a href='Logar.php'>Logar</a></li>";
                        }

                    ?>
                </ul>
            </nav>


        </div>

        <div class="overlay-menu" id="overlay-menu"></div>

    </div>
</header>
<main>
    <section class="Introducao-site" id = "Home">
            <div class="flexIntroducao">
                <div class="introducao-img">
                    <img src="Imagens/Logistica.jpg" alt="">
                </div>
                <div class="Introducao-text" id="Introducao-text">
                    <h2>Conectando você ao mundo com soluções ágeis e seguras de transporte e logística</h2>
                    <h1 class="h2">Bem-Vindo!</h1>
                    <a href=""><button>Entre em Contato</button></a>
                </div>
            </div>
    </section>
    <section class="Projetos-Site" id="Conhecimentos">
        <div class="Interface">
            <div class="Sobre_Empresa">
                <h1>Sobre a empresa    <i class="bi bi-buildings"></i></h1>
                <div class="flex">
                    <img src="Imagens/Entrega.jpg" alt="">
                    <p>A empresa Flavio Campos Ribeiro, registrada sob a razão social FLAVIO CAMPOS RIBEIRO e CNPJ 32.432.770/0001-08, tem sua sede na Rua Miguel Landutti, 243 - Vila Diniz, São José do Rio Preto - SP, 15.013-220. Atuando no mercado logístico desde 2019, a empresa se especializa em Outras atividades auxiliares dos transportes terrestres, conforme o código CNAE H-5229-0/99.
                    <br>

                    Desde sua fundação, a Flavio Campos Ribeiro Transportes e Logística se dedica a oferecer soluções personalizadas e eficientes para atender às demandas do setor, garantindo um serviço ágil e de qualidade em todas as operações.
                    </p>
                </div>
            </div>
        
        </div>
    </section>
    <section id="beneficios" class="MeioDoSite">
        <div class="Interface">
            <h2>serviços</h2>
            <div class="flex">
                <a href="" style="text-decoration: none;">
                    <div class="benefit">
                        <i class="bi bi-bus-front"></i>
                        <h3>Transporte de Cargas Rodoviárias</h3>
                        <p>Oferecemos um serviço especializado em transporte rodoviário para cargas de todos os portes. Com uma frota moderna e motoristas experientes, garantimos que sua mercadoria chegue ao destino com segurança e dentro do prazo estabelecido. Seja para trajetos curtos ou longos, estamos preparados para atender às suas necessidades logísticas com eficiência.</p>
                    </div>
                </a>
                <a href="" style="text-decoration: none;">
                    <div class="benefit">
                        <i class="bi bi-building-add"></i>
                        <h3>Gestão e Armazenamento de Mercadorias</h3>
                        <p>Além de transporte, oferecemos soluções completas de logística, incluindo armazenagem estratégica. Nossos armazéns são equipados para garantir o armazenamento seguro de seus produtos, com controle de estoque e processos otimizados, facilitando a gestão e movimentação das mercadorias até a entrega final.
                        </p>
                    </div>
                </a>
                <a href="" style="text-decoration: none;">
                    <div class="benefit">
                        <i class="bi bi-clock"></i>
                        <h3>Distribuição e Entregas Rápidas</h3>
                        <p>Nosso serviço de distribuição é ideal para empresas que necessitam de entregas rápidas e confiáveis. Atendemos tanto a pequenas quanto grandes operações, garantindo que cada entrega seja realizada de forma ágil, com rastreamento em tempo real e comunicação transparente para manter você atualizado sobre o status das remessas.</p>
                 </div>
                </a>
            </div>
        </div>
    </section>

    <section class="Formulario" id="Formulario">
            <div class="interface">
                <h2 class="Titulo">FALE CONOSCO</h2>

                <form action="EnviaEmail.php" method="post">
                    <input type="text" name="Name" id="Name" placeholder="Seu Nome Completo:">

                    <input type="text" name="email" id="email" placeholder="Seu E-mail:">

                    <input type="text" name="telefone" id="telefone" placeholder="Seu Celular:">
                    
                    <textarea name="Menssagem" id="Menssagem" placeholder="Sua Menssagem"></textarea>
                    <div class="btn-Enviar">
                        <input type="submit" value="ENVIAR" id="redirectButton">
                    </div>
                </form>
            </div>
        </section>
</main>
<footer>
    <div class="interface">
        <div class="line-fotter">
            <div class="flex">
                <div class="logo-fotter">
                    <h1>Sobre a FLAVIO CAMPOS RIBEIRO</h1> 
                    <p> Rua Miguel Landutti 243 - Vila Diniz <br> Sao Jose do Rio Preto br - SP <br> 15.013-220</p> 
                </div>
                <div class="Funcionamento">
                    <h1>Horários</h1>
                    <p> <span>Comercial</span> – Segunda a sexta-feira das 08:00 às 18:00 <br>
                    Aos sábados, trabalhamos das 08:00 às 13:00. <br> 
                    <br>
                    <span>Operacional</span> – Nossa equipe operacional e de apoio trabalha 24 horas por dia, 7 dias por semana.</p>    
                </div>
            </div>
        </div>
        <div class="line-fotter borda">
            <p><i class="bi bi-envelope-fill"></i>        <a href="mailto:Marquesjosethiago@gmail.com" target="_blank">FlavioCamposRibeiro@gmail.com</a></p>
            <p>Telefone: <a href=""> 17991109058</a></p>
        </div>
    </div>
</footer>

<script>
        function SairTelaJava(){ 
            window.location.href = 'Sair.php';
        }
        
    </script>
<script>
        // Verificando se existe o parâmetro 'status' na URL
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');

        // Se o status for "sucesso", mostra a mensagem de sucesso
        if (status === 'sucesso') {
            alert('E-mail enviado com sucesso!');
        }
        // Se o status for "erro", mostra a mensagem de erro
        else if (status === 'erro') {
            alert('E-mail enviado com sucesso!');
        }
    </script>

</body>
</html>