<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
  public $email;
  public $name;

  public function __construct($email, $name, $password)
  {
    $this->email = $email;
    $this->name = $name;
    $this->password = $password;
  }

  public function sendMail()
  {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '9c9c0dc21affa6';
    $mail->Password = '9d1afd8104cbca';

    $mail->setFrom('atencion@ghostburgers.com');
    $mail->addAddress('atencion@ghostburgers.com', 'ghostBurgers.com');
    $mail->Subject = 'Solicitud de cambio de contraseña';
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Body = '<h1>Solicitud de cambio de contraseña</h1>
                  <p>Hola ' . $this->name . '</p>
                  <p>Se ha solicitado un cambio de contraseña para tu cuenta.</p>
                  <p>Para cambiarla introduce tu contraseña temporal <strong>' . $this->password . '</strong> y una nueva contraseña en el siguiente enlace:</p>
                  <a href="http://localhost/luiscruz/views/change_password.php?email=' . $this->email . '">Cambiar contraseña</a>';
    $mail->send();
  }
}
