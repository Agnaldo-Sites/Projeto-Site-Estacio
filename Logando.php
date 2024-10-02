<?php 

session_start();
   
    if(($_POST['Email']) && $_POST['NomeCompleto']){
    
    include_once "connexao.php";

    $EmailCliente = $_POST['Email']; 
    $NomeClinte = $_POST['NomeCompleto']; 

    $NomeClinte = strtoupper($NomeClinte);

    $sql = "select Nome,Email from usuarios where Nome = '$NomeClinte' and Email = '$EmailCliente'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        $_SESSION['Email'] = $EmailCliente;
        $_SESSION['NomeClinte'] = $NomeClinte;
        header('location: index.php');
        exit;      

    }else{
        $_SESSION['ErroLogin'] = 'Erro Login não encontrado, Verifique!!';
        unset($_SESSION['Email']);
        unset($_SESSION['NomeClinte']);
        header('location: Logar.php');
        exit; 
    }
    }
    else{   
    header('location: Logar.php');
    exit; 
}
?>