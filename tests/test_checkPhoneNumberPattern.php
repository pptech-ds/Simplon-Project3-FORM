<?php require '../service/checkPhoneNumberPattern.php'; ?>
<?php require '../service/checkString.php'; ?>
<?php require '../service/getScore.php'; ?>
<?php require '../service/printScore.php'; ?>


<h2>TEST function checkPhoneNumberPattern</h2>
<?php
echo '<br>TEST function checkPhoneNumberPattern 0123456789: ' .
    checkPhoneNumberPattern('0123456789') .
    '<br><br>';
echo '<br>TEST function checkPhoneNumberPattern 01234567891011: ' .
    checkPhoneNumberPattern('01234567891011') .
    '<br><br>';
echo '<br>TEST function checkPhoneNumberPattern qsdqs: ' .
    checkPhoneNumberPattern('qsdqs') .
    '<br><br>';
echo '<br>TEST function checkPhoneNumberPattern tqsd98sd57: ' .
    checkPhoneNumberPattern('tqsd98sd57') .
    '<br><br>';
 ?>
