<?php include('../view/header.php') ?>
<?php include('../view/functions.php') ?>
<?php include('../view/const.php') ?>


<h2>TEST function getScore</h2>
<?php
    
    $arrayTest = [
        'question1' => '1',
        'question2' => '1',
        'question3' => '1',
        'tototo' => '1',
        'dshfhj' => '1',
        'dfkjsdhfkj' => '1'
    ];

    echo '<br>TEST function getScore: '.getScore($arrayTest).'<br><br>';


?>


<?php include('view/footer.php') ?>
