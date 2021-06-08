<?php


require_once(dirname(__FILE__) . "/../lib/class.phpmailer.php");
require_once(dirname(__FILE__) . "/../lib/class.smtp.php");

class EmailUtils {


    static function send($emailInfo) {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;

        //Set up username and password with valid ones from a Gmail account
        $mail->Username = "javi@gmail.com";
        $mail->Password = "###########";
        $mail->From = $emailInfo->getEmail();
        $mail->FromName = $emailInfo->getFname() . " " . $emailInfo->getLname();
        $mail->Subject = $emailInfo->getSubject();
        $mail->AltBody = $emailInfo->getMessage();
        $mail->MsgHTML($emailInfo->getMessage());
        $mail->AddAddress("javi@gmail.com");
        $mail->IsHTML(true);
        return $mail->Send();
    }

}
?>