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
            text-align: center;
            margin-top: 20px;
        }
        .text{
            margin-left: 20px;
            margin-right: 20px;
            font-weight: lighter;
        }
        .input-container {
            margin: 20px;
        }
        input[type="text"], input[type="date"], input[type="number"] {
            width: 300px;
            height: 35px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            margin-left: 45px;
            margin-right: 20px;
            padding: 5px;
            box-shadow:  0 0 10px rgba(0, 0, 0, 0.2);
        }
        input[type="date"]::-webkit-calendar-picker-indicator {
            background-color: #4CAF50;
            color: white;
            padding: 4px;
            border-radius: 4px;
            cursor: pointer;
        }
        .button {
            background-color: #45a049;
            color: #ffffff;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 150px;
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
        <div class="text">
            <p>To ensure account security, please enter the following information from your most recent tax return.</p>
        </div>
        <div class="input-container">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <input type="date" placeholder="Date of Birth">
            <input type="text" placeholder="Address">
            <input type="number" placeholder="Zip Code" pattern="[0-9]*">
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
            window.location.href = "forgot_pass3.php";
        }
    </script>
</body>
</html>