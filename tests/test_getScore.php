<?php include('../view/header.php') ?>
<?php include('../view/functions.php') ?>
<?php include('../view/const.php') ?>


<h2>TEST function getScore</h2>
<?php
    
    $arrayTest = [
        'q1Radios' => '1',
        'q2Radios' => '1',
        'q3Radios' => '1',
        'tototo' => '1',
        'dshfhj' => '1',
        'dfkjsdhfkj' => '1'
    ];

    echo '<br>TEST function getScore: '.getScore($arrayTest).'<br><br>';


?>


<?php include('view/footer.php') ?>
