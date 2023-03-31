<?php
error_reporting(E_ALL);
require_once("PHPMailer-5.2.26/class.phpmailer.php");
require_once("PHPMailer-5.2.26/class.smtp.php");	
$phpmail           = new PHPMailer();   
# MAIL
$mail_from         = "";
$mail_fromname     = "";
$mail_pw           = "";
$mail_host         = "";
$mail_port         = "";
$mail_secure       = "";
$mail_auth         = "";


$mail_from     = "mail adres";
$mail_fromname = "FMV Online";
$mail_pw       = 'sifre';
$mail_host     = "smtp.office365.com";
$mail_port     = '587';
$mail_secure   = 'tls';
$mail_auth     = true;
		

$m_mail = $_REQUEST['popMail'];

if (!empty($m_mail)){
				$mailBody     = "<!DOCTYPE html>".
								 "<html>".
								 "<head>".
									"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>".
									"<style>".
										".tFontO  { font-family:'Open Sans',Calibri,Candara,Arial,sans-serif; }".
										".tSize12 { font-size:18px; }".
									"</style>".
								 "</head>".
								 "<body>".
									 "<p class='tFontO tSize12'>".
									 "dasdasdd".
									 "</p>".
								"</body>".
								"</html>";	
								
				 $phpmail->IsSMTP();  
				 $phpmail->From     = $mail_from;                     
				 $phpmail->Sender   = $mail_from;                     
				 $phpmail->FromName = $mail_fromname;
				 $phpmail->Host     = $mail_host;
				 $phpmail->Port     = $mail_port;
				 $phpmail->CharSet  = "iso-8859-9";
				 $phpmail->Username = $mail_from;                     
				 $phpmail->Password = $mail_pw;                     
				 $phpmail->WordWrap = 50;
				 $phpmail->IsHTML(true); 
				 if (!empty($mail_secure)){
					 $phpmail->SMTPSecure = $mail_secure; 
				 }
				 if (!empty($mail_auth)){
					 if ($mail_auth=="true")  $phpmail->SMTPAuth = true;
					 if ($mail_auth=="false") $phpmail->SMTPAuth = false;
				 }
				 $phpmail->Subject  = "BASLIK";
				 $phpmail->Body     = $mailBody;
				 $phpmail->AltBody  = $mailBody;
				 $phpmail->AddAddress($m_mail);
				 $phpmail->Send();
				 $phpmail->ClearAddresses();
				 $phpmail->ClearAttachments();	
		}
  	  
	 

header('Location: index.php?demail=1');

?>