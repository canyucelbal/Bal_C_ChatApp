<?php
require_once '../load.php'; 
confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="sub_main.css">    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<main>
        <h1 class="hidden">Super Sassy Chat-tasticness</h1>
        <h4>Click the join button to enter chat</h4>

     
        <a href="chat" class="button_join">Join the chat</a><br><br>
   
    <a href="admin_logout.php">Sign out</a>
    </main>
   
</body>
</html>