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
    <style>
    body{
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
.sticker img{
    height: 250px;
    margin-left: 100px;
    
}
.text {
    text-align: center;
    margin-top: 8px;
    margin-left: 20px;
    margin-right: 20px;
}
.text h1{
    font-size: 20px;
}
.panel {
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 10px;
}

.panel-header {
  background-color: #f2f2f2;
  padding: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
}

.panel-header h2 {
  margin: 0;
  font-size: small;
}

.panel-content {
  padding: 10px;
  display: none;
  background-color: #fff;
}

.panel.active .panel-content {
  display: block;

}

.caret {
  font-size: 20px;
}
#comments {
  margin-bottom: 20px;
}

#comment-list {
  list-style-type: none;
  padding: 0;
}

.comment-item {
  margin-bottom: 10px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.comment-item .name {
  font-weight: bold;
}

.comment-item .rating {
  color: #f8c102;
  margin-left: 300px;
  margin-top: -20px;
}

.comment-item .comment {
  margin-bottom: 10px;
}

#comment-form {
  margin-top: 20px;
}

#comment-form label {
  display: block;
  margin-bottom: 10px;
}

#comment-form textarea {
  height: 50px;
  resize: vertical;
  width: 420px;
  
}
.rating {
    display: flex;
    justify-content: center;
    margin-top: 15px;
  }

  .rating input[type="radio"] {
    display: none;
  }
  .rating label:before {
    content: "\f005";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 40px;
    color: #ddd;
  }

  .rating label:hover:before,
  .rating input[type="radio"]:checked ~ label:before {
    color: #f8c102;
  }

#see-more-btn {
  display: none;
  text-align: center;
}
.comment-list{
    background-color: #fff;

}
</style>
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
                    <li><a href="index.php">HOME</a></li>
                    <li class="active"><a href="about_us.php">ABOUT US</a></li>
                    <li><a href="studyg.php">STUDY GUIDES</a></li>
                </ul>
            </div>      
            <div class="sticker">
                <img src="images/au.png">
            </div>
            <div class="text">
            <h1>SmartPath:</h1>
            <p>"Personalized Course Recommendations for Academic and Career Success"</p>
        </div>
        <div class="panel">
            <div class="panel-header" onclick="togglePanel(this)">
                <h2>WHO WE ARE</h2>
                <span class="caret">&#94;</span>
            </div>
            <div class="panel-content">
                <p>At "Personalized Course Recommendations for Academic and Career Success," our goal is to provide tailored course recommendations to help individuals achieve success in their academic and professional pursuits. We understand that every person has unique goals, interests, and learning styles, so we take a personalized approach to guide individuals towards the most relevant and beneficial courses.
 
 Our process involves gathering information about your academic background, career aspirations, and areas of interest. We analyze this information to identify courses that align with your goals and provide the necessary knowledge and skills to succeed in your chosen field. Whether you're a student looking to enhance your academic performance or a professional seeking to upskill or change careers, we can help you find the right courses to achieve your objectives.
  
 By leveraging advanced algorithms and data analysis techniques, we can match you with courses from reputable educational institutions and online platforms. We consider factors such as course content, student reviews, and industry relevance to ensure that the recommended courses meet your specific needs.
  
 Our personalized course recommendations can save you time and effort in searching for relevant courses, as we do the research for you. We aim to empower individuals with the knowledge and skills they need to excel academically and thrive in their careers.
  
 If you have any specific questions or would like to learn more about our services, feel free to ask!</p>
            </div>
        </div>
        <div class="panel">
            <div class="panel-header" onclick="togglePanel(this)">
                <h2>WHAT WE DO</h2>
                <span class="caret">&#94;</span>
            </div>
            <div class="panel-content">
               <p>We are a pair of students who have designed this program to assist individuals in identifying the most suitable courses to enhance their academic and professional journeys. Our aim is to provide personalized recommendations based on your specific goals, interests, and skills, helping you make informed decisions about the courses that will best support your academic and career success.</p>
            </div>
        </div>
        <div id="comments">
  <h2>Testimonials</h2>
  <ul id="comment-list">
    <!-- Comment items will be dynamically added here -->
  </ul>
  <button id="see-more-btn">See More</button>
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

  function togglePanel(panelHeader) {
    const panel = panelHeader.parentNode;
    const panelContent = panel.querySelector('.panel-content');
    const caret = panel.querySelector('.caret');

    if (panelContent.style.display === 'none') {
      panelContent.style.display = 'block';
      caret.innerHTML = '&#94;';
    } else {
      panelContent.style.display = 'none';
      caret.innerHTML = '&#8964;';
    }
  }
</script>