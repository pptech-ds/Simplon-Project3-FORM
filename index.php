<?php require 'service/checkPhoneNumberPattern.php'; ?>
<?php require 'service/checkString.php'; ?>
<?php require 'service/getScore.php'; ?>
<?php require 'service/printScore.php'; ?>


<?php if ($_POST === []) {
    require 'view/default.php';
} else {
    $checkPhoneNumber = checkPhoneNumberPattern($_POST['phone']);
    $checkStringLastName = checkString($_POST['lastname']);
    $checkStringFirstName = checkString($_POST['firstname']);
    if (strpos($checkPhoneNumber, 'NOT')) {
        echo 'Phone Number doesnt match requirements, phone number contains 10 numbers';
    } elseif (strpos($checkStringLastName, 'NOT')) {
        echo 'Lastname doesnt match requirements, it must be a string';
    } elseif (strpos($checkStringFirstName, 'NOT')) {
        echo 'FirstName doesnt match requirements, it must be a string';
    } else {
        require 'view/validationForm.php';
    }
}
