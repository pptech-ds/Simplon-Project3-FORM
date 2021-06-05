<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->

    <title>Customer Satisfaction Form</title>
</head>
<body>
    <div class="container">

    <h1>Customer Satisfaction Form</h1>

    
        <p class="mt-5">Merci pour votre notation : <?= printScore(
            5,
            getScore($_POST)
        ) ?> </p>
        <?php if (
            $_POST['question3'] === '-1' &&
            $_POST['recall'] === 'true'
        ) { ?>
                <p>Vous serez rappelé au numéro #numéro de téléphone saisi#</p>
                <?= $_POST['phone'] . '<br>' ?>
        <?php } ?>

    </div>

</body>
</html>
