<?php
    include("Connection.php");
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from Admin_Login where Username ='$username' and Passwor = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1)
        {
            header("Location:AdminPanel.php");
        }
        else{
            echo '<script>
                    window.location.href="AdminLogin.php";
                    alert("Login Failed. Invalid username or password");
                    </script>';
        }

    }
   

?>