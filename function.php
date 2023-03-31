<?php 
include 'db/data.php';

	if(isset($_REQUEST['btnRegister'])){$btnRegister  = $_REQUEST['btnRegister'];}else{$btnRegister  = false;}
	if(isset($_REQUEST['btnLogin']))   {$btnLogin     = $_REQUEST['btnLogin'];}   else{$btnLogin  = false;}

if($btnRegister)
{
		$fname        = $_REQUEST['fname'];
		$lname        = $_REQUEST['lname'];
		$email        = $_REQUEST['email'];
		$country      = $_REQUEST['country'];
		$dob          = $_REQUEST['dob'];
		$gender       = $_REQUEST['sex'];
		$phone        = $_REQUEST['phone'];
		$password     = $_REQUEST['password'];
        
        $sorgu = $conn->prepare("INSERT INTO user(name, surname, email,country,birth,gender,phone,pass) VALUES(?, ?, ?,?, ?, ?,?, ?)");
        $sorgu->bindParam(1, $fname, PDO::PARAM_STR);
        $sorgu->bindParam(2, $lname, PDO::PARAM_STR);
        $sorgu->bindParam(3, $email, PDO::PARAM_STR);
        $sorgu->bindParam(4, $country, PDO::PARAM_STR);
        $sorgu->bindParam(5, $dob, PDO::PARAM_STR);
        $sorgu->bindParam(6, $gender, PDO::PARAM_STR);
        $sorgu->bindParam(7, $phone, PDO::PARAM_STR);
        $sorgu->bindParam(8, $password, PDO::PARAM_STR);
	   $sorgu->execute();    
	   header('Location: register.php?ok=1');
}
else
{
     echo 'hata';
}

if($btnLogin)
{
	$query = "SELECT * FROM user WHERE email = :username AND pass = :password";  
     $statement = $conn->prepare($query);  
     $statement->execute(  
               array(  
                          'username'     =>     $_REQUEST["email"],  
                          'password'     =>     $_REQUEST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     session_start();    
                     $_SESSION["username"] = $_REQUEST["email"];  
                     header("location:ad/index.php");  
                }  
                else  
                {  
                     header("location:login.php?ok=0");    
                }  
}



?>

