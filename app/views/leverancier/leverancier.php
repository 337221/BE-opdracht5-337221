<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Leverantie Overzicht</title>
</head>

<body>



    <div class="logo">
        <a href="<?= URLROOT; ?>/overzicht">
            <img src="<?= URLROOT; ?>/img/logo.png">
        </a>
    </div>

    <div class="card">
        <div class="title">
            <h1>
                <?= $data['title']; ?>
            </h1>
        </div>
        <h3>
            Naam Leverancier: <span><?= $data['naamLeverancier']; ?></span>
        </h3>
        <h3>
            Contactpersoon Leverancier: <span><?= $data['contactPersoon']; ?></span>
        </h3>
        <h3>
            Leveranciernummer: <span><?= $data['leverancierNummer']; ?></span>
        </h3>
        <h3>
            Mobiel: <span><?= $data['mobiel']; ?></span>
        </h3>
        <table>
            <thead>
                <?= $data['th']; ?>
            </thead>
            <tbody>
                <?= $data['rows']; ?>
            </tbody>
        </table>
    </div>

    <script src="<?= URLROOT; ?>/js/kolom.js"></script>
    <script src="<?= URLROOT; ?>/js/main.js"></script>

</body>

</html>