<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery at DUT RT</title>
</head>
<body>
    <h1>Liste des projets</h1>
    <ul>
        <li> Partie 1
            <ul>
                <?php
                    displayFiles('./Partie_1/*.html');
                ?>
            </ul>
        </li>
        <li> Partie 2
            <ul>
                <?php
                    displayFiles('./Partie_2/*.html');
                ?>
            </ul>
        </li>
    </ul>

    <?php
        function displayFiles($pattern) {
            $files = glob($pattern);
            foreach ($files as $file) {
                echo "<li><a href='$file'>$file</a></li>";
            }
        }
    ?>
</body>
</html>