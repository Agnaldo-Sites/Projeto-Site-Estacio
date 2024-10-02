<?php 
    session_start();

    use app\libray\GoogleCliente;

    require __DIR__.'/vendor/autoload.php';
    require __DIR__.'/app/libray/GoogleCliente.php';

    $googleClient = new GoogleCliente;
    $googleClient->init();
    $googleClient->Authorized();

    $AuthUrl = $googleClient->generateAuthLink();


    //var_dump($AuthUrl);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="LoginSite.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,100&display=swap" rel="stylesheet">
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">A Empresa</a></li>
                    <li><a href="index.php">serviços</a></li>
                    <li><a href="index.php">Contato</a></li>
                </ul>
            </nav>
        </div>

        <div class="btn-AbriMenu" id="btn-abir-menu">
            <i class="bi bi-list"></i>
        </div>

        <div class="Menu-Mobile" id="Menu-Mobile">
            <div class="btn-fechar">
                <i class="bi bi-x-lg"></i>
            </div>

            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">A Empresa</a></li>
                    <li><a href="index.php">serviços</a></li>
                    <li><a href="index.php">Contato</a></li>
                </ul>
            </nav>


        </div>

        <div class="overlay-menu" id="overlay-menu"></div>

    </div>
</header>
    <div class="form">
                <form action="Logando.php" method="post" id="forumario">
                    <div class="Fomr-Header">
                        <div class="Title">
                            <h1>LOGAR</h1>
                        </div>
                    </div>
                    <div class="Erro-Login">
                    <?php 
                        if(!empty($_SESSION['ErroLogin'])){
                            $Erro = $_SESSION['ErroLogin'];
                            echo "<p style='color: red; margin-left : 30%; '>$Erro</p>";
                            unset($_SESSION['ErroLogin']);
                        }
                    ?>
                    </div>
                    <div class="input-group">
                        <div class="input-box">
                            <label for="NomeCompleto">Digite seu Nome Completo</label>
                            <input class="input required" name="NomeCompleto" id="NomeCompleto" type="text" placeholder="Digite seu nome" oninput="NameValido()">
                            <span class="span-require">Seu nome deve conter pelos menso 3 caracteres</span>
                        </div>
                        <div class="input-box">
                            <label for="Email">Digite seu Email</label>
                            <input class="input required" name="Email" id="Email" type="email" placeholder="Digite seu Email" oninput="EmialVerifa()">
                            <span class="span-require">Email invalido, digite um email valido</span>
                        </div>
                    </div>
                    <div class="btn-Login-Form">
                        <a href="Cadastro.php">Não tem um Login ?</a>
                        <a href="<?php echo "$AuthUrl" ?> "><i class="bi bi-google"></i> Logar com o Google</a>
                    </div>
                    <div class="continue-buton">
                        <button name="submits" id="submits" type="submit">Logar</button>
                    </div>
                </form>
            </div>
</body>
<script>
    const form = document.getElementById('forumario')
    const campos = document.querySelectorAll('.required')
    const spans  = document.querySelectorAll('.span-require')
    const VerEmail = /^\w+([-+.']\w+)*@\w+([-.]\w)*\.\w+([-.]\w+)*$/

    form.addEventListener('submit',function(event){
        event.preventDefault()
        //NameValido()
        //TelefoneVer()
        //EmialVerifa()
        if (NameValido() && EmialVerifa()) {
            form.submit();
        }else{
            NameValido()
            EmialVerifa()
        }
    })

    function setErro(index){
        campos[index].style.border = '2px solid #e63636'
        spans[index].style.display = 'block'
    }
    function RemoveErro(index){
        campos[index].style.border = ''
        spans[index].style.display = 'none'
    }


    function NameValido(){
        if(campos[0].value.length < 3){
            setErro(0)
            return false
        }else{
            RemoveErro(0)
            return true
        }
    }
    function EmialVerifa(){
        if (!VerEmail.test(campos[1].value))
        {
            setErro(1);
            return false
        }else{
            RemoveErro(1)
            return true
        }
    }
</script>
</html>