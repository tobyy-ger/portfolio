<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Kontakt – Tobias Gerlich</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "topnav.php"; ?>

<section class="content">
    <h1>Kontakt</h1>

    <form action="send.php" method="post" class="contact-form">
        <label for="nm">Jméno</label>
        <input id="nm" type="text" name="name" placeholder="Jan" min="3" max="30" required>
        <label for="surnm">Přijmení</label>
        <input id="surnm" type="text" name="surnm" placeholder="Novák" min="3" max="30" required>
        <label for="mail">E-mail</label>
        <input id="mail" type="email" name="email" placeholder="jan.novak@example.cz" required>
        <label for="msg">Zpráva</label>
        <textarea id="msg" name="msg" placeholder="Zdravím, měl bych otázku..." required></textarea>
        <button type="submit">Odeslat</button>
    </form>

    <p id="form-status"></p>
</section>

<?php include "footer.php"; ?>
<script src="script.js"></script>
</body>
</html>
