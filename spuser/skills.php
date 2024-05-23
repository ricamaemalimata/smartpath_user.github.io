<?php
// Handle form submission and redirect to goals.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedSkills = $_POST["skills"];
    $selectedInterests = isset($_GET["interests"]) ? explode(",", $_GET["interests"]) : [];
    header("Location: goals.php?interests=" . implode(",", $selectedInterests) . "&skills=" . implode(",", $selectedSkills));
    exit;
}

// Retrieve the selected interests from the query parameter
$selectedInterests = isset($_GET["interests"]) ? explode(",", $_GET["interests"]) : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <title>SKILLS</title>
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
            height: 655px;
            margin-left:15px ;
            border-radius: 10px;
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
            margin-left: 10px;
            width: 290px;
        }
        .list2 li:hover {
            background-color: #E0E0E0;
        }
        .hand-icons {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        .hand-icons .fas.fa-handshake {
            font-size: 24px;
            color: gray;
            margin: 0 5px;
        }
        .submit-button {
        background-color: #fff;
        color: #333;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
        font-size: 16px;
        margin-left: 160px;
    }

    .submit-button:hover {
        background-color: #416c8e;
        color: #fff;
    }
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 150px;
        max-width: 400px;
        border-radius: 5px;
        text-align: center;
    }

    .check-icon {
        color: green;
        font-size: 50px;
    }

    .next-button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }

    .next-button:hover {
        background-color: #45a049;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <i class="fas fa-bars hamburger-icon" onclick="togglePanel()"></i>
            <img src="images/hdrr.png" alt="Logo" class="logo">
            <h1>SKILLS</h1>
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
            <li ><a href="home.php">HOME</a></li>
                <li ><a href="interest.php">INTEREST</a></li>
                <li class="active"><a href="skills.php">SKILLS</a</li>
                <li ><a href="goals.php">GOALS</a></li>
                <li><a href="result.php">RESULT</a></li>
                <li><a href="index.php" onclick="return confirm('Are you sure you want to sign out?')">SIGN OUT</a></li>
            </ul>
        </div>
        <div class="container2">
            <h2>Please choose youre academic Skills</h2>
            <div class="hand-icons">
            <i class="fas fa-handshake icon"></i>
            <i class="fas fa-handshake icon"></i>
            <i class="fas fa-handshake icon"></i>
         </div>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
         <ul class="list2">
            <li><input type="checkbox" name="skills[]" value="Communication Skills"><label for="checkbox1">Communication Skills</label></li>
            <li><input type="checkbox" name="skills[]" value="Problem Solving"><label for="checkbox2">Problem Solving</label></li>
            <li><input type="checkbox" name="skills[]" value="Leadership Skills"><label for="checkbox3">Leadership Skills</label></li>
            <li><input type="checkbox" name="skills[]" value="Teamwork and Collaboration Skills"><label for="checkbox4">Teamwork and Collaboration Skills</label></li>
            <li><input type="checkbox" name="skills[]" value="Time Management and Organization Skills"><label for="checkbox5">Time Management and Organization Skills</label></li>
            <li><input type="checkbox" name="skills[]" value="Adaptibility and Flexibility Skills"><label for="checkbox6">Adaptibility and Flexibility Skills</label></li>
            <li><input type="checkbox" name="skills[]" value="Problem Solving Skills"><label for="checkbox7">Problem Solving Skills</label></li>
            <li><input type="checkbox" name="skills[]" value="Technical Skills"><label for="checkbox8">Technical Skills</label></li>
            <li><input type="checkbox" name="skills[]" value="Research and Information Literacy Skills"><label for="checkbox9">Research and Information Literacy Skills</label></li>
            <li><input type="checkbox" name="skills[]" value="Emotional Skills"><label for="checkbox10">Emotional Skills</label></li>
        </ul>
                <button type="submit" class="submit-button">Submit</button>
            </form>
        <div id="successModal" class="modal">
        <div class="modal-content">
            <i class="fas fa-check check-icon"></i>
            <h2>Success!</h2>
            <button class="next-button" onclick="redirectToGoals()">Next</button>
        </div>
    </div>
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
        function showPopup() {
        var modal = document.getElementById('successModal');
        modal.style.display = 'block';
    }

    // Function to close the modal
    function closeModal() {
        var modal = document.getElementById('successModal');
        modal.style.display = 'none';
    }
    function redirectToGoals() {
        window.location.href = 'goals.php';
    }
    </script>
</body>
</html>