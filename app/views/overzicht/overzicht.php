<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Magazijn Overzicht</title>
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
        <table>
            <thead>
                <th>Barcode</th>
                <th>Naam</th>
                <th>Verpakkingseenheid</th>
                <th>Aantal Aanwezig</th>
                <th>Allergenen Info</th>
                <th>Leverantie Info</th>
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