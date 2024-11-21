<?php
session_start();

// Set default language to English if not set
if (!isset($_SESSION['language'])) {
    $_SESSION['language'] = 'en'; // 'en' for English
}

// Update session language based on user selection
if (isset($_GET['lang'])) {
    $selectedLang = $_GET['lang'];
    if (in_array($selectedLang, ['en', 'ml','hi'])) { // Add more languages as needed
        $_SESSION['language'] = $selectedLang;
    }
}

// Language strings (example)
$languageStrings = [
    'en' => [
        'login' => 'Login',
        'signup' => 'Signup',
        'language' => 'Language'
    ],
    'ml' => [
        'login' => 'ലോഗിൻ',
        'signup' => 'സൈൻ അപ്പ്',
        'language' => 'ഭാഷ'
    ],
    'hi'=>[
        'login' => 'लॉग इन करें',
        'signup' => 'साइन अप करें',
        'language' => 'भाषा'
    ]
];
$currentLanguage = $_SESSION['language'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Switcher</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #072139;
            border-bottom: 1px solid #ddd;
        }

        .left-section {
            display: flex;
            align-items: center;
            color: white;
        }

        .left-section img {
            height: 40px;
            margin-right: 10px;
        }

        .right-section {
            display: flex;
            align-items: center;
        }

        .right-section a {
            margin-left: 15px;
            text-decoration: none;
            color: #fff;
            font-size: 14px;
        }

        .right-section a:hover {
            text-decoration: underline;
        }

        .language-selector {
            margin-left: 15px;
        }

        select {
            padding: 5px;
            font-size: 14px;
            background-color: #fff;
            color: #000;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="left-section">
            <img src="india.jpg" alt="India Emblem">
            <div>
                <small>Government of India</small>
            </div>
        </div>
        <div class="right-section">
            <a href="#"><?php echo $languageStrings[$currentLanguage]['login']; ?></a>
            <a href="#"><?php echo $languageStrings[$currentLanguage]['signup']; ?></a>
            <div class="language-selector">
                <form action="" method="get">
                    <select name="lang" onchange="this.form.submit()">
                        <option value="en" <?php echo $currentLanguage == 'en' ? 'selected' : ''; ?>>English</option>
                        <option value="ml" <?php echo $currentLanguage == 'ml' ? 'selected' : ''; ?>>Malayalam</option>
                        <option value="hi" <?php echo $currentLanguage == 'hi' ? 'selected' : ''; ?>>hindi</option>
                    </select>
                </form>
            </div>
        </div>
    </div>


</body>
</html>



<?php include APP_PATH . '/sidebar.php'?>
