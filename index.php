<?php
/**
 * Created by PhpStorm.
 * User: wilder13
 * Date: 09/04/18
 * Time: 17:33
 */
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gallerie</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
    <div class="container">
        <form action="add.php" method="POST" enctype="multipart/form-data">
        <div class="col-xs-6">
            <input type="file" name="fichier[]" multiple="multiple" />
        </div>
            <div class="col-xs-6">
                <button type="submit">Envoyer</button>
            </div>
        </form>
        <div>

                <?php
                $folder = new FilesystemIterator('fichiers');
                foreach ($folder as $key=>$value){
                    echo '<div class="col-xs-3"><a href="#" class="thumbnail">
                            <img src="'. $value .'" alt="..."></a><form action="delete.php" method="POST"><input type="hidden" name="id" value="' . $value . '"><button type="submit" class="btn btn-danger">Supprimer</button></form></div>';
                }
                ?>

        </div>
    </div>
</div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
