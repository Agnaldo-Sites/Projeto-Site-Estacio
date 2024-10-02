<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Carrega as dependências do PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['Name'];
    $email = $_POST['email'];
    $celular = $_POST['telefone'];
    $mensagem = $_POST['Menssagem'];

    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Servidor SMTP do Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'marquesjosethiago@gmail.com'; // Seu endereço de e-mail Gmail
        $mail->Password = 'lftrlftr10'; // Sua senha de e-mail Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Remetente
        $mail->setFrom($email, $nome);

        // Destinatário
        $mail->addAddress('marquesjosethiago@gmail.com'); // E-mail de destino

        // Conteúdo
        $mail->isHTML(true);
        $mail->Subject = 'Formulário de Contato - Fale Conosco';
        $mail->Body    = "<p>Nome: $nome</p><p>E-mail: $email</p><p>Celular: $celular</p><p>Mensagem: $mensagem</p>";


        // Enviar e-mail
        $mail->send();
        header("Location: index.php?status=sucesso");
        exit();
    } catch (Exception $e) {
        header("Location: index.php?status=erro");
        exit();
    }
}


?>
