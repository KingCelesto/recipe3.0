<?php 
include('./templates/connect.php');
include('./templates/header.php');

//Create blank variables
$email = $recipe_name = $recipe_type = $recipe_description = "";

//Check if the submit btn has been pressed
if(isset($_POST['submit'])) {
  // Store form data
    $email = $_POST['email'];
    $recipe_name = $_POST['recipe_name'];
    $recipe_type = $_POST['recipe_type'];
    $recipe_description = $_POST['$recipe_description'];

  // Write Insert Query
    $save_query = "INSERT INTO `recipe_tb`(`email`, `recipe_name`, `recipe_type`, `recipe_description`) VALUES ('$email','$recipe_name','$recipe_type','$recipe_description')";

  //Send query to server
    $send_save_query = mysqli_query($db_con, $save_query);

  //Check if data is aved successfully
    if($send_save_query){
        header('Location: index.php');
    } else {
        echo 'could not save' . mysqli_error($db_con);
    }

}

?>

  <div class="container">
    <h1 class="center-align">Add a Recipe</h1>
    <div class="container">
        <form action="new_recipe.php" method="POST">
            <div class="row">
                <div class="container">
                    <div class="col s12 input-field">
                        <input type="email" name="email" id="email" required>
                        <label for="email">Your Email</label>
                    </div>
                    <div class="col s12 input-field">
                        <input type="text" name="recipe_name" id="recipe_name" required>
                        <label for="recipe_name">Recipe Name</label>
                    </div>
                    <div class="col s12 input-field">
                        <select name="recipe_type">
                            <option value="cake">Cake</option>
                            <option value="chicken">Chicken</option>
                            <option value="soup">Soup</option>
                        </select>
                        <label>Recipe Type</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="recipe_description" name="recipe_description" class="materialize-textarea"></textarea>
                        <label for="recipe_description">Description</label>
                    </div>
                </div>
            </div>
            <div class="center">
                <input type="submit" value="submit" name="submit" class="btn btn-large btn-flat orange darken-4 white-text">
            </div>
        </form>
    </div>
    </div>



<?php include('./templates/footer.php'); ?>