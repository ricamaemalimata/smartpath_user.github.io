<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <style>body{
    background-color: rgba(172, 172, 241, 0.534);
}
.container {
    background-color: #CEE5FF;
    width: 90%;
    width: 430px;
    margin: 0 auto;
    box-sizing: border-box;
    position: relative;
    height: 100vh;
}
.header {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px;
    background-color: rgb(248, 248, 248, 0.59);
    box-shadow:  0 0 10px rgba(0, 0, 0, 0.3);
}
.logo{
    margin-left: 80px;
    margin-right: 10px;
    width: 30px;
    height: 20px;
}
h1 {
    font-size: medium;
    font-family: arial;
    
}
.notification-icon{
    margin-left: -20px;
    margin-right: 20px;
    font-size: 25px;
    color: gray;
}
.notification-icon:hover{
    color: black;
}
.user-icon {
    margin-left: 115px;
    margin-right: -10px;
    font-size: 25px;
    color: gray;
  }
.user-icon:hover{
    color: black;
}
.nav{
    display: flex;
    border-top: 1px solid black;
   
 }
.nav ul{
    padding:  0;
}
.nav ul li{
	list-style-type: none;
	display: inline-block;
    margin-left: -15px;
    margin-right: -15px;
}
.nav ul li a {
    text-decoration: line;
    color: black;
    text-transform: uppercase;
    padding: 10px;
    font-size: medium;
}

.nav ul li:first-child a {
    margin-left: 15px;
    margin-right: 113px;
}

.nav ul li:last-child a {
    margin-left: 65px;
    margin-right: 5px;
}
li.active a {
    font-weight: bold;
}
.user-panel {
    display: none;
    position: absolute;
    top: 58px;
    right: 250px;
    width: 110px;
    height: 55px;
    background-color: #ffffff;
    border-radius: 5px;
    padding: 10px;
    z-index: 1;
}
.user-panel.show {
    display: block;
}
#user-panel {
    display: none;
    position: absolute;
    top: 57px;
    right: 0;
    width: 110px;
    background-color: #ffffff;
    border-radius: 5px;
    padding: 10px;
    z-index: 1;
}

.user-panel ul {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
}

.user-panel li {
    display: block;
}

.user-panel li a {
    text-decoration: none;
}

.user-panel li:hover {
    background-color: #dfdede;
}
.nav ul li a:hover{
    font-weight: bold;
}
.guides-container{
    background-color: #ffffff;
    margin-top: 70px;
    margin-left: 40px;
    width: 350px;
    border: solid 1px black;
}
.guides-container ul {
  list-style-type: none;
  padding: 0;
}

.guides-container li {
  font-size: 20px;
  margin-bottom: 5px;
  line-height: 1.5;
  text-align: center;
  
}
.guides-container ul li a {
  text-decoration: none;
  color: black;
}
.guides-container ul li:hover {
  background-color: #dfdede;
}
</style>
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
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about_us.php">ABOUT US</a></li>
                    <li class="active"><a href="studyg.php">STUDY GUIDES</a></li>
                </ul>
            </div>
            <div class="guides-container">
            <ul>
            <li><a href="#">Textbooks</a></li><hr>
                <li><a href="#">Online Resources</a></li><hr>
                <li><a href="#">Academic Websites</a></li><hr>
                <li><a href="#">Study Groups</a></li><hr>
                <li><a href="#">Library Resources</a></li><hr>
                <li><a href="#">Articles and Journals</a></li>
            </ul>
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
    </script>
</body>
</html>