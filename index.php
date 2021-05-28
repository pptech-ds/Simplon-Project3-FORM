<?php require 'view/header.php' ?>
<?php require 'view/functions.php' ?>
<?php require 'view/const.php' ?>


<?php 
    // var_dump($_POST);
    if ($_POST === []) { 
        require 'view/form.php';
    } else {
        require 'view/validationForm.php';
    }
?>

<?php require 'view/footer.php' ?>
