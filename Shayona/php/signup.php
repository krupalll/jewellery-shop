 <?php
$showalert = false;
include("connection.php");
if(isset($_POST['submit'])){
    
    
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $exits = False;
    $sql = "INSERT INTO `details` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "sucess";
        echo
        '<script>
        //    window.location.herf = "index.php";
           alert("Registered Sucessfully!!!");
       </script>';
       if($showalert==false){header("Location:index.php");}
        
    }
}


?>

