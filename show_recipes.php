<?php include_once('statics/header.php'); ?>
<!-- Includes recipes in a dynamic way -->
<?php
  if(isset($_GET['recipe']))
  {
      $recipe = $_GET['recipe'];
      include_once('recipes/'.$recipe.'.php');
  } else {
    echo 'Error occured during the execution';
  }
?>

<?php include_once('statics/footer.php'); ?>
