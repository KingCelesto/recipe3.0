<?php 
    include('../templates/connect.php');

    session_start();
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
    <main>
        <div class="section container">
            <h1 class="center">Welcome, <?php echo $_SESSION['username']; ?></h1>
        </div>
    </main>
<?php include('../templates/footer.php') ?>