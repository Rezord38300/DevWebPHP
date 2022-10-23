<?php include('modules/head.php'); ?>
<?php include_once(__DIR__ . "/include/config.php"); ?>

<head>
    <title>Contact</title>
</head>

<body>
    <header>
        <h1>Contact</h1>
        <?php include('modules/header.php'); ?>
    </header>
    <main>
        <p>Vous pouvez nous joindre au : <?= NUMERO_TELEPHONE ?></p>
        <form action="https://ressources.site/" method="post">
            <label for="subject">Sujet</label>
            <input id="subject" type="text" name="subject">

            <label for="email">E-mail</label>
            <input id="email" type="email" name="email">

            <label for="name">Nom Prénom</label>
            <input id="surname name" type="text" name="surname name">

            <label for="content">Message</label>
            <textarea id="content" name="content"></textarea>

            <p id="message_complet">Message complet</p>
            <button type="submit" id="submit">Envoyer</button>
            <button type="reset">Effacer</button>
        </form>
    </main>
    <?php include('modules/footer.php'); ?>
    <script src="js/contact.js"></script>
</body>

</html>