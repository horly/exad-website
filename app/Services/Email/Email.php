<?php

namespace App\Services\Email;

/**
 * installation
 * - composer require phpmailer/phpmailer
 */

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    protected $mail;
    protected $app_name;
    protected $username;
    protected $from_address;


    function __construct()
    {
        $this->app_name = config('app.name'); //EXAD
        $this->username = config('app.mail_username'); //webmaster@exadgroup.org
        $this->from_address = config('app.mail_from_address'); //sales@exadgroup.org

        $this->mail = new PHPMailer;
        $this->mail->isSMTP();
        $this->mail->SMTPDebug = 2; //pas d'afficahe de debug mais si nous voulons afficher les erreurs il faut le mettre à 2
        $this->mail->Port = config('app.mail_port'); //465
        $this->mail->Host = config('app.mail_host'); //https://mail17.lwspanel.com
        $this->mail->SMTPAuth = true;
        $this->mail->Username = config('app.mail_username'); //webmaster@exadgroup.org
        $this->mail->Password = config('app.mail_password'); //hG9-vTunHvb3a5U
        $this->mail->CharSet  = "UTF-8";
    }

    //pour l'envoie du mail
    public function sendEmail($subject, $emailUser, $name, $message, $isHtml)
    {
        $this->mail->Subject = $subject;
        $this->mail->setFrom($this->username, $this->app_name); //from contact user email
        $this->mail->addReplyTo($emailUser, $name); //
        $this->mail->addAddress($this->from_address); //to sales@exadgroup.org
        $this->mail->IsHTML($isHtml);
        $this->mail->Body = $message;

        return $this->mail->send(); //true or false


        //ici c'est pour le teste et voir les erreurs
        /*if(!$this->mail->send())
        {
            return "error : " . $this->mail->ErrorInfo;
        }
        else
        {
            return "success";
        }*/
    }

    public function sendContactMessage($fullname, $email_addr, $phoneNumber, $message_text)
    {
        $email = $email_addr;
        $name = $fullname;
        $phone_number = $phoneNumber;
        $message = $message_text;

        $subject = __('home.information');
        $messageHtml = view('email.message-email')
                    ->with([
                        'name' => $name,
                        'message' => $message,
                        'phone_number' => $phone_number,
                        'email' => $email
            ]);

        return $this->sendEmail($subject, $email, $name, $messageHtml, true);
    }
}
