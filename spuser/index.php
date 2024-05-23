<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>userhomepage</title>
</head>
<body>
    <div class="container">
            <div class="header">
                <span class="notification-icon" id="notification-icon"><i class="fas fa-bell"></i></span>
                <img src="images/hdrr.png" alt="Logo" class="logo">
                <h1>SmartPath</h1>
                <span class="user-icon" id="user-icon"><i class="fas fa-user"></i></span>
                <div class="user-panel" id="user-panel">
                     <ul>
                        <li><a href="log_in.php">Log in</a></li><hr>
                        <li><a href="sign_up.php">Sign up</a></li>
                     </ul>
                </div>
            </div>
            <div class="nav">
                <ul>
                    <li class="active"><a href="index.php">HOME</a></li>
                    <li><a href="about_us.php">ABOUT US</a></li>
                    <li><a href="studyg.php">STUDY GUIDES</a></li>
                </ul>
            </div>
            <div class="banner">
                <img src="images/bnner.png">
            </div>
            <div class="text">
                <p>Personalized Course Recommendations for Academic and Career Success"</p>
            </div>
            <div class="button-container">
                <button> Get Started</button>
              </div>
    </div>

    <script>
        const userIcon = document.getElementById('user-icon');
        const userPanel = document.getElementById('user-panel');

        userIcon.addEventListener('click', function() {
            userPanel.style.display = userPanel.style.display === 'none' ? 'block' : 'none';
        });

        const notificationIcon = document.getElementById('notification-icon');

        notificationIcon.addEventListener('click', function() {
            window.location.href = "notif.php";
        });
        const getStartedButton = document.querySelector('.button-container button');

    getStartedButton.addEventListener('click', function() {
        window.location.href = "log_in.php";
    });
    </script>
</body>
</html>