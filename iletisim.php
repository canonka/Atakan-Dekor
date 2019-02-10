<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
require_once "recaptchalib.php";
$secret = "5465464fa4s4fa5s4dasd";
$response = null;
$reCaptcha = new ReCaptcha($secret);
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
?>
<html>
<head>
<script src='https://www.google.com/recaptcha/api.js?hl=tr'></script>
<link href="css/iletisim.css" type="text/css" media="all" rel="stylesheet">
<title>Bize Ulaşın</title>
</head>
<body>

<div id="ortaa">
<?php
echo '<br/><b><h1>İletişim</h1>
Bizimle iletişime geçmek için aşağıdaki mail adresini kullanabilirsiniz.<br/>
<strong>Mail:</strong><a href="mailto:iletisim@atakan-dekor.com">iletisim@atakan-dekor.com</a><br/>
İletişim formunu doldurarakta bize ulaşabilirsiniz.<b>'
?>
<form name="formum" action="gonder.php" method="post">
<?php if ($response != null && $response->success)
	{
        echo "Hi thanks for submitting the form!";
    } else { ?>
<legend>~Bize Ulaşın~</legend>
<br/>
<table border='6' align="center">
<tr><th>Ad Soyad:</th>
<td><input type='text' name='adi' required></td></tr><tr>
<th>E-mail:</th>
<td><input type='text' name='mail' required></td></tr><tr>
<th>Telefon:</th>
<td><input type='text' name='telno' required></td></tr><tr>
<th>Konu:</th>
<td><input type='text' name='konu' required></td></tr><tr>
<th>Mesaj:</th>
<td><textarea name='mesaj' rows='5' cols='30' required></textarea></td>
</tr>
<tr><td><td><div id="onay" class="g-recaptcha" data-sitekey="6LfnyEgUAAAAANSQbFC_fAsrE494ZpwfKKfNyEvJ" data-theme="dark"></div></td></td></tr>
<tr><td><input type='submit' name='gonder' value='Gönder'></td></tr>
</table>
</form>
<?php } ?>
</div>
<br/>
<div id="ustt">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3127.7444145387744!2d27.144898451333592!3d38.37803364669456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbdf397ec40c91%3A0x78a688de600dbaea!2sSeyhan%2C+652%2F7.+Sk.+No%3A2%2C+35380+Buca%2F%C4%B0zmir!5e0!3m2!1str!2str!4v1514645691893" width="1100" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div id="altt">
<?php
echo '</br>Telefon: +90 (232) 253 00 56  &emsp; &emsp; &emsp; GSM: +90 (535) 275 02 70<br/><br/>
Adresimiz: 652/7 sokak no:2/214 Seyhan Mahallesi Karabağlar - İZMİR'
?>
</div>
</body>
</html>

