<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>HTML template email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .template {
            background-color: #83c5be;
            padding: 20px;
        }

        .infos {
            background-color: white;
            padding: 20px;
            border-radius: 20px;
        }
    </style>
</head>

<body class="template">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="infos">
                    <h4>Demande envoyée par</h4>
                    <ul>
                        <li><?= $nom . ' ' . $prenom ?></li>
                        <li><?= $email ?></li>
                    </ul>
                    <p class="message"><?= $message ?></p>

                </div>
            </div>
        </div>
    </div>
</body>

</html>