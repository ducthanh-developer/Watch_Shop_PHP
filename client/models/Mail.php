<?php class Mail
{
    public $email;
    public $title;
    public $content;
    function __construct($email, $title, $content)
    {
        $this->email = $email;
        $this->title = $title;
        $this->content = $content;
    }

    function sendMail()
    {
        require "../../../PHPMailer/src/PHPMailer.php";
        require "../../../PHPMailer/src/SMTP.php";
        require '../../../PHPMailer/src/Exception.php';
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $nguoigui = 'ducnguyenthanh613@gmail.com';
            $matkhau = 'NTDCani!613';
            $tennguoigui = 'Đồng hồ Hải Triều';
            $mail->Username = $nguoigui;
            $mail->Password = $matkhau;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom($nguoigui, $tennguoigui);
            $to = $this->email;
            $to_name = "";
            $mail->addAddress($to, $to_name);
            $mail->isHTML(true);
            $mail->Subject = $this->title;
            $noidungthu = $this->content;
            $mail->Body = $noidungthu;
            $mail->smtpConnect(array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            return 'Gửi mail thành công !';
        } catch (Exception $e) {
            return $mail->ErrorInfo;
        }
    }
}
