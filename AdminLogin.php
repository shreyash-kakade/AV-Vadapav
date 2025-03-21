<?php
include("Connection.php");  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="login-container">
    <h2>Admin Login</h2>
    <form name="form" action="Login.php"  method="POST" onsubmit="return isvalid()">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter admin username" >
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" >
        </div>

        <button type="submit" name="submit" class="login-btn">Login</button>
    </form>
</div>
<script>
    function isvalid()
    {
        var username = document.form.username.value;
        var password = document.form.password.value;
        if(username.length==""&&password.length=="")
        {
            alert("Username and password field is empty!!")
        }
        else{
            if(username.length=="")
        {
            alert("Username is empty!!");
            return false;
        }
        if(password.length=="")
        {
            alert("Password is empty!!");
            return false;
        }
        }
    }
    </script>

</body>
</html>

