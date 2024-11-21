<?php include 'config.php'?>
<?php include 'header.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gov-app helper Link Aadhaar</title>
</head>
    <body>
    <style>
        

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }
        
    
        .container {
            display: flex;
            max-width: 1245px;
            margin: 10px;
            margin-left:2px;
            margin-right:2px;
        }
        .main-content {
            width: 70%;
            margin: 0px auto;
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
 
        
        
    </style>
    <div class = "main-content">
        <?php include 'guides/aadhar/en/create_aadhar.php'?>
        <?php include 'guides/aadhar/en/link_aadhar.php'?>
        <?php include 'guides/aadhar/en/check_aadhar.php'?>
        <?php include 'guides/aadhar/en/update_aadhar.php'?>
        <?php include 'guides/aadhar/en/download_aadhar.php'?>
    </div>
    <?php include "footer.php"?>
    </body>
    </html>
