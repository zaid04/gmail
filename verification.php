<?php
$conn=new mysqli("localhost","root","","gmail");
$vkey=$_GET["vkey"];
if(isset($_POST["s"])){
    $vk=$_POST["v"];
    if($vk==$vkey){
        $sql2="update users set status=1 where vkey='$vkey'";
        $conn->query($sql2);
        header("location: login.php");
    }
}
?>

<form action="" method="post">
<input type="text" name="v">
<input type="submit" name="s" value="verifier">

</form>
