<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R.com</title>
    <link rel="stylesheet" href="/R.com/assets/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        header {
            padding: 20px auto;
            font-weight: bold;
        }
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

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
        h5{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <nav class="orange darken-4 z-depth-0">
            <div class="container">
                <a href="./index.php" class="brand-logo  left">R.Com</a>
                <ul class="right">
                    <li><a href="./index.php" class="">Home</a></li>
                    <li><a href="./new_recipe.php" class="">New</a></li>
                    <li><a href="./auth/login.php" class="">Account</a></li>
                </ul>
            </div>
        </nav>
    </header>