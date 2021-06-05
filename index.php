<?php require 'service/checkPhoneNumberPattern.php'; ?>
<?php require 'service/checkString.php'; ?>
<?php require 'service/getScore.php'; ?>
<?php require 'service/printScore.php'; ?>


<?php if ($_POST === []) {
    require 'view/default.php';
} else {
    require 'view/validationForm.php';
}
