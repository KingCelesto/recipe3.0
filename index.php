<?php
    include("./templates/connect.php");
    include("./templates/header.php");

// Write the Fetch Query
$fetch_query = "SELECT * FROM recipe_tb WHERE 1";

//Send the Query to the server
$send_fetch_query = mysqli_query($db_con, $fetch_query);

//Recieve data from server
$recipes = mysqli_fetch_all($send_fetch_query, MYSQLI_ASSOC);

?>

<main>
    <div class="container">
        <h1>Hello Foodies</h1>
        <p class="flow-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, vero aspernatur suscipit odit dolore, ea aut doloremque ad minima saepe totam. Impedit maiores magnam sapiente minus, aspernatur, quibusdam modi quaerat voluptates dolor temporibus, odit delectus veritatis officia dignissimos. Quaerat omnis ex nam fuga dolore eius. Consequuntur ea nesciunt reprehenderit provident. Soluta sapiente ratione rerum expedita eaque ducimus suscipit non? Dolore ab quia mollitia consequatur commodi iure consequuntur! Dolore deleniti impedit soluta illo placeat nemo quam, aliquam assumenda commodi voluptas adipisci quae iste repellat distinctio eaque dolores rerum modi officia, in earum dolor! Atque odio consequuntur repellendus aut ipsa voluptate dolorem. Corporis ratione, nisi vero sequi illum accusamus provident eos vel eaque recusandae nostrum dolores in. Possimus ullam inventore consequuntur numquam.</p>
    </div>
    <div class="container">
        <div class="row">
        <h1>Cakes</h1>
            <?php 
                foreach ($recipes as $recipe) {
            ?>
            <?php 
                if ($recipe["recipe_type"] == "cake") { ?>
                    <div class="col s12 l4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="./assets/img/<?php echo $recipe['recipe_type'] ?>.jpg" alt="" class="responsive-img">
                                <div class="id halfway-fab btn btn-large btn-floating orange darken-4">
                                    <?php echo "#" . $recipe['recipe_id'] ?>
                                </div>
                            </div>
                            <div class="card-content">
                                <a href="view_recipe.php?recipe_id=<?php echo $recipe['recipe_id']; ?>">
                                    <h5 class="orange-text text-darken-4" style="text-decoration: underline;">
                                        <?php echo $recipe['recipe_name']?><i class="material-icons">call_made</i>
                                    </h5>
                                </a>
                                <h6 class="bold-text">
                                    <?php echo $recipe['recipe_type'] . " by " . $recipe['email'] ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <div class="container center">
        <div class="divider"></div>
        <a href="./recipes/cakes.php?recipe_type=<?php echo "cake" ?>" class="btn btn-large orange darken-4" style="margin-top: 30px; margin-bottom: 30px;">More Cakes</a>
        <div class="divider"></div>
    </div>
    <div class="container">
        <div class="row">
        <h1>Chicken</h1>
            <?php 
                foreach ($recipes as $recipe) {
            ?>
            <?php 
                if ($recipe["recipe_type"] == "chicken") { ?>
                    <div class="col s12 l4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="./assets/img/<?php echo $recipe['recipe_type'] ?>.jpg" alt="" class="responsive-img">
                                <div class="id halfway-fab btn btn-large btn-floating orange darken-4">
                                    <?php echo "#" . $recipe['recipe_id'] ?>
                                </div>
                            </div>
                            <div class="card-content">
                                <a href="view_recipe.php?recipe_id=<?php echo $recipe['recipe_id']; ?>">
                                    <h5 class="orange-text text-darken-4" style="text-decoration: underline;">
                                        <?php echo $recipe['recipe_name']?> <i class="material-icons">call_made</i>
                                    </h5>
                                </a>
                                <h6 class="bold-text">
                                    <?php echo $recipe['recipe_type'] . " by " . $recipe['email'] ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <div class="container center">
        <div class="divider"></div>
        <a href="./recipes/chicken.php?recipe_type=<?php echo "chicken" ?>" class="btn btn-large orange darken-4" style="margin-top: 30px; margin-bottom: 30px;">More Chicken</a>
        <div class="divider"></div>
    </div>
    <div class="container">
        <div class="row">
        <h1>Soups</h1>
            <?php 
                foreach ($recipes as $recipe) {
            ?>
            <?php 
                if ($recipe["recipe_type"] == "soup") { ?>
                    <div class="col s12 l4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="./assets/img/<?php echo $recipe['recipe_type'] ?>.jpg" alt="" class="responsive-img">
                                <div class="id halfway-fab btn btn-large btn-floating orange darken-4">
                                    <?php echo "#" . $recipe['recipe_id'] ?>
                                </div>
                            </div>
                            <div class="card-content">
                                <a href="view_recipe.php?recipe_id=<?php echo $recipe['recipe_id']; ?>">
                                    <h5 class="orange-text text-darken-4" style="text-decoration: underline;">
                                        <?php echo $recipe['recipe_name']?><i class="material-icons">call_made</i>
                                    </h5>
                                </a>
                                <h6 class="bold-text">
                                    <?php echo $recipe['recipe_type'] . " by " . $recipe['email'] ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    
    <div class="container center">
        <div class="divider"></div>
        <a href="./recipes/soups.php?recipe_type=<?php echo "soup" ?>" class="btn btn-large orange darken-4" style="margin-top: 30px; margin-bottom: 30px;">More Soups</a>
        <div class="divider"></div>
    </div>
</main>

<?php
    include("./templates/footer.php");
?>