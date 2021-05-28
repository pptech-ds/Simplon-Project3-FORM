<?php include('../view/header.php') ?>
<?php include('../view/functions.php') ?>
<?php include('../view/const.php') ?>


<h2>section test functions</h2>
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

    echo '<br>TEST function printScore: '.printScore($maxScore, getScore($arrayTest)).'<br><br>';

    echo '<br>TEST function checkString "this is a string": '.checkString('this is a string').'<br><br>';
    echo '<br>TEST function checkString "25": '.checkString('25').'<br><br>';
    echo '<br>TEST function checkString 25: '.checkString(25).'<br><br>';
    echo '<br>TEST function checkString true: '.checkString(true).'<br><br>';

    echo '<br> PETTERN MATCHING TEST  ';
    var_dump(preg_match("0[1-9][0-9]{8}", '0143047531'));
    echo '<br>';

    echo '<br>TEST function checkPhoneNumberPattern 0123456789: '.checkPhoneNumberPattern('0123456789').'<br><br>';
    echo '<br>TEST function checkPhoneNumberPattern 095584665788: '.checkPhoneNumberPattern('095584665788').'<br><br>';
    echo '<br>TEST function checkPhoneNumberPattern qsdqs: '.checkPhoneNumberPattern('qsdqs').'<br><br>';
    echo '<br>TEST function checkPhoneNumberPattern tqsd98sd57: '.checkPhoneNumberPattern('tqsd98sd57').'<br><br>';

?>


<?php include('view/footer.php') ?>
