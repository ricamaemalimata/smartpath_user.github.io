<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "SELECT * FROM account WHERE email = '$email' LIMIT 1"; // Corrected SQL query
            $result = mysqli_query($con, $query);

            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['password'] == $password)
                {
                    header("location: home.php");
                    die;
                }
            }
            echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please enter valid credentials')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <title>Notifications</title>
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
        .close-button {
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
        .form-group .custom-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            line-height: 40px;
            color: gray;
        }
        .form-group button {
            background-color: #517BAD;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 105px;
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
            margin-left: 40px;
        }
        .forgot-password a {
            color: #434343;
            text-decoration: none;
            font-family: monospace;
            font-weight: bold;
        }
        .others p{
            text-align: center;
            margin-left: 41px;
            margin-top: 100px;
            color: gray;
        }
        .others {
            text-align: center;
            margin-top: 10px;
        }
        .others .fab.fa-facebook {
            font-size: 24px;
            margin-right: 10px;
            cursor: pointer;
            color: blue; /* Set the color to blue */
            background-color: #f4f4f4; /* Set the background color */
            padding: 5px; /* Add padding for background visibility */
            border-radius: 5px; /* Add border-radius for rounded corners */
        }
        .others .fab.fa-google {
            font-size: 24px;
            margin-right: 10px;
            cursor: pointer;
            color: white; /* Set the color to blue */
            padding: 5px; /* Add padding for background visibility */
            border-radius: 5px; /* Add border-radius for rounded corners */
        }
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 240px;
            width: 60%;
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
            <h1>LOG IN</h1>
            <div class="close-button" onclick="closeNotification()">
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
                    <label for="username"></label>
                    <input type="text" id="username" name="email" placeholder="Email Address" required>
                    <i class="fas fa-user custom-icon" style="color: gray;"></i>
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <i class="fas fa-lock custom-icon" style="color: gray;"></i>
                </div>
                <div class="form-group">
                    <button onclick="showPopup()">Log In</button>
                </div>
                <div class="form-group forgot-password">
                    <a href="forgot.php">Forgot Password?</a>
                </div>
                <div class="others">
                    <p> -or sign in with- </p>
                    <i class="fab fa-facebook" onclick="signInWithFacebook()"></i>
                    <i class="fab fa-google" onclick="signInWithGoogle()"></i>
                </div>
            </form>
        </div>
        <div class="popup" id="popup">
            <div class="popup-content">
                <h2>DATA PRIVACY ACT</h2>
                <p>The Personalized Course Recommendations for academic and career success tool takes data privacy seriously. We adhere to all applicable data privacy laws, including the Data Privacy Act. We ensure that any personal information collected from users is handled securely and used only for the purpose of providing personalized course recommendations. We value the privacy of our users and have implemented strict security measures to protect their data. This includes encryption, access controls, and regular monitoring to prevent unauthorized access or misuse of personal information. Please note that the tool does not collect any sensitive personal information without the user's explicit consent. The recommendations provided are based on the user's academic and career interests and are generated using anonymized and aggregated data.</p>
                <button class="agree-button" onclick="closePopupAndRedirect()">Agree</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var popup = document.getElementById('popup');
            popup.style.display = 'block';
        });

        function closePopupAndRedirect() {
            var popup = document.getElementById('popup');
            popup.style.display = 'none';
      
        }
    </script>
    <script>
        // Script content here

        function signInWithFacebook() {
            // Handle sign-in with Facebook
            // Add your code here
        }

        function signInWithGoogle() {
            // Handle sign-in with Google
            // Add your code here
        }
        
    </script>
      <script>
        function closeNotification() {
            window.close();
            window.history.back();
        }
    </script>
</body>
</html>