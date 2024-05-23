<?php
include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $strand = $_POST['strand'];
    $academicInterest = $_POST['academic_interest'];
    $dream = $_POST['dream'];
    $school = $_POST['school'];

    if(!empty($strand) && !empty($academicInterest) && !empty($dream) && !empty($school))
    {
        $query = "INSERT INTO user_data (strand, academic_interest, dream, school) VALUES ('$strand', '$academicInterest', '$dream', '$school')";
        mysqli_query($con, $query);

        echo "<script type='text/javascript'> 
                alert('Data submitted successfully');
                window.location.href = 'welcome.php';
              </script>";
    }
    else
    {
        echo "<script type='text/javascript'> 
                alert('Please enter valid information');
              </script>";
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
    <title>interest</title>
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
        .banner {
            background-image: url('images/banner.png');
            background-size: cover;
            background-position: center;
            height: 160px;
            margin-top: 1px;
            border: 1px solid gray;
        }
        select {
           background-color: #f2f2f2;
           color: #333333;
           font-size: 16px;
           padding: 10px;
           border: 1px solid #cccccc;
          border-radius: 5px;
          width: 265px;
          height: 40px;
          margin-left: 85px;
          margin-top: 70px;
       }
       .select2 {
           background-color: #f2f2f2;
           color: #333333;
           font-size: 16px;
           padding: 10px;
           border: 1px solid #cccccc;
          border-radius: 5px;
          width: 265px;
          height: 40px;
          margin-left: 85px;
          margin-top: 20px;
       }
       .dream-input{
        width: 200px;
         height: 30px;
         padding: 4px;
         border: 1px solid #ccc;
         border-radius: 5px;
        font-size: 14px;
        margin-top: 20px;
        margin-left:85px ;
        width: 253px;
        background-color: #f2f2f2;
       }
       .school-input{
        width: 200px;
         height: 30px;
         padding: 4px;
         border: 1px solid #ccc;
         border-radius: 5px;
        font-size: 14px;
        margin-top: 20px;
        margin-left:85px ;
        width: 253px;
        background-color: #f2f2f2;
       }
       .button {
         background-color: #4CAF50;
         color: white;
         padding: 10px 20px;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         font-size: 16px;
         width: 100px;
         margin-left: 165px;
         margin-top: 30px;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="images/hdrr.png" alt="Logo" class="logo">
            <h1>SmartPath</h1>
        </div>
        <div class="banner"></div>
        <select>
  <option disabled selected value="">Strand completed in Grade 12</option>
  <option value="option1">STEM</option>
  <option value="option2">ABM</option>
  <option value="option3">GAS</option>
  <option value="option4">TVL</option>
  <option value="option5">HUMMS</option>
</select>
<select class="select2">
  <option disabled selected value="">Academic Interest</option>
  <option value="option1">Psychology</option>
  <option value="option2">Computer Science</option>
  <option value="option3">History</option>
  <option value="option4">Biology</option>
  <option value="option5">Literature</option>
  <option value="option6">Economics</option>
  <option value="option7">Engineering</option>
  <option value="option8">Political Science</option>
  <option value="option9">Mathematics</option>
  <option value="option10">Sociology</option>


</select>
<input type="text" name="name" placeholder="Dream" class="dream-input">
<input type="text" name="name" placeholder="School that you want to enter" class="school-input">

<input type="submit" name="submit" value="Submit" class="button" onclick="redirectToGreetings()">
</div>
<script>
  function redirectToGreetings() {
    window.location.href = "greetings.php";
  }
</script>
    
</body>
</html>