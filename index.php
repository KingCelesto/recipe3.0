<?php 
include('./templates/connect.php');
include('./templates/header.php');

// Write the Fetch Query
$fetch_query = "SELECT * FROM `recipe_tb`";

//Send the Query to the server
$send_fetch_query = mysqli_query($db_con, $fetch_query);

//Recieve data from server
$recipes = mysqli_fetch_all($send_fetch_query, MYSQLI_ASSOC);

// print_r($recipes);


?>


<main>
    <div class="container">
        <h1 class="center-align">Recipes</h1>
        <div class="row">
            <?php foreach ($recipes as $recipe) { ?>
                <div class="col s12 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./assets/img/<?php echo $recipe['recipe_type'] ?>.jpg" alt="" class="responsive-img">
                        </div>
                        <div class="card-content">
                        <h5 class="orange-text text-darken-4"><?php echo $recipe['recipe_name']; ?></h5>
                        <em><strong>by: <?php echo $recipe['email']?></strong></em>
                        <br><br>
                        <a href="view_recipe.php?recipe_id=<?php echo $recipe['recipe_id']; ?>" class="btn btn-flat btn-small orange darken-4 white-text">More Details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>


<?php include('./templates/footer.php'); ?>