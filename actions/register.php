<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php
include('connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
// $image=$_FILES['photo']['name'];
// $tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];


if($password!= $cpassword){

    echo '<script 
    alert("password did not match");
    window.location="../partials/registration.php";
    </script>';
}
else{
    // move_uploaded_file($tmp_name,"../uploads/$image");
    $sql="insert into user_data (username, mobile, password, standard, status, votes)
    values('$username','$mobile','$password','$std',0,0)";
    
    $result=mysqli_query($con,$sql);

    if($result){

        echo '<script>
        alert("Registration successfull");
        window.location="../";
        </script>';
    }
    
}

?>