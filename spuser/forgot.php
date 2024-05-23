<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <title>forgotpass</title>
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
            background-color: rgb(248, 248, 248, 0.59);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        h1 {
            font-size: medium;
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
            margin-left: -15px;
        }
        .title h1 {
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }
        .text p{
            font-size: 13px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .text{
            margin-left: 20px;
            margin-right: 20px;
            font-weight: lighter;
        }
        .input-container {
            margin: 20px;
        }
        input[type="text"], input[type="email"], input[type="tel"] {
            width: 300px;
            height: 35px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            margin-left: 30px;
            margin-right: 20px;
            padding: 5px;
            box-shadow:  0 0 10px rgba(0, 0, 0, 0.2);
        }
        .button {
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
            <h1>Forgot Password</h1>
            <div class="close-button" onclick="closeNotification()">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="logo">
            <img src="images/logo.png">
        </div>
        <div class="title">
            <h1>SmartPath</h1>
        <div class="text">
            <p>Enter your username and email address then click continue.</p>
        </div>
        <div class="input-container">
            <input type="text" placeholder="Username">
            <input type="email" placeholder="Email Address">
            <input type="tel" placeholder="Mobile Phone Number" inputmode="numeric">
        </div>
        <div class="button-container">
            <button class="button" onclick="continueForm()">Continue</button>
        </div>
        
       

    <script>
        function closeNotification() {
            window.close();
            window.history.back();
        }
        function continueForm() {
            window.location.href = "forgot_pass2.php";
        }
    </script>
</body>
</html>