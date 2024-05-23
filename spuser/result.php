 <?php

$selectedInterests = isset($_GET["interests"]) ? explode(",", $_GET["interests"]) : [];
$selectedSkills = isset($_GET["skills"]) ? explode(",", $_GET["skills"]) : [];
$selectedGoals = isset($_GET["goals"]) ? explode(",", $_GET["goals"]) : [];


$courses = [
    "Information Technology/Systems" => [
        "Interests" => ["Science and Technology", "Problem Solving", "Technical Skills"],
        "Skills" => ["Technical Skills"],
        "Goals" => ["Career Development", "Academic Success"]
    ],
    "Arts and Humanities" => [
        "Interests" => ["Arts and Humanities"],
        "Skills" => ["Communication Skills", "Problem Solving"],
        "Goals" => ["Career Development", "Personal Growth", "Academic Excellence"]
    ],
    "Sports and Fitness" => [
        "Interests" => ["Sports and Fitness"],
        "Skills" => ["Leadership Skills", "Teamwork and Collaboration Skills"],
        "Goals" => ["Career Development", "Personal Growth", "Skill Enhancement"]
    ],
    "Social Sciences" => [
        "Interests" => ["Social Sciences"],
        "Skills" => ["Communication Skills", "Research and Information Literacy Skills"],
        "Goals" => ["Career Development", "Academic Excellence", "Research Opportunities"]
    ],
    "Business and Entrepreneurship" => [
        "Interests" => ["Business and Entrepreneurship"],
        "Skills" => ["Communication Skills", "Problem Solving", "Leadership Skills"],
        "Goals" => ["Career Development", "Specialization", "Entrepreneurship Skills", "Networking and Relationship Building"]
    ],
    "Accountancy" => [
        "Interests" => ["Accountancy"],
        "Skills" => ["Accounting Skills", "Problem Solving", "Attention to Detail"],
        "Goals" => ["Career Development", "Specialization", "Professional Certification"]
    ],
    "Health and Wellness" => [
        "Interests" => ["Health and Wellness"],
        "Skills" => ["Communication Skills", "Problem Solving"],
        "Goals" => ["Career Development", "Personal Growth", "Health and Wellness"]
    ],
    "Environmental and Sustainability" => [
        "Interests" => ["Environmental and Sustainability"],
        "Skills" => ["Problem Solving", "Research and Information Literacy Skills"],
        "Goals" => ["Career Development", "Specialization", "Research Opportunities"]
    ],
    "Volunteer and Community Service" => [
        "Interests" => ["Volunteer and Community Service"],
        "Skills" => ["Communication Skills", "Teamwork and Collaboration Skills"],
        "Goals" => ["Career Development", "Personal Growth", "Skill Enhancement"]
    ],
    "Travel and Exploration" => [
        "Interests" => ["Travel and Exploration"],
        "Skills" => ["Communication Skills", "Problem Solving", "Adaptability and Flexibility Skills"],
        "Goals" => ["Career Development", "Personal Growth", "Skill Enhancement"]
    ],
    "Personal Development" => [
        "Interests" => ["Personal Development"],
        "Skills" => ["Communication Skills", "Problem Solving", "Time Management and Organization Skills"],
        "Goals" => ["Career Development", "Personal Growth", "Skill Enhancement"]
    ]
];

$matchedCourses = [];
foreach ($courses as $course => $criteria) {
    $matchedInterests = !empty($selectedInterests) ? count(array_intersect($selectedInterests, $criteria["Interests"])) : 0;
    $matchedSkills = !empty($selectedSkills) ? count(array_intersect($selectedSkills, $criteria["Skills"])) : 0;
    $matchedGoals = !empty($selectedGoals) ? count(array_intersect($selectedGoals, $criteria["Goals"])) : 0;
    
   
    $totalMatches = $matchedInterests * 3 + $matchedSkills * 2 + $matchedGoals;
    
    $matchedCourses[$course] = [
        "TotalMatches" => $totalMatches,
        "MatchedInterests" => array_intersect($selectedInterests, $criteria["Interests"]),
        "MatchedSkills" => array_intersect($selectedSkills, $criteria["Skills"]),
        "MatchedGoals" => array_intersect($selectedGoals, $criteria["Goals"])
    ];
}

arsort($matchedCourses);

$highestMatchedCourse = key($matchedCourses);
$highestMatches = reset($matchedCourses);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <title>Skills</title>
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
        .list li a{
            text-decoration: none;
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
            color: black;
            font-family: arial;
            text-align: center;
            margin-left: 10px;
            margin-right: 10px;
        }   
        .container2 p{
            text-align: center;
            color: white;
            font-family: sans-serif;
            
        }
        .file {
            display: inline-block;
            padding: 10px;
            border-radius: 5px;
        }

        .file-icon {
            font-size: 100px;
            color: gray;
            margin-left: 150px;
        }
        .details{
            text-align: center;
            margin-top: 260px;
        }
        .recommended-course {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .recommended-course p {
            color: #333; /* Change the text color here */
            font-size: 18px;
            font-weight: bold;
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

     
        .start-button:hover {
            background-color: #315E8C;
        }
        .recommended-course p {
        color: #fff;
        font-size: 20px;
        font-weight: bold;
        background-color: #517BAD;
    }
    .recommended-course h3 {
        color: #333;
        font-size: 20px;
    }

    .details {
        text-align: center;
        margin-top: 20px;
    }
    .heart-rating {
            display: inline-block;
            font-size: 40px;
            color: gray;
            cursor: pointer;
            margin-left: 150px;
        }
        

        .heart-rating:hover {
            color: red;
        }

        .comment-input {
            width: 200px;
            height: 50px;
            padding: 10px;
            border: 1px solid gray;
            border-radius: 5px;
            resize: none;
            margin-left: 98px;
        }

        .submit-button {
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 170px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <i class="fas fa-bars hamburger-icon" onclick="togglePanel()"></i>
            <img src="images/hdrr.png" alt="Logo" class="logo">
            <h1>RESULT</h1>
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
                <li ><a href="skills.php">SKILLS</a</li>
                <li ><a href="goals.php">GOALS</a></li>
                <li class="active"> <a href="result.php">RESULT</a></li>
                <li><a href="index.php" onclick="return confirm('Are you sure you want to sign out?')">SIGN OUT</a></li>
            </ul>
        </div>
        <div class="container2">
            <h2>GOOD NEWS</h2>
            <h2>HERE'S THE RESULT...</h2>
            <p>RECOMMENDED COURSES BASED ON YOUR INTERESTS, SKILLS, AND GOALS</p>
            <div class="recommended-course">
    <?php if (!empty($highestMatchedCourse)) : ?>
        <h3><?php echo $highestMatchedCourse; ?></h3>
             
    <?php else : ?>
        <p>No matching courses found.</p>
    <?php endif; ?>
</div>
            <div class="details">
                <li><a href="view.php">VIEW COURSE DETAILS?</a></li>
            </div>
            <h2>Rate and Comment</h2>

<div class="heart-rating">
    &#x2665;&#x2665;&#x2665;&#x2665;&#x2665;
</div>

<form>
    <textarea class="comment-input" placeholder="Enter your comment"></textarea>
    <br>
    <input type="submit" value="Submit" class="submit-button">
</form>
        </div>
        <button class="start-button" onclick="startForm()">Retry</button>
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
      
        window.location.href = 'interest.php';
    }
    </script>
</body>
</html>