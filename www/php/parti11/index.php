<?php include 'controller.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vsr.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" crossorigin="anonymous">
        <title>calculatrice</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="offset-2 col-8 offset-2">
                    <h1>Une calculatrice en PHP</h1>
                    <form action="index.php" method="post">
                        <input type="text" name="chiffre1" value="0"/>
                        <input type="text" name="chiffre2" value="0"/>
                        <input type="submit" name="addition" value="+"/>
                        <input type="submit" name="soustraction" value="-"/>
                        <input type="submit" name="multiplication" value="*"/>
                        <input type="submit" name="division" value="/"/>
                        <input type="submit" name="reset" value="RAZ"/>
                    </form>
                    <p>Résultat : <?= $result; ?> </p>
                </div>
            </div>
        </div>
    </body>
</html>
