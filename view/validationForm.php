<?php
    if($_POST['send'] === 'Envoyer'){
?>
        <p class="mt-5">Merci pour votre notation : <?= printScore($maxScore, getScore($_POST)) ?> </p>
<?php
        if(($_POST['q3Radios'] === '-1') && ($_POST['call'] === 'true')){
?>
            <p>Vous serez rappelé au numéro #numéro de téléphone saisi#</p>
            <?= $_POST['phone'].'<br>' ?>
<?php
        }   
    }   
?>