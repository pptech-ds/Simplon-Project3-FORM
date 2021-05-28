<?php include('view/header.php') ?>
<?php include('view/functions.php') ?>
<?php include('view/const.php') ?>


<?php 
    var_dump($_POST);
    if ($_POST === []) { 
        include('view/form.php');
    } else {
        include('view/validationForm.php');
    }
?>

<?php include('view/footer.php') ?>
