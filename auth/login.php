<?php 
    include('../templates/connect.php');
    //Create blank variables
    $user_id = '';
    $error_msg = '';

    //check if a particular recipe id is selected
    if (isset($_GET['user_id'])) {
        //Assign recipe_id to local variable
        $user_id = $_GET['user_id'];

        //Fetch data from table, using the row ID
        $fetch_query = "SELECT * FROM `user_tb` WHERE `user_id` = '$user_id' ";

        //Send query to server
        $send_fetch_query = mysqli_query($db_con, $fetch_query);

        //Store received data in an associative array
        $user = mysqli_fetch_assoc($send_fetch_query);

        //print_r($recipe);
    } else {
        $error_msg= "No Such Account" ;
    }
    if($_GET){
        header('Location: landing.php');
    } else {
        echo 'could not save' . mysqli_error($db_con);
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R.com</title>
    <link rel="stylesheet" href="../assets/css/materialize.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <header>
        <nav class="orange darken-4 z-depth-0">
            <div class="container">
                <a href="./index.php" class="brand-logo  left">R.Com</a>
                <ul class="right">
                    <li><a href="../index.php" class="">Home</a></li>
                    <li><a href="../new_recipe.php" class="">New</a></li>
                    <li><a href="../auth/login.php" class="">Account</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="section container">
        <div class="container">
            <div class="container">
                <h1 class="center">Log-in</h1>
                <div class="row">
                    <form action="login.php" method="post">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="username" id="username">
                            <label for="username">Username</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" name="password" id="password">
                            <label for="password">Password</label>
                        </div>
                        <div class="col s12 center-align">
                            <input type="submit" value="submit" name="submit" class="btn btn-large orange darken-4">
                        </div>
                    </form>
                    <h1 class="center">Don't have an account? <a>Signup</a> here </h1>
                </div>
            </div>
        </div>
    </main>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/materialize.js"></script>

    <?php include('../templates/footer.php'); ?>