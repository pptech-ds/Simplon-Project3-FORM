<?php require '../service/checkPhoneNumberPattern.php'; ?>
<?php require '../service/checkString.php'; ?>
<?php require '../service/getScore.php'; ?>
<?php require '../service/printScore.php'; ?>



<h2>TEST function checkString</h2>
<?php
echo '<br>TEST function checkString "this is a string": ' .
    checkString('this is a string') .
    '<br><br>';
echo '<br>TEST function checkString "25": ' . checkString('25') . '<br><br>';
echo '<br>TEST function checkString 25: ' . checkString(25) . '<br><br>';
echo '<br>TEST function checkString true: ' . checkString(true) . '<br><br>';

