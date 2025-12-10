<?php include "projects-data.php"; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Portfolio – Tobias Gerlich</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "topnav.php"; ?>

<header class="hero">
    <h1>Tobias Gerlich</h1>
    <p>Student třetího ročníku <a href="https://spsehavirov.cz" target="_blank" class="link">SPŠE Havířov</a> se zájmem o IT, web development a hardware.</p><br><br>
    <a href="projects.php" class="btn">Podívat se na projekty</a>
</header>

<div class="imglinks">
    <a href="https://github.com/tobyy-ger/" target="_blank">
        <img src="logogh.png" alt="GitHub" class="imglink">
    </a>
    <a href="https://www.linkedin.com/in/tobias-gerlich-43419b353/" target="_blank">
        <img src="logolin.png" alt="LinkedIn" class="imglink">
    </a>
    <a>
        <img src="logomail.png" alt="e-mail" class="imglink" id="cpymail">
    </a>
    <a id="copystat"></a>
</div>

<?php include "footer.php"; ?>
<script src="script.js"></script>
</body>
</html>
