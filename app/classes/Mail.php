<?php
namespace App\classes;

use PHPMailer\PHPMailer\PHPMailer as PHPMailer;

class Mail
{
    protected $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer();    
    }

    public function setUp()
    {
        $this->mail->isSMTP();
        $this->mail->Mailer = 'smtp';
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = 'tls';

        $this->mail->Host = $_ENV['SMTP_HOST'];
        $this->mail->Port = $_ENV['SMTP_PORT'];
        
        $env = $_ENV['APP_ENV'];
        if($env === 'local')
        {
            $this->mail->SMTPDebug = 2;
        }

        //Auth info
        $this->mail->Username = $_ENV['EMAIL_USERNAME'];
        $this->mail->Password = $_ENV['EMAIL_PASSWORD'];

        $this->mail->isHTML(true);
        $this->mail->SingleTo = true;

        $this->mail->FromName = $_ENV['ADMIN_EMAIL'];
    }
    
    public function send($data)
    {
        $this->mail->addAddress($data['to'], $data['name']);
        $this->mail->Subject = $data['subject'];
        $this->mail->Body = make($data['view'], ['data' => $data['body']]);

        return $this->mail->send();
    }
}