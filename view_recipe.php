<?php
include('./templates/connect.php');
include('./templates/header.php');

//Create blank variables
$recipe_id = '';
$error_msg = '';

//check if a particular recipe id is selected
if (isset($_GET['recipe_id'])) {
    //Assign recipe_id to local variable
    $recipe_id = $_GET['recipe_id'];

    //Fetch data from table, using the row ID
    $fetch_query = "SELECT * FROM `recipe_tb` WHERE `recipe_id` = '$recipe_id' ";

    //Send query to server
    $send_fetch_query = mysqli_query($db_con, $fetch_query);

    //Store received data in an associative array
    $recipe = mysqli_fetch_assoc($send_fetch_query);

    //print_r($recipe);
} else {
    $error_msg= "No recipe selected" ;
}

?>

<main>
    <div class="slider">
        <ul class="slides">
            <li><img src="./assets/img/<?php echo $recipe['recipe_type']?>.jpg" alt="" class="responsive-img"></li>
        </ul>
        <div class="container">
            <h1><?php  echo $error_msg ?></h1>
            <h1><?php  echo $recipe['recipe_name'] ?></h1>
            <p class="flow-text">Created by: <?php  echo $recipe['email'] . ' - ' . $recipe['created_at']; ?></p>
            <p class="flow-text"><span class="red-text text-darken-4">Description: </span><?php echo $recipe['recipe_description'] ?></p>
        </div>
        <div class="center-align">
            <a href="./edit_recipe.php" class="btn btn-large btn-flat red darken-4 white-text">Edit</a>
            <a href="./delete_recipe.php" class="btn btn-large btn-flat red darken-4 white-text">Delete</a>
        </div>
    </div>
</main>

<?php include('./templates/footer.php') ?>