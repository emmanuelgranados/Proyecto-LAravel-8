<?php

namespace App\Http\Controllers\Hal;

use App\Http\Controllers\Controller;
use PHPMailer\PHPMailer;


class HalEmailController extends Controller
{
    public static function send($correo,$titulo,$mensaje,$usuario, $sendSupport)
    {

        $mail = new PHPMailer\PHPMailer;

        $mail->isSMTP();
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = 0;
        $mail->Host = "arcaasociados.com";
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = "arca@arcaasociados.com";
        $mail->Password = "Arca1234@#$";

        $mail->setFrom('arca@arcaasociados.com', 'Hola '.$usuario.', Soy el mensajero virtual de Arca Asociados');

        foreach($correo as $email)
        {
            $mail->addAddress($email);
        }
        if($sendSupport){
        }

        $mail->Subject = $titulo;
        $mail->MsgHTML($mensaje);
        $mail->isHTML(true);
//        $mail->Body = $mensaje;
        $mail->send();
//        if (!$mail->send()) {
//            echo "Mailer Error: " . $mail->ErrorInfo;
//        } else {
//            echo "Message sent!";
//        }

        $log = new HalEmailController;

        // $log->logCorreo($correo,$titulo,$mensaje,$usuario, $sendSupport);

    }

    public static function sendAttachment($correo,$titulo,$mensaje,$usuario, $sendSupport,$archivo)
    {

        $mail = new PHPMailer\PHPMailer;

        $mail->isSMTP();
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = 0;
//        $mail->Debugoutput = 'html';
        $mail->Host = "indatcom.mx";
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = "ihernandez@automatyco.com";
        $mail->Password = "Auto.030901";

        $mail->setFrom('hal@automatyco.com', 'Hola '.$usuario.', soy Hal');

        foreach($correo as $email)
        {
            $mail->addAddress($email);
        }
        if($sendSupport){
            $mail->addBCC("soporte@automatyco.com");
        }

        $mail->Subject = $titulo;
        $mail->MsgHTML($mensaje);
        $mail->isHTML(true);
        $mail->AddAttachment($archivo);
        $mail->send();

        $log = new HalEmailController;

        // $log->logCorreo($correo,$titulo,$mensaje,$usuario, $sendSupport);
    }

}
