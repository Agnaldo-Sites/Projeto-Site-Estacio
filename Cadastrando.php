<?php 

    session_start();
   
    if( ($_POST['Email'])){

    include_once "connexao.php";
    $EmailCliente = $_POST['Email']; 
    $NomeClinte = $_POST['NomeCompleto']; 
    $Telefone = $_POST['Telefone']; 

    $NomeClinte = strtoupper($NomeClinte);


    $SQLCodCli = "select CodUsuario from Usuarios order by CodUsuario desc limit 1";
    $SQlResult = $conn->query($SQLCodCli);


    $row = $SQlResult->fetch_assoc();
    $CodCliente = $row["CodUsuario"] + 1;


    $sql = "select Email from Usuarios where Email = '$EmailCliente'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        unset($_SESSION['Email']);
        $_SESSION['erro'] = "Email de  Usúario ja cadastrado, Verifique!!";
        header('location: Cadastro.php');
        exit;
    }else{
        $SQLInsert = "insert into Usuarios (CodUsuario,Nome,Email,Telefone) values ('$CodCliente','$NomeClinte','$EmailCliente','$Telefone')";
        $resultInsert = $conn->query($SQLInsert);;
        $_SESSION['Email'] = $EmailCliente;
        $_SESSION['NomeClinte'] = $NomeClinte;
        header('location: index.php');
        exit; 
    }
    }else{
        header('location: index.php');
        exit; 
    }


    



?>