<?php 
    include('../templates/connect.php');
    
    if(isset($_POST['submit'])) {
        // Store form data
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];
    
    // Write Insert Query
        $save_query = "INSERT INTO `user_tb`(`username`, `password`, `user_type`, `email`) VALUES ('$username', '$password', '$user_type', '$email')";
    
        //Send query to server
        $send_save_query = mysqli_query($db_con, $save_query);
    
        //Check if data is aved successfully
    if($send_save_query){
            header('Location: login.php');
        } else {
            echo 'could not save' . mysqli_error($db_con);
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
                <h1 class="center">Sign-up</h1>
                <div class="row">
                    <form action="signup.php" method="post">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="username" id="username">
                            <label for="username">Username</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">mail</i>
                            <input type="email" name="email" id="email">
                            <label for="password">Email</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">mail</i>
                            <input type="text" name="first_name" id="first_name">
                            <label for="password">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">mail</i>
                            <input type="email" name="email" id="email">
                            <label for="password">Last Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" name="password" id="password">
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" name="confirm_password" id="confirm_password">
                            <label for="confirm_password">Confirm_password</label>
                        </div>
                        <div class="col s12 center-align">
                            <input class="btn btn-large orange darken-4" type="submit" name="submit" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/materialize.js"></script>
    
<?php include('../templates/footer.php') ?>