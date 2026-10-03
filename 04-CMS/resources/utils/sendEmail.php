<?php
    use PHPMailer\PHPMailer\PHPMailer;

    function sendEmail($email, $asunto, $mensaje) {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['MAIL_HOST'];
        $mail->Username = $_ENV['MAIL_USER'];
        $mail->Password = $_ENV['MAIL_PASS'];
        $mail->Port = $_ENV['MAIL_PORT'];
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('cuentas@techbox.com', 'Registro');
        $mail->addAddress($email);
        $mail->Subject = $asunto;
        $mail->Body = $mensaje;
        if($mail->send()) {
            return true;
        }
    }

?>