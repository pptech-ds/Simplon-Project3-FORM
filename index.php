<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Customer Satisfaction Form</title>
</head>
<body>
    <div class="container">
        <p>Customer Satisfaction Form </p>

        <?php
            if (!$_GET) {
        ?>
                <form method="GET" action="">
                    <p>
                        <label for="firstName">Nom: </label>
                        <input type="text" name="firstName" required />
                    </p>
                    <p>
                        <label for="lastName">Prénom: </label>
                        <input type="text" name="lastName" required />
                    </p>
                    <p>
                        <label for="phone">Numéro de téléphone: </label>
                        <input type="tel" id="phone" name="phone" pattern="0[1-9][0-9]{8}" required>
                    </p>
                    <p>
                        <label for="date">Date de l'achat: </label>
                        <input type="date" id="date" name="date" required>
                    </p>
                    <p>
                        L'agent a-t-il été agréable ?
                        <input type="radio" name="q1Radios" id="q1Radios1" value="2" /> <label for="q1Id1">oui</label>
                        <input type="radio" name="q1Radios" id="q1Radios2" value="0" /> <label for="q1Id2">non</label>
                        <input type="radio" name="q1Radios" id="q1Radios2" value="1" checked="checked" /> <label for="q1Id3">sans avis</label>                  
                    </p>
                    <p>
                        L'agent a-t-il compris votre problème ?
                        <input type="radio" name="q2Radios" id="q2Radios1" value="2" /> <label for="q2Id1">oui</label>
                        <input type="radio" name="q2Radios" id="q2Radios2" value="0" /> <label for="q2Id2">non</label>
                        <input type="radio" name="q2Radios" id="q2Radios2" value="1" checked="checked" /> <label for="q2Id3">sans avis</label>                  
                    </p>
                    <p>
                        L'agent a-t-il résolu votre problème ?
                        <input type="radio" name="q3Radios" id="q3Radios1" value="1" /> <label for="q3Id1">oui</label>
                        <input type="radio" name="q3Radios" id="q3Radios2" value="-1" /> <label for="q3Id2">non</label>
                    </p>
                    <p>
                        <label for="message">Dites-nous en plus : </label>
                        <br>
                        <textarea name="message" rows="8" cols="45"></textarea>
                    </p>
                    <p>
                        <input type="checkbox" name="call" value="true" id="case" /> <label for="case">j'accepte d'être rappelé</label>
                    </p>
                    
                    <input type="hidden" name="hiddenParam" value="myHiddenValue" />
        
                    <p>
                        <input type="submit" value="Envoyer" required />
                    </p>
                </form>
        <?php
            } else {
                echo '<h2>Réponses au formuliare</h2>';
                foreach ($_GET as $key => $value) {
                    echo "<p>" . $key . " : " . $value . "</p>";
                }
            }
        ?>
    </div>

</body>
</html>