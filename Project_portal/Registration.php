

<?php

$name = $_POST['regname'];
$email = $_POST['regemail'];
$pass = $_POST['regpass'];
include './admin/html/conn.php';




if(isset($_POST['register']))
{


    if (empty($_POST["regname"])) {

        echo '<script type="text/javascript">'; 
        echo '"alert("Something is wrong please try again  !!!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
        
     }elseif (empty($_POST["regemail"])){

        echo '<script type="text/javascript">'; 
        echo '"alert("Something is wrong please try again  !!!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
     }elseif (empty($_POST["regpass"])){

        echo '<script type="text/javascript">'; 
        echo '"alert("Something is wrong please try again  !!!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
     }else{



    $sql_query = "INSERT INTO `tb_user`( `name`, `email`, `password`)
    VALUES ('$name','$email','$pass')";
    if (mysqli_query($conn, $sql_query))
    {
        echo'<script> window.location="home.html"; </script> '; 
    }

    else{
        echo '<script type="text/javascript">'; 
        echo '"alert("Something is wrong please try again  !!!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }
     }
    
    
}

?>

<!-- for login -->

<?php
session_start();
$myusername = $_POST['loginUser'];
$mypassword = $_POST['loginPass'];

include './admin/html/conn.php';

if ($_SERVER['REQUEST_METHOD']=='POST'){

    $sql= "SELECT * FROM tb_user WHERE email = '$myusername' AND password = '$mypassword' ";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_fetch_array($result);
    if(isset($check))
{

    echo'<script> window.location="home.html"; </script> ';


}

else
{
	
echo '<script type="text/javascript">'; 
echo 'alert("Something is wrong please try again");'; 
echo 'window.location.href = "index.php";';
echo '</script>';  
	
}
}


?>



