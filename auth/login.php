<?php 
    include('../templates/connect.php');

    $username="";
    $password="";
    $error_msg="";

    if (isset($_POST['login'])) {
        $username= $_POST['username'];
        $password= $_POST['password'];

        $fetch_query = "SELECT * FROM `user_tb` WHERE `username` = '$username'";
        $get_fetch_query = mysqli_query( $db_con, $fetch_query);

        if (mysqli_num_rows($get_fetch_query)>0){
            $login_details = mysqli_fetch_assoc($get_fetch_query);
            // 
            if ($login_details['password'] === $password) {
                    header('Location: ./landing.php');
                } else {
                    $error_msg= "incorrect password";
                }
        } else {
            $error_msg= "incorrect details" ;
        }
    
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
                    <span class="red-text"><?php echo $error_msg; ?></span>
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
                            <input type="submit" value="login" name="login" class="btn btn-large orange darken-4">
                        </div>
                    </form>
                    <br><br>
                </div>
                <h6 class="center">Don't have an account? <a href="signup.php">Signup</a> here </h6>
            </div>
        </div>
    </main>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/materialize.js"></script>

    <?php include('../templates/footer.php'); ?>