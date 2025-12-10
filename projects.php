<?php
include "projects-data.php";
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Projekty – Tobias Gerlich</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "topnav.php"; ?>

<section class="content">
    <h1>Moje projekty</h1>

    <div class="project-list">
        <?php foreach ($projects as $p): ?>
            <div class="project-card">
                <img src="<?= $p['img'] ?>" alt="">
                <h3><a href="<?= $p['link']?>" target="_blank" class="link"><?= $p['title'] ?></a></h3>
                <p><?= $p['desc'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include "footer.php"; ?>
<script src="script.js"></script>
</body>
</html>
