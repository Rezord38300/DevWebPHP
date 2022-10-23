<?php $directory = $_SERVER['REQUEST_URI'];
echo $directory;?>

<nav>
    <a href="">Menu</a>
        <div id="menu" class="menu">
            <ul>
                <li class = "<?php if ($directory=='/index.php') {echo "active";} else {"noactive";}?>"><a href="index.php">Accueil</a></li>
                <li><a href="">Présentation</a></li>
                <li class = "<?php if ($directory=='/contact.php') {echo "active";} else {"noactive";}?>"><a href="contact.php">Contact</a></li>
                    <div>
                        <li><a href="">Blog</a></li>
                        <ul>
                            <li><a href="">Article 1</a></li>
                            <li><a href="">Article 2</a></li>
                            <li><a href="">Article 3</a></li>
                            <li><a href="">Article 4</a></li>
                        </ul>
                    </div>
                    <li class = "<?php if ($directory=='/abonnez-vous.php') {echo "active";} else {"noactive";}?>"><a href="abonnez-vous.php">Abonnez-vous</a></li>
                    <li><a href="">Statistiques</a></li>
                </ul>
            </div>
        </nav>