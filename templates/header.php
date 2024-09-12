<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="./assets/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    }

    main {
    flex: 1 0 auto;
    }
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/materialize.css">
    <title>Recipes.com</title>
    <style>
        .bold-text{
            font-weight: bold;
        }
        .input-field input:focus{
            border-bottom: 1px solid #4a148c !important;
            box-shadow: 0 1px 0 0 #4a148c !important;
        }
        .input-field .prefix.active, label.active{
            color: #4a148c !important;
        }
        span.red-text.text-darken-4::after{
            background-color: #4a148c;
            border: none;
        }
        .dropdown-content li > a, .dropdown-content li > span{
            color: #4a148c !important;
        }
        .select-wrapper input.select-dropdown{
            color: #4a148c !important;
        }
    </style>
</head>
<body>
    <header>
        <nav class="white z-depth-0">
            <div class="container">
                <a href="./index.php" class="brand-logo red-text text-darken-2 left">Recipes.Com</a>
                <ul class="right">
                    <li><a href="./index.php" class="red-text text-darken-2">Home</a></li>
                    <li><a href="./new_recipe.php" class="red-text text-darken-2">New</a></li>
                    <li><a href="./auth/login.php" class="red-text text-darken-2">Account</a></li>
                    <li><a href="./recipes/cakes.php?recipe_type=<?php echo $recipe['recipe_type']; ?>" class="red-text text-darken-2">Cake</a></li>
                    <li><a href="./recipes/chicken.php" class="red-text text-darken-2">Chicken</a></li>
                    <li><a href="./recipes/soups.php" class="red-text text-darken-2">Soup</a></li>
                </ul>
            </div>
        </nav>
    </header>