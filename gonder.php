<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
        $email;$comment;$captcha;
		if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Lütfen robot olmadığınızı doğrulayınız!..</h2>';
		  echo '<h2>Mesajınız gönderilemedi. Tekrar deneyiniz... </br> 3 saniye içinde yönlendirileceksiniz...</h2>'.$mail->ErrorInfo;
			header ('Refresh: 4; url=index.php');
          exit;
        }
        $secretKey = "6LfnyEgUAAAAACOzV9t-_c30Kx7sCjFMK0lRCtpm";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
          echo '<h1>Spam? ! Tekrar kontrol etmelisin.</h1>';
		  header ('Refresh: 3; url=index.php');
        }
?>
<?php
$adi=$_POST['adi'];
$email=$_POST['mail'];
$tel=$_POST['telno'];
$konu=$_POST['konu'];
$mesaj=$_POST['mesaj'];
$ip=$_SERVER['REMOTE_ADDR'];

require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = "mail.atakan-dekor.com";
$mail->Port = 587;
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "iletisim@atakan-dekor.com";
$mail->Password = "Laz3553.M";
$mail->SetFrom("iletisim@atakan-dekor.com", $email);
$mail->AddAddress("atakan-dekor@hotmail.com");
$mail->Subject = $konu;
$mail->Body ='Adi:'.$adi.'<br/>Mesaji:'.$mesaj.'<br/>Telno:'.$tel.'<br/>IP:'.$ip;
ob_start();
if(!$mail->Send())
{
	echo "<h2>Mesajınız gönderilemedi. Tekrar deneyiniz... </br> 3 saniye içinde yönlendirileceksiniz...</h2>".$mail->ErrorInfo;
	header ('Refresh: 3; url=index.php');
}
else
{
	echo '<h2>Mesajınız başarıyla gönderildi. <br/> Yönlendiriliyorsunuz...</h2>';
	header ('Refresh: 3; url=index.php');
}
?>