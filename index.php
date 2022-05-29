<?php
  use PHPMailer\PHPMailer\PHPMailer;
$conn=new mysqli("localhost","root","","gmail");
if(isset($_POST["r"])){
   global $e;
   $e=$_POST["e"];
    global $p;
    $p=$_POST["p"];
    $vkey=substr(md5(uniqid(rand(), true)), 16, 16);
    $sql="select from users where email='$e'";
    $res=$conn->query($sql);
    if(mysqli_num_rows($res)==0){
           $sql2="insert into users (email,password,status,vkey) values ('$e','$p',0,'$vkey')";
           $conn->query($sql2);
         
    function sendmail($e,$vkey){
        $name = "ne-pas-repondre etudes en france";  // Name of your website or yours
        $to = "$e";  // mail of reciever
        $subject = "visa";
        $body = "$vkey";
        $from = "zfati1824@gmail.com";  // you mail
        $password = "charaf14";  // your mail password

        // Ignore from here

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $mail = new PHPMailer();

        // To Here

        //SMTP Settings
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
        $mail->Host = "smtp.gmail.com"; // smtp address of your email
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 587;  // port
        $mail->SMTPSecure = "tls";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to); // enter email address whom you want to send
        $mail->Subject = ("$subject");
        $mail->Body = $body;
        if ($mail->send()) {
           echo "email are sent";
            header("location: login.php?vkey=$vkey");
        } else {
            echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
    }


        // sendmail();  // call this function when you want to

        
            sendmail($e,$vkey);
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="e" id="">
        <input type="password" name="p" id="">
        <input type="submit" value="enregister" name="r">
    </form>
</body>
</html>