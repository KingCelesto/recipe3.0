<?php
    include('./templates/connect.php');
    include('./templates/header.php');

    $recipe_id = '';
    $error_msg = '';

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
    $delete_recipe_id = "";

    if (isset($_POST['delete'])) {
        $delete_recipe_id = $_POST['delete_recipe_id'];

        // print_r($_POST)

        $delete_query = "DELETE FROM `recipe_tb` WHERE `recipe_id` = '$delete_recipe_id' ";

        $send_delete_query = mysqli_query($db_con, $delete_query);

        if($send_delete_query){
            header('Location: ./index.php');
        } else {
            echo 'could not save' . mysqli_error($db_con);
        }

    }
?>
<div class="container">
    <h1 class="center-align red-text"><?php echo "Are you sure you want to delete" . $recipe['recipe_name']; ?></h1>
    <div class="row">
        <form action="./delete_recipe.php" method="post">
            <div class="input-field col s12">
                <input type="hidden" name="delete_recipe_id" id="delete_recipe_id" value="<?php echo $recipe['recipe_id']?>">
            </div>
            <div class="col s6 right-align">
                <input class="btn btn-large btn-flat red darken-4 white-text" type="submit" value="delete" name="delete">
            </div>
        </form>
        <div class="col s6 left-align">
            <a href="./view_recipe.php?recipe_id=<?php echo $recipe['recipe_id'] ?>" class="btn btn-large btn-flat green darken-4 white-text">Back</a>
        </div>
    </div>

</div>


<?php 
    include('./templates/footer.php');

?>