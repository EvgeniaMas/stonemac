<?php 
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$phone = $_POST['user_phone'];
$name = $_POST['user_name'];
$product = $_POST['product'];
$model = $_POST['select_value'];
$mail->isSMTP();                                      
$mail->Host = 'smtp.mail.ru';																		
$mail->SMTPAuth = true;                               
$mail->Username = 'stonemacbook@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '098stonemac'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('stonemacbook@mail.ru'); // от кого будет уходить письмо?
// $mail->addAddress('ankt2013@yandex.ru');
$mail->addAddress('repvol2015@gmail.com');  

$mail->isHTML(true);                                 
$mail->Subject = 'Заказ c сайта';
$mail->Body    = 'Посетитель по имени' .$name . ' c номером телефона ' .$phone . 'желает приобрести ' .$product. 'для модели ' .$model;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Ошибка! Свяжитесь с администратом сайта';
} else {
    header('location: thanks.html');
}
?>