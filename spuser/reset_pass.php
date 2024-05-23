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
        .text h1{
            font-size: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            margin-top: 60px;
        }
        .text{
            margin-left: 20px;
            font-weight: lighter;
        }
        .form-group {
            margin-bottom: 20px;
            margin-top: 50px;
            margin-left: 25px;
        }
        label {
            display: block;
            font-weight: lighter;
            margin-bottom: 5px;
            margin-left: 50px;
        }
        input[type="password"], input[type="text"] {
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
        .password-strength {
            margin-top: 5px;
            font-weight: lighter;
            margin-left: 50px;
        }
        .password-match {
            margin-top: 5px;
            font-weight: lighter;
            margin-left: 50px;
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
           <h1>RESET PASSWORD</h1>
        </div>
        <form onsubmit="showSuccessMessage(event)">
            <div class="form-group">
                <label for="newPassword">Enter New Password:</label>
                <input type="password" id="newPassword" oninput="checkPasswordStrength()">
                <div class="password-strength" id="passwordStrength"></div>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Re-Enter New Password:</label>
                <input type="password" id="confirmPassword" oninput="checkPasswordMatch()">
                <div class="password-match" id="passwordMatch"></div>
            </div>
            <div class="button-container">
            <button class="button" onclick="continueForm()">Continue</button>
        </div>
        </form>
        </div>
        
       

    <script>

        function closeNotification() {
            window.close();
            window.history.back();
        }
        function continueForm() {
            window.location.href = "forgot_pass3.php";
        }
        function checkPasswordStrength() {
            const password = document.getElementById("newPassword").value;
            const strengthIndicator = document.getElementById("passwordStrength");

            // Check password strength (example criteria: at least 8 characters long)
            if (password.length >= 8) {
                strengthIndicator.textContent = "Strong password";
                strengthIndicator.style.color = "green";
            } else {
                strengthIndicator.textContent = "Weak password (minimum 8 characters)";
                strengthIndicator.style.color = "red";
            }
        }

        function checkPasswordMatch() {
            const newPassword = document.getElementById("newPassword").value;
            const confirmPassword = document.getElementById("confirmPassword").value;
            const matchIndicator = document.getElementById("passwordMatch");

            // Check if passwords match
            if (newPassword === confirmPassword) {
                matchIndicator.textContent = "Passwords match";
                matchIndicator.style.color = "green";
            } else {
                matchIndicator.textContent = "Passwords do not match";
                matchIndicator.style.color = "red";
            }
        }
        function showSuccessMessage(event) {
            event.preventDefault(); // Prevent form submission

            // Perform any necessary password change logic here

            // Show success message
            alert("Password successfully changed!");

            // Optional: Redirect to another page
            window.location.href = "log_in.php";
        }
    </script>
</body>
</html>