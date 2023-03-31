<?php 
include '../db/data.php';
ob_start();
session_start();

	if(isset($_REQUEST['btnSetting'])) {$btnSetting    = $_REQUEST['btnSetting'];}   else{$btnSetting  = false;}
	if(isset($_REQUEST['btnChange']))   {$btnChange      = $_REQUEST['btnChange'];}     else{$btnChange  = false;}

if($btnSetting)
{
		$fname        = $_REQUEST['fname'];
		$lname        = $_REQUEST['lname'];
		$email        = $_REQUEST['email'];
		$kMail        = $_SESSION['username'];

		$data = [
    	'name'    => $fname,
    	'surname' => $lname,
    	'usr'     => $kMail,	
		];
		$sql  =  "UPDATE user SET name=:name, surname=:surname WHERE email=:usr";
		$stmt =  $conn->prepare($sql);
		$stmt -> execute($data);
		header('Location: settings.php?ok=1');
}

if($btnChange)
{
	$pass1        = $_REQUEST['pass1'];
	$pass2        = $_REQUEST['pass2'];
	$pass3        = $_REQUEST['pass3'];

	$mail  =  $_SESSION['username'];

	$sql = "SELECT * FROM user where email='".$mail."'";
	$result = $conn->query($sql);
	$row = $result->fetch();
	$aPass  = $row["pass"];
	               
	if($aPass==$pass1)
	{
		if($pass2==$pass3)
		{
		$data = [
    	'pass'    => $pass2,
    	'usr'     => $mail,	
		];
		$sql  =  "UPDATE user SET pass=:pass WHERE email=:usr";
		$stmt =  $conn->prepare($sql);
		$stmt -> execute($data);
		header('Location: change.php?err=0');
		}
		else
		{
			//yeni girdiğiniz şifreler uyuşmuyor
			header('Location: change.php?err=1');
		}
	}
	else
	{
		header('Location: change.php?err=2');
		//mevcut şifrenizi yanlış girdiniz
	}

}



?>

