<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <title>userhomepage</title>
    <style>
        body {
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
            display: flex;
            flex-direction: column;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            background-color: rgba(248, 248, 248, 0.59);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
        }

        .logo {
            margin-right: 5px;
            width: 30px;
            height: 20px;
            margin-left: 120px;
        }

        h1 {
            font-size: medium;
            font-family: Arial;
            flex-grow: 1;
            text-align: center;
            margin-right: 190px;
        }

        .hamburger-icon {
            font-size: 20px;
            color: #333;
            cursor: pointer;
            margin-left: 80px;
            margin-right: 20px;
        }
        .settings-icon {
            font-size: 20px;
            color: #333;
            cursor: pointer;
            margin-right: 80px;
            margin-left: -50px;
        }

        .panel {
            width: 200px;
            height: 886px;
            background-color: #CEE5FF;
            padding: 20px;
            transition: transform 0.3s ease;
            transform: translateX(-100%);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
            border-right: solid 1px #333;
            z-index: 2;
        }

        .panel.open {
            transform: translateX(0);
        }

        .profile-selector {
            margin-bottom: 20px;
        }

        .profile-selector label {
            display: block;
            margin-bottom: 10px;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            margin-left: 25px;
            margin-top: 40px;
        }

        .profile-upload {
            margin-bottom: 10px;
        }

        .profile-upload input[type="file"] {
            display: none;
        }

        .profile-upload label {
            display: inline-block;
            padding: 5px 10px;
            background-color: #517BAD;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            margin-left: 130px;
        }

        .camera-icon {
            margin-right: 5px;
        }

        .list {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .list li {
            margin-bottom: 3px;
            background-color: #fff;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 213px;
            margin-left: -19px;
        }
        .list li.active{
            background-color: #E0E0E0;
        }

        .list li:hover {
            background-color: #E0E0E0;
        }
        .container2{
            margin-top: -900px;
            background-color: rgb(81, 123, 173, 0.52);
            width: 400px;
            margin-left:15px ;
            border-radius: 10px;
            z-index: 1;
        }
        .container2 h2{
            font-size: medium;
            color: #fff;
            font-family: arial;
            text-align: center;
            margin-left: 10px;
            margin-right: 10px;
        }
        .list{ 
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }
        .list li a{
            text-decoration: none;
        }
        .list2 li{
            margin-bottom: 3px;
            background-color: #fff;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 213px;
            margin-left: -16px;
            list-style-type: none;
            margin-left: 30px;
            width: 290px;
        }
        .list2 li a {
            text-decoration: none;
            color: inherit; 
        }
        .list2 li:hover {
            background-color: #E0E0E0;
        }
        .laptop-icon {
            position: absolute;
            top: 165px;
            left: 40px;
            transform: translateY(-50%);
            font-size: 20px;
            color: gray;
        }
        .nursing-icon {
            position: absolute;
            top: 200px;
            left: 40px;
            transform: translateY(-50%);
            font-size: 25px;
            color: gray;
        }
        .engineering-icon {
            position: absolute;
            top: 240px;
            left: 40px;
            transform: translateY(-50%);
            font-size: 20px;
            color: gray;
        }
        .psychology-icon {
            position: absolute;
            top: 285px;
            left: 40px;
            transform: translateY(-50%);
            font-size: 20px;
            color: gray;
        }
        .architecture-icon {
            position: absolute;
            top: 328px;
            left: 40px;
            transform: translateY(-50%);
            font-size: 20px;
            color: gray;
        }
        .accountancy-icon {
            position: absolute;
            top: 370px;
            left: 43px;
            transform: translateY(-50%);
            font-size: 20px;
            color: gray;
        }
        .arts-icon {
            position: absolute;
            top: 415px;
            left: 43px;
            transform: translateY(-50%);
            font-size: 20px;
            color: gray;
        }
        .criminology-icon {
            position: absolute;
            top: 455px;
            left: 43px;
            transform: translateY(-50%);
            font-size: 20px;
            color: gray;
        }
        .education-icon {
            position: absolute;
            top: 500px;
            left: 43px;
            transform: translateY(-50%);
            font-size: 20px;
            color: gray;
        }
        .humanities-icon {
            position: absolute;
            top: 540px;
            left: 43px;
            transform: translateY(-50%);
            font-size: 20px;
            color: gray;
        }
        .maritime-icon {
            position: absolute;
            top: 580px;
            left: 43px;
            transform: translateY(-50%);
            font-size: 20px;
            color: gray;
        }
        .biology-icon {
            position: absolute;
            top: 620px;
            left: 43px;
            transform: translateY(-50%);
            font-size: 20px;
            color: gray;
        }
        .agriculture-icon {
            position: absolute;
            top: 660px;
            left: 43px;
            transform: translateY(-50%);
            font-size: 20px;
            color: gray;
        }
        .icons{
            z-index: 0;
        }
        .container2.open .icons{
            display: none;
        }
        .start-button {
            background-color: #517BAD;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 20px auto;
            display: block;
            font-size: 16px;
        }

        /* Additional styles for the button on hover */
        .start-button:hover {
            background-color: #315E8C;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="header">
            <i class="fas fa-bars hamburger-icon" onclick="togglePanel()"></i>
            <img src="images/hdrr.png" alt="Logo" class="logo">
            <h1>INTEREST</h1>
            <i class="fas fa-cog settings-icon" onclick="openSettings()"></i>
        </div>
        <div class="panel" id="panel">
            <div class="profile-selector">
                <img src="images/profile-default.png" alt="Profile Picture" class="profile-picture">
                <div class="profile-upload">
                    <input type="file" id="profile-upload" accept="image/*" onchange="handleProfileUpload(event)">
                    <label for="profile-upload"><i class="fas fa-camera camera-icon"></i> </label>
                </div>
            </div>
            <ul class="list">
                <li class="active"><a href="home.php">HOME</a></li>
                <li ><a href="interest.php">INTEREST</a></li>
                <li ><a href="skills.php">SKILLS</a</li>
                <li ><a href="goals.php">GOALS</a></li>
                <li><a href="result.php">RESULT</a></li>
                <li><a href="index.php" onclick="return confirm('Are you sure you want to sign out?')">SIGN OUT</a></li>
            </ul>
        </div>
        <div class="container2">
            <h2>Here are some Featured Courses
you may want to explore</h2>
            <ul class="list2">
                 <li><a href="pdfs/Information_Technology.pdf" target="_blank">Information Technology/Systems</a></li>
                <li><a href="pdfs/BS-NURSING.pdf" target="_blank">BS Nursing and Diploma of Midwifery</a></li>
                <li><a href="pdfs/ENGINEERING.pdf" target="_blank">Engineering</a></li>
                <li><a href="pdfs/PSYCHOLOGY.pdf" target="_blank">Psycology</a></li>
                <li><a href="pdfs/ARCHITECTURE.pdf" target="_blank">Architecture</a></li>
                <li><a href="pdfs/ACCOUNTANCY.pdf" target="_blank">Accountancy</a></li>
                <li><a href="pdfs/College-of-Arts.pdf" target="_blank">Arts and Sciences</a></li>
                <li><a href="pdfs/CRIMINOLOGY.pdf" target="_blank">Criminology</a></li>
                <li><a href="pdfs/EDUCATION.pdf" target="_blank">Education</a></li>
                <li><a href="pdfs/HUMANITIES.pdf" target="_blank">Humanities</a></li>
                <li><a href="pdfs/MARITIME.pdf" target="_blank">Maritime Supports</a></li>
                <li><a href="pdfs/BIOLOGY.pdf" target="_blank">Biology</a></li>
                <li><a href="pdfs/AGRICULTURE.pdf" target="_blank">Agriculture</a></li>
            </ul>
            <div class="icons">
                <i class="fas fa-laptop laptop-icon"></i>
                <i class="fas fa-user-nurse nursing-icon"></i>
                <i class="fas fa-tools engineering-icon"></i>
                <i class="fas fa-brain psychology-icon"></i>
                <i class="fas fa-city architecture-icon"></i>
                <i class="fas fa-calculator accountancy-icon"></i> 
                <i class="fas fa-palette arts-icon"></i> 
                <i class="fas fa-user-secret criminology-icon"></i>
                <i class="fas fa-graduation-cap education-icon"></i>
                <i class="fas fa-globe humanities-icon"></i> 
                <i class="fas fa-anchor maritime-icon"></i>
                <i class="fas fa-microscope biology-icon"></i>
                <i class="fas fa-seedling agriculture-icon"></i>
            </div>
        </div>
        <button class="start-button" onclick="startForm()">Start</button>
    </div>
    <script>
        function togglePanel() {
            var panel = document.getElementById('panel');
            panel.classList.toggle('open');
        }

        function handleProfileUpload(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                var profilePicture = document.querySelector('.profile-picture');
                profilePicture.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
        function startForm() {
        // Add your code to start recommendations or any desired action here
        // For example, you can redirect to a recommendations page
        window.location.href = 'interest.php';
    }
    </script>
</body>
</html>