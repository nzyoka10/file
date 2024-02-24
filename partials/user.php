<?php 

    # import config file
    include('./config.php');

    # user varaibles
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    # insert query execution
    $sql = "INSERT INTO users (username, password, confirm_password) 
    VALUES ('$username', '$password', '$cpassword')";

    if($conn->query($sql)) 
    {
        echo 'User created successfully';
    }
    else{
        echo 'Error: User not created!' . $conn->error;
    }
        # check if passwords match and
        # add confirmation to the database



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./../css/styles.css">
    <title>File | USER!</title>
</head>
<body>

    <div class="container">
        <h2>User Account</h2>

        <div class="form">
            <form method="post" action="">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                
                <label for="password">Password confirm</label>
                <input type="password" id="password" name="cpassword" required>
                
                <input type="submit" value="Login">
              </form>
        </div>
        
       
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>
</html>







  










