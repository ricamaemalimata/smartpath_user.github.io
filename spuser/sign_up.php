<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

    }
    if(!empty($email) && !empty($password) && !is_numeric($email))
{
    $query = "insert into account (fullname, email, password) values ('$fullname', '$email', '$password')";

    mysqli_query($con, $query);

    echo "<script type='text/javascript'> 
            alert('Successfully Register');
            window.location.href = 'welcome.php';
          </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <title>Login</title>
    <style>
        body {
            background-color: rgba(172, 172, 241, 0.534);
        }
        .container {
            background-color: #CEE5FF;
            max-width: 430px;
            margin: 0 auto;
            height: 100vh;
            box-sizing: border-box;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px;
            background-color: rgb rgb(248, 248, 248, 0.59);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        h1 {
            font-size: large;
            font-family: Arial, sans-serif;
            margin-left: 5px;
        }
        .x-button {
            cursor: pointer;
            margin-right: 10px;
        }
        .logo {
            margin-left: -40px;
            margin-top: -125px;
        }
        .title {
            text-align: center;
            margin-top: -180px;
        }
        .title h1 {
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }
        .form-container {
            width: 240px;
            margin-top: 30px;
            padding: 20px;
            margin-left: 50px;
        }
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid gray;
            border-radius: 10px;
            padding-left: 40px;
        }
        .form-group input[type="text"]::placeholder,
        .form-group input[type="password"]::placeholder {
            color: #999;
        }
        .sign-up-button {
            background-color: #517BAD;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 105px;
        }
        .sign-up-button:hover {
            background-color: #45a049;
        }
        .others p{
            text-align: center;
            margin-left: 41px;
            margin-top: 100px;
            color: gray;
        }
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 140px;
            width: 70%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }
        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
        }
        .popup-content p {
            margin-bottom: 20px;
        }
        .popup-content h2{
            color: #517BAD;
        }
        .agree-button {
            background-color: #45a049;
            color: #ffffff;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>SIGN UP</h1>
            <div class="x-button" onclick="closeLogin()">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="logo">
            <img src="images/logo.png">
        </div>
        <div class="title">
            <h1>SmartPath</h1>
        </div>
        <div class="form-container">
            <form method="POST">
                <div class="form-group">
                    <label for="Full Name"></label>
                    <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <label for="email"></label>
                    <input type="text" id="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" id="password" name="password" placeholder="Confirm Password" required>
                </div>
                <div class="form-group">
                    <button class="sign-up-button" onclick="redirectToWelcome()">Sign Up</button>
                </div>
                <div class="others">
                    <p> -or sign in with- </p>
                </div>
            </form>
        </div>
    </div>

    <script>
        function closeLogin() {
        window.close();
        window.history.back();
    }
    const signUpButton = document.querySelector('.sign-up-button');

// Add a click event listener to the Sign Up button
signUpButton.addEventListener('click', () => {
    // Redirect to the "greetings" page
    window.location.href = 'log_in.php'; // Update the URL to the greetings page
});


        
    </script>
</body>
</html>