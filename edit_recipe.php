<?php
    include('./templates/connect.php');
    include('./templates/header.php');

    $recipe_id = '';
    $error_msg = '';

    if (isset($_GET['recipe_id'])) {
        //Assign recipe_id to local variable
        $recipe_id = $_GET['recipe_id'];
    
        //Fetch data from table, using the row ID
        $fetch_query = "SELECT * FROM `recipe_tb` WHERE `recipe_id` = '$recipe_id'";
    
        //Send query to server
        $send_fetch_query = mysqli_query($db_con, $fetch_query);
    
        //Store received data in an associative array
        $recipe = mysqli_fetch_assoc($send_fetch_query);
    
        //print_r($recipe);
    } else {
        $error_msg= "No recipe selected" ;
    }

    $update_recipe_id = "";
    $update_recipe_name = "";
    $update_recipe_description = "";

    if (isset($_POST['update'])) {
        $update_recipe_id = $_POST['update_recipe_id'];
        $update_recipe_name = $_POST['update_recipe_name'];
        $update_recipe_description = $_POST['update_recipe_description'];

        // print_r($_POST)

        $update_query = "UPDATE `recipe_tb` SET `recipe_name`= '$update_recipe_name', `recipe_description` = '$update_recipe_description' WHERE `recipe_id` = '$update_recipe_id' ";

        $send_update_query = mysqli_query($db_con, $update_query);

        if($send_update_query){
            header('Location: ./index.php');
        } else {
            echo 'could not save' . mysqli_error($db_con);
        }

    }
?>
<div class="container">
    <h1 class="center-align red-text">Edit <?php echo $recipe['recipe_name']; ?></h1>
</div>

<div class="container">
    <form action="./edit_recipe.php" method="post">
        <div class="row">
            <div class="input-field col s12 l2">
                <input type="hidden" name="update_recipe_id" id="update_recipe_id" value="<?php echo $recipe['recipe_id']?>">
            </div>
            <div class="input-field col s12 l10">
                <input type="text" name="update_recipe_name" id="update_recipe_name" placeholder="<?php $recipe['recipe_name'] ?>">
            </div>
            <div class="input-field col s12 l10 right">
                <textarea type="text" name="update_recipe_description" id="update_recipe_description" value="<?php $recipe['recipe_description'] ?>"><?php echo $recipe['recipe_description'] ?></textarea>
                <label for="update_recipe_description">Description</label>
            </div>
            <div class="input-field col s12 center-align">
                <input class=" btn btn-large orange darken-4" type="submit" name="update" value="update">
            </div>
        </div>
    </form>
</div>

<?php 
    include('./templates/footer.php');

?>