<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=<?=base_url('assets/vendor/bootstrap/css/bootstrap.css')?>>
    <title>Formulaire</title>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="card col-md-10 p-sm-5">
                <h1 class="text-center">Insert entreprise</h1>
                <form class="col-md" method="post" action="<?=base_url('')?>">
                    <div class="container justify-content-between">
                        <label class="w-100" for="nom-societe">Nom de la société :</label>
                        <input class="mb-3 mt-1 w-100 form-control" type="text" name="nom-societe" id="nom-societe">
                    </div>
                    <div class="container justify-content-between">
                        <label class="w-100" for="description">Description :</label>
                        <input class="mb-3 mt-1 w-100 form-control" type="text" name="description" id="description">
                    </div>
                    <div class="container justify-content-between">
                        <label class="w-100" for="siege">Siege :</label>
                        <input class="mb-3 mt-1 w-100 form-control" type="text" name="siege" id="siege">
                    </div>
                    <div class="container justify-content-between">
                        <label class="w-100" for="dirigeant">Dirigeant :</label>
                        <input class="mb-3 mt-1 w-100 form-control" type="text" name="dirigeant" id="dirigeant">
                    </div>
                    <div class="container justify-content-between">
                        <label class="w-100" for="num-id-fiscale">Numéro d'identification fiscale :</label>
                        <input class="mb-3 mt-1 w-100 form-control" type="text" name="num-id-fiscale" id="num-id-fiscale">
                    </div>
                    <div class="container justify-content-between">
                        <label class="w-100" for="num-stat">Numéro statistique :</label>
                        <input class="mb-3 mt-1 w-100 form-control" type="text" name="num-stat" id="num-stat">
                    </div>
                    <div class="container justify-content-between">
                        <label class="w-100" for="num-gestion">Numéro de gestion de commerce :</label>
                        <input class="mb-3 mt-1 w-100 form-control" type="text" name="num-gestion" id="num-gestion">
                    </div>
                    <div class="container justify-content-between">
                        <label class="w-100" for="status">Status :</label>
                        <input class="mb-3 mt-1 w-100 form-control" type="text" name="status" id="status">
                    </div>
                    <div class="container justify-content-between">
                        <label class="w-100" for="debut-exo">Date de début d'exércise :</label>
                        <input class="mb-3 mt-1 w-100 form-control" type="date" name="debut-exo" id="debut-exo">
                    </div>
                    <div class="container justify-content-between">
                        <label class="w-100" for="devise">Devise</label>
                        <input class="mb-3 mt-1 w-100 form-control" type="number" name="devise" id="devise">
                    </div>
                    <div class="row justify-content-center">
                        <input class="btn btn-dark w-50" type="submit" value="Validez" id="valid">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>