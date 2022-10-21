<?php include('modules/head.php'); ?>

<head>
    <title>Abonnez-vous</title>
</head>

<body>
    <header>
        <h1>Abonnez-vous</h1>
        <nav>
            <a href="">Menu</a>
            <div id="menu" class="menu">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="">Présentation</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <div>
                        <li><a href="">Blog</a></li>
                        <ul>
                            <li><a href="">Article 1</a></li>
                            <li><a href="">Article 2</a></li>
                            <li><a href="">Article 3</a></li>
                            <li><a href="">Article 4</a></li>
                        </ul>
                    </div>
                    <li><a href="abonnez-vous.php">Abonnez-vous</a></li>
                    <li><a href="">Statistiques</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <form action="https://ressources.site/" method="post">
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email">

            <label for="password">Mot de passe</label>
            <input id="password" type="password" name="password">

            <label for="surname name">Nom Prénom</label>
            <input id="surname name" type="text" name="surname name">

            <label for="bird-day">Date de naissance</label>
            <input id="bird-day" type="date" name="bird-day">

            <label for="address">Adresse</label>
            <textarea id="address" name="address"></textarea>

            <label for="postal code">Code postal</label>
            <input id="postal code" type="text" name="postal code" pattern="[0-9]{5}">

            <label for="city">Ville</label>
            <input id="city" type="text" name="city">
            <div class="sex">
                <p>Homme</p> <input type="radio" name="sex" value="man">
                <p>Femme</p> <input type="radio" name="sex" value="woman">
                <p>Autre</p> <input type="radio" name="sex" value="Other" checked>
            </div>

            <input type="file" name="photo" accept="image/png, image/jpeg" multiple="false">

            <div class="loisirs">
                Pomme <input type="checkbox" name="fruit" value="apple">
                Poire <input type="checkbox" name="fruit" value="pear">
                Orange <input type="checkbox" name="fruit" value="orange" checked>
            </div>

            <button type="submit">Envoyer</button>
            <button type="reset">Effacer</button>
        </form>
    </main>
    <?php include('modules/footer.php'); ?>
</body>

</html>