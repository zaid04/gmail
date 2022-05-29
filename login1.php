<?php
$conn=new mysqli("localhost","root","","gmail");

if(isset($_POST['e']) && isset($_POST['p'])){
    $nom= $_POST['e'];
    $psswd= $_POST['p'];
    $_SESSION['login_u']= $nom;
    $_SESSION['login_p']= $psswd;
    $sql="select * from users where email='$nom' and password='$psswd' and status=1";
     $result= $conn->query($sql);
  
   
    if(mysqli_num_rows($result)!=0){
       
        header("Location: mr.php");
    }
 
    
    
}