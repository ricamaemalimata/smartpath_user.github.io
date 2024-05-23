<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <title>Notifications</title>
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
        .notification {
            display: flex;
            align-items: center;
            border-radius: 10px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
            background-color: #fff;
        }
        .notification-circle {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: darkblue;
            margin-right: 10px;
        }
        .notification-content {
            margin-top: 5px;
            border-radius: 10px;
            padding: 10px;
            flex-grow: 1;
            margin-right: 20px;
            margin-left: 20px;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
        }
        .notification-title {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .close-button {
            cursor: pointer;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Notifications</h1>
            <div class="close-button" onclick="closeNotification()">
                <i class="fas fa-times"></i>
            </div>
        </div>
        
        <div class="notification-content">
            <?php
            // Retrieve notifications from the admin (example)
            $notifications = [
                [
                    'title' => 'Notification 1',
                    'content' => 'This is the content of notification 1.'
                ],
                [
                    'title' => 'Notification 2',
                    'content' => 'This is the content of notification 2.'
                ]
            ];

            // Generate HTML for each notification
            foreach ($notifications as $notification) {
                echo '<div class="notification">';
                echo '<div class="notification-circle"></div>';
                echo '<div class="notification-content">';
                echo '<div class="notification-title">' . $notification['title'] . '</div>';
                echo '<div>' . $notification['content'] . '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <script>
        function closeNotification() {
            window.close();
            window.history.back();
        }
    </script>
</body>
</html>