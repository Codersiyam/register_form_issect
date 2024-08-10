<?php 
$con=mysqli_connect("localhost","root","","register_form");
if(isset($_POST['register'])){
    $sname=$_POST['sname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];
    $c_pass=$_POST['c_pass'];
    $query=mysqli_query($con, "INSERT INTO `register`(`sname`, `username`, `email`, `number`, `password`, `c_pass`) VALUES ('$sname','$username',' $email','$number',' $password','$c_pass')" );
    if($query){
     echo '<script>
     alert("Successfully sbmit Your Information");
     window.location.href="index.php";
     </script>';
    }else{
        echo '<script>
        alert("Some Error Please Tty Again");
        window.location.href="index.php";
        </script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <!-- ----register_form_design_start_---    -->
  <div class="register">
    <h1 class="form_title">Register</h1>
    <form action="#" method="POST" >
        <div class="form_itams">
            <input type="text" name="sname" placeholder="Name" class="form_info" >
        </div>
        <div class="form_itams">
            <input type="text" name="username" placeholder="Username" class="form_info" >
        </div>
        <div class="form_itams">
            <input type="email" name="email" placeholder="Email" class="form_info" >
        </div>
        <div class="form_itams">
            <input type="number" name="number" placeholder="Mobile" class="form_info" >
        </div>
        <div class="form_itams">
            <input type="password" name="password" placeholder="Creat a new password" class="form_info" >
        </div>
        <div class="form_itams">
            <input type="password" name="c_pass" placeholder="Confirm Password" class="form_info" >
        </div>
        <div class="form_btn">
            <input type="submit" name="register" id="re_btn" value="Submit" title="Click the button and submit your information" >
        </div>
        <div class="login_link">
            Alrady have a accuent?<a href="#" id="Log_link">Link</a>
        </div>
    </form>
  </div>
 <!-- ----register_form_design_ end_---    -->
    
</body>
</html>